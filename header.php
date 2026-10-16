<!doctype html>
  <html lang="ja">
    <head>
      <meta charset="utf-8" />
      <title>
        <?php echo htmlspecialchars($pageTitle); ?>
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/5.png" type="image/png" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <?php wp_head(); ?>
    </head>
    <body data-page="<?php echo htmlspecialchars($currentPage); ?>
      ">
      <header class="site-head">
        <div class="wrap">
          <a class="brand" href="/" aria-label="VeryBerry — ホームへ">
          <span class="berry-icon-wrap" aria-hidden="true">
            <img class="berry-logo berry-a" src="<?php echo MAYA_URI; ?>/img/3.webp" alt="" width="196" height="241" />
            <img class="berry-logo berry-b" src="<?php echo MAYA_URI; ?>/img/4.webp" alt="" width="192" height="227" />
          </span>
          <span class="name"><span class="en">VeryBerry </span></span>
          </a>
          <button class="nav-toggle" type="button" aria-label="メニューを開く" aria-expanded="false">
          <span></span><span></span><span></span>
          </button>
          <nav class="nav" aria-label="メインナビ">
            <?php
$nav = [
  "top" => ["href" => "/", "en" => "トップ"],
  "about" => ["href" => "/about/", "en" => "お部屋"],
  "works" => ["href" => "/works/", "en" => "実績"],
  "menu" => ["href" => "/menu/", "en" => "料金"],
  "faq" => ["href" => "/faq/", "en" => "FAQ"],
  "contact" => ["href" => "/contact/", "en" => "お問い合わせ"],
];
foreach ($nav as $key => $item) {
  $active = $currentPage === $key ? ' class="active"' : "";
  echo '<a href="' . $item["href"] . '"' . $active . ' data-nav="' . $key . '">';
  echo '<span class="nav-en">' . $item["en"] . "</span>";
  echo '<span class="leaf-tip"></span>';
  echo "</a>" . "\n";
}
?>
          <!-- 言語切り替え：デスクトップ（nav内末尾） -->
          <div class="lang-switch lang-switch--desktop" aria-label="言語切り替え">
            <span class="lang-item lang-item-active">
              <span class="material-symbols-outlined lang-icon" aria-hidden="true">language</span>
              Japanese
            </span>
            <span class="lang-sep">/</span>
            <a class="lang-item lang-item-link" href="#" id="lang-to-en">English</a>
          </div>
          <!-- 言語切り替え：モバイル（ハンバーガーメニュー最下部） -->
          <div class="lang-switch lang-switch--mobile" aria-label="言語切り替え">
            <span class="lang-item lang-item-active">
              <span class="material-symbols-outlined lang-icon" aria-hidden="true">language</span>
              Japanese
            </span>
            <span class="lang-sep">/</span>
            <a class="lang-item lang-item-link" href="#" id="lang-to-en-m">English</a>
          </div>
          </nav>
        </div>
      </header>
<script>
(function () {
  // 日本語ページURL → 英語ページURL（固定ページのパーマリンク）
  var EN_MAP = {
    '/':         '/top-en/',
    '/about/':   '/about-en/',
    '/works/':   '/works-en/',
    '/menu/':    '/menu-en/',
    '/faq/':     '/faq-en/',
    '/contact/': '/contact-en/',
  };
  function goToEn(e) {
    e.preventDefault();
    location.href = EN_MAP[location.pathname] || '/top-en/';
  }
  var toEnBtn = document.getElementById('lang-to-en');
  if (toEnBtn) toEnBtn.addEventListener('click', goToEn);
  var toEnBtnM = document.getElementById('lang-to-en-m');
  if (toEnBtnM) toEnBtnM.addEventListener('click', goToEn);
})();
</script>
