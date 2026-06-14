<?php
/*
Template Name: Top (EN)
*/
$pageTitle = "VeryBerry — Web Design Studio";
$currentPage = "top";
include "header_en.php";
?>
<!-- Floating soap bubbles across the whole page (deepest background layer) -->
<div class="bubbles-bg" id="bubbles-bg" aria-hidden="true">
</div>
<main class="wrap">
  <!-- HERO (DEF mixed) -->
  <section class="hero hero-mag">
    <!-- Background bubbles & sparkles -->
    <div class="fv-decor" aria-hidden="true">
      <div class="bubble fv-b1">
      </div>
      <div class="bubble berry fv-b2">
      </div>
      <div class="bubble fv-b3">
      </div>
      <div class="bubble berry fv-b4">
      </div>
      <div class="bubble fv-b5">
      </div>
      <div class="sparkle fv-s1">
        <svg width="22" height="22" viewBox="0 0 20 20">
          <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
        </svg>
      </div>
      <div class="sparkle fv-s2">
        <svg width="18" height="18" viewBox="0 0 20 20">
          <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
        </svg>
      </div>
      <div class="sparkle fv-s3">
        <svg width="14" height="14" viewBox="0 0 20 20">
          <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
        </svg>
      </div>
      <div class="sparkle fv-s4">
        <svg width="14" height="14" viewBox="0 0 20 20">
          <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
        </svg>
      </div>
      <div class="sparkle fv-s5">
        <svg width="20" height="20" viewBox="0 0 20 20">
          <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
        </svg>
      </div>
    </div>
    <!-- Masthead row -->
    <div class="masthead">
      <div class="issue-tag">
        — ISSUE 06 / 2026 —
      </div>
    </div>
    <!-- Split: huge typo left, big berry right -->
    <div class="hero-split">
      <div class="hero-left">
        <h1 class="hero-en">
          VeryBerry
          <span class="hero-en-2">Design. </span>
        </h1>
        <div class="hero-jp">
          Web Design &amp; Development
        </div>
        <p class="hero-lede">
          Let's talk about anything
        </p>
        <div class="service-chips">
          <span class="chip">WEB </span>
          <span class="chip">BANNER </span>
          <span class="chip">VIDEOS</span>
          <span class="chip">FLYER </span>
          <span class="chip">LOGO </span>
          <span class="chip">ILLUST </span>
        </div>
        <div class="cta-row">
          <a class="btn berry lg" href="/works-en/">Works &rarr; </a>
          <a class="btn lg" href="/about-en/">Profile </a>
        </div>
      </div>
      <div class="hero-right">
        <div class="big-berry-stage">
          <img class="reach-hand" src="<?php echo MAYA_URI; ?>/img/hand.png" alt="" aria-hidden="true" />
          <span class="big-berry" id="bigBerry" data-peelable="1"></span>
          <span class="mini-berry mini-1" id="miniBerry1"></span>
          <span class="mini-berry mini-2" id="miniBerry2"></span>
          <span class="mini-berry mini-3" id="miniBerry3"></span>
        </div>
      </div>
    </div>
    <!-- TOC strip -->
    <nav class="toc-strip" aria-label="Contents">
      <a class="toc-item" href="/about-en/"><span class="page-num">P.02 </span><span class="page-ttl">Profile </span></a>
      <a class="toc-item" href="/works-en/"><span class="page-num">P.03 </span><span class="page-ttl">Works </span></a>
      <a class="toc-item" href="/menu-en/"><span class="page-num">P.04 </span><span class="page-ttl">Pricing </span></a>
      <a class="toc-item" href="/contact-en/"><span class="page-num">P.05 </span><span class="page-ttl">Contact </span></a>
      <a class="toc-item" href="/faq-en/"><span class="page-num">P.06 </span><span class="page-ttl">FAQ &amp; Reviews </span></a>
    </nav>
  </section>
  <!-- LETTER MODAL -->
  <div class="letter-modal" id="letter-modal" hidden role="dialog" aria-modal="true" aria-labelledby="letter-modal-title">
    <div class="letter-modal-overlay" id="letter-modal-overlay">
    </div>
    <div class="letter-modal-card">
      <button class="letter-modal-close" id="letter-modal-close" aria-label="Close">&times; </button>
      <div class="coupon-envelope">
        <div class="coupon-env-top">
          <span class="coupon-env-txt">A gift from VeryBerry </span>
        </div>
        <!-- Coupon ticket -->
        <div class="coupon-ticket" id="letter-modal-title">
          <div class="coupon-ticket-inner">
            <div class="coupon-badge">
              First Order Only
            </div>
            <div class="coupon-main">
              <span class="coupon-num">10 </span><span class="coupon-pct">% </span><span class="coupon-off">OFF </span>
            </div>
            <p class="coupon-desc">
              A coupon for your first order.<br>Please mention it when contacting us.
            </p>
            <div class="coupon-divider">
              <span></span><span class="coupon-divider-txt">VeryBerry </span><span></span>
            </div>
            <p class="coupon-note">
              &lowast; Applicable on first order only. Cannot be combined with other discounts.
            </p>
          </div>
          <!-- Perforation left/right -->
          <div class="coupon-perf coupon-perf-l">
          </div>
          <div class="coupon-perf coupon-perf-r">
          </div>
        </div>
        <div class="coupon-env-bottom">
        </div>
      </div>
      <div class="coupon-cta">
        <a class="btn berry" href="/contact-en/">Use this coupon &rarr; </a>
      </div>
    </div>
  </div>
  <script>
    (function(){
  const btn   = document.getElementById('letter-env');
  const modal = document.getElementById('letter-modal');
  const close = document.getElementById('letter-modal-close');
  const overlay = document.getElementById('letter-modal-overlay');
  if (!btn || !modal) return;
  btn.addEventListener('click', () => {
    modal.hidden = false;
    requestAnimationFrame(() => modal.classList.add('open'));
  });
  function closeModal() {
    modal.classList.remove('open');
    modal.addEventListener('transitionend', () => { modal.hidden = true; }, { once: true });
  }
  close.addEventListener('click', closeModal);
  overlay.addEventListener('click', closeModal);
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
})();
    </script>
    <!-- PROFILE SNIPPET -->
    <section class="profile-snip">
      <div class="imgph round has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/profile01.JPG');background-size:cover;background-position:center;"></div>
      <div class="profile-snip-body">
        <h3>
          NEWBERRY MAYA KRISTEN <span class="en">/ designer &amp; coder </span>
        </h3>
        <div class="lines">
          Collecting purple things, making everything from websites to print to video &mdash; a small Tokyo design studio with a taste for the wonderfully odd.
        </div>
        <div class="stamp-row">
          <span class="stamp">Figma </span>
          <span class="stamp">Illustrator </span>
          <span class="stamp">Photoshop </span>
          <span class="stamp">Final Cut Pro X</span>
        </div>
      </div>
      <a class="btn berry" href="/about-en/">About me <span>&rarr; </span></a>
    </section>
    <!-- WORKS -->
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">
        — recent works —
      </div>
      <h2>
        <span class="scrib">Works </span>
      </h2>
      <div class="sub muted">
        Browse some recent projects
      </div>
    </div>
    <div class="tab-pills" id="tab-pills">
      <button class="on" data-cat="all">ALL </button>
      <button data-cat="web">WEB </button>
      <button data-cat="banner">BANNER </button>
      <button data-cat="movie">VIDEOS </button>
      <button data-cat="flyer">FLYER </button>
      <button data-cat="illust">ILLUST </button>
      <button data-cat="other">OTHER </button>
    </div>
    <div class="works-grid" id="works-grid">
    </div>
    <div class="works-more-wrap">
      <a class="btn berry" href="/works-en/">See More &rarr; </a>
    </div>
    <!-- Work detail popup -->
    <div class="work-modal" id="work-modal" hidden>
      <div class="work-modal-backdrop" data-close>
      </div>
      <div class="work-modal-card" role="dialog" aria-modal="true" aria-labelledby="wm-title">
        <button class="work-modal-close" data-close aria-label="Close">&times; </button>
        <div class="work-modal-scroll">
          <div class="work-modal-img imgph" id="wm-img">
            <span class="lbl" id="wm-imglbl">[ work ] </span>
          </div>
          <div class="work-modal-body">
            <span class="work-modal-cat" id="wm-cat">WEB </span>
            <h3 class="work-modal-title" id="wm-title">
              Work Title
            </h3>
            <div class="work-modal-meta" id="wm-meta">
              Client / 2026.04
            </div>
            <div class="work-modal-tags" id="wm-tags">
            </div>
            <p class="work-modal-desc" id="wm-desc">
            </p>
            <div class="work-modal-actions">
              <a class="btn berry lg" href="#" id="wm-url" target="_blank" rel="noopener" style="display:none;">View Site &rarr; </a>
              <a class="btn berry lg" href="/works-en/" id="wm-more">View Details &rarr; </a>
              <button class="btn" data-close>Close </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="<?php echo MAYA_URI; ?>/js/app.js?v=2">
    </script>
    <script src="<?php echo MAYA_URI; ?>/js/works-data_en.js">
    </script>
    <script>
      (function () {
const layer = document.getElementById('bubbles-bg');
if (!layer) return;
const COUNT = 9;
const bubbles = [];
const laneStep = 100 / COUNT;
for (let i = 0; i
      < COUNT; i++) {
const b = document.createElement('div');
b.className ='sb';
const size = 48 + Math.random() * 80;
const laneCentre = laneStep * (i + 0.5);
const jitter = (Math.random() - 0.5) * (laneStep * 0.4);
const left = laneCentre + jitter;
const dur = 22 + Math.random() * 14;
const delay = -((i / COUNT) * dur + Math.random() * 2);
b.style.cssText = `
left: ${left}%;
width: ${size}px; height: ${size}px;
--dur: ${dur}s; --delay: ${delay}s;
`;
const inner = document.createElement('div');
inner.className ='sb-inner';
b.appendChild(inner);
layer.appendChild(b);
bubbles.push({ el: b, inner, size });
}

const REPEL_DIST = 130;
const MAX_PUSH = 50;
let mouseX = -9999, mouseY = -9999;
let raf = 0;
function tick() {
raf = 0;
bubbles.forEach(({ el, inner, size }) =>
      {
if (el.classList.contains('popping')) return;
const r = el.getBoundingClientRect();
const cx = r.left + r.width / 2;
const cy = r.top + r.height / 2;
const dx = cx - mouseX;
const dy = cy - mouseY;
const dist = Math.hypot(dx, dy);
const reach = REPEL_DIST + size / 2;
if (dist
      < reach) {
const t = 1 - dist / reach;
const force = t * MAX_PUSH;
const ux = dx / (dist || 1);
inner.style.setProperty('--pushX', `${ux * force}px`);
} else {
inner.style.setProperty('--pushX','0px');
}
});
}
document.addEventListener('mousemove', (e) =>
      {
mouseX = e.clientX;
mouseY = e.clientY;
if (!raf) raf = requestAnimationFrame(tick);
});

function popBubble(b, evt) {
if (b.classList.contains('popping')) return;
b.classList.add('popping');
const cx = evt.clientX;
const cy = evt.clientY;
const r = b.getBoundingClientRect();
b.style.position ='fixed';
b.style.left = `${cx - r.width / 2}px`;
b.style.top = `${cy - r.height / 2}px`;
b.style.animation ='bubblePop .55s ease-out forwards';
for (let i = 0; i
      < 14; i++) {
const s = document.createElement('span');
s.className ='bubble-spark';
const ang = Math.random() * Math.PI * 2;
const dist = 30 + Math.random() * 70;
s.style.left = `${cx}px`;
s.style.top = `${cy}px`;
s.style.setProperty('--dx', `${Math.cos(ang) * dist}px`);
s.style.setProperty('--dy', `${Math.sin(ang) * dist}px`);
document.body.appendChild(s);
setTimeout(() =>
      s.remove(), 800);
}
setTimeout(() => {
b.classList.remove('popping');
b.style.position =''; b.style.top ='';
b.style.left = `${Math.random() * 100}%`;
b.style.animation ='none';
void b.offsetWidth;
const dur = 18 + Math.random() * 18;
b.style.setProperty('--dur', `${dur}s`);
b.style.animation = `bubbleRise ${dur}s linear infinite`;
}, 600);
}
layer.addEventListener('click', (e) => {
const b = e.target.closest('.sb');
if (b) popBubble(b, e);
});
})();
      </script>
      <script>
        (function () {
const big = document.getElementById('bigBerry');
if (big) big.innerHTML ='<img src="<?php echo MAYA_URI; ?>/img/5.png" alt="" style="width:100%; height:100%; object-fit:contain;" />';
const m1 = document.getElementById('miniBerry1');
if (m1) m1.innerHTML ='<img src="<?php echo MAYA_URI; ?>/img/3.png" alt="" style="width:100%; height:100%; object-fit:contain;" />';
const m2 = document.getElementById('miniBerry2');
if (m2) m2.innerHTML ='<img src="<?php echo MAYA_URI; ?>/img/4.png" alt="" style="width:100%; height:100%; object-fit:contain;" />';
const m3 = document.getElementById('miniBerry3');
if (m3) m3.innerHTML ='<img src="<?php echo MAYA_URI; ?>/img/7.png" alt="" style="width:100%; height:100%; object-fit:contain;" />';
})();

(function () {
/* Works data is managed in js/works-data_en.js */
const WORKS = WORKS_DATA;
const grid = document.getElementById('works-grid');
const pills = document.getElementById('tab-pills');
const modal = document.getElementById('work-modal');
let cur ='all';

function render() {
grid.innerHTML ='';
WORKS.filter(w => cur ==='all' || w.cat === cur).forEach(w => {
const card = document.createElement('div');
card.className ='work-card';
card.tabIndex = 0;
card.innerHTML = `
        <div class="imgph"${w.youtube
          ? ''
          : (w.thumb ? ` style="background-image:url('${w.thumb}');background-size:cover;background-position:center;"` : '')
        }>
        ${w.youtube && w.thumb
          ? `<img src="${w.thumb}" alt="" style="width:100%;height:140%;object-fit:cover;object-position:center;margin-top:-20%;display:block;">`
          : (w.thumb ? '' : `<span class="lbl">[ ${w.cat} ]</span>`)
        }
        </div>
        <div class="meta">
          <span class="cat">${catLabel(w.cat)}</span>
          <span class="date">${w.date}</span>
        </div>
        <div class="ttl">${w.ttl}</div>
        <div class="tags">${(w.tags||[]).map(t => `<span class="tag ${t.c}">${t.l}</span>`).join('')}</div>
        `;
card.addEventListener('click', () => openModal(w));
card.addEventListener('keydown', (e) => { if (e.key === 'Enter') openModal(w); });
grid.append(card);
});
}
function openModal(w) {
document.getElementById('wm-cat').textContent = catLabel(w.cat);
document.getElementById('wm-title').textContent = w.ttl;
document.getElementById('wm-meta').textContent = `${w.client} / ${w.date}`;
const tagsEl = document.getElementById('wm-tags');
if (tagsEl) tagsEl.innerHTML = (w.tags||[]).map(t => `<span class="tag ${t.c}">${t.l}</span>`).join('');
document.getElementById('wm-desc').textContent = w.desc;
const wmImg = document.getElementById('wm-img');
if (w.youtube) {
  wmImg.classList.add('has-img');
  wmImg.classList.remove('multi-img');
  wmImg.innerHTML = `<div style="position:relative;width:100%;padding-top:56.25%;"><iframe src="https://www.youtube.com/embed/${w.youtube}" style="position:absolute;inset:0;width:100%;height:100%;border:0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>`;
} else if (w.imgs && w.imgs.length) {
  wmImg.classList.add('has-img', 'multi-img');
  wmImg.innerHTML = w.imgs.map(src => `<img src="${src}" alt="">`).join('');
} else if (w.img) {
  wmImg.classList.add('has-img');
  wmImg.classList.remove('multi-img');
  wmImg.innerHTML = `<img src="${w.img}" alt="">`;
} else {
  wmImg.classList.remove('has-img', 'multi-img');
  wmImg.innerHTML = `<span class="lbl" id="wm-imglbl">[ ${w.cat} ]</span>`;
}
const dest = `works_en.php?cat=${w.cat}&ttl=${encodeURIComponent(w.ttl)}`;
document.getElementById('wm-more').href = dest;
const wmUrl = document.getElementById('wm-url');
if (w.url) { wmUrl.href = w.url; wmUrl.style.display = ''; } else { wmUrl.style.display = 'none'; }
wmImg.style.cursor = (w.imgs || w.img) ? 'pointer' : '';
wmImg.onclick = (w.imgs || w.img) ? () => { window.location.href = dest; } : null;
modal.hidden = false;
requestAnimationFrame(() => modal.classList.add('open'));
document.body.style.overflow ='hidden';
}
function closeModal() {
modal.classList.remove('open');
document.body.style.overflow ='';
setTimeout(() => { modal.hidden = true; }, 250);
}
modal.addEventListener('click', (e) => {
if (e.target.closest('[data-close]')) closeModal();
});
document.addEventListener('keydown', (e) => {
if (e.key ==='Escape' && !modal.hidden) closeModal();
});

pills.addEventListener('click', e => {
const btn = e.target.closest('button');
if (!btn) return;
pills.querySelectorAll('button').forEach(b => b.classList.remove('on'));
btn.classList.add('on');
cur = btn.dataset.cat;
render();
});
render();
})();
        </script>
        <?php include "footer_en.php"; ?>
