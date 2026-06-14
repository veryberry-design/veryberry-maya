<?php
/*
Template Name: Works (EN)
*/
$pageTitle = "VeryBerry — Works & Case Studies";
$currentPage = "works";
include "header_en.php";
?>
<img class="works-mouse" src="<?php echo MAYA_URI; ?>/img/mouse.png"  alt="" aria-hidden="true">
<img class="works-mouse2"src="<?php echo MAYA_URI; ?>/img/mouse2.png" alt="" aria-hidden="true">
<main class="wrap">
  <div class="sect-title" style="margin-top: 100px;">
    <h2>
      <span class="scrib">Works &amp; Case Studies </span>
    </h2>
    <span class="en">— works &amp; case studies </span>
  </div>
  <div class="works-layout">
    <!-- Left filter -->
    <aside class="filter-side">
      <div class="group">
        <h4>
          Category <span class="en">CATEGORY </span>
        </h4>
        <div id="cat-list">
        </div>
      </div>
      <div class="group">
        <h4>
          Tag <span class="en">TAG </span>
        </h4>
        <div id="tag-list" style="display:flex; flex-wrap:wrap; gap:6px;">
        </div>
      </div>
      <div class="group">
        <h4>
          Year <span class="en">YEAR </span>
        </h4>
        <div id="year-list" style="display:flex; flex-wrap:wrap; gap:6px;">
          <span class="stamp berry" data-y="2026">2026 </span>
          <span class="stamp" data-y="2025">2025 </span>
          <span class="stamp" data-y="2024">2024 </span>
        </div>
      </div>
    </aside>
    <!-- Featured + thumbs -->
    <section>
      <div class="sect-title" style="margin: 0 0 14px;">
        <span class="muted sm">Showing: </span>
        <span class="stamp berry" id="cat-label">VIDEOS </span>
        <span class="grow"></span>
        <span class="muted sm" id="counter">1 / 4 </span>
        <button class="btn ghost" id="prev">&larr; </button>
        <button class="btn ghost" id="next">&rarr; </button>
      </div>
      <article class="featured-work" id="featured">
        <span class="click-badge" aria-hidden="true">Click!</span>
        <div class="imgph" style="aspect-ratio: 16/9;">
          <span class="lbl">[ featured ] </span>
        </div>
        <div class="ftitle">
          <h3 id="ftitle">
            Training Video
          </h3>
          <span class="meta" id="fmeta">Client / 2026.02 </span>
        </div>
        <p class="desc" id="fdesc">
        </p>
        <span class="corner1" id="c1"></span>
        <span class="corner2" id="c2"></span>
      </article>
      <div class="thumb-row" id="thumbs">
      </div>
    </section>
  </div>
</main>
<!-- Work detail popup — case-study style with chat + stats + points -->
<div class="work-modal" id="work-modal" hidden>
  <div class="work-modal-backdrop" data-close>
  </div>
  <article class="work-modal-card wm-big" role="dialog" aria-modal="true" aria-labelledby="wm-title">
    <button class="work-modal-close" data-close aria-label="Close">&times; </button>
    <div class="wm-grid">
      <!-- LEFT: artwork + decorative fill -->
      <div class="wm-left">
        <div class="work-modal-img imgph" id="wm-img">
          <span class="lbl" id="wm-imglbl">[ work ] </span>
        </div>
        <div class="wm-left-deco" aria-hidden="true">
          <div class="wm-deco-watermark">
            <span class="wm-deco-en">VeryBerry </span>
            <span class="wm-deco-jp">design studio </span>
          </div>
          <div class="wm-deco-berries">
            <span class="wm-deco-berry b1"></span>
            <span class="wm-deco-berry b2"></span>
            <span class="wm-deco-berry b3"></span>
          </div>
          <div class="wm-deco-tag">
            — curated case study —
          </div>
        </div>
      </div>
      <!-- RIGHT: scrollable case study -->
      <div class="wm-right">
        <div class="wm-head">
          <span class="work-modal-cat" id="wm-cat">WEB </span>
          <h3 class="work-modal-title" id="wm-title">
            Work Title
          </h3>
          <div class="work-modal-meta" id="wm-meta">
            Client
          </div>
        </div>
        <section class="wm-section">
          <h4 class="wm-section-h" data-en="overview">
            Project Overview
          </h4>
          <p class="wm-section-desc" id="wm-desc">
          </p>
        </section>

        <section class="wm-section" id="wm-ba-sec">
          <h4 class="wm-section-h" data-en="before / after">
            Before / After
          </h4>
          <div class="wm-ba" id="wm-ba">
            <div class="wm-ba-after imgph">
              <span class="lbl">[ After ] </span>
            </div>
            <div class="wm-ba-before imgph" id="wm-ba-before">
              <span class="lbl">[ Before ] </span>
            </div>
            <input type="range" min="0" max="100" value="50" class="wm-ba-slider" id="wm-ba-slider" aria-label="Before / After comparison"/>
            <div class="wm-ba-handle" id="wm-ba-handle">
              <span>&#x2039;&#x2016;&#x203a; </span>
            </div>
            <span class="wm-ba-tag wm-ba-tag-l">Before </span>
            <span class="wm-ba-tag wm-ba-tag-r">After </span>
          </div>
        </section>
        <section class="wm-section" id="wm-pal-sec">
          <h4 class="wm-section-h" data-en="color palette">
            Color Palette
          </h4>
          <div class="wm-palette" id="wm-palette">
          </div>
        </section>
        <section class="wm-section" id="wm-a11y-sec">
          <h4 class="wm-section-h" data-en="a11y score">
            Accessibility Score
          </h4>
          <div class="wm-a11y" id="wm-a11y">
          </div>
        </section>
        <section class="wm-section">
          <h4 class="wm-section-h" data-en="highlights">
            Highlights
          </h4>
          <div class="wm-points" id="wm-points">
          </div>
        </section>
        <section class="wm-section">
          <h4 class="wm-section-h" data-en="flow">
            Process
          </h4>
          <div class="wm-process" id="wm-process">
          </div>
        </section>
        <section class="wm-section">
          <h4 class="wm-section-h" data-en="tools">
            Tools Used
          </h4>
          <div class="wm-tools" id="wm-tools">
          </div>
        </section>
        <div class="wm-foot">
          <button class="btn" data-close>Close </button>
          <a class="btn berry" href="#" id="wm-url" target="_blank" rel="noopener" style="display:none;">View Site &rarr; </a>
          <a class="btn berry" href="/contact-en/" id="wm-consult-btn">Consult with this style &rarr; </a>
        </div>
      </div>
    </div>
  </article>
</div>
<script src="<?php echo MAYA_URI; ?>/js/app.js?v=2">
  </script>
  <script src="<?php echo MAYA_URI; ?>/js/works-data_en.js">
  </script>
  <script>
    (function () {
const CATS = [
{ id:'all',    label:'ALL',    n: WORKS_DATA.length },
{ id:'web',    label:'WEB',    n: WORKS_DATA.filter(w => w.cat === 'web').length },
{ id:'banner', label:'BANNER', n: WORKS_DATA.filter(w => w.cat === 'banner').length },
{ id:'movie',  label:'VIDEOS', n: WORKS_DATA.filter(w => w.cat === 'movie').length },
{ id:'flyer',  label:'FLYER',  n: WORKS_DATA.filter(w => w.cat === 'flyer').length },
{ id:'illust', label:'ILLUST', n: WORKS_DATA.filter(w => w.cat === 'illust').length },
{ id:'other',  label:'OTHER',  n: WORKS_DATA.filter(w => w.cat === 'other').length },
];
const TAGS = ['cosmetics','food','cafe','shop','illust','event'];

/* ===== Case detail data ===== */
const CASES = {
'Training Video': {
period:'2025', hours: 30, scope:'Video Editing',
desc:'Shot and edited a basketball training video. Raw, unfiltered energy filmed in a real garage.',
chat: [
{ who:'client', t:'I want a training video with a local feel.' },
{ who:'me', t:"A garage beats a polished studio for this — it's way more real!" },
],
palette: [],
points: [
{ t:'Snappy editing', d:'Cut to the tempo and movement for maximum watchability.' },
{ t:'BGM & sound effects', d:'Chose music that amplifies every move.' },
],
process: ['Music selection','Shooting','Editing','Review','Delivery'],
tools: ['Final Cut Pro X'],
},
'Basketball in Miyako': {
period:'2025', hours: 20, scope:'Video Editing',
desc:'Basketball training footage shot and edited in Miyako Island.',
chat: [
{ who:'client', t:'I want a video of us practicing basketball!' },
{ who:'me', t:"Let's add narration and give it a relaxed, flowing feel!" },
],
palette: [],
points: [
{ t:'Narration', d:'Paced the cuts to the narration so viewers get drawn into the play.' },
{ t:'Snappy editing', d:'Action-forward scenes cut to a lively rhythm.' },
],
process: ['Music selection','Shooting','Recording','Editing','Review','Delivery'],
tools: ['Final Cut Pro X'],
},
'Training in Miyako Ocean': {
period:'2025', hours: 20, scope:'Video Editing',
desc:'Training footage shot and edited against the backdrop of the Miyako Island ocean.',
chat: [
{ who:'client', t:'I want to capture training by the ocean in Miyako.' },
{ who:'me', t:'The sea behind you will look stunning. Let\'s find the perfect spot!' },
],
palette: [],
points: [
{ t:'Narrative flow', d:'Built a story arc from struggle to triumph through facial expressions.' },
{ t:'Immersive editing', d:'Synced body movement with the rhythm of the waves.' },
],
process: ['Music selection','Shooting','Editing','Review','Delivery'],
tools: ['Final Cut Pro X'],
},
'Whale Watching Banner (Concept)': {
period:'2025', hours: 10, scope:'Design Only',
desc:'A recruitment banner for a fictional whale watching tour company. Designed to convey the vastness of the ocean and the power of whales.',
palette: [],
points: [
{ t:'Ocean atmosphere', d:'Used blue tones to express the grandeur of the open sea.' },
{ t:'Visual hierarchy', d:'Led with the whale so the content is instantly clear.' },
],
process: ['Asset gathering','Framing','Design'],
tools: ['Figma'],
},
'Renovation Company Website': {
period:'2026.05', hours: 60, scope:'Design + Coding',
desc:'A landing page for a renovation company. Focused on a layout that drives inquiries and a design that builds trust.',
chat: [
{ who:'client', t:'I want a site that makes customers feel confident enough to reach out.' },
{ who:'me', t:"Let's put your completed projects and reviews front and centre to build credibility." },
],
palette: [],
points: [
{ t:'Full-bleed photography', d:'Full-bleed photos of completed projects communicate quality at a glance.' },
{ t:'Warm wood tones', d:'Warm brown palette evokes the comfort of a renovated home.' },
],
process: ['Hearing','Wireframe','Design','Coding','Review','Launch'],
tools: ['Figma','HTML/CSS','JavaScript'],
},
'Richard Newberry': {
period:'2026.05', hours: 15, scope:'Design Only',
desc:'Banner designs for Richard Newberry. Sharp and stylish to match his personal image.',
palette: [],
points: [
{ t:'Distinctive design', d:'Built a visual world true to his character.' },
{ t:'Multi-size rollout', d:'Five patterns created for SNS, web, and more.' },
],
process: ['Design','Review','Delivery'],
tools: ['Photoshop'],
},
'Pancake Banner (Concept)': {
period:'2025', hours: 8, scope:'Design Only',
desc:'A banner announcing a pancake menu for a cafe. Fluffy textures and appetite-inducing colours designed to make you click.',
palette: [],
points: [
{ t:'Colour', d:'Warm, slightly American-diner palette to evoke the deliciousness of pancakes.' },
{ t:'Simple, clear layout', d:'Designed so the message lands in an instant.' },
],
process: ['Asset gathering','Design','Review'],
tools: ['Photoshop'],
},
'Rice Bowl Banner (Concept)': {
period:'2025', hours: 8, scope:'Design Only',
desc:'A banner announcing a rice bowl menu for a restaurant. Designed to convey volume and satisfaction to drive footfall.',
palette: [],
points: [
{ t:'Bold composition', d:'Large food photography amplifies the sense of generous portions.' },
{ t:'Steam effect', d:'Added steam to bring that fresh-from-the-kitchen feel.' },
],
process: ['Asset gathering','Design','Review'],
tools: ['Photoshop'],
},
'Burger Banner (Concept)': {
period:'2025', hours: 8, scope:'Design Only',
desc:'An announcement banner for a burger shop. Pop and punch brought together for a fun American aesthetic.',
palette: [],
points: [
{ t:'Pop world', d:'Vivid colours express the energy of the brand.' },
{ t:'4-pattern rollout', d:'Different angles for A/B testing.' },
],
process: ['Asset gathering','Design','Review'],
tools: ['Photoshop'],
},
'Fermented Green Tea LP (Concept)': {
period:'2024', hours: 25, scope:'Design Only',
desc:'Landing page design for a fermented green tea product. Brought together a calm, natural, premium aesthetic.',
palette: [],
points: [
{ t:'Japanese modern aesthetic', d:'Green and white base conveys elegance and wellness.' },
{ t:'Structured layout', d:'Designed to answer the user\'s "why this?" in sequence.' },
],
process: ['Structure planning','Framing','Asset gathering','Design','Review'],
tools: ['Photoshop','Illustrator'],
},
'Housekeeping Banner (Concept)': {
period:'2024', hours: 8, scope:'Design Only',
desc:'A recruitment banner for a housekeeping service. Clean, reassuring design that communicates safety and convenience.',
palette: [],
points: [
{ t:'Clean colour palette', d:'White and soft tones express trust and peace of mind.' },
{ t:'Target-resonant copy', d:'Made it instantly clear what the ad is about.' },
],
process: ['Asset gathering','Design','Review'],
tools: ['Photoshop'],
},
'Job Change Banner': {
period:'2024', hours: 10, scope:'Design Only',
desc:'A set of 3 banners for a job-change service. Focused on eye-catching creative to improve click-through rate.',
palette: [],
points: [
{ t:'Illustration-forward', d:'Let the illustration do the talking rather than cramming in text.' },
{ t:'3-pattern rollout', d:'Different angles for A/B testing.' },
],
process: ['Asset gathering','Design','Review','Delivery'],
tools: ['Illustrator','Photoshop'],
},
'YouTube Thumbnail': {
period:'2024', hours: 8, scope:'Design Only',
desc:"Thumbnail design matching the channel's visual identity. Optimized for click-through rate.",
chat: [
{ who:'client', t:'I want thumbnails that feel like this!' },
{ who:'me', t:"We'll stay true to the channel's world while making sure they stop the scroll!" },
],
palette: [],
points: [
{ t:'Based on reference', d:'Created to match the mood the client shared.' },
{ t:'Consistent brand identity', d:'Used the channel\'s brand colours as a through-line for series cohesion.' },
],
process: ['Hearing','Asset gathering','Design','Review','Delivery'],
tools: ['Photoshop'],
},
'Diner Menu': {
period:'2024', hours: 12, scope:'Design Only',
desc:'Menu design for a diner. Balanced easy readability with an appetite-inducing look for a warm, welcoming result.',
chat: [
{ who:'client', t:'I want to fit all the existing menu items in.' },
{ who:'me', t:'We\'ll keep that Japanese warmth and organise everything so it\'s easy to scan!' },
],
palette: [],
points: [
{ t:'Warm aesthetic', d:'Palette and fonts suited to Japanese food create a unified atmosphere.' },
{ t:'Readable layout', d:'Menu items grouped by category for instant clarity.' },
],
process: ['Hearing','Design','Review','Print file delivery'],
tools: ['Photoshop'],
},
};

/* ===== Case detail data end ===== */

const DEFAULT_CASE = {
period:'—', hours: 24, scope:'—',
chat: [
{ who:'client', t:'Can I ask you about something like this?' },
{ who:'me', t:"Of course! Let me show you how we'd approach it." },
],
palette: [],
points: [
{ t:'Craftsmanship', d:"We carefully translated what you had in mind into something real." },
],
process: ['Hearing','Production','Review','Delivery'],
tools: ['Figma'],
};

/* Works data is managed in js/works-data_en.js */
/* ===== Category grouping ===== */
const WORKS = { all: WORKS_DATA };
['web','movie','banner','flyer','illust','other'].forEach(cat => {
  WORKS[cat] = WORKS_DATA.filter(w => w.cat === cat);
});

let curCat ='all';
let curIdx = 0;

/* Reflect URL parameters (coming from index_en.php "View Details") */
(function () {
const p = new URLSearchParams(window.location.search);
const pCat = p.get('cat');
const pTtl = p.get('ttl');
if (pCat && WORKS[pCat]) {
  curCat = pCat;
  if (pTtl) {
    const idx = WORKS[pCat].findIndex(w => w.ttl === pTtl);
    if (idx >= 0) curIdx = idx;
  }
}
})();

const cl = document.getElementById('cat-list');
CATS.forEach(c => {
const div = document.createElement('div');
div.className = 'opt' + (c.id === curCat ? ' on' : '');
div.dataset.cat = c.id;
div.innerHTML = `<span class="dot"></span><span>${c.label}</span><span class="count">${c.n}</span>`;
cl.append(div);
});
cl.addEventListener('click', e => {
const opt = e.target.closest('.opt');
if (!opt) return;
cl.querySelectorAll('.opt').forEach(o => o.classList.remove('on'));
opt.classList.add('on');
curCat = opt.dataset.cat;
curIdx = 0;
renderFeatured();
renderThumbs();
});

const tl = document.getElementById('tag-list');
TAGS.forEach(t => {
const s = document.createElement('span');
s.className ='stamp';
s.textContent ='#' + t;
s.style.cursor ='pointer';
tl.append(s);
});

const modal = document.getElementById('work-modal');
function openModal(w) {
const c = CASES[w.ttl] || DEFAULT_CASE;
document.getElementById('wm-cat').textContent = catLabel(curCat);
document.getElementById('wm-title').textContent = w.ttl;
document.getElementById('wm-meta').textContent = w.meta;
document.getElementById('wm-desc').innerHTML = c.desc || w.desc;
const wmImg = document.getElementById('wm-img');
if (w.youtube) {
  wmImg.classList.add('has-img');
  wmImg.classList.remove('multi-img');
  wmImg.innerHTML = `<div style="position:relative;width:100%;padding-top:56.25%;"><iframe src="https://www.youtube.com/embed/${w.youtube}" style="position:absolute;inset:0;width:100%;height:100%;border:0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>`;
} else if (w.imgs && w.imgs.length) {
  wmImg.classList.add('has-img', 'multi-img');
  wmImg.innerHTML = w.imgs.map(src => `<img src="${src}" alt="" style="pointer-events:none;">`).join('');
} else if (w.img) {
  wmImg.classList.add('has-img');
  wmImg.classList.remove('multi-img');
  wmImg.innerHTML = `<img src="${w.img}" alt="" style="pointer-events:none;">`;
} else {
  wmImg.classList.remove('has-img', 'multi-img');
  wmImg.innerHTML = `<span class="lbl" id="wm-imglbl">[ ${curCat} ]</span>`;
}

const baSec = document.getElementById('wm-ba-sec');
if (c.ba && c.ba.hasBA) {
baSec.style.display ='block';
const slider = document.getElementById('wm-ba-slider');
const before = document.getElementById('wm-ba-before');
const handle = document.getElementById('wm-ba-handle');
const onSlide = () => {
const p = slider.value;
before.style.clipPath = `inset(0 ${100 - p}% 0 0)`;
handle.style.left = `${p}%`;
};
slider.value = 50; onSlide();
slider.oninput = onSlide;
} else {
baSec.style.display ='none';
}

const palSec = document.getElementById('wm-pal-sec');
if (c.palette && c.palette.length) {
palSec.style.display ='block';
document.getElementById('wm-palette').innerHTML = c.palette.map(h =>
`
    <div class="wm-swatch" style="--c:${h}">
    <span class="wm-swatch-h">${h.toUpperCase()}</span>
    </div>
    `
).join('');
} else {
palSec.style.display ='none';
}

const a11ySec = document.getElementById('wm-a11y-sec');
if (c.a11y && c.a11y.length) {
a11ySec.style.display ='block';
document.getElementById('wm-a11y').innerHTML = c.a11y.map(a => {
const color = a.v >= 90 ?'#3F6B34' : a.v >= 70 ?'#FFC971' :'#D04A6C';
const circumference = 2 * Math.PI * 22;
const dash = (a.v / 100) * circumference;
return `
    <div class="wm-gauge">
    <svg viewBox="0 0 60 60" width="60" height="60">
    <circle cx="30" cy="30" r="22" fill="none" stroke="rgba(0,0,0,.06)" stroke-width="6"/>
    <circle cx="30" cy="30" r="22" fill="none" stroke="${color}" stroke-width="6"
stroke-dasharray="${dash} ${circumference - dash}" stroke-linecap="round"
transform="rotate(-90 30 30)"/>
    <text x="30" y="35" text-anchor="middle" font-size="14" font-weight="700" fill="${color}">
    ${a.v}
    </text>
    </svg>
    <div class="wm-gauge-l">
    ${a.l}
    </div>
    </div>
    `;
}).join('');
} else {
a11ySec.style.display ='none';
}

const pointsEl = document.getElementById('wm-points');
pointsEl.className ='wm-points wm-points-postit';
pointsEl.innerHTML = c.points.map((p, i) => {
const n = String(i + 1).padStart(2,'0');
return `
    <div class="wm-point">
    <div class="wm-point-postit">
    <span class="wm-point-pin"></span>
    <div class="wm-point-n">
    ${n}
    </div>
    <div class="wm-point-t">
    ${p.t}
    </div>
    <div class="wm-point-d">
    ${p.d}
    </div>
    </div>
    </div>
    `;
}).join('');

const procEl = document.getElementById('wm-process');
procEl.className ='wm-process wm-process-clean';
procEl.innerHTML = c.process.map((s, i) => {
const n = String(i + 1).padStart(2,'0');
return `
    <div class="wm-step">
    <div class="wm-step-n">
    ${n}
    </div>
    <div class="wm-step-l">
    ${s}
    </div>
    </div>
    `;
}).join('');

const toolsEl = document.getElementById('wm-tools');
toolsEl.className ='wm-tools wm-tools-clean';
toolsEl.innerHTML = c.tools.map(t => `<span class="wm-tool">${t}</span>`).join('');

const wmUrl = document.getElementById('wm-url');
if (w.url) { wmUrl.href = w.url; wmUrl.style.display = ''; } else { wmUrl.style.display = 'none'; }

const consultBtn = document.getElementById('wm-consult-btn');
if (consultBtn) {
  consultBtn.onclick = function (e) {
    e.preventDefault();
    sessionStorage.setItem('works_consult', JSON.stringify({
      title:    w.ttl,
      category: catLabel(curCat),
    }));
    location.href = '/contact-en/';
  };
}

modal.hidden = false;
requestAnimationFrame(() => modal.classList.add('open'));
document.body.style.overflow ='hidden';
const right = modal.querySelector('.wm-right');
if (right) right.scrollTop = 0;
}
function closeModal() {
modal.classList.remove('open');
document.body.style.overflow ='';
setTimeout(() => { modal.hidden = true; }, 250);
}
modal.addEventListener('click', (e) => { if (e.target.closest('[data-close]')) closeModal(); });
document.addEventListener('keydown', (e) => { if (e.key ==='Escape' && !modal.hidden) closeModal(); });

function renderFeatured() {
const list = WORKS[curCat] || [];
if (!list.length) return;
const w = list[curIdx];
document.getElementById('counter').textContent = `${curIdx + 1} / ${list.length}`;
document.getElementById('ftitle').textContent = w.ttl;
document.getElementById('fmeta').textContent = w.meta;
document.getElementById('fdesc').textContent = w.desc;
document.getElementById('cat-label').textContent = catLabel(curCat);
document.getElementById('c1').innerHTML = BB.ICONS.berry(80,'var(--grape)');
document.getElementById('c2').innerHTML = BB.ICONS.berry(64,'var(--berry)');
const f = document.getElementById('featured');
const fImgPh = f.querySelector('.imgph');
if (fImgPh) {
  if (w.thumb) {
    fImgPh.style.backgroundImage = `url('${w.thumb}')`;
    fImgPh.style.backgroundSize = 'cover';
    fImgPh.style.backgroundPosition = 'center';
    fImgPh.innerHTML = '';
  } else {
    fImgPh.style.backgroundImage = '';
    fImgPh.innerHTML = '<span class="lbl">[ featured ]</span>';
  }
}
f.style.animation ='none'; void f.offsetWidth;
f.style.animation ='fadeUp .35s ease-out';
f.onclick = () => openModal(w);
f.style.cursor ='pointer';
}
function renderThumbs() {
const list = WORKS[curCat] || [];
const t = document.getElementById('thumbs');
t.innerHTML ='';
list.forEach((w, i) => {
const el = document.createElement('div');
el.className ='t' + (i === curIdx ?' on' :'');
el.dataset.i = i;
el.innerHTML = `
    <div class="imgph" ${w.thumb ? `style="background-image:url('${w.thumb}');background-size:cover;background-position:center;"` : ''}>
    ${w.thumb ? '' : `<span class="lbl">${i + 1}</span>`}
    </div>
    <div class="cap">
    ${w.ttl}
    </div>
    `;
t.append(el);
});
t.querySelectorAll('.t').forEach(el => el.addEventListener('click', () => {
curIdx = parseInt(el.dataset.i, 10);
renderFeatured();
t.querySelectorAll('.t').forEach(x => x.classList.toggle('on', x === el));
}));
}

document.getElementById('prev').addEventListener('click', () => {
const list = WORKS[curCat] || [];
curIdx = (curIdx - 1 + list.length) % list.length;
renderFeatured(); renderThumbs();
});
document.getElementById('next').addEventListener('click', () => {
const list = WORKS[curCat] || [];
curIdx = (curIdx + 1) % list.length;
renderFeatured(); renderThumbs();
});

setInterval(() => {
if (document.hidden) return;
const list = WORKS[curCat] || [];
curIdx = (curIdx + 1) % list.length;
renderFeatured(); renderThumbs();
}, 7000);

renderFeatured();
renderThumbs();
})();
    </script>
      <script>
          (function () {
  const mouseR = document.querySelector('.works-mouse');
  const mouseL = document.querySelector('.works-mouse2');
  if (!mouseR || !mouseL) return;

  const rightAnims = [
    { name: 'mousePeekR1', dur: '10s'  },
    { name: 'mousePeekR2', dur: '12s'  },
    { name: 'mousePeekR3', dur: '9s'   },
  ];
  const leftAnims = [
    { name: 'mousePeekL1', dur: '11s'  },
    { name: 'mousePeekL2', dur: '13s'  },
    { name: 'mousePeekL3', dur: '10s'  },
  ];

  let lastR = -1, lastL = -1;

  function pick(anims, last) {
    let idx;
    do { idx = Math.floor(Math.random() * anims.length); } while (idx === last && anims.length > 1);
    return idx;
  }

  function runAnim(el, anim, onDone) {
    el.style.animation = 'none';
    void el.offsetWidth;
    el.style.animation = anim.name + ' ' + anim.dur + ' ease-in-out 1 forwards';
    el.addEventListener('animationend', onDone, { once: true });
  }

  function startRight() {
    const idx = pick(rightAnims, lastR);
    lastR = idx;
    runAnim(mouseR, rightAnims[idx], function () {
      mouseR.style.animation = 'none';
      startLeft();
    });
  }

  function startLeft() {
    const idx = pick(leftAnims, lastL);
    lastL = idx;
    runAnim(mouseL, leftAnims[idx], function () {
      mouseL.style.animation = 'none';
      setTimeout(startRight, 15000);
    });
  }

  setTimeout(startRight, 10000);
})();
          </script>
          <?php include "footer_en.php"; ?>
