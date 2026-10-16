/* VeryBerry — site-wide globals */
(function () {
  var BERRY_IMGS = ['/wp-content/themes/maya/img/3.webp', '/wp-content/themes/maya/img/4.webp', '/wp-content/themes/maya/img/5.webp', '/wp-content/themes/maya/img/7.webp'];

  // Returns an <img> using a strawberry PNG. `color` param is kept for
  // backwards compat with existing call sites but no longer applies.
  function berryIcon(size, _color) {
    var s = Number(size) || 32;
    // Pick a berry. If the caller passes the same size repeatedly we still
    // randomise so the page feels alive.
    var src = BERRY_IMGS[Math.floor(Math.random() * BERRY_IMGS.length)];
    return '<img src="' + src + '" alt="" aria-hidden="true" '
      + 'style="width:' + s + 'px;height:' + s + 'px;object-fit:contain;'
      + 'display:inline-block;vertical-align:middle;" />';
  }

  window.BB = {
    ICONS: { berry: berryIcon },
    BERRY_IMGS: BERRY_IMGS,
  };
})();
