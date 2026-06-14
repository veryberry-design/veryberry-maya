<!doctype html>
  <html lang="en">
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
          <a class="brand" href="/top-en/" aria-label="VeryBerry — Home">
          <span class="berry-icon-wrap" aria-hidden="true">
            <img class="berry-logo berry-a" src="<?php echo MAYA_URI; ?>/img/3.png" alt="" />
            <img class="berry-logo berry-b" src="<?php echo MAYA_URI; ?>/img/4.png" alt="" />
          </span>
          <span class="name"><span class="en">VeryBerry </span></span>
          </a>
          <button class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false">
          <span></span><span></span><span></span>
          </button>
          <nav class="nav" aria-label="Main navigation">
            <?php
$nav = [
  "top" => ["href" => "/top-en/", "en" => "top"],
  "about" => ["href" => "/about-en/", "en" => "room"],
  "works" => ["href" => "/works-en/", "en" => "works"],
  "menu" => ["href" => "/menu-en/", "en" => "menu"],
  "faq" => ["href" => "/faq-en/", "en" => "faq"],
  "contact" => ["href" => "/contact-en/", "en" => "contact"],
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
          <div class="lang-switch lang-switch--desktop" aria-label="Language switch">
            <a class="lang-item lang-item-link" href="#" id="lang-to-ja">Japanese</a>
            <span class="lang-sep">/</span>
            <span class="lang-item lang-item-active">
              <span class="material-symbols-outlined lang-icon" aria-hidden="true">language</span>
              English
            </span>
          </div>
          <!-- 言語切り替え：モバイル（ハンバーガーメニュー最下部） -->
          <div class="lang-switch lang-switch--mobile" aria-label="Language switch">
            <a class="lang-item lang-item-link" href="#" id="lang-to-ja-m">Japanese</a>
            <span class="lang-sep">/</span>
            <span class="lang-item lang-item-active">
              <span class="material-symbols-outlined lang-icon" aria-hidden="true">language</span>
              English
            </span>
          </div>
          </nav>
        </div>
      </header>
<script>
(function () {
  // 英語ページURL → 日本語ページURL（固定ページのパーマリンク）
  var JA_MAP = {
    '/top-en/':     '/',
    '/about-en/':   '/about/',
    '/works-en/':   '/works/',
    '/menu-en/':    '/menu/',
    '/faq-en/':     '/faq/',
    '/contact-en/': '/contact/',
  };
  function goToJa(e) {
    e.preventDefault();
    location.href = JA_MAP[location.pathname] || '/';
  }
  var toJaBtn = document.getElementById('lang-to-ja');
  if (toJaBtn) toJaBtn.addEventListener('click', goToJa);
  var toJaBtnM = document.getElementById('lang-to-ja-m');
  if (toJaBtnM) toJaBtnM.addEventListener('click', goToJa);
})();
</script>
