<script>
  /* Mobile nav toggle */
(function(){
const head = document.querySelector('.site-head');
if (!head) return;
const btn = head.querySelector('.nav-toggle');
if (!btn) return;
btn.addEventListener('click', () => {
const open = head.dataset.navOpen ==='true';
head.dataset.navOpen = open ?'false' :'true';
btn.setAttribute('aria-expanded', open ?'false' :'true');
});
document.addEventListener('click', (e) => {
if (head.dataset.navOpen ==='true' && !head.contains(e.target)) {
head.dataset.navOpen ='false';
btn.setAttribute('aria-expanded','false');
}
});
})();
  </script>
  <!-- ===== Footer ===== -->
  <footer class="site-foot">
    <div class="wrap">
      <div class="brand-mini">
        VeryBerry
      </div>
      <div class="social">
        <a class="social-btn instagram" href="#" target="_blank" rel="noopener" aria-label="Instagram">
        <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke-width="2">
          <defs>
            <linearGradient id="ig-g" x1="0%" y1="100%" x2="100%" y2="0%">
              <stop offset="0%"   stop-color="#f58529"/>
              <stop offset="45%"  stop-color="#dd2a7b"/>
              <stop offset="80%"  stop-color="#8134af"/>
              <stop offset="100%" stop-color="#515bd4"/>
            </linearGradient>
          </defs>
          <rect x="3" y="3" width="18" height="18" rx="5" ry="5"/>
          <circle cx="12" cy="12" r="4"/>
          <circle class="ig-dot" cx="17.5" cy="6.5" r="1.2"/>
        </svg>
        Instagram
        </a>
        <a class="social-btn line" href="#" target="_blank" rel="noopener" aria-label="LINE">
        <svg viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
          <path d="M12 3C6.477 3 2 6.726 2 11.214c0 2.692 1.622 5.075 4.124 6.586-.156.582-1.018 3.49-1.038 3.59 0 0-.034.16.066.218.1.057.218.013.218.013.305-.043 3.49-2.282 4.066-2.687.85.121 1.722.184 2.564.184 5.523 0 10-3.726 10-8.214C22 6.726 17.523 3 12 3z"/>
        </svg>
        公式LINE
        </a>
      </div>
      <div class="copy">
        © 2026 VeryBerry · ベリーベリーデザイン
      </div>
    </div>
  </footer>
  <!-- ===== Side tab: contact ===== -->
  <a class="fab" href="/contact/" aria-label="お問い合わせ">
  <svg class="fab-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" aria-hidden="true">
    <rect x="3" y="5" width="18" height="14" rx="2"/>
    <path d="M3 7l9 6 9-6"/>
  </svg>
  <span class="fab-label">お問い合せ </span>
  </a>
  <!-- ===== Side tab: works ===== -->
  <a class="fab fab-works" href="/works/" aria-label="制作実績">
  <svg class="fab-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" aria-hidden="true">
    <rect x="3" y="3" width="7" height="7" rx="1"/>
    <rect x="14" y="3" width="7" height="7" rx="1"/>
    <rect x="3" y="14" width="7" height="7" rx="1"/>
    <rect x="14" y="14" width="7" height="7" rx="1"/>
  </svg>
  <span class="fab-label">実績 </span>
  </a>
  <!-- ===== Back to top ===== -->
  <button class="back-top" id="back-top" aria-label="トップへ戻る">
  <img src="<?php echo MAYA_URI; ?>/img/7.png" alt="" aria-hidden="true" />
  <span>top </span>
  </button>
  <script>
    (function () {
  var btn = document.getElementById('back-top');
  if (!btn) return;
  window.addEventListener('scroll', function () {
    btn.classList.toggle('is-visible', window.scrollY > 300);
  }, { passive: true });
  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
