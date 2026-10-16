<?php
/*
Template Name: Menu
*/
$pageTitle = "VeryBerry — 料金・メニュー";
$currentPage = "menu";
include "header.php";
?>
<!-- Static soft soap bubbles floating in the background -->
<div class="bubbles-bg static-bubbles" id="static-bubbles" aria-hidden="true">
</div>
<main class="wrap">
  <div class="sect-title sect-title-centered" style="margin-top: 60px;">
    <div class="en kicker-en">
      — price & menu —
    </div>
    <h2>
      <span class="scrib">料金・メニュー </span>
    </h2>
    <p class="muted sm" style="max-width:520px; margin: 30px auto 0;">
      Web制作の料金表です。 <br/>
      内容や規模により変動するので、まずはお気軽にご相談ください。
    </p>
  </div>
  <!-- Anchor link buttons -->
  <nav class="menu-anchors" aria-label="ページ内ナビ">
    <a href="#plan-compare">プラン比較 </a>
    <a href="#blog-update">ブログ運用 </a>
    <a href="#options">オプション料金 </a>
    <a href="#other-menu">そのほか </a>
    <!-- ご利用条件は非表示中
    <a href="#notes">ご利用条件 </a>
    -->
    <a href="#type">タイプ別診断 </a>
    <a href="#flow">制作の流れ </a>
    <a href="#quiz">Webクイズ </a>
  </nav>
  <!-- 1. PLAN COMPARISON -->
  <div id="plan-compare" class="sect-title sect-title-centered" style="margin-top: 56px;">
    <div class="en kicker-en">
      — plan comparison —
    </div>
    <h2>
      <span class="scrib">Webサイト制作プラン </span>
    </h2>
    <p class="muted sm" style="max-width:480px; margin: 30px auto 0;">
      Webサイトの基本プランです。<br class="sp-only">お好みのプランをお選びください。
    </p>
  </div>
  <section class="plan-row plan-row-v2" style="margin-top: 56px;">
    <div class="plan plan-v2">
      <div class="plan-head">
        <div class="pname">
          BASIC
        </div>
        <div class="pdesc">
          ベーシック
        </div>
      </div>
      <div class="plan-price">
        <span class="plan-price-num"><span class="yen">¥</span>150,000 </span>
        <span class="plan-price-unit">〜 </span>
      </div>
      <ul class="plan-feats">
        <li>
          <span class="feat-l">ページ数 </span><span class="feat-v">1 <small>P </small></span>
        </li>
        <li>
          <span class="feat-l">フォーム </span><span class="feat-v feat-no">× </span>
        </li>
        <li>
          <span class="feat-l">CMS </span><span class="feat-v feat-no">× </span>
        </li>
        <li>
          <span class="feat-l">SEO </span><span class="feat-v">基本 </span>
        </li>
        <li>
          <span class="feat-l">修正回数 </span><span class="feat-v">3 <small>回 </small></span>
        </li>
      </ul>
      <a class="btn" href="/contact/">このプランで相談 </a>
    </div>
    <div class="plan plan-v2 best">
      <div class="plan-ribbon">
        <span class="plan-ribbon-l">人気No.1 </span>
        <span class="plan-ribbon-s">— おすすめ </span>
      </div>
      <div class="plan-glow" aria-hidden="true">
      </div>
      <div class="plan-head">
        <div class="pname">
          STANDARD
        </div>
        <div class="pdesc">
          スタンダード
        </div>
      </div>
      <div class="plan-price">
        <span class="plan-price-num"><span class="yen">¥</span>260,000 </span>
        <span class="plan-price-unit">〜 </span>
      </div>
      <ul class="plan-feats">
        <li>
          <span class="feat-l">ページ数 </span><span class="feat-v">3 <small>P </small></span>
        </li>
        <li>
          <span class="feat-l">フォーム </span><span class="feat-v feat-yes">○ </span>
        </li>
        <li>
          <span class="feat-l">CMS </span><span class="feat-v feat-no">× </span>
        </li>
        <li>
          <span class="feat-l">SEO </span><span class="feat-v">基本 </span>
        </li>
        <li>
          <span class="feat-l">修正回数 </span><span class="feat-v">5 <small>回 </small></span>
        </li>
      </ul>
      <a class="btn berry" href="/contact/">このプランで相談 → </a>
    </div>
    <div class="plan plan-v2">
      <div class="plan-head">
        <div class="pname">
          PREMIUM
        </div>
        <div class="pdesc">
          プレミアム
        </div>
      </div>
      <div class="plan-price">
        <span class="plan-price-num"><span class="yen">¥</span>450,000 <small>〜520,000 </small></span>
      </div>
      <ul class="plan-feats">
        <li>
          <span class="feat-l">ページ数 </span><span class="feat-v">5 <small>P </small></span>
        </li>
        <li>
          <span class="feat-l">フォーム </span><span class="feat-v feat-yes">○ </span>
        </li>
        <li>
          <span class="feat-l">CMS </span><span class="feat-v feat-yes">○ </span>
        </li>
        <li>
          <span class="feat-l">SEO </span><span class="feat-v">基本 </span>
        </li>
        <li>
          <span class="feat-l">修正回数 </span><span class="feat-v">無制限 <small>※1 </small></span>
        </li>
      </ul>
      <a class="btn" href="/contact/">このプランで相談 </a>
    </div>
  </section>
  <!-- 2. OPTIONS -->
  <div id="options" class="sect-title sect-title-centered" style="margin-top: 70px;">
    <div class="en kicker-en">
      — options —
    </div>
    <h2>
      <span class="scrib">オプション料金 </span>
    </h2>
    <p class="muted sm" style="max-width:520px; margin: 30px auto 0;">
      プランごとのオプション料金です。タブで切り替えてご覧ください。
    </p>
  </div>
  <div class="opt-plan-tabs opt-center" id="opt-plan-tabs" role="tablist">
    <button class="opt-ptab on" data-plan="basic">BASIC </button>
    <button class="opt-ptab" data-plan="standard">STANDARD </button>
    <button class="opt-ptab" data-plan="premium">PREMIUM </button>
  </div>
  <div class="optv-wrap" data-style="card">
    <div class="opt-plan-view" data-plan="basic">
      <div class="opt-plan-card">
        <ul class="opt-plan-list">
          <li>
            <span class="opt-plan-l">ページ追加 </span><span class="opt-plan-r"><span class="yen">¥</span>50,000 <small>（1Pまで） </small></span>
          </li>
          <li>
            <span class="opt-plan-l">フォーム設置 <small class="opt-plan-note">お問い合わせや予約などを受け付けるフォームを設置します </small></span><span class="opt-plan-r"><span class="yen">¥</span>30,000 </span>
          </li>
          <li>
            <span class="opt-plan-l">CMS導入 <small class="opt-plan-note">自分でブログや商品情報をかんたんに更新できる仕組みです </small></span><span class="opt-plan-r"><span class="yen">¥</span>150,000 </span>
          </li>
        </ul>
      </div>
    </div>
    <div class="opt-plan-view" data-plan="standard" hidden>
      <div class="opt-plan-card">
        <ul class="opt-plan-list">
          <li>
            <span class="opt-plan-l">ページ追加 </span><span class="opt-plan-r"><span class="yen">¥</span>30,000 <small>/ 1P </small></span>
          </li>
          <li>
            <span class="opt-plan-l">フォーム設置 <small class="opt-plan-note">お問い合わせや予約などを受け付けるフォームを設置します </small></span><span class="opt-plan-r muted">プランに内包 </span>
          </li>
          <li>
            <span class="opt-plan-l">CMS導入 <small class="opt-plan-note">自分でブログや商品情報をかんたんに更新できる仕組みです </small></span><span class="opt-plan-r"><span class="yen">¥</span>120,000 </span>
          </li>
        </ul>
      </div>
    </div>
    <div class="opt-plan-view" data-plan="premium" hidden>
      <div class="opt-plan-card">
        <ul class="opt-plan-list">
          <li>
            <span class="opt-plan-l">ページ追加 </span><span class="opt-plan-r"><span class="yen">¥</span>25,000 <small>/ 1P </small></span>
          </li>
          <li>
            <span class="opt-plan-l">フォーム設置 <small class="opt-plan-note">お問い合わせや予約などを受け付けるフォームを設置します </small></span><span class="opt-plan-r muted">プランに内包 </span>
          </li>
          <li>
            <span class="opt-plan-l">CMS導入 <small class="opt-plan-note">自分でブログや商品情報をかんたんに更新できる仕組みです </small></span><span class="opt-plan-r muted">プランに内包 </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- 1b. BLOG / SITE MAINTENANCE -->
  <div id="blog-update" class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">
      — monthly support —
    </div>
    <h2>
      <span class="scrib">ブログ・運用代行 </span>
    </h2>
    <p class="muted sm" style="max-width:520px; margin: 30px auto 0;">
      サイトを「作って終わり」にしないために。 <br/>
      ブログの定期更新やSNS連携、お知らせの差し替えなどを月額でサポートします。
    </p>
    <p class="blog-promo"><span class="sl">＼</span>一括払いで<b>1ヶ月分無料</b>！<span class="sl">／</span></p>
  </div>
  <section class="blog-row" style="margin-top: 36px;">
    <div class="blog-plan">
      <div class="blog-plan-ribbon blog-plan-ribbon-light">
        気軽に1本から！
      </div>
      <div class="blog-plan-h">
        <span class="blog-plan-tag">spot </span>
        <h3 class="blog-plan-ttl">
          スポット
        </h3>
        <p class="blog-plan-sub">
          まずは1本だけ試したい方に
        </p>
      </div>
      <div class="blog-plan-price">
        <span class="blog-plan-num"><span class="yen">¥</span>1,500 </span>
        <span class="blog-plan-unit">/ 1記事 </span>
      </div>
      <ul class="blog-plan-feats">
        <li><span class="bp-l bp-has-tip">記事数<span class="bp-tip">月に投稿するブログの本数です。1本から単発でご依頼いただけます。</span></span><span class="bp-v">1 <b>本</b>から </span></li>
        <li><span class="bp-l bp-has-tip">文字数目安<span class="bp-tip">1本あたりの記事のボリューム感です。文字数が多いほど内容が充実し、検索エンジンにも評価されやすくなります。</span></span><span class="bp-v">1,000字 / 本 </span></li>
        <li><span class="bp-l bp-has-tip">アイキャッチ<span class="bp-tip">記事一覧などに表示されるサムネイル画像です。目を引き、クリックしてもらいやすくする大切な要素です。</span></span><span class="bp-v feat-yes">○ </span></li>
        <li><span class="bp-l bp-has-tip">校正・公開作業<span class="bp-tip">誤字・脱字のチェックから、サイトへの投稿・公開まで対応します。自分でアップしなくてOKです。</span></span><span class="bp-v feat-yes">○ </span></li>
        <li><span class="bp-l bp-has-tip">月次レポート<span class="bp-tip">「何人が読んだか」「どこから来たか」など、サイトの状況を月1回まとめてお伝えします。</span></span><span class="bp-v feat-no">× </span></li>
        <li><span class="bp-l bp-has-tip">キーワード調査<span class="bp-tip">Google検索でどんな言葉が使われているか調べ、読まれやすい記事テーマを選びます。</span></span><span class="bp-v feat-no">× </span></li>
        <li><span class="bp-l bp-has-tip">SEO内部対策提案<span class="bp-tip">Googleに評価されやすいサイト構造・見出しの付け方などを改善提案します。</span></span><span class="bp-v feat-no">× </span></li>
      </ul>
      <a class="btn" href="/contact/">このプランで相談 </a>
    </div>
    <div class="blog-plan blog-plan-best">
      <div class="blog-plan-ribbon">
        一番おすすめ！
      </div>
      <div class="blog-plan-h">
        <span class="blog-plan-tag">standard </span>
        <h3 class="blog-plan-ttl">
          スタンダード
        </h3>
        <p class="blog-plan-sub">
          定期的に更新し続けたい方に
        </p>
      </div>
      <div class="blog-plan-price">
        <span class="blog-plan-num"><span class="yen">¥</span>5,000 </span>
        <span class="blog-plan-unit">/ 月 </span>
      </div>
      <ul class="blog-plan-feats">
        <li><span class="bp-l bp-has-tip">ブログ記事<span class="bp-tip">月に投稿するブログの本数です。更新頻度が高いほどSEO的にも有利になります。</span></span><span class="bp-v">月 <b>4 </b>本 </span></li>
        <li><span class="bp-l bp-has-tip">文字数目安<span class="bp-tip">1本あたりの記事のボリューム感です。文字数が多いほど内容が充実し、検索エンジンにも評価されやすくなります。</span></span><span class="bp-v">1,500字 / 本 </span></li>
        <li><span class="bp-l bp-has-tip">アイキャッチ<span class="bp-tip">記事一覧などに表示されるサムネイル画像です。目を引き、クリックしてもらいやすくする大切な要素です。</span></span><span class="bp-v feat-yes">○ </span></li>
        <li><span class="bp-l bp-has-tip">校正・公開作業<span class="bp-tip">誤字・脱字のチェックから、サイトへの投稿・公開まで対応します。自分でアップしなくてOKです。</span></span><span class="bp-v feat-yes">○ </span></li>
        <li><span class="bp-l bp-has-tip">月次レポート<span class="bp-tip">「何人が読んだか」「どこから来たか」など、サイトの状況を月1回まとめてお伝えします。</span></span><span class="bp-v feat-no">× </span></li>
        <li><span class="bp-l bp-has-tip">キーワード調査<span class="bp-tip">Google検索でどんな言葉が使われているか調べ、読まれやすい記事テーマを選びます。</span></span><span class="bp-v feat-no">× </span></li>
        <li><span class="bp-l bp-has-tip">SEO内部対策提案<span class="bp-tip">Googleに評価されやすいサイト構造・見出しの付け方などを改善提案します。</span></span><span class="bp-v feat-no">× </span></li>
      </ul>
      <a class="btn berry" href="/contact/">このプランで相談 → </a>
    </div>
    <div class="blog-plan">
      <div class="blog-plan-ribbon blog-plan-ribbon-full">
        本気でSEOを育てる！
      </div>
      <div class="blog-plan-h">
        <span class="blog-plan-tag">seo pro </span>
        <h3 class="blog-plan-ttl">
          SEOプロ
        </h3>
        <p class="blog-plan-sub">
          検索流入を本気で伸ばしたい方に
        </p>
      </div>
      <div class="blog-plan-price">
        <span class="blog-plan-num"><span class="yen">¥</span>18,000 〜</span>
        <span class="blog-plan-unit">/ 月 </span>
      </div>
      <ul class="blog-plan-feats">
        <li><span class="bp-l bp-has-tip">ブログ記事<span class="bp-tip">月に投稿するブログの本数です。更新頻度が高いほどSEO的にも有利になります。</span></span><span class="bp-v">月 <b>8 </b>本 </span></li>
        <li><span class="bp-l bp-has-tip">文字数目安<span class="bp-tip">1本あたりの記事のボリューム感です。文字数が多いほど内容が充実し、検索エンジンにも評価されやすくなります。</span></span><span class="bp-v">2,500字 / 本 </span></li>
        <li><span class="bp-l bp-has-tip">アイキャッチ<span class="bp-tip">記事一覧などに表示されるサムネイル画像です。目を引き、クリックしてもらいやすくする大切な要素です。</span></span><span class="bp-v feat-yes">○ </span></li>
        <li><span class="bp-l bp-has-tip">校正・公開作業<span class="bp-tip">誤字・脱字のチェックから、サイトへの投稿・公開まで対応します。自分でアップしなくてOKです。</span></span><span class="bp-v feat-yes">○ </span></li>
        <li><span class="bp-l bp-has-tip">月次レポート<span class="bp-tip">「何人が読んだか」「どこから来たか」など、サイトの状況を月1回まとめてお伝えします。</span></span><span class="bp-v feat-yes">○ </span></li>
        <li><span class="bp-l bp-has-tip">キーワード調査<span class="bp-tip">Google検索でどんな言葉が使われているか調べ、読まれやすい記事テーマを選びます。</span></span><span class="bp-v feat-yes">○ </span></li>
        <li><span class="bp-l bp-has-tip">SEO内部対策提案<span class="bp-tip">Googleに評価されやすいサイト構造・見出しの付け方などを改善提案します。</span></span><span class="bp-v feat-yes">○ </span></li>
      </ul>
      <a class="btn" href="/contact/">このプランで相談 </a>
    </div>
  </section>
  <p class="blog-tip-hint"><span class="material-symbols-outlined blog-tip-hint-icon">touch_app</span>項目名にカーソルを合わせると説明が見られます</p>
  <!-- 1c. OTHER MENU -->
  <div id="other-menu" class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">
      — other menu —
    </div>
    <h2>
      <span class="scrib">そのほかのメニュー </span>
    </h2>
    <p class="muted sm" style="max-width:520px; margin: 30px auto 0;">
      バナー、動画、チラシ、ロゴ、イラストなどの<br class="sp-only">単発のご依頼も承っています。 <br/>
      数量や内容によって変動するので、<br class="sp-only">お見積もりにてご相談ください。
    </p>
  </div>
  <section class="other-grid" style="margin-top: 36px;">
    <div class="other-tagwrap">
      <span class="other-string" aria-hidden="true"></span>
    <article class="other-card">
      <div class="other-card-h">
        <span class="other-tag">banner </span>
        <h3 class="other-ttl">
          バナー制作
        </h3>
      </div>
      <div class="other-price">
        <span class="other-price-num"><span class="yen">¥</span>5,000〜</span>
        <span class="other-price-unit">/ 1枚 </span>
      </div>
      <ul class="other-feats">
        <li>
          SNS用・広告用・サイト内設置用
        </li>
        <li>
          同デザイン展開（サイズ違い）は<br>+¥3,000/枚〜
        </li>
        <li>
          修正2回まで含む
        </li>
      </ul>
      <a class="btn berry" href="/contact/">このメニューで相談 → </a>
    </article>
    </div>
    <div class="other-tagwrap">
      <span class="other-string" aria-hidden="true"></span>
    <article class="other-card">
      <div class="other-card-h">
        <span class="other-tag">business card</span>
        <h3 class="other-ttl">
          名刺
        </h3>
      </div>
      <div class="other-price">
        <span class="other-price-num"><span class="yen">¥</span>15,000〜 </span>
        <span class="other-price-unit">/ 1枚 </span>
      </div>
      <ul class="other-feats">
        <li>
          名刺（両面）・ショップカードなど
        </li>
        <li>
          印刷入稿データ（PDF・ai）での納品
        </li>
        <li>
          用紙・印刷所のご相談も対応
        </li>
      </ul>
      <a class="btn berry" href="/contact/">このメニューで相談 → </a>
    </article>
    </div>
    <div class="other-tagwrap">
      <span class="other-string" aria-hidden="true"></span>
    <article class="other-card">
      <div class="other-card-h">
        <span class="other-tag">other </span>
        <h3 class="other-ttl">
          その他
        </h3>
      </div>
      <div class="other-price">
        <span class="other-price-num">お見積り </span>
      </div>
      <ul class="other-feats">
        <li>
          ショップカード・POP・SNS運用など
        </li>
        <li>
          InstagramやLINE運用素材、メニューに無いものご相談ください
        </li>
      </ul>
      <a class="btn berry" href="/contact/">このメニューで相談 → </a>
    </article>
    </div>
  </section>
  <!-- Notes（ご利用条件）は非表示中。表示するときはこのコメントを外す
  <div class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">— terms & conditions —</div>
    <h2><span class="scrib">ご利用条件</span></h2>
    <p class="muted sm" style="max-width:480px; margin: 16px auto 0;">全サービス・プランに共通する条件です。</p>
  </div>
  <div id="notes" class="notes-view notes-grid" style="margin-top: 30px;">
    <div class="notes-card">
      <div class="notes-h">
        <span class="notes-h-jp">ご利用条件 </span>
        <span class="notes-h-en">— notes </span>
      </div>
      <ol class="notes-list">
        <li>
          追加修正の対応は納品後 <span class="webk-mark">30日間以内 </span>とします。
        </li>
        <li>
          お支払いは <span class="webk-mark">着手金50% </span>、納品時に <span class="webk-mark">残金50% </span>をお願いしています。
        </li>
        <li>
          表示価格はすべて税抜き表示です。別途消費税が発生します。
        </li>
        <li>
          ご要望によっては別途お見積もりとなる場合があります。
        </li>
      </ol>
    </div>
  </div>
  -->
  <!-- TYPE-BASED RECOMMENDATION -->
  <div id="type" class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">
      — which type? —
    </div>
    <h2>
      <span class="scrib">タイプ別おすすめ診断 </span>
    </h2>
    <p class="muted sm" style="max-width: 460px; margin: 30px auto 0;">
      あなたに近いタイプを選んでみてください。 <br>そのタイプにあった提案が出てきます。
    </p>
  </div>
  <section class="type-section" style="max-width: 880px; margin: 28px auto 0;">
    <div class="type-grid">
      <button class="type-card" data-type="shop" type="button">
      <div class="type-card-img"><img src="<?php echo MAYA_URI; ?>/img/type04.png" alt="" style="width:100%;"/></div>
      <span class="type-ttl">お店を開く方 </span>
      <span class="type-sub">カフェ、雑貨屋、小さなサロン </span>
      <span class="type-rec">STANDARDがおすすめ </span>
      </button>
      <button class="type-card" data-type="creator" type="button">
      <div class="type-card-img"><img src="<?php echo MAYA_URI; ?>/img/type02.png" alt="" style="width:100%;"/></div>
      <span class="type-ttl">個人作家・デザイナー </span>
      <span class="type-sub">ポートフォリオ、作品集 </span>
      <span class="type-rec">BASICがおすすめ </span>
      </button>
      <button class="type-card" data-type="event" type="button">
      <div class="type-card-img"><img src="<?php echo MAYA_URI; ?>/img/type08.png" alt="" style="width:85%;"/></div>
      <span class="type-ttl">イベント・キャンペーン </span>
      <span class="type-sub">期間限定LP、バナー一式 </span>
      <span class="type-rec">BASIC + オプション </span>
      </button>
      <button class="type-card" data-type="renew" type="button">
      <div class="type-card-img"><img src="<?php echo MAYA_URI; ?>/img/type05.png" alt="" style="width:100%;"/></div>
      <span class="type-ttl">リニューアル </span>
      <span class="type-sub">既存サイトを生まれ変わらせる </span>
      <span class="type-rec">PREMIUMがおすすめ </span>
      </button>
    </div>
    <div class="type-result" id="type-result" hidden>
      <button class="type-result-close" id="type-result-close" aria-label="閉じる">× </button>
      <div class="type-result-photo">
        <img id="type-result-img" src="" alt="" />
        <div class="type-result-photo-ph" id="type-result-photo-ph" aria-hidden="true">
          <img src="<?php echo MAYA_URI; ?>/img/type01.png" alt="" style="width:100%; height:100%; object-fit:cover; border-radius:inherit;"/>
        </div>
      </div>
      <span class="type-result-tag" id="type-result-tag">type </span>
      <h4 class="type-result-ttl" id="type-result-ttl">
      </h4>
      <p class="type-result-desc" id="type-result-desc">
      </p>
      <div class="type-result-meta">
        <span class="type-result-meta-l">おすすめプラン </span>
        <span class="type-result-plan" id="type-result-plan"></span>
      </div>
      <!-- セット割バナー -->
      <div class="type-set-banner">
        <div class="type-set-banner-inner">
          <div class="type-set-banner-head">
            <p class="type-set-banner-ttl">セットで一緒に依頼するとお得！</p>
            <p class="type-set-banner-sub" id="type-result-set-desc"></p>
          </div>
          <div class="type-set-banner-body">
            <div class="type-set-banner-col">
              <span class="type-set-banner-before-lbl">通常</span>
              <span class="type-set-banner-before-val" id="type-result-normal-price"></span>
            </div>
            <span class="type-set-banner-arrow">→</span>
            <div class="type-set-banner-col">
              <span class="type-set-banner-after-lbl">セット価格</span>
              <span class="type-set-banner-after-val" id="type-result-set-price"></span>
              <span class="type-set-banner-saving" id="type-result-saving"></span>
            </div>
          </div>
          <!-- 右上丸バッジ -->
          <div class="type-set-circle-badge" id="type-set-circle-badge">
            <span class="tsb-off">10%</span>
            <span class="tsb-sub">OFF</span>
          </div>
        </div>
      </div>
      <div class="type-result-cta">
        <a class="btn berry" href="/contact/" id="type-result-contact">このタイプで相談してみる → </a>
        <a class="btn" href="#plan-compare">プランを見る </a>
      </div>
    </div>
  </section>
  <div class="tcb-center">
    <div class="tcb-pill-wrap">
      <div class="tcb-pill-badge-group">
        <span class="tcb-pill-campaign">＼ キャンペーン中 ／ </span>
        <span class="tcb-pill-badge">簡単1分で入力完了 </span>
      </div>
      <a class="tcb-pill" href="/contact/">
      <span class="tcb-pill-text">お問い合わせはこちら </span>
      <span class="tcb-pill-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
        <path d="M5 12h14M13 6l6 6-6 6"/>
      </svg>
      </span>
      </a>
    </div>
  </div>
  <!-- FLOW -->
  <div id="flow" class="sect-title sect-title-centered" style="margin-top: 80px;">
    <div class="en kicker-en">
      — how we work —
    </div>
    <h2>
      <span class="scrib">制作の流れ </span>
    </h2>
  </div>
  <div class="flowr">
    <!-- カードをつなぐ流れる点線の道（PC：横に蛇行／SP：縦に蛇行） -->
    <svg class="flowr-road" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
      <path class="flowr-road-pc" d="M16 22 C 30 40, 40 40, 50 26 S 70 10, 84 22 C 100 40, 100 60, 84 74 S 60 90, 50 76 S 25 60, 16 76"/>
      <path class="flowr-road-sp" d="M30 2 C 95 6, 95 14, 70 18 S 5 26, 30 34 S 95 42, 70 50 S 5 58, 30 66 S 95 74, 70 82 S 5 90, 30 98"/>
    </svg>
    <div class="flv-step">
      <span class="flv-plant" aria-hidden="true"><svg viewBox="0 0 90 100"><ellipse cx="45" cy="92" rx="14" ry="5" fill="#c9b18f"/><ellipse cx="45" cy="88" rx="5" ry="3.5" fill="#8a6b45"/></svg></span>
      <div class="flv-l">
        <span class="flv-num">01 </span>
        <span class="flv-en">contact</span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          お問い合わせ
        </div>
        <p>
          お問い合わせフォーム、またはSNSのDMからお気軽にご連絡ください。 <br>2営業日以内にお返事します。
        </p>
      </div>
    </div>
    <div class="flv-step">
      <span class="flv-plant" aria-hidden="true"><svg viewBox="0 0 90 100"><path d="M45 96V74" stroke="#6aa15a" stroke-width="3" stroke-linecap="round"/><path d="M45 78c-8-2-12-8-12-14 8 0 12 6 12 14zM45 78c8-2 12-8 12-14-8 0-12 6-12 14z" fill="#8cc27a"/></svg></span>
      <div class="flv-l">
        <span class="flv-num">02 </span>
        <span class="flv-en">hearing</span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          ヒアリング
        </div>
        <p>
          オンラインでお話を伺います。 <br>やりたいこと・雰囲気・参考イメージなど、ざっくりで大丈夫です。
        </p>
      </div>
    </div>
    <div class="flv-step">
      <span class="flv-plant" aria-hidden="true"><svg viewBox="0 0 90 100"><path d="M45 96V58" stroke="#6aa15a" stroke-width="3" stroke-linecap="round"/><path d="M45 80c-14-2-20-12-20-22 14 0 20 10 20 22zM45 70c14-2 20-12 20-22-14 0-20 10-20 22z" fill="#7bb569"/></svg></span>
      <div class="flv-l">
        <span class="flv-num">03 </span>
        <span class="flv-en">estimate</span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          お見積・契約
        </div>
        <p>
          内容に合わせてお見積もりとスケジュールをご提案します。問題なければご契約へ。
        </p>
      </div>
    </div>
    <div class="flv-step">
      <span class="flv-plant" aria-hidden="true"><svg viewBox="0 0 90 100"><path d="M45 96V48" stroke="#6aa15a" stroke-width="3" stroke-linecap="round"/><path d="M45 84c-14-2-20-12-20-22 14 0 20 10 20 22zM45 76c14-2 20-12 20-22-14 0-20 10-20 22z" fill="#7bb569"/><g fill="#fff" stroke="#f6cfda" stroke-width="1.5"><circle cx="45" cy="30" r="7"/><circle cx="56" cy="38" r="7"/><circle cx="52" cy="50" r="7"/><circle cx="38" cy="50" r="7"/><circle cx="34" cy="38" r="7"/></g><circle cx="45" cy="41" r="5" fill="#ffe59a"/></svg></span>
      <div class="flv-l">
        <span class="flv-num">04 </span>
        <span class="flv-en">design</span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          制作
        </div>
        <p>
          進捗を共有しながら一緒につくりあげます。
        </p>
      </div>
    </div>
    <div class="flv-step">
      <span class="flv-plant" aria-hidden="true"><svg viewBox="0 0 90 100"><path d="M45 96V52" stroke="#6aa15a" stroke-width="3" stroke-linecap="round"/><path d="M45 86c-14-2-20-12-20-22 14 0 20 10 20 22zM45 78c14-2 20-12 20-22-14 0-20 10-20 22z" fill="#7bb569"/><path d="M45 56c-9 0-14-8-14-16 0-6 6-8 14-8s14 2 14 8c0 8-5 16-14 16z" fill="#cfe6b8"/><path d="M45 34l-6-6 6 2 6-2z" fill="#6aa15a"/></svg></span>
      <div class="flv-l">
        <span class="flv-num">05 </span>
        <span class="flv-en">check</span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          確認・修正
        </div>
        <p>
          プランの回数まで修正対応します。仕上がりに納得していただけるまで丁寧に。
        </p>
      </div>
    </div>
    <div class="flv-step">
      <span class="flv-plant" aria-hidden="true"><svg viewBox="0 0 90 100"><path d="M45 96V58" stroke="#6aa15a" stroke-width="3" stroke-linecap="round"/><path d="M45 88c-14-2-20-12-20-22 14 0 20 10 20 22zM45 80c14-2 20-12 20-22-14 0-20 10-20 22z" fill="#7bb569"/><path d="M45 62c-12 0-19-11-19-21 0-8 7-11 19-11s19 3 19 11c0 10-7 21-19 21z" fill="#d04a6c"/><g fill="#f6cfda"><circle cx="38" cy="40" r="1.6"/><circle cx="52" cy="40" r="1.6"/><circle cx="45" cy="48" r="1.6"/><circle cx="38" cy="54" r="1.6"/><circle cx="52" cy="54" r="1.6"/></g><path d="M45 32l-8-7 8 3 8-3z" fill="#6aa15a"/><text x="66" y="24" font-family="Caveat, cursive" font-size="16" fill="#e5b94a">★</text></svg></span>
      <div class="flv-l">
        <span class="flv-num">06 </span>
        <span class="flv-en">delivery</span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          納品
        </div>
        <p>
          データ一式をお渡しして完了。納品後30日間はサポートも対応します。
        </p>
      </div>
    </div>
  </div>
  <!-- WEB QUIZ -->
  <div id="quiz" class="sect-title sect-title-centered" style="margin-top: 140px;">
    <div class="en kicker-en">
      — web quiz —
    </div>
    <h2>
      <span class="scrib">今更聞けない...Webの知識 </span>
    </h2>
    <p class="muted sm" style="max-width:560px; margin: 30px auto 0;">
      ウェブ制作でよく聞く言葉、ぜんぶ知ってますか？ <br/>
      2択クイズ形式で、正しい説明を選んでみてください
    </p>
  </div>
  <div class="quiz-wrap" style="max-width: 760px; margin: 30px auto 0;">
    <div class="webk-tabs" id="webk-tabs" role="tablist">
      <button class="webk-tab on" type="button" data-wkv="faq" role="tab">
      <span class="webk-tab-en">read </span>
      <span class="webk-tab-ja">一覧で見る </span>
      </button>
      <button class="webk-tab" type="button" data-wkv="quiz" role="tab">
      <span class="webk-tab-en">quiz </span>
      <span class="webk-tab-ja">クイズで知る </span>
      </button>
    </div>
    <!-- FAQ-STYLE VIEW -->
    <div class="webk-view" data-wkv="faq">
      <div class="webk-list" id="webk-list">
      </div>
      <span id="webk-count" hidden></span>
    </div>
    <!-- QUIZ VIEW -->
    <div class="webk-view" data-wkv="quiz" hidden>
      <div class="quiz-gauge" id="quiz-gauge">
        <div class="quiz-gauge-info">
          <div class="quiz-gauge-l">
            <span class="quiz-gauge-en">SCORE </span>
            <strong><span id="quiz-correct">0 </span>/ <span id="quiz-total">0 </span></strong>
          </div>
          <div class="quiz-gauge-msg" id="quiz-msg">
            クイズに挑戦してみよう！
          </div>
        </div>
        <div class="quiz-gauge-track">
          <div class="quiz-gauge-fill" id="quiz-fill">
          </div>
        </div>
      </div>
      <div class="quiz-list" id="quiz-list">
      </div>
      <div class="quiz-actions" style="text-align:center; margin-top: 20px;">
        <button class="btn" id="quiz-reset" type="button">↻ もう一度 </button>
      </div>
    </div>
  </div>
  <div style="text-align:center; margin-top:80px;">
    <a class="btn berry lg" href="/contact/">お問い合わせはこちら → </a>
  </div>
<!-- クイズクーポンポップアップ -->
<div class="coupon-overlay" id="coupon-overlay" hidden>
  <div class="coupon-modal">
    <div class="coupon-modal-head">
      <p class="coupon-modal-kicker">— quiz clear —</p>
      <h3 class="coupon-modal-ttl">全問正解！</h3>
      <p class="coupon-modal-sub">クーポンコードをゲットしました</p>
    </div>
    <div class="coupon-code-wrap">
      <span class="coupon-code-label">クーポンコード</span>
      <div class="coupon-code">ONIGIRI</div>
      <p class="coupon-code-desc">お問い合わせフォームの<br>「クーポンコード」欄に入力すると<br><strong>¥1,000 OFF</strong> になります！</p>
      <p class="coupon-code-note">※ 1回限り有効 ／ 初回ご依頼時のみ適用</p>
    </div>
    <div class="coupon-modal-btns">
      <a class="btn berry lg" id="coupon-use-now" href="/contact/">今すぐ使う →</a>
      <button class="btn" id="coupon-close" type="button">あとで使う</button>
    </div>
  </div>
</div>
<a class="coupon-float" id="coupon-float" href="/contact/" hidden>
  <span class="coupon-float-top">coupon</span>
  <span class="coupon-float-code">ONIGIRI</span>
  <span class="coupon-float-label">クーポン有効中</span>
</a>
</main>
<script src="<?php echo MAYA_URI; ?>/js/app.js?v=2">
  </script>
  <script src="<?php echo MAYA_URI; ?>/js/image-slot.js">
    </script>
    <script>
      (function () {
const list = document.getElementById('quiz-list');
if (!list) return;
const fill = document.getElementById('quiz-fill');
const correctEl= document.getElementById('quiz-correct');
const totalEl = document.getElementById('quiz-total');
const msgEl = document.getElementById('quiz-msg');
const resetBtn = document.getElementById('quiz-reset');

const QUIZ = [
{
q:`サーバーとは何を指す？`,
faq_q:`サーバーとドメインの違いは？`,
answer_html:`ホームページのデータを置く
      <mark class="webk-mark">
      「土地」のような存在
      </mark>
      で、データを保管しておく場所のこと。`,
explain_html:`サーバーは
      <mark class="webk-mark m-grape">
      「土地」
      </mark>
      、ドメインは
      <mark class="webk-mark m-grape">
      「住所」
      </mark>
      のイメージ。サーバー上にホームページのデータが保管されています。`,
choices: [
`ホームページのデータを置く「土地」のような存在で、データを保管しておく場所のこと。`,
`インターネット上の住所を表すもので、ブラウザに表示するURLそのもののこと。`,
],
correct: 0,
hint:`土地と建物、住所…で考えるとイメージしやすいかも？`,
explain:`正解！ サーバーは「土地」、ドメインは「住所」のイメージ。サーバー上にホームページのデータが保管されています。`,
wrong:`惜しい URLや住所にあたるのは「ドメイン」。サーバーはホームページのデータを置いておく「土地」のような存在です。`,
},
{
q:`SEOとは次のどれ？`,
faq_q:`SEOとは？`,
answer_html:`
      <mark class="webk-mark">
      Search Engine Optimization（検索エンジン最適化）
      </mark>
      の略で、検索結果で上位表示されるための工夫のこと。`,
explain_html:`Googleなどの検索で
      <mark class="webk-mark m-grape">
      上位に表示されるよう工夫すること
      </mark>
      を指します。すぐ効果は出ず、
      <mark class="webk-mark m-grape">
      長く育てる感覚
      </mark>
      で取り組むのがおすすめ。`,
choices: [
`Search Engine Optimization（検索エンジン最適化）の略で、検索結果で上位表示されるための工夫のこと。`,
`Site Edit Operation（サイト編集作業）の略で、ホームページを定期的に更新する運用作業のこと。`,
],
correct: 0,
hint:`S = Search、E = Engine、O = …？`,
explain:`正解！ Googleなどの検索で上位に表示されるよう工夫することを指します。すぐ効果は出ず、長く育てる感覚で取り組むのがおすすめ。`,
wrong:`不正解 SEOは"Search Engine Optimization（検索エンジン最適化）" の略。検索結果で上位に表示されるよう工夫することを指します。`,
},
{
q:`レスポンシブデザインとは？`,
faq_q:`レスポンシブデザインって何？`,
answer_html:`
      <mark class="webk-mark">
      スマホ・タブレット・PCなど画面サイズに合わせて
      </mark>
      、1つのサイトの表示が変わるように作る技術のこと。`,
explain_html:`1つのサイトを
      <mark class="webk-mark m-grape">
      画面サイズに合わせて見え方が変わる
      </mark>
      ように作る技術です。スマホ・タブレット・PC で別々のサイトを作る必要がなくなります。`,
choices: [
`ユーザーごとに違うデザインを送り分けて、見る人に応じて自動でレイアウトを切り替える技術のこと。`,
`スマホ・タブレット・PCなど画面サイズに合わせて、1つのサイトの表示が変わるように作る技術のこと。`,
],
correct: 1,
hint:`「レスポンシブ」は"response（反応する）" から来ています。何に反応する？`,
explain:`正解！ 1つのサイトを画面サイズに合わせて見え方が変わるように作る技術です。スマホ・タブレット・PC で別々のサイトを作る必要がなくなります。`,
wrong:`不正解 ユーザーごとではなく、「画面サイズ」に応じて表示が変わるように作る技術です。スマホ・タブレット・PCを1つのサイトで対応できます。`,
},
{
q:`CMS とはどれを指す言葉？`,
faq_q:`CMSって何？ WordPressとは違うの？`,
answer_html:`
      <mark class="webk-mark">
      Contents Management System
      </mark>
      の総称で、
      <mark class="webk-mark">
      WordPress・microCMS・Shopify
      </mark>
      などが該当します。`,
explain_html:`CMS は Contents Management System の
      <mark class="webk-mark m-grape">
      総称
      </mark>
      で、WordPressはその一つ。他にも microCMS、Shopify、movable type など色々あります。`,
choices: [
`WordPress のことだけを指す固有名詞で、特定のソフトウェアの製品名のこと。`,
`Contents Management System の総称で、WordPress・microCMS・Shopify などが該当する。`,
],
correct: 1,
hint:`CMS は"Contents Management System" の総称。WordPress 以外にどんなものがある？`,
explain:`正解！ CMS は"Contents Management System" の総称で、WordPressはその一つ。他にも microCMS、Shopify、movable type など色々あります。`,
wrong:`不正解 CMSは"Contents Management System" の総称で、WordPressはそのうちの1つ。他にもmicroCMS・Shopifyなどたくさんあります。`,
},
{
q:`https のサイトの特徴は？`,
faq_q:`https と http の違いは？`,
answer_html:`通信内容が
      <mark class="webk-mark">
      暗号化
      </mark>
      されていて、フォーム送信などのやり取りを
      <mark class="webk-mark">
      安全に行う
      </mark>
      ことができる。`,
explain_html:`"s" は
      <mark class="webk-mark m-grape">
      Secure の"s"
      </mark>
      。SSLで通信が暗号化され、フォーム送信なども安全に行えます。今はSSL対応は
      <mark class="webk-mark m-grape">
      必須
      </mark>
      。`,
choices: [
`通信内容が暗号化されていて、フォーム送信などのやり取りを安全に行うことができる。`,
`通信が高速になる規格で、http のサイトよりページ表示スピードが必ず速くなる。`,
],
correct: 0,
hint:`http と https の違いは、最後の"s"。s は Secure の s です。`,
explain:`正解！"s" は Secure の"s"。SSLで通信が暗号化され、フォーム送信なども安全に行えます。今はSSL対応は必須。`,
wrong:`不正解 httpsの"s"は Secure の"s"。通信内容が暗号化されてやり取りが安全になる仕組みで、表示速度の話ではありません。`,
},
{
q:`デザイナーとコーダーの関係は？`,
faq_q:`デザイナーとコーダーって何が違うの？`,
answer_html:`
      <mark class="webk-mark">
      見た目を作る仕事
      </mark>
      と
      <mark class="webk-mark">
      動かす仕事
      </mark>
      で別の技能。別の人が担当することも多い。`,
explain_html:`デザインとコーディングは
      <mark class="webk-mark m-grape">
      別の技能
      </mark>
      なので、別の人が担当することも多いです。VeryBerryは
      <mark class="webk-mark m-grape">
      両方ワンストップ
      </mark>
      で対応できます。`,
choices: [
`同じ人が必ず両方を兼任する仕事で、デザインとコーディングを分業することはまずない。`,
`見た目を作る仕事と動かす仕事で別の技能。別の人が担当することも多い。`,
],
correct: 1,
hint:`見た目を作る仕事と、それを動かす仕事…別の技能だと思いませんか？`,
explain:`正解！ デザインとコーディングは別の技能なので、別の人が担当することも多いです。VeryBerryは両方ワンストップで対応できます`,
wrong:`不正解 デザインとコーディングは別の技能で、分業されることも多いです。VeryBerryは両方ワンストップで対応できます`,
},
{
q:`ホームページを公開した後について正しいのは？`,
faq_q:`ホームページは作って公開すれば、自動で検索に出てくるの？`,
answer_html:`
      <mark class="webk-mark">
      公開しただけでは上位表示されず
      </mark>
      、
      <mark class="webk-mark">
      SEO対策・コンテンツ追加・被リンク
      </mark>
      など地道に育てる作業が必要。`,
explain_html:`公開しただけでは上位表示されません。SEO対策・コンテンツ追加・被リンクなど、
      <mark class="webk-mark m-grape">
      地道な育てる作業
      </mark>
      が必要です。`,
choices: [
`公開しただけでは上位表示されず、SEO対策・コンテンツ追加・被リンクなど地道な育てる作業が必要。`,
`公開すれば自動的に検索で上位表示されるので、その後は特に対策をしなくても大丈夫。`,
],
correct: 0,
hint:`世界中に何億サイトあると思いますか？`,
explain:`正解！ 公開しただけでは上位表示されません。SEO対策・コンテンツ追加・被リンクなど、地道な育てる作業が必要です。`,
wrong:`不正解 公開しただけでは検索で上位に出てきません。SEO・コンテンツ追加・被リンクなど、地道な育てる作業が必要です。`,
},
{
q:`スマホからのウェブ閲覧の割合は？`,
faq_q:`スマホからの閲覧って、今どれくらい？`,
answer_html:`
      <mark class="webk-mark">
      全体の半分以上
      </mark>
      を占めていて、一般的なサイトでは
      <mark class="webk-mark">
      7〜8割
      </mark>
      になることも多い。`,
explain_html:`一般的なサイトはスマホからの閲覧が7〜8割。
      <mark class="webk-mark m-grape">
      スマホ優先のデザイン（モバイルファースト）
      </mark>
      が今の主流です。`,
choices: [
`PCからの閲覧が圧倒的に多く、スマホは全体の1〜2割程度にとどまっている。`,
`全体の半分以上を占めていて、一般的なサイトでは7〜8割になることも多い。`,
],
correct: 1,
hint:`いま、あなたが何かのページを見るときの端末は？`,
explain:`正解！ サイト種類にもよりますが、一般的なサイトはスマホからの閲覧が7〜8割。スマホ優先のデザイン（モバイルファースト）が今の主流です。`,
wrong:`不正解 今やスマホからの閲覧が主流。一般的なサイトでは7〜8割を占めることも多く、モバイルファーストでのデザインが基本です。`,
},
];

function renderFaqView() {
const wrap = document.getElementById('webk-list');
if (!wrap) return;
document.getElementById('webk-count').textContent = QUIZ.length;
wrap.innerHTML = QUIZ.map((q, i) => {
const n = String(i + 1).padStart(2,'0');
return `
      <details class="webk-item">
      <summary>
      <span class="webk-tag">Q.${n}</span>
<span class="webk-q">${q.faq_q || q.q}</span>
<span class="webk-toggle">＋</span>
      </summary>
      <div class="webk-a">
      <p>
      <span class="webk-a-label">こたえ</span>${q.answer_html || q.choices[q.correct]}
      </p>
      <p style="margin-top:10px;">
      ${q.explain_html || q.explain.replace(/^正解！\s*/,'')}
      </p>
      </div>
      </details>
      `;
}).join('');
}

const tabs = document.getElementById('webk-tabs');
if (tabs) {
tabs.addEventListener('click', e => {
const b = e.target.closest('.webk-tab');
if (!b) return;
const view = b.dataset.wkv;
tabs.querySelectorAll('.webk-tab').forEach(x => x.classList.toggle('on', x === b));
document.querySelectorAll('.webk-view').forEach(v => { v.hidden = v.dataset.wkv !== view; });
if (view ==='faq') renderFaqView();
});
}
renderFaqView();

let correctCount = 0;
let answeredCount = 0;
const TOTAL = QUIZ.length;
totalEl.textContent = TOTAL;

function paintGauge() {
const pct = answeredCount > 0 ? (correctCount / TOTAL) * 100 : 0;
fill.style.width = pct +'%';
correctEl.textContent = correctCount;
const ratio = correctCount / TOTAL;
if (answeredCount === 0) msgEl.textContent ='クイズに挑戦してみよう！';
else if (answeredCount
      < TOTAL) msgEl.textContent = `あと ${TOTAL - answeredCount} 問！`;
else if (correctCount === TOTAL) msgEl.textContent =' 全問正解！ Web博士です';
else if (correctCount >= TOTAL * 0.7) msgEl.textContent ='お見事！ よく知ってますね';
else if (correctCount >= TOTAL * 0.4) msgEl.textContent ='なかなかいい感じです';
else msgEl.textContent ='これから一緒に覚えていきましょう';
}

function celebrate(el) {
const r = el.getBoundingClientRect();
const cx = r.left + r.width / 2;
const cy = r.top + r.height / 2;
for (let i = 0; i
      < 12; i++) {
const s = document.createElement('span');
s.className ='quiz-spark';
const ang = Math.random() * Math.PI * 2;
const dist = 30 + Math.random() * 80;
s.style.left = cx +'px';
s.style.top = cy +'px';
s.style.setProperty('--dx', (Math.cos(ang) * dist) +'px');
s.style.setProperty('--dy', (Math.sin(ang) * dist) +'px');
s.style.background = ['#d04a6c','#6b3aa0','#fff'][i % 3];
document.body.appendChild(s);
setTimeout(() =>
      s.remove(), 900);
}
}

function render() {
list.innerHTML = QUIZ.map((q, i) => `
      <div class="quiz-item${i === 0 ?' current' :''}" data-i="${i}"${i === 0 ?'' :' hidden'}>
      <div class="quiz-q">
      <span class="quiz-tag">Q.${String(i + 1).padStart(2,'0')}</span>
<span class="quiz-qt">${q.q}</span>
      </div>
      <div class="quiz-hint" hidden>
      <span class="quiz-hint-tag">HINT</span>
      <p>
      ${q.hint}
      </p>
      </div>
      <button class="quiz-hint-btn" type="button"> ヒントを見る</button>
      <div class="quiz-choices">
      <button class="quiz-c" data-idx="0"><span class="quiz-c-label">A</span><span class="quiz-c-body">${q.choices[0]}</span></button>
<button class="quiz-c" data-idx="1"><span class="quiz-c-label">B</span><span class="quiz-c-body">${q.choices[1]}</span></button>
      </div>
      <div class="quiz-feedback" hidden>
      </div>
      <button class="quiz-next" type="button" hidden>次の問題へ →</button>
      </div>
      `).join('');

list.querySelectorAll('.quiz-item').forEach((item, i) => {
const q = QUIZ[i];
const buttons = item.querySelectorAll('.quiz-c');
const fb = item.querySelector('.quiz-feedback');
const nextBtn = item.querySelector('.quiz-next');
const hintBox = item.querySelector('.quiz-hint');
const hintBtn = item.querySelector('.quiz-hint-btn');

hintBtn.addEventListener('click', () => { hintBox.hidden = false; hintBtn.hidden = true; });

buttons.forEach(b => {
b.addEventListener('click', () => {
if (item.classList.contains('answered')) return;
item.classList.add('answered');
const userIdx = parseInt(b.dataset.idx, 10);
const isCorrect = userIdx === q.correct;
buttons.forEach(x => {
const v = parseInt(x.dataset.idx, 10);
x.classList.add('locked');
if (v === q.correct) x.classList.add('correct-answer');
if (x === b && !isCorrect) x.classList.add('wrong-pick');
});
fb.hidden = false;
fb.innerHTML = `
      <div class="quiz-mark ${isCorrect ?'correct' :'wrong'}">
      ${isCorrect ?'○' :'×'}
      </div>
      <p>
      ${isCorrect ? q.explain : (q.wrong || q.explain)}
      </p>
      `;
hintBtn.hidden = true;
answeredCount++;
if (isCorrect) { correctCount++; celebrate(b); }
paintGauge();
if (answeredCount === TOTAL && correctCount === TOTAL) {
setTimeout(() => runCelebration('mix'), 500);
setTimeout(() => showCouponPopup(), 800);
}
if (i
      < QUIZ.length - 1) {
nextBtn.hidden = false;
} else {
const done = document.createElement('div');
done.className ='quiz-done';
done.innerHTML =`<p>すべての問題に答えました！</p>`;
item.appendChild(done);
}
});
});

nextBtn.addEventListener('click', () => {
item.classList.remove('current');
item.hidden = true;
const next = list.querySelector(`.quiz-item[data-i="${i + 1}"]`);
if (next) { next.hidden = false; next.classList.add('current'); }
nextBtn.hidden = true;
});
});
}

resetBtn.addEventListener('click', () => { correctCount = 0; answeredCount = 0; render(); paintGauge(); });

const PF_BERRY_IMGS = (window.BB && window.BB.BERRY_IMGS) || ['<?php echo MAYA_URI; ?>/img/3.webp','<?php echo MAYA_URI; ?>/img/4.webp','<?php echo MAYA_URI; ?>/img/5.webp','<?php echo MAYA_URI; ?>/img/7.webp'];
function fxLayer() {
let l = document.getElementById('perfect-fx-layer');
if (!l) { l = document.createElement('div'); l.id ='perfect-fx-layer'; document.body.appendChild(l); }
return l;
}
function spawn(parent, el, life) { parent.appendChild(el); setTimeout(() => el.remove(), life); }
const FX = {
mix() { this.banner(); this.hearts(); },
banner() {
const layer = fxLayer();
const flash = document.createElement('div'); flash.className ='pf-flash'; spawn(layer, flash, 700);
const banner = document.createElement('div'); banner.className ='pf-banner';
banner.innerHTML ='<span class="pf-banner-en">PERFECT!</span><span class="pf-banner-ja">全問正解</span>';
spawn(layer, banner, 2800);
const ring = document.createElement('div'); ring.className ='pf-ring'; layer.appendChild(ring);
for (let i = 0; i
      < 18; i++) {
const s = document.createElement('span');
const ang = (i / 18) * Math.PI * 2;
s.className ='pf-spark';
s.style.setProperty('--dx', `${Math.cos(ang) * 220}px`);
s.style.setProperty('--dy', `${Math.sin(ang) * 220}px`);
s.style.background = ['#d04a6c','#6b3aa0','#ffec80','#ffffff'][i % 4];
ring.appendChild(s);
}
setTimeout(() =>
      ring.remove(), 1500);
},
hearts() {
const layer = fxLayer();
const hearts = ['','','','',''];
for (let i = 0; i
      < 32; i++) {
const useBerry = Math.random() < .45;
const el = useBerry ? document.createElement('img') : document.createElement('span');
if (useBerry) { el.src = PF_BERRY_IMGS[Math.floor(Math.random() * PF_BERRY_IMGS.length)]; el.className ='pf-berry pf-confetti'; }
else { el.textContent = hearts[Math.floor(Math.random() * hearts.length)]; el.className ='pf-emoji pf-confetti'; }
const sz = 24 + Math.random() * 32;
el.style.cssText = `left:${Math.random() * 100}%; width:${sz}px; height:${sz}px; font-size:${sz}px; --dur:${3.5 + Math.random() * 2}s; --delay:${Math.random() * 1.6}s; --rotEnd:${(Math.random() - .5) * 540}deg; --drift:${(Math.random() - .5) * 200}px;`;
spawn(layer, el, 6000);
}
},
};
function runCelebration(kind) {
const layer = document.getElementById('perfect-fx-layer');
if (layer) layer.innerHTML ='';
(FX[kind] || FX.mix)();
}

function showCouponPopup() {
  const overlay = document.getElementById('coupon-overlay');
  if (!overlay) return;
  overlay.removeAttribute('hidden');
  requestAnimationFrame(() => overlay.classList.add('open'));

  function saveAndClose() {
    sessionStorage.setItem('coupon_code', 'ONIGIRI');
    overlay.classList.remove('open');
    setTimeout(() => overlay.setAttribute('hidden', ''), 300);
  }

  document.getElementById('coupon-use-now').addEventListener('click', () => {
    sessionStorage.setItem('coupon_code', 'ONIGIRI');
  }, { once: true });

  document.getElementById('coupon-close').addEventListener('click', () => {
    saveAndClose();
    showCouponFloat();
  }, { once: true });

  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      saveAndClose();
      showCouponFloat();
    }
  }, { once: true });
}

function showCouponFloat() {
  const el = document.getElementById('coupon-float');
  if (el) el.removeAttribute('hidden');
}

(function () {
  if (sessionStorage.getItem('coupon_code')) showCouponFloat();
})();

render();
paintGauge();

const TYPE_INFO = {
  shop: {
    ttl: 'お店を開く方',
    desc: 'カフェ、雑貨屋、小さなサロン—「足を運んでいただく」ことがゴールになるお店には、世界観とアクセス情報、メニューの見やすさが鍵。スマホ優先で設計し、CMSでメニューも自分で更新できるようにします。',
    plan: 'STANDARD（¥260,000〜）',
    set_label: 'おすすめセット',
    set_desc: 'STANDARD ＋ ブログ運用スタンダード（¥5,000/月）',
    set_badge: '10% OFF → ¥26,000お得！',
    normal_price: '¥260,000〜',
    set_price: '¥234,000〜',
    saving: '通常より¥26,000お得！',
    badge_label: '10%',
    badge_sub: 'OFF',
    hearing: { kind: ['Webサイト'], purpose: 'お問い合わせ・集客を増やしたい', target: ['近隣の個人・一般のお客様'], budget: '30〜50万円' },
    img: '<?php echo MAYA_URI; ?>/img/type03.jpg'
  },
  creator: {
    ttl: '個人作家・デザイナー',
    desc: 'やっぱり主役は「作品」。言葉よりも画面で語るシンプルな構造で、作品の色やディテールが主役になるよう設計します。見せたい作品があるならBASIC、詳しい解説やテキストも入れるならSTANDARDも可。',
    plan: 'BASIC（¥150,000〜）',
    set_label: 'おすすめセット',
    set_desc: 'BASIC ＋ バナー制作（¥5,000〜/枚）',
    set_badge: '10% OFF → バナー代お得！',
    normal_price: '¥150,000〜',
    set_price: '¥135,000〜',
    saving: '通常より¥15,000お得！',
    badge_label: '10%',
    badge_sub: 'OFF',
    hearing: { kind: ['Webサイト'], purpose: 'SNSやチラシと連動させたい', target: ['SNSのフォロワー・ファン'], budget: '15〜30万円' },
    img: '<?php echo MAYA_URI; ?>/img/type01.png'
  },
  event: {
    ttl: 'イベント・キャンペーン',
    desc: '期間限定で「ここだけ伝える」タイプ。多ページより1枚のLPで見せるのが効果的です。同時にバナーやSNS素材もひとつのトーンで作り、広告と同時進行で進めるのがおすすめ。',
    plan: 'BASIC（¥150,000〜）',
    set_label: 'おすすめセット',
    set_desc: 'BASIC ＋ バナー3枚以上セット',
    set_badge: 'バナー3枚以上で10% OFF！',
    normal_price: '¥150,000〜',
    set_price: '¥135,000〜',
    saving: '通常より¥15,000お得！',
    badge_label: '10%',
    badge_sub: 'OFF',
    hearing: { kind: ['LP（ランディングページ）', 'バナー'], purpose: 'お問い合わせ・集客を増やしたい', target: ['近隣の個人・一般のお客様'], budget: '15〜30万円' },
    img: '<?php echo MAYA_URI; ?>/img/type07.png'
  },
  renew: {
    ttl: 'リニューアル',
    desc: '既にサイトがある方の「だいぶ古くなってきた」「使いづらい」を解決します。現状分析から始めて、誠実に設計し直し、コンテンツも一緒に見直していきます。応募ページやブログ追加などもお任せ下さい。',
    plan: 'PREMIUM（¥450,000〜）',
    set_label: 'おすすめセット',
    set_desc: 'PREMIUM ＋ SEOプロブログ 初月半額！',
    set_badge: '初月SEOプロ半額 → ¥9,000お得！',
    normal_price: '¥18,000〜/月',
    set_price: '¥9,000〜/月',
    saving: '初月¥9,000お得！',
    badge_label: '初月',
    badge_sub: '半額',
    hearing: { kind: ['Webサイト'], purpose: '既存サイトをリニューアルしたい', target: ['まだ決まっていない'], budget: '50万円〜' },
    img: '<?php echo MAYA_URI; ?>/img/type06.png'
  },
};
const typePanel = document.getElementById('type-result');
const typeBtns = document.querySelectorAll('.type-card');
if (typePanel && typeBtns.length) {
function showType(key) {
  const info = TYPE_INFO[key];
  if (!info) return;

  document.getElementById('type-result-tag').textContent = key.toUpperCase();
  document.getElementById('type-result-ttl').textContent = info.ttl;
  document.getElementById('type-result-desc').textContent = info.desc;
  document.getElementById('type-result-plan').textContent = info.plan;
  const contactBtn = document.getElementById('type-result-contact');
  contactBtn.href = '/contact/';
  contactBtn.onclick = function (e) {
    e.preventDefault();
    sessionStorage.setItem('type_consult', JSON.stringify({
      type:      key,
      ttl:       info.ttl,
      plan:      info.plan,
      set_desc:  info.set_desc,
      set_price: info.set_price,
    }));
    if (info.hearing) {
      sessionStorage.setItem('pre_hearing', JSON.stringify(info.hearing));
    }
    location.href = '/contact/';
  };

  const setDescEl     = document.getElementById('type-result-set-desc');
  const normalPriceEl = document.getElementById('type-result-normal-price');
  const setPriceEl    = document.getElementById('type-result-set-price');
  const savingEl      = document.getElementById('type-result-saving');
  if (setDescEl)     setDescEl.textContent     = info.set_desc;
  if (normalPriceEl) normalPriceEl.textContent = info.normal_price;
  if (setPriceEl)    setPriceEl.textContent    = info.set_price;
  if (savingEl)      savingEl.textContent      = info.saving;

  const badgeOffEl  = document.querySelector('.tsb-off');
  const badgeSubEl  = document.querySelector('.tsb-sub');
  if (badgeOffEl) badgeOffEl.textContent = info.badge_label || '10%';
  if (badgeSubEl) badgeSubEl.textContent = info.badge_sub   || 'OFF';
  const badgeEl = document.getElementById('type-set-circle-badge');
  if (badgeEl) badgeEl.classList.toggle('tsb-reverse', key === 'renew');

  const afterLblEl  = document.querySelector('.type-set-banner-after-lbl');
  const beforeLblEl = document.querySelector('.type-set-banner-before-lbl');
  if (afterLblEl)  afterLblEl.textContent  = key === 'renew' ? 'SEOプロブログ 初月' : 'セット価格';
  if (beforeLblEl) beforeLblEl.textContent = '通常';

  const imgEl = document.getElementById('type-result-img');
  const phEl  = document.getElementById('type-result-photo-ph');
  imgEl.src = info.img;
  imgEl.alt = info.ttl;
  imgEl.style.display = 'none';
  imgEl.onload  = () => { imgEl.style.display = 'block'; phEl.style.display = 'none'; };
  imgEl.onerror = () => { imgEl.style.display = 'none';  phEl.style.display = 'flex'; };

  typePanel.hidden = false;
  requestAnimationFrame(() => typePanel.classList.add('open'));
  typeBtns.forEach(b => b.classList.toggle('on', b.dataset.type === key));
  typePanel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}
typeBtns.forEach(b => b.addEventListener('click', () => showType(b.dataset.type)));
document.getElementById('type-result-close').addEventListener('click', () => {
typePanel.classList.remove('open');
setTimeout(() => { typePanel.hidden = true; }, 250);
typeBtns.forEach(b => b.classList.remove('on'));
});

}
})();
      </script>
      <script>
        (function () {
const sw = document.getElementById('opt-plan-tabs');
if (!sw) return;
const allViews = document.querySelectorAll('.opt-plan-view');
sw.addEventListener('click', (e) => {
const b = e.target.closest('.opt-ptab');
if (!b) return;
sw.querySelectorAll('.opt-ptab').forEach(x => x.classList.toggle('on', x === b));
const p = b.dataset.plan;
allViews.forEach(v => v.hidden = v.dataset.plan !== p);
});
})();

(function () {
const layer = document.getElementById('static-bubbles');
if (!layer) return;
[
{ l:'6%', t:'12%', s:110 }, { l:'88%', t:'20%', s:80 },
{ l:'14%', t:'70%', s:70 }, { l:'78%', t:'62%', s:130 },
{ l:'46%', t:'8%', s:60 }, { l:'32%', t:'85%', s:90 },
{ l:'62%', t:'90%', s:70 },
].forEach((p, i) =>
        {
const b = document.createElement('div');
b.className ='sb'; b.style.left = p.l; b.style.top = p.t;
b.style.width = p.s +'px'; b.style.height = p.s +'px';
b.style.animationDelay = (i * 0.6) +'s';
layer.appendChild(b);
});
})();
        </script>
        <script>
(function () {
  if (!('ontouchstart' in window)) return;
  /* タッチデバイス：各ツールチップに×ボタンを追加 */
  document.querySelectorAll('.bp-tip').forEach(tip => {
    const btn = document.createElement('button');
    btn.className = 'bp-tip-close';
    btn.setAttribute('aria-label', '閉じる');
    btn.textContent = '×';
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      tip.closest('.bp-has-tip').classList.remove('tip-open');
    });
    tip.appendChild(btn);
  });
  /* タップでトグル */
  document.querySelectorAll('.bp-has-tip').forEach(el => {
    el.addEventListener('click', function (e) {
      e.stopPropagation();
      const isOpen = el.classList.contains('tip-open');
      document.querySelectorAll('.bp-has-tip.tip-open').forEach(x => x.classList.remove('tip-open'));
      if (!isOpen) el.classList.add('tip-open');
    });
  });
  document.addEventListener('click', () => {
    document.querySelectorAll('.bp-has-tip.tip-open').forEach(x => x.classList.remove('tip-open'));
  });
})();
        </script>
        <?php include "footer.php"; ?>
