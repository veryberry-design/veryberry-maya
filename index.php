<?php
/*
Template Name: Top
*/
$pageTitle = "ベリーベリーデザイン — トップ";
$currentPage = "top";
include "header.php";
?>
<!-- Floating soap bubbles across the whole page (deepest background layer) -->
<div class="bubbles-bg" id="bubbles-bg" aria-hidden="true">
</div>
<main class="wrap">
  <!-- HERO (DEF混合) -->
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
    <!-- Masthead row (F) -->
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
          あなたの想いを形にします
        </div>
        <p class="hero-lede">
          目に留まるだけじゃなく、記憶に残るものを。<br>「本当はこうしたい」を探しながら、<br class="sp-only">いちばん合うかたちをつくります。
        </p>
        <div class="cta-row">
          <a class="btn berry lg" href="/works/">実績を見る → </a>
          <a class="btn lg" href="/about/">プロフィール </a>
        </div>
      </div>
      <div class="hero-right">
        <div class="big-berry-stage">
          <img class="reach-hand" src="<?php echo MAYA_URI; ?>/img/hand.png" alt="" aria-hidden="true" />
          <span class="big-berry" id="bigBerry" data-peelable="1"><img src="<?php echo MAYA_URI; ?>/img/5.webp" alt="" width="194" height="229" fetchpriority="high" style="width:100%; height:100%; object-fit:contain;" /></span>
          <span class="mini-berry mini-1" id="miniBerry1"><img src="<?php echo MAYA_URI; ?>/img/3.webp" alt="" width="196" height="241" style="width:100%; height:100%; object-fit:contain;" /></span>
          <span class="mini-berry mini-2" id="miniBerry2"><img src="<?php echo MAYA_URI; ?>/img/4.webp" alt="" width="192" height="227" style="width:100%; height:100%; object-fit:contain;" /></span>
          <span class="mini-berry mini-3" id="miniBerry3"><img src="<?php echo MAYA_URI; ?>/img/7.webp" alt="" width="189" height="234" style="width:100%; height:100%; object-fit:contain;" /></span>
        </div>
      </div>
    </div>
    <!-- TOC strip (F) -->
    <nav class="toc-strip" aria-label="目次">
      <a class="toc-item" href="/about/"><span class="page-num">P.02 </span><span class="page-ttl">プロフィール </span></a>
      <a class="toc-item" href="/works/"><span class="page-num">P.03 </span><span class="page-ttl">制作実績 </span></a>
      <a class="toc-item" href="/menu/"><span class="page-num">P.04 </span><span class="page-ttl">料金・流れ </span></a>
      <a class="toc-item" href="/contact/"><span class="page-num">P.05 </span><span class="page-ttl">お問い合わせ </span></a>
      <a class="toc-item" href="/faq/"><span class="page-num">P.06 </span><span class="page-ttl">FAQ </span></a>
    </nav>
  </section>
  <!-- LETTER BANNER -->
  <!-- <div class="letter-banner-wrap">
  <button class="letter-env" id="letter-env" aria-label="お手紙を開く">
    <div class="letter-env-img-wrap">
      <img class="letter-img-close" src="<?php echo MAYA_URI; ?>/img/letter_close.png" alt="封筒（閉）" />
      <img class="letter-img-open"  src="<?php echo MAYA_URI; ?>/img/letter_open.png"  alt="封筒（開）" />
    </div>
    <p class="letter-env-hint">クリックしてお手紙を読む</p>
  </button>
</div> -->
  <!-- LETTER MODAL -->
  <div class="letter-modal" id="letter-modal" hidden role="dialog" aria-modal="true" aria-labelledby="letter-modal-title">
    <div class="letter-modal-overlay" id="letter-modal-overlay">
    </div>
    <div class="letter-modal-card">
      <button class="letter-modal-close" id="letter-modal-close" aria-label="閉じる">× </button>
      <!-- 封筒の下半分（クーポンが入っている封筒） -->
      <div class="coupon-envelope">
        <div class="coupon-env-top">
          <span class="coupon-env-txt">VeryBerry からのプレゼント </span>
        </div>
        <!-- クーポン券 -->
        <div class="coupon-ticket" id="letter-modal-title">
          <div class="coupon-ticket-inner">
            <div class="coupon-badge">
              初回限定
            </div>
            <div class="coupon-main">
              <span class="coupon-num">10 </span><span class="coupon-pct">% </span><span class="coupon-off">OFF </span>
            </div>
            <p class="coupon-desc">
              はじめてのご依頼に使えるクーポンです。<br>お問い合わせ時にお申し付けください
            </p>
            <div class="coupon-divider">
              <span></span><span class="coupon-divider-txt">VeryBerry </span><span></span>
            </div>
            <p class="coupon-note">
              ※初回のお取引に限り適用。他割引との併用不可。
            </p>
          </div>
          <!-- ミシン目 左右 -->
          <div class="coupon-perf coupon-perf-l">
          </div>
          <div class="coupon-perf coupon-perf-r">
          </div>
        </div>
        <div class="coupon-env-bottom">
        </div>
      </div>
      <div class="coupon-cta">
        <a class="btn berry" href="/contact/">このクーポンを使って相談する → </a>
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
    <!-- MESSAGE：制作への想い（ルーズリーフを1枚ずつめくる） -->
    <section class="message-sec" aria-labelledby="message-ttl">
      <div class="sect-title sect-title-centered">
        <div class="en kicker-en">— my thought —</div>
        <h2 id="message-ttl" class="message-ttl">
          「こうしたい」の先にある、<br>「なぜ、そうしたいのか」まで。
        </h2>
      </div>
      <div class="leaf-book" id="leaf-book">
        <div class="leaf-stack">
          <article class="leaf">
            <h3>「こんなWebサイトにしたい」</h3>
            <p>その思い描いたイメージを形にするのは、もちろん私の仕事。<br>でも、言われた通りに作るだけで、本当に良いWebサイトになるとは限りません。</p>
            <p>「誰に届けたいのか」「何を変えたいのか」「今、何に困っているのか」。<br>ときには制作を始める前に、そんなところから一緒に考えることを大切にしています。</p>
          </article>
          <article class="leaf">
            <h3>運用の現場を知っているから</h3>
            <p>私は普段、中小企業のお客様とやり取りをしながら、さまざまなWebサイトの更新・運用に携わっています。</p>
            <p>そこで見てきたのは、完成されたデザインだけではありません。日々の更新で生まれる悩みや、使い続ける中で見えてくる課題。その経験があるからこそ、見た目の美しさだけでなく、<span class="webk-mark m-grape">完成した後のことまで考えたご提案</span>ができると考えています。</p>
          </article>
          <article class="leaf">
            <h3>ゼロから学んだ一人として</h3>
            <p>そして、私自身もゼロからWebを学んできた一人です。<br>だからこそ、専門的な知識を一方的に伝えるのではなく、<span class="webk-mark m-grape">「なぜ、この方法がいいのか」その理由や根本にある考え方まで、わかりやすくお伝えしたい。</span></p>
            <p>一人で制作しているからこそ、ひとつひとつのご相談にじっくり向き合い、考える時間も、話し合う時間も大切にできます。</p>
          </article>
          <article class="leaf">
            <h3>「作ってよかった」と思えるWebサイトを</h3>
            <p>あなたの理想を、ただ形にするだけではなく。<br>まだ言葉になっていない想いや、気づいていなかった課題まで一緒に整理しながら、<span class="webk-mark m-grape">「作ってよかった」と心から思えるWebサイトを。</span></p>
            <p class="leaf-last">そんな制作を、私は目指しています。</p>
            <p class="leaf-sign">VeryBerry</p>
          </article>
        </div>
        <div class="leaf-ctl">
          <button type="button" class="leaf-prev" aria-label="前のページ">‹</button>
          <span class="leaf-count" aria-live="polite">1 / 4</span>
          <button type="button" class="leaf-next" aria-label="次のページ">›</button>
        </div>
      </div>
    </section>
    <script>
    (function () {
      const book = document.getElementById('leaf-book');
      if (!book) return;
      const leaves = [...book.querySelectorAll('.leaf')];
      const prev = book.querySelector('.leaf-prev');
      const next = book.querySelector('.leaf-next');
      const count = book.querySelector('.leaf-count');
      let cur = 0;
      function draw() {
        leaves.forEach((l, i) => {
          l.classList.toggle('is-gone', i < cur);
          l.classList.toggle('is-cur', i === cur);
          l.classList.toggle('is-next', i === cur + 1);
          l.classList.toggle('is-hide', i > cur + 1);
          l.setAttribute('aria-hidden', i === cur ? 'false' : 'true');
        });
        count.textContent = `${cur + 1} / ${leaves.length}`;
        prev.disabled = cur === 0;
        next.disabled = cur === leaves.length - 1;
      }
      function go(n) { cur = Math.max(0, Math.min(leaves.length - 1, n)); draw(); }
      prev.addEventListener('click', () => go(cur - 1));
      next.addEventListener('click', () => go(cur + 1));
      /* スマホは左右スワイプでもめくれる */
      let sx = null;
      book.addEventListener('touchstart', e => { sx = e.touches[0].clientX; }, { passive: true });
      book.addEventListener('touchend', e => {
        if (sx === null) return;
        const dx = e.changedTouches[0].clientX - sx; sx = null;
        if (Math.abs(dx) > 50) go(cur + (dx < 0 ? 1 : -1));
      });
      draw();
    })();
    </script>
    <!-- PROFILE SNIPPET（小さめポラロイド＋テープ） -->
    <section class="profile-pol">
      <span class="pol-sparks" aria-hidden="true">
        <i><svg viewBox="0 0 20 20"><path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/></svg></i>
        <i><svg viewBox="0 0 20 20"><path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/></svg></i>
        <i><svg viewBox="0 0 20 20"><path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/></svg></i>
        <i><svg viewBox="0 0 20 20"><path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/></svg></i>
        <i><svg viewBox="0 0 20 20"><path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/></svg></i>
        <i><svg viewBox="0 0 20 20"><path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/></svg></i>
        <i><svg viewBox="0 0 20 20"><path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/></svg></i>
      </span>
      <div class="pol-photo">
        <div class="pol-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/profile01.webp');"></div>
        <span class="pol-cap">hello, I'm Maya!</span>
      </div>
      <div class="pol-body">
        <span class="pol-role">designer &amp; coder</span>
        <h3 class="pol-name">NEWBERRY MAYA KRISTEN</h3>
        <p class="pol-lines">
          目に留まるだけじゃなく、記憶に残るものを。<br/>「本当はこうしたい」を探しながら、<br/>いちばん合うかたちをつくります。
        </p>
        <a class="btn berry" href="/about/">About me <span>→ </span></a>
      </div>
    </section>
    <!-- WORKS -->
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">
        — recent works —
      </div>
      <h2>
        <span class="scrib">制作実績 </span>
      </h2>
      <div class="sub muted">
        気になる作品をのぞいてみてください
      </div>
    </div>
    <div class="tab-pills" id="tab-pills">
      <button class="on" data-cat="all">ALL </button>
      <button data-cat="web">WEB </button>
      <button data-cat="banner">BANNER </button>
      <button data-cat="movie">VIDEOS </button>
      <button data-cat="flyer">FLYER </button>
      <button data-cat="illust">ILLUST </button>
      <button data-cat="other">その他 </button>
    </div>
    <div class="works-grid" id="works-grid">
    </div>
    <div class="works-more-wrap">
      <a class="btn berry" href="/works/">もっと見る → </a>
    </div>
    <!-- Work detail popup -->
    <div class="work-modal" id="work-modal" hidden>
      <div class="work-modal-backdrop" data-close>
      </div>
      <div class="work-modal-card" role="dialog" aria-modal="true" aria-labelledby="wm-title">
        <button class="work-modal-close" data-close aria-label="閉じる">× </button>
        <div class="work-modal-scroll">
          <div class="work-modal-img imgph" id="wm-img">
            <span class="lbl" id="wm-imglbl">[ work ] </span>
          </div>
          <div class="work-modal-body">
            <span class="work-modal-cat" id="wm-cat">WEB </span>
            <h3 class="work-modal-title" id="wm-title">
              作品タイトル
            </h3>
            <div class="work-modal-meta" id="wm-meta">
              クライアント / 2026.04
            </div>
            <div class="work-modal-tags" id="wm-tags">
            </div>
            <p class="work-modal-desc" id="wm-desc">
            </p>
            <div class="work-modal-actions">
              <a class="btn berry lg" href="#" id="wm-url" target="_blank" rel="noopener" style="display:none;">サイトを見る → </a>
              <a class="btn berry lg" href="/works/" id="wm-more">詳細を見る → </a>
              <button class="btn" data-close>閉じる </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="<?php echo MAYA_URI; ?>/js/app.js?v=2">
    </script>
    <script src="<?php echo MAYA_URI; ?>/js/works-data.js">
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
/* 実績データは js/works-data.js で管理しています */
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
          ? `<img src="${w.thumb}" alt="" loading="lazy" decoding="async" style="width:100%;height:140%;object-fit:cover;object-position:center;margin-top:-20%;display:block;">`
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
document.getElementById('wm-meta').textContent = `${w.client} ／ ${w.date}`;
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
const dest = `works.php?cat=${w.cat}&ttl=${encodeURIComponent(w.ttl)}`;
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
        <?php include "footer.php"; ?>
