<?php
/**
 * maya theme functions
 *
 * CSS / フォントの読み込みを wp_enqueue_scripts フックで行う。
 * 各ページテンプレート（index.php など）が先頭で $currentPage を設定し、
 * その後 header.php 内の wp_head() でこのフックが発火する。
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // WordPress 経由以外での直接アクセスを禁止
}

/**
 * テーマURL（末尾スラッシュ無し）。テンプレート内の画像パス等を
 * 絶対URL化するために使う。例: <img src="<?php echo MAYA_URI; ?>/img/3.png">
 */
if ( ! defined( 'MAYA_URI' ) ) {
	define( 'MAYA_URI', get_template_directory_uri() );
}

if ( ! function_exists( 'maya_enqueue_assets' ) ) {
	/**
	 * テーマのスタイルシートを登録・読み込みする。
	 */
	function maya_enqueue_assets() {
		$theme_uri = get_template_directory_uri();
		$theme_dir = get_template_directory();

		// 1) ベースCSS（common.css は内部で phone.css を @import している）
		wp_enqueue_style(
			'maya-common',
			$theme_uri . '/css/common.css',
			array(),
			filemtime( $theme_dir . '/css/common.css' )
		);

		// 2) ページ固有CSS（css/{currentPage}.css があれば common の後に読み込む）
		global $currentPage;
		if ( ! empty( $currentPage ) ) {
			$rel = '/css/' . $currentPage . '.css';
			if ( is_file( $theme_dir . $rel ) ) {
				wp_enqueue_style(
					'maya-page-' . sanitize_key( $currentPage ),
					$theme_uri . $rel,
					array( 'maya-common' ), // common.css の後ろに読み込む
					filemtime( $theme_dir . $rel )
				);
			}
		}

		// 3) Google Fonts
		wp_enqueue_style(
			'maya-google-fonts',
			'https://fonts.googleapis.com/css2?family=Yomogi&family=Zen+Kurenaido&family=Kosugi+Maru&family=Shippori+Antique&family=Caveat:wght@400;500;700&display=swap',
			array(),
			null
		);
		wp_enqueue_style(
			'maya-material-symbols',
			'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=block',
			array(),
			null
		);
	}
	add_action( 'wp_enqueue_scripts', 'maya_enqueue_assets' );
}

/* =========================================================================
 * お問い合わせフォーム（contact.php）のメール送信
 * admin-ajax.php 経由の Ajax で受け取り、wp_mail() で管理者へ送信する。
 * ====================================================================== */

// 受信先メールアドレス（後で差し替え可）
if ( ! defined( 'MAYA_CONTACT_TO' ) ) {
	define( 'MAYA_CONTACT_TO', 'info@veryberry.weblike.jp' );
}
// 送信者への自動受領メールを送るか（完了画面の文言に合わせて既定ON）
if ( ! defined( 'MAYA_CONTACT_AUTOREPLY' ) ) {
	define( 'MAYA_CONTACT_AUTOREPLY', true );
}

if ( ! function_exists( 'maya_contact_submit' ) ) {
	function maya_contact_submit() {
		// --- セキュリティ：nonce 検証 ---
		$nonce = isset( $_POST['nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['nonce'] ) ) : '';
		if ( ! wp_verify_nonce( $nonce, 'maya_contact' ) ) {
			wp_send_json_error( array( 'message' => 'セキュリティ検証に失敗しました。ページを再読み込みしてからお試しください。' ), 403 );
		}

		// --- 入力取得＆サニタイズ ---
		$txt = function ( $key ) {
			return isset( $_POST[ $key ] ) ? sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) : '';
		};
		$area = function ( $key ) {
			return isset( $_POST[ $key ] ) ? sanitize_textarea_field( wp_unslash( $_POST[ $key ] ) ) : '';
		};

		$name  = $txt( 'name' );
		$email = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
		$agree = ! empty( $_POST['agree'] );

		// --- サーバー側 必須チェック ---
		$missing = array();
		if ( '' === $name ) {
			$missing[] = 'お名前';
		}
		if ( '' === $email || ! is_email( $email ) ) {
			$missing[] = 'メールアドレス';
		}
		if ( ! $agree ) {
			$missing[] = 'プライバシーポリシーへの同意';
		}
		if ( $missing ) {
			wp_send_json_error( array( 'message' => '次の項目を確認してください：' . implode( '、', $missing ) ), 422 );
		}

		// --- メール本文の組み立て（STEP01〜06） ---
		$rows = array(
			'作りたいもの'    => $area( 'kind' ),
			'達成したいこと'  => $txt( 'purpose' ),
			'既存サイト'      => $txt( 'existing' ),
			'現在のサイトURL' => $txt( 'existing_url' ),
			'ターゲット'      => $area( 'target' ),
			'デザイン雰囲気'  => $area( 'tone' ),
			'参考URL'         => $txt( 'ref' ),
			'ご予算'          => $txt( 'budget' ),
			'希望納期'        => $txt( 'due' ),
			'素材の準備'      => $area( 'assets' ),
			'ご相談内容'      => $area( 'msg' ),
			'避けたいこと'    => $area( 'ng' ),
			'クーポンコード'  => $txt( 'coupon' ),
			'ご紹介者'        => $txt( 'referral' ),
		);

		$lines   = array();
		$lines[] = '■ お問い合わせがありました（VeryBerry）';
		$lines[] = '';
		$lines[] = 'お名前　　：' . $name;
		$lines[] = 'メール　　：' . $email;
		$lines[] = '会社/屋号 ：' . $txt( 'company' );
		$lines[] = '電話番号　：' . $txt( 'tel' );
		$lines[] = str_repeat( '-', 36 );
		foreach ( $rows as $label => $val ) {
			if ( '' !== $val ) {
				$lines[] = $label . '：' . $val;
			}
		}
		$lines[] = str_repeat( '-', 36 );
		$lines[] = '送信日時：' . current_time( 'Y-m-d H:i:s' );
		$body    = implode( "\n", $lines );

		$subject = '【お問い合わせ】' . $name . ' 様より';
		$headers = array(
			'Content-Type: text/plain; charset=UTF-8',
			'Reply-To: ' . $name . ' <' . $email . '>',
		);

		$sent = wp_mail( MAYA_CONTACT_TO, $subject, $body, $headers );

		if ( ! $sent ) {
			wp_send_json_error( array( 'message' => '送信に失敗しました。お手数ですが時間をおいて再度お試しください。' ), 500 );
		}

		// --- 送信者への自動受領メール（任意） ---
		if ( MAYA_CONTACT_AUTOREPLY ) {
			$ar_subject = 'お問い合わせありがとうございます（VeryBerry）';
			$ar_lines   = array(
				$name . ' 様',
				'',
				'お問い合わせいただきありがとうございます。',
				'以下の内容で受け付けました。2営業日以内にご返信いたします。',
				'',
				str_repeat( '-', 36 ),
				$body,
			);
			$ar_headers = array( 'Content-Type: text/plain; charset=UTF-8' );
			wp_mail( $email, $ar_subject, implode( "\n", $ar_lines ), $ar_headers );
		}

		wp_send_json_success( array( 'message' => '送信しました。' ) );
	}
	add_action( 'wp_ajax_maya_contact_submit', 'maya_contact_submit' );
	add_action( 'wp_ajax_nopriv_maya_contact_submit', 'maya_contact_submit' );
}
