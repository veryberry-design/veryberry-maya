<?php
/*
Template Name: Contact
*/
$pageTitle = "ベリーベリーデザイン — お問い合わせ";
$currentPage = "contact";
include "header.php";
?>
<main class="wrap">
  <div class="sect-title sect-title-centered" style="margin-top: 100px;">
    <span class="en">— contact </span>
    <h2>
      <span class="scrib">お問い合わせ </span>
    </h2>
  </div>
  <div class="contact-shell">
    <p class="intro">
      ご相談・お見積りお気軽にどうぞ。 <br/>
      2営業日以内にお返事します
    </p>

    <!-- 進捗バー -->
    <div class="cf-sticky-bar" id="cf-sticky-bar">
      <div class="cf-sticky-steps">
        <span class="cf-ss active" data-step="1">01<small>依頼</small></span>
        <span class="cf-ss" data-step="2">02<small>現状</small></span>
        <span class="cf-ss" data-step="3">03<small>デザイン</small></span>
        <span class="cf-ss" data-step="4">04<small>予算</small></span>
        <span class="cf-ss" data-step="5">05<small>詳細</small></span>
        <span class="cf-ss" data-step="6">06<small>連絡先</small></span>
      </div>
      <div class="cf-sticky-track">
        <div class="cf-sticky-fill" id="cf-sticky-fill" style="width:0%"></div>
      </div>
    </div>

    <form id="cf" class="blob contact-long" novalidate>

      <!-- faq.phpからの引き継ぎバナー -->
      <div class="inherit-banner" id="inherit-banner" hidden>
        <span class="inherit-icon material-symbols-outlined">check_circle</span>
        <span class="inherit-msg">ヒアリングシートの内容を引き継ぎました！確認・修正してから送信してね。</span>
      </div>

      <!-- STEP 01: 作りたいもの + 目的 -->
      <div class="cf-section cf-active" data-step="1">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 01 / 06</span>
          <h3 class="cf-section-ttl">どんなものを作りたいですか？</h3>
        </div>
        <div class="form-field">
          <label>作りたいもの <span class="req">必須</span></label>
          <div class="check-row" id="cf-kind-row">
            <label><input type="checkbox" name="kind" value="Webサイト"><span class="cb-box"></span>Webサイト</label>
            <label><input type="checkbox" name="kind" value="LP（ランディングページ）"><span class="cb-box"></span>LP</label>
            <label><input type="checkbox" name="kind" value="バナー"><span class="cb-box"></span>バナー</label>
            <label><input type="checkbox" name="kind" value="動画"><span class="cb-box"></span>動画</label>
            <label><input type="checkbox" name="kind" value="チラシ"><span class="cb-box"></span>チラシ</label>
            <label><input type="checkbox" name="kind" value="ロゴ"><span class="cb-box"></span>ロゴ</label>
            <label><input type="checkbox" name="kind" value="イラスト"><span class="cb-box"></span>イラスト</label>
            <label><input type="checkbox" name="kind" value="その他" id="kind-other"><span class="cb-box"></span>その他</label>
          </div>
          <div id="kind-other-wrap" style="display:none; margin-top:10px;">
            <input type="text" name="kind_other" id="kind-other-text" placeholder="どんなものか教えてください">
          </div>
        </div>
        <div class="form-field">
          <label>一番達成したいことは？ <span class="req">必須</span></label>
          <select name="purpose" id="cf-purpose">
            <option value="">— 選択してください —</option>
            <option>お問い合わせ・集客を増やしたい</option>
            <option>会社・サービスの信頼感をあげたい</option>
            <option>採用・スタッフ募集をしたい</option>
            <option>既存サイトをリニューアルしたい</option>
            <option>SNSやチラシと連動させたい</option>
            <option>まだはっきりしていない</option>
          </select>
        </div>
        <div class="cf-nav">
          <span></span>
          <button type="button" class="btn berry cf-next">次へ →</button>
        </div>
      </div>

      <!-- STEP 02: 既存サイト + ターゲット -->
      <div class="cf-section" data-step="2">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 02 / 06</span>
          <h3 class="cf-section-ttl">今のサイトとターゲットについて</h3>
        </div>
        <div class="form-field">
          <label>今すでにサイトはありますか？ <span class="opt">任意</span></label>
          <div class="check-row check-row-col">
            <label><input type="radio" name="existing" value="ある（リニューアル）" id="existing-yes"><span class="cb-box"></span>ある（リニューアル）</label>
            <label><input type="radio" name="existing" value="ない（新規制作）"><span class="cb-box"></span>ない（新規制作）</label>
            <label><input type="radio" name="existing" value="未定"><span class="cb-box"></span>未定</label>
          </div>
          <div class="form-field" id="existing-url-wrap" style="display:none; margin-top:12px; margin-bottom:0;">
            <label for="existing-url" style="font-size:12px; color:#888;">現在のサイトURL <span class="opt">任意</span></label>
            <input type="url" id="existing-url" name="existing_url" placeholder="https://example.com">
          </div>
        </div>
        <div class="form-field">
          <label>誰に見てほしいですか？ <span class="opt">任意</span></label>
          <div class="check-row">
            <label><input type="checkbox" name="target" value="近隣の個人・一般のお客様"><span class="cb-box"></span>近隣の個人・一般のお客様</label>
            <label><input type="checkbox" name="target" value="法人・企業向け"><span class="cb-box"></span>法人・企業向け</label>
            <label><input type="checkbox" name="target" value="求職者・スタッフ候補"><span class="cb-box"></span>求職者・スタッフ候補</label>
            <label><input type="checkbox" name="target" value="SNSのフォロワー・ファン"><span class="cb-box"></span>SNSのフォロワー・ファン</label>
            <label><input type="checkbox" name="target" value="まだ決まっていない"><span class="cb-box"></span>まだ決まっていない</label>
          </div>
        </div>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">← 戻る</button>
          <button type="button" class="btn berry cf-next">次へ →</button>
        </div>
      </div>

      <!-- STEP 03: デザイン + 参考URL -->
      <div class="cf-section" data-step="3">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 03 / 06</span>
          <h3 class="cf-section-ttl">デザインの雰囲気は？</h3>
        </div>
        <div class="form-field">
          <label>希望するデザインの雰囲気は？（複数OK） <span class="opt">任意</span></label>
          <div class="check-row">
            <label><input type="checkbox" name="tone" value="シンプル・すっきり"><span class="cb-box"></span>シンプル・すっきり</label>
            <label><input type="checkbox" name="tone" value="かわいい・やわらかい"><span class="cb-box"></span>かわいい・やわらかい</label>
            <label><input type="checkbox" name="tone" value="高級感・洗練"><span class="cb-box"></span>高級感・洗練</label>
            <label><input type="checkbox" name="tone" value="親しみやすい・温かい"><span class="cb-box"></span>親しみやすい・温かい</label>
            <label><input type="checkbox" name="tone" value="スタイリッシュ・クール"><span class="cb-box"></span>スタイリッシュ・クール</label>
            <label><input type="checkbox" name="tone" value="おまかせ"><span class="cb-box"></span>おまかせ</label>
          </div>
        </div>
        <div class="form-field">
          <label>参考URL <span class="opt">任意</span></label>
          <input type="text" name="ref" id="cf-ref" placeholder="https://... ／ 「こんな雰囲気」が伝わるサイトのURLをどうぞ"/>
        </div>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">← 戻る</button>
          <button type="button" class="btn berry cf-next">次へ →</button>
        </div>
      </div>

      <!-- STEP 04: 予算 + 納期 + 素材 -->
      <div class="cf-section" data-step="4">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 04 / 06</span>
          <h3 class="cf-section-ttl">スケジュールと予算</h3>
        </div>
        <div class="field-row">
          <div class="form-field">
            <label>ご予算の目安 <span class="opt">任意</span></label>
            <select name="budget" id="cf-budget">
              <option value="">— 選択 —</option>
              <option>15〜30万円</option>
              <option>30〜50万円</option>
              <option>50万円〜</option>
              <option>未定・相談したい</option>
            </select>
          </div>
          <div class="form-field">
            <label>公開希望の時期 <span class="opt">任意</span></label>
            <select name="due" id="cf-due">
              <option value="">— 選択 —</option>
              <option>1ヶ月以内（急ぎ）</option>
              <option>2〜3ヶ月以内</option>
              <option>半年以内</option>
              <option>未定・ゆっくり進めたい</option>
            </select>
          </div>
        </div>
        <div class="form-field">
          <label>素材・データの準備状況は？（複数OK） <span class="opt">任意</span></label>
          <div class="check-row">
            <label><input type="checkbox" name="assets" value="ロゴデータがある"><span class="cb-box"></span>ロゴデータがある</label>
            <label><input type="checkbox" name="assets" value="写真・画像素材がある"><span class="cb-box"></span>写真・画像素材がある</label>
            <label><input type="checkbox" name="assets" value="文章・テキストがある"><span class="cb-box"></span>文章・テキストがある</label>
            <label><input type="checkbox" name="assets" value="参考サイトがある"><span class="cb-box"></span>参考サイトがある</label>
            <label><input type="checkbox" name="assets" value="何もない（これから準備）"><span class="cb-box"></span>何もない（これから準備）</label>
          </div>
        </div>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">← 戻る</button>
          <button type="button" class="btn berry cf-next">次へ →</button>
        </div>
      </div>

      <!-- STEP 05: ご相談内容 + NG -->
      <div class="cf-section" data-step="5">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 05 / 06</span>
          <h3 class="cf-section-ttl">詳しく教えてください</h3>
        </div>
        <div class="form-field">
          <label>ご相談内容 <span class="req">必須</span></label>
          <textarea name="msg" id="cf-msg" placeholder="やりたいこと・雰囲気・背景など、ざっくりで大丈夫です。"></textarea>
          <p class="muted tiny" style="margin-top:6px;">※ ヒアリングシートの内容がある場合、自動で挿入されます</p>
        </div>
        <div class="form-field">
          <label>絶対に避けたいこと・苦手なデザイン <span class="opt">任意</span></label>
          <textarea name="ng" placeholder="例）ごちゃっとした感じが苦手、ピンクは使いたくない など"></textarea>
        </div>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">← 戻る</button>
          <button type="button" class="btn berry cf-next">次へ →</button>
        </div>
      </div>

      <!-- STEP 06: 連絡先 -->
      <div class="cf-section" data-step="6">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 06 / 06</span>
          <h3 class="cf-section-ttl">最後に連絡先を教えてください</h3>
        </div>
        <div class="field-row">
          <div class="form-field">
            <label>お名前 <span class="req">必須</span></label>
            <input type="text" name="name" placeholder="例) ベリー太郎"/>
          </div>
          <div class="form-field">
            <label>会社名 / 屋号 <span class="opt">任意</span></label>
            <input type="text" name="company" placeholder="個人の場合は空欄でOK"/>
          </div>
        </div>
        <div class="form-field">
          <label>メールアドレス <span class="req">必須</span></label>
          <input type="email" name="email" placeholder="example@berry.com"/>
        </div>
        <div class="form-field">
          <label>電話番号 <span class="opt">任意</span></label>
          <input type="tel" name="tel" placeholder="000-0000-0000"/>
        </div>
        <!-- クーポンコード -->
        <div class="form-field">
          <label>クーポンコード <span class="opt">任意</span>
            <span class="cf-field-note">クイズ全問正解で取得できます・¥1,000 OFF・1回限り</span>
          </label>
          <input type="text" name="coupon" id="cf-coupon" style="text-transform:uppercase; letter-spacing:.1em;"/>
        </div>

        <!-- お友達紹介 -->
        <div class="form-field">
          <label>ご紹介者のお名前 <span class="opt">任意</span>
            <span class="cf-field-note">ご紹介いただいた方のお名前を教えてください</span>
          </label>
          <input type="text" name="referral" id="cf-referral" placeholder="例）ベリー 花子さん"/>
        </div>

        <label class="cf-agree" style="display:flex; align-items:center; gap:10px; margin: 16px 0; font-size:13px; cursor:pointer;">
          <input type="checkbox" name="agree"><span class="cb-box"></span>
          <span><button type="button" class="pp-open" aria-haspopup="dialog">プライバシーポリシー</button>に同意します <span class="req">必須</span></span>
        </label>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">← 戻る</button>
          <button type="submit" class="btn berry lg">送信する →</button>
        </div>
      </div>

    </form>

    <!-- プライバシーポリシー（同意欄の「プライバシーポリシー」から開く） -->
    <dialog class="pp-modal" id="pp-modal" aria-labelledby="pp-title">
      <div class="pp-modal-inner">
        <button type="button" class="pp-close" aria-label="閉じる">×</button>
        <h2 id="pp-title">プライバシーポリシー</h2>
        <p>当サイトでは、お客様の個人情報を適切に保護することを重要な責務と考え、以下のとおりプライバシーポリシーを定めます。</p>

        <h3>1. 個人情報の取得について</h3>
        <p>当サイトでは、お問い合わせやお仕事のご相談の際に、お名前、メールアドレス、お問い合わせ内容などの個人情報をご提供いただく場合があります。</p>
        <p>これらの情報は、適正かつ公正な手段によって取得いたします。</p>

        <h3>2. 個人情報の利用目的</h3>
        <p>取得した個人情報は、以下の目的で利用いたします。</p>
        <ul>
          <li>お問い合わせやご相談への回答</li>
          <li>ご依頼いただいた業務に関するご連絡</li>
          <li>サービスの提供および円滑な業務遂行</li>
          <li>その他、上記の利用目的に付随する業務</li>
        </ul>
        <p>取得した個人情報は、法令で認められる場合を除き、ご本人の同意なく利用目的の範囲を超えて利用することはありません。</p>

        <h3>3. 個人情報の第三者提供について</h3>
        <p>取得した個人情報は、法令に基づく場合など、正当な理由がある場合を除き、ご本人の同意なく第三者に提供することはありません。</p>

        <h3>4. 個人情報の管理について</h3>
        <p>取得した個人情報は、漏えい、紛失、不正アクセスなどを防止するため、適切な安全管理措置を講じます。</p>
        <p>また、個人情報が不要となった場合は、法令などに従い、適切な方法で削除または廃棄いたします。</p>

        <h3>5. Cookie（クッキー）について</h3>
        <p>当サイトでは、サイトの利便性向上や利用状況の把握などを目的として、Cookieを使用する場合があります。</p>
        <p>Cookieによって収集される情報には、通常、お名前やメールアドレスなど、個人を直接特定できる情報は含まれません。</p>
        <p>Cookieの使用は、お使いのブラウザの設定により制限または無効にすることができます。</p>

        <h3>6. アクセス解析ツールについて</h3>
        <p>当サイトでは、サイトの利用状況を把握し、サービスの改善に役立てるため、アクセス解析ツールを導入する場合があります。</p>
        <p>アクセス解析ツールでは、Cookieなどを利用してアクセス情報を収集することがあります。</p>
        <p>実際にアクセス解析ツールを導入する場合は、使用するサービスや収集される情報について、必要に応じて本ポリシーに追記いたします。</p>

        <h3>7. 個人情報の開示・訂正・削除について</h3>
        <p>ご本人から個人情報の開示、訂正、削除、利用停止などのお申し出があった場合は、ご本人確認を行ったうえで、法令に従い適切に対応いたします。</p>
        <p>ご希望の場合は、当サイトのお問い合わせフォームよりご連絡ください。</p>

        <h3>8. プライバシーポリシーの変更について</h3>
        <p>当サイトでは、法令の改正や運営内容の変更などに応じて、本プライバシーポリシーを見直し、必要に応じて変更する場合があります。</p>
        <p>変更後の内容は、当サイトに掲載した時点から適用されます。ただし、法令上ご本人の同意が必要となる変更については、適切な方法で同意を取得いたします。</p>

        <h3>9. お問い合わせ窓口</h3>
        <p>個人情報の取り扱いに関するお問い合わせは、当サイトのお問い合わせフォームよりお願いいたします。</p>
        <p class="pp-owner">サイト運営者：ニューベリー マヤ</p>

        <div class="pp-actions">
          <button type="button" class="btn berry pp-close-btn">閉じる</button>
        </div>
      </div>
    </dialog>
    <script>
    (function () {
      const modal = document.getElementById('pp-modal');
      if (!modal) return;
      document.querySelectorAll('.pp-open').forEach(btn => btn.addEventListener('click', e => {
        e.preventDefault(); /* labelの中なので、チェックボックスが切り替わらないように */
        modal.showModal();
        modal.querySelector('.pp-modal-inner').scrollTop = 0;
      }));
      modal.querySelectorAll('.pp-close, .pp-close-btn').forEach(b => b.addEventListener('click', () => modal.close()));
      /* 背景（外側）をクリックしても閉じる */
      modal.addEventListener('click', e => { if (e.target === modal) modal.close(); });
    })();
    </script>
  </div>
</main>

<!-- 送信アニメーション -->
<div class="mail-overlay" id="mail-overlay" hidden>
  <div class="mail-scene" id="mail-scene">
    <div class="mail-letter" id="mail-letter">
      <span></span><span></span><span></span><span></span>
    </div>
    <div class="mail-envelope" id="mail-envelope">
      <div class="env-body"></div>
      <div class="env-flap" id="env-flap"></div>
      <div class="env-stamp"></div>
    </div>
  </div>
  <p class="mail-status" id="mail-status">お手紙を届けています...</p>
</div>

<script>
  // admin-ajax.php のURLと nonce（WordPress側で生成）
  window.MAYA_CF = {
    ajaxurl: '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>',
    nonce: '<?php echo esc_js( wp_create_nonce( 'maya_contact' ) ); ?>'
  };
</script>
<script src="<?php echo MAYA_URI; ?>/js/app.js?v=2"></script>
<script>
(function () {
  const form = document.getElementById('cf');
  if (!form) return;

  const TOTAL_STEPS = 6;
  let currentStep = 1;

  const sections = [...form.querySelectorAll('.cf-section')];
  const stepDots = [...document.querySelectorAll('.cf-ss')];
  const fillEl   = document.getElementById('cf-sticky-fill');

  function showStep(n) {
    currentStep = n;
    sections.forEach(s => s.classList.toggle('cf-active', parseInt(s.dataset.step) === n));
    stepDots.forEach((d, i) => d.classList.toggle('active', i + 1 <= n));
    if (fillEl) fillEl.style.width = Math.round((n / TOTAL_STEPS) * 100) + '%';
    /* 次の質問の先頭へ戻す。進捗バーは画面に付いてくるので、フォーム本体の位置から計算する */
    const bar  = document.getElementById('cf-sticky-bar');
    const head = document.querySelector('.site-head');
    const offset = (head ? head.offsetHeight : 0) + (bar ? bar.offsetHeight : 0);
    const y = form.getBoundingClientRect().top + window.scrollY - offset;
    if (window.scrollY > y) window.scrollTo({ top: y, behavior: 'smooth' });
  }

  // 次へ
  form.querySelectorAll('.cf-next').forEach(btn => {
    btn.addEventListener('click', function () {
      const section = this.closest('.cf-section');
      const step = parseInt(section.dataset.step);

      if (step === 1) {
        const kindChecked = [...form.querySelectorAll('input[name="kind"]:checked')].length > 0;
        const purposeVal  = form.querySelector('[name="purpose"]').value;
        if (!kindChecked) { showError(section, '作りたいものを選んでください'); return; }
        if (!purposeVal)  { showError(section, '達成したいことを選んでください'); return; }
      }

      clearError(section);
      showStep(step + 1);
    });
  });

  // 戻る
  form.querySelectorAll('.cf-back').forEach(btn => {
    btn.addEventListener('click', function () {
      const step = parseInt(this.closest('.cf-section').dataset.step);
      clearError(form.querySelector(`.cf-section[data-step="${step}"]`));
      showStep(step - 1);
    });
  });

  function showError(section, msg) {
    let el = section.querySelector('.cf-error');
    if (!el) {
      el = document.createElement('p');
      el.className = 'cf-error';
      section.querySelector('.cf-nav').before(el);
    }
    el.textContent = msg;
  }
  function clearError(section) {
    const el = section && section.querySelector('.cf-error');
    if (el) el.remove();
  }

  // 「その他」チェック時にテキスト入力欄を表示
  const kindOther = document.getElementById('kind-other');
  const kindOtherWrap = document.getElementById('kind-other-wrap');
  if (kindOther && kindOtherWrap) {
    kindOther.addEventListener('change', function () {
      kindOtherWrap.style.display = this.checked ? 'block' : 'none';
      if (!this.checked) document.getElementById('kind-other-text').value = '';
    });
  }

  // 既存サイトURL欄の表示切り替え
  document.querySelectorAll('input[name="existing"]').forEach(radio => {
    radio.addEventListener('change', function () {
      const wrap = document.getElementById('existing-url-wrap');
      if (wrap) wrap.style.display = this.value === 'ある（リニューアル）' ? 'block' : 'none';
    });
  });

  // ===== faq.phpからの引き継ぎ（JSON → 各フォーム要素に反映） =====
  (function () {
    const raw = sessionStorage.getItem('pre_hearing');
    if (!raw) return;

    let data;
    try { data = JSON.parse(raw); } catch (e) { return; }
    sessionStorage.removeItem('pre_hearing');

    if (Array.isArray(data.kind)) {
      data.kind.forEach(val => {
        const el = form.querySelector(`input[name="kind"][value="${val}"]`);
        if (el) el.checked = true;
      });
    }

    if (data.purpose) {
      const el = form.querySelector('select[name="purpose"]');
      if (el) el.value = data.purpose;
    }

    if (Array.isArray(data.target)) {
      data.target.forEach(val => {
        const el = form.querySelector(`input[name="target"][value="${val}"]`);
        if (el) el.checked = true;
      });
    }

    if (data.budget) {
      const el = form.querySelector('select[name="budget"]');
      if (el) el.value = data.budget;
    }

    const lines = [];
    if (Array.isArray(data.kind) && data.kind.length)   lines.push(`作りたいもの：${data.kind.join('、')}`);
    if (data.purpose)                                    lines.push(`達成したいこと：${data.purpose}`);
    if (Array.isArray(data.target) && data.target.length) lines.push(`ターゲット：${data.target.join('、')}`);
    if (data.budget)                                     lines.push(`予算：${data.budget}`);

    if (lines.length) {
      const msgEl = document.getElementById('cf-msg');
      if (msgEl) msgEl.value = '【ヒアリングシートより】\n' + lines.join('\n');
    }

    const banner = document.getElementById('inherit-banner');
    if (banner) banner.removeAttribute('hidden');
  })();

  (function () {
    const code = sessionStorage.getItem('coupon_code');
    if (!code) return;
    const el = document.getElementById('cf-coupon');
    if (el) el.value = code;
    sessionStorage.removeItem('coupon_code');
  })();

  // works.phpからの「この感じで相談する」引き継ぎ
  (function () {
    const raw = sessionStorage.getItem('works_consult');
    if (!raw) return;

    let data;
    try { data = JSON.parse(raw); } catch (e) { return; }
    sessionStorage.removeItem('works_consult');

    const msgEl = document.getElementById('cf-msg');
    if (!msgEl) return;

    const text = [
      '【参考にした実績】',
      `タイトル：${data.title}`,
      `カテゴリ：${data.category}`,
      '',
      'この作品のような雰囲気でお願いしたいです。',
    ].join('\n');

    msgEl.value = text;

    const banner = document.getElementById('inherit-banner');
    if (banner) {
      banner.removeAttribute('hidden');
      banner.querySelector('.inherit-msg').textContent =
        `「${data.title}」の雰囲気を引き継ぎました！詳細を追記してから送信してね。`;
    }
  })();

  (function () {
    const raw = sessionStorage.getItem('type_consult');
    if (!raw) return;
    let data;
    try { data = JSON.parse(raw); } catch (e) { return; }
    sessionStorage.removeItem('type_consult');

    const msgEl = document.getElementById('cf-msg');
    if (!msgEl) return;

    const text = [
      '【タイプ別診断より】',
      `タイプ：${data.ttl}`,
      `おすすめプラン：${data.plan}`,
      `セット：${data.set_desc}`,
      `セット価格：${data.set_price}`,
    ].join('\n');

    msgEl.value = text;

    const banner = document.getElementById('inherit-banner');
    if (banner) {
      banner.removeAttribute('hidden');
      banner.querySelector('.inherit-msg').textContent =
        `「${data.ttl}」タイプの情報を引き継ぎました！詳細を追記してから送信してね。`;
    }
  })();

  // 送信処理（admin-ajax.php へ実送信 → 成功時のみアニメーション）
  form.addEventListener('submit', e => {
    e.preventDefault();
    const lastSection = form.querySelector('.cf-section[data-step="6"]');

    const nameVal   = form.querySelector('[name="name"]').value.trim();
    const emailVal  = form.querySelector('[name="email"]').value.trim();
    const agreeChecked = form.querySelector('[name="agree"]').checked;

    if (!nameVal)      { showError(lastSection, 'お名前を入力してください'); return; }
    if (!emailVal)     { showError(lastSection, 'メールアドレスを入力してください'); return; }
    if (!agreeChecked) { showError(lastSection, 'プライバシーポリシーへの同意が必要です'); return; }
    clearError(lastSection);

    function getChecked(name) {
      return [...form.querySelectorAll(`input[name="${name}"]:checked`)].map(i => i.value).join('、');
    }
    function getVal(name) {
      const el = form.querySelector(`[name="${name}"]`);
      return el && el.value ? el.value : '';
    }

    // ラジオは :checked のものを取得
    const existingVal = (form.querySelector('input[name="existing"]:checked') || {}).value || '';
    const existingUrl = getVal('existing_url');

    // 「その他」にテキストを付加
    let kindVal = getChecked('kind');
    const kindOtherText = ((form.querySelector('[name="kind_other"]') || {}).value || '').trim();
    if (kindVal && kindOtherText) {
      kindVal = kindVal.replace('その他', `その他（${kindOtherText}）`);
    }

    const msgEl  = document.getElementById('cf-msg');
    const msgVal = msgEl ? msgEl.value.trim() : '';

    // 送信内容を組み立て（サーバー側で本文整形）
    const payload = new URLSearchParams();
    payload.set('action', 'maya_contact_submit');
    payload.set('nonce', (window.MAYA_CF && window.MAYA_CF.nonce) || '');
    payload.set('name', nameVal);
    payload.set('email', emailVal);
    payload.set('company', getVal('company'));
    payload.set('tel', getVal('tel'));
    payload.set('kind', kindVal);
    payload.set('purpose', getVal('purpose'));
    payload.set('existing', existingVal);
    payload.set('existing_url', existingUrl);
    payload.set('target', getChecked('target'));
    payload.set('tone', getChecked('tone'));
    payload.set('ref', getVal('ref'));
    payload.set('budget', getVal('budget'));
    payload.set('due', getVal('due'));
    payload.set('assets', getChecked('assets'));
    payload.set('msg', msgVal);
    payload.set('ng', getVal('ng'));
    payload.set('coupon', getVal('coupon'));
    payload.set('referral', getVal('referral'));
    payload.set('agree', agreeChecked ? '1' : '');

    const submitBtn = lastSection.querySelector('button[type="submit"]');
    if (submitBtn) submitBtn.disabled = true;

    fetch((window.MAYA_CF && window.MAYA_CF.ajaxurl) || '/wp-admin/admin-ajax.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
      body: payload.toString(),
    })
      .then(r => r.json())
      .then(res => {
        if (!res || !res.success) {
          const m = (res && res.data && res.data.message) || '送信に失敗しました。時間をおいて再度お試しください。';
          showError(lastSection, m);
          if (submitBtn) submitBtn.disabled = false;
          return;
        }
        runSendAnimation();
      })
      .catch(() => {
        showError(lastSection, '通信エラーが発生しました。時間をおいて再度お試しください。');
        if (submitBtn) submitBtn.disabled = false;
      });
  });

  // 送信成功後の封筒アニメーション
  function runSendAnimation() {
    const overlay = document.getElementById('mail-overlay');
    overlay.removeAttribute('hidden');
    setTimeout(() => {
      document.getElementById('mail-scene').classList.add('mail-fly');
      document.getElementById('mail-status').textContent = 'ポストに投函しました！';
    }, 1600);
    setTimeout(() => {
      overlay.setAttribute('hidden', '');
      celebrate();
      form.innerHTML = `
        <div style="text-align:center; padding: 40px 0;">
          <div class="material-symbols-outlined" style="font-size:60px; color:var(--berry);">mark_email_read</div>
          <h3 style="margin: 12px 0 6px;">送信完了！</h3>
          <p class="muted sm">2営業日以内にお返事します。<br/>いただいたメールアドレスに自動受領メールをお送りします。</p>
          <div style="margin-top:18px;"><a class="btn" href="/">トップに戻る</a></div>
        </div>`;
    }, 2800);
  }

  function celebrate() {
    const cx = window.innerWidth / 2, cy = window.innerHeight / 2;
    for (let i = 0; i < 30; i++) {
      const p = document.createElement('span');
      p.className = 'splash-particle';
      const ang = Math.random() * Math.PI * 2;
      const dist = 100 + Math.random() * 200;
      const size = 8 + Math.random() * 14;
      const cols = ['var(--berry)', 'var(--grape)', 'var(--grape-soft)'];
      p.style.cssText = `left:${cx}px;top:${cy}px;width:${size}px;height:${size}px;--dx:${Math.cos(ang)*dist}px;--dy:${Math.sin(ang)*dist}px;background:${cols[i%3]};animation-duration:1.2s;`;
      document.body.append(p);
      setTimeout(() => p.remove(), 1200);
    }
  }
})();
</script>
<?php include "footer.php"; ?>
