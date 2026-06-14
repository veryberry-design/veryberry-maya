<?php
/*
Template Name: FAQ (EN)
*/
$pageTitle = "VeryBerry — FAQ & Reviews";
$currentPage = "faq";
include "header_en.php";
?>
<main class="wrap">
  <div class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">
      — help &amp; voices —
    </div>
    <h2>
      <span class="scrib">FAQ &amp; Client Reviews </span>
    </h2>
    <p class="muted sm" style="max-width: 480px; margin: 18px auto 0; line-height: 2;">
      Answers to common questions and concerns before you reach out.
    </p>
  </div>
  <!-- For First-Timers cork board -->
  <section class="first-time-section">
    <div class="bboard">
      <div class="bboard-inner">
        <div class="bboard-header-note">
          <span class="bboard-pin bboard-pin-rose" aria-hidden="true"></span>
          <span class="bboard-label-en">— for first-timers — </span>
          <h3 class="bboard-ttl">
            For First-Timers
          </h3>
          <p class="bboard-intro">
            "I don't know where to start." That's the most common thing we hear.<br/>
            No design knowledge needed —<br/>
            we'll go through it together in three easy steps.
          </p>
        </div>
        <div class="bboard-notes">
          <div class="bboard-note bboard-note-a">
            <span class="bboard-pin bboard-pin-rose" aria-hidden="true"></span>
            <span class="ft-n">01 </span>
            <span class="ft-en">say hi </span>
            <span class="ft-jp">Say Hi </span>
            <p>
              Tell us what you want, what's unclear — anything is fine.
            </p>
          </div>
          <div class="bboard-note bboard-note-b">
            <span class="bboard-pin bboard-pin-lavender" aria-hidden="true"></span>
            <span class="ft-n">02 </span>
            <span class="ft-en">talk together </span>
            <span class="ft-jp">Talk Together </span>
            <p>
              30 min on Zoom or via chat —<br/>we'll shape your ideas together.
            </p>
          </div>
          <div class="bboard-note bboard-note-c">
            <span class="bboard-pin bboard-pin-grape" aria-hidden="true"></span>
            <span class="ft-n">03 </span>
            <span class="ft-en">plan &amp; quote </span>
            <span class="ft-jp">Get a Quote </span>
            <p>
              We'll send costs and schedule in writing.<br/>You can decide from there.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ -->
  <section class="faq-section" style="margin-top: 100px;">
    <div class="sect-title sect-title-centered" style="margin-top: 30px;">
      <div class="en kicker-en">
        — questions —
      </div>
      <h3>
        <span class="scrib">Frequently Asked Questions </span>
      </h3>
    </div>
    <div class="faq-stack">
      <div class="faq-cats" id="faq-cats">
        <button class="on" data-cat="all">ALL </button>
        <button data-cat="price">Pricing </button>
        <button data-cat="due">Timeline </button>
        <button data-cat="delivery">Delivery </button>
        <button data-cat="other">Other </button>
      </div>
      <div class="faq-list" id="faq-list">
      </div>
    </div>
  </section>
  <!-- Quick pre-contact hearing -->
  <section class="checklist-section" style="margin-top: 100px;">
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">— before you ask —</div>
      <h3><span class="scrib">Quick Pre-Contact Hearing</span></h3>
      <p class="muted sm" style="max-width: 480px; margin: 12px auto 0;">
        Just select — no typing needed! Your answers carry over to the contact form.<br>
        Skip anything you're unsure about.
      </p>
    </div>

    <!-- Progress bar -->
    <div class="pre-progress" id="pre-progress">
      <div class="pre-progress-bar" id="pre-progress-bar" style="width:0%"></div>
    </div>
    <span class="pre-progress-label" id="pre-progress-label">0 / 4 items filled in</span>

    <div class="checklist-card">
      <form id="pre-hearing-form" novalidate>

        <!-- Q1: What to create -->
        <div class="ph-item" data-key="kind">
          <div class="ph-q">
            <span class="ph-num">01</span>
            <span class="ph-label">What would you like to create?</span>
            <span class="ph-tag">Multiple OK</span>
          </div>
          <div class="ph-check-row">
            <label class="ph-check"><input type="checkbox" name="kind" value="Website"><span class="ph-cb">Website</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="LP (Landing Page)"><span class="ph-cb">LP</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="Banner"><span class="ph-cb">Banner</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="Flyer"><span class="ph-cb">Flyer</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="Logo"><span class="ph-cb">Logo</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="Not decided yet"><span class="ph-cb">Not decided yet</span></label>
          </div>
        </div>

        <!-- Q2: Main goal -->
        <div class="ph-item" data-key="purpose">
          <div class="ph-q">
            <span class="ph-num">02</span>
            <span class="ph-label">What is your main goal?</span>
          </div>
          <select name="purpose" class="ph-select">
            <option value="">— Please select —</option>
            <option>Increase inquiries / attract more customers</option>
            <option>Build trust in our brand / service</option>
            <option>Recruitment / staff hiring</option>
            <option>Renew an existing website</option>
            <option>Connect with SNS or flyers</option>
            <option>Not sure yet</option>
          </select>
        </div>

        <!-- Q3: Target audience -->
        <div class="ph-item" data-key="target">
          <div class="ph-q">
            <span class="ph-num">03</span>
            <span class="ph-label">Who is your target audience?</span>
            <span class="ph-tag">Multiple OK</span>
          </div>
          <div class="ph-check-row">
            <label class="ph-check"><input type="checkbox" name="target" value="Local / general customers"><span class="ph-cb">Local / general customers</span></label>
            <label class="ph-check"><input type="checkbox" name="target" value="Businesses / corporations"><span class="ph-cb">Businesses / corporations</span></label>
            <label class="ph-check"><input type="checkbox" name="target" value="Job seekers / staff candidates"><span class="ph-cb">Job seekers / staff candidates</span></label>
            <label class="ph-check"><input type="checkbox" name="target" value="SNS followers / fans"><span class="ph-cb">SNS followers / fans</span></label>
            <label class="ph-check"><input type="checkbox" name="target" value="Not decided yet"><span class="ph-cb">Not decided yet</span></label>
          </div>
        </div>

        <!-- Q4: Budget -->
        <div class="ph-item" data-key="budget">
          <div class="ph-q">
            <span class="ph-num">04</span>
            <span class="ph-label">Approximate budget?</span>
          </div>
          <select name="budget" class="ph-select">
            <option value="">— Please select —</option>
            <option>¥150,000–300,000</option>
            <option>¥300,000–500,000</option>
            <option>¥500,000+</option>
            <option>Not decided / Let's discuss</option>
          </select>
        </div>

      </form>

      <div class="checklist-foot">
        <span class="muted sm" id="ph-filled-msg">Your answers will carry over directly to the contact form</span>
        <a class="btn berry lg" id="ph-to-contact" href="/contact-en/">
          &rarr; Continue to Contact Form &rarr;
        </a>
      </div>
    </div>
  </section>
  <!-- Just Talking is Fine CTA banner -->
  <section class="casual-cta-section" style="margin-top: 100px;">
    <div class="casual-cta">
      <div class="casual-cta-deco" aria-hidden="true">
      </div>
      <div class="casual-cta-body">
        <span class="casual-cta-tag">— just talking is fine — </span>
        <h3 class="casual-cta-ttl">
          Just Talking is Fine
        </h3>
        <p class="casual-cta-msg">
          "Not sure if I'm ready to commit." "Still just an idea." That's totally fine. <br/>
          Let's have a casual chat and figure it out together. No pressure.
        </p>
        <div class="casual-cta-btns">
          <a class="btn berry lg" href="/contact-en/">&rarr; Let's Have a Casual Chat &rarr; </a>
          <a class="btn lg" href="/menu-en/" style="background-color: white;">View Pricing </a>
        </div>
      </div>
    </div>
  </section>
  <div style="text-align:center; margin-top:50px;">
    <p class="muted sm">
      If you still have questions, feel free to reach out.
    </p>
    <a class="btn berry lg" href="/contact-en/">Contact Us &rarr;</a>
  </div>
</main>
<script src="<?php echo MAYA_URI; ?>/js/app.js?v=2">
  </script>
  <script>
    (function () {
const FAQ = [
  { cat:'price', q:'What is the minimum order size?', a:'We accept orders from a single banner. Feel free to reach out.' },
  { cat:'price', q:'Is the estimate free?', a:"Yes, estimates are always free. We'll get back to you within 2 business days." },
  { cat:'price', q:'When do I pay?', a:'We require 50% upfront at contract and the remaining 50% upon delivery.' },
  { cat:'due',  q:'How long does production take?', a:'It depends on scope — roughly 2 weeks for a single LP and about 1 month for a 5-page site.' },
  { cat:'due',  q:'Can you handle urgent requests?', a:"If our schedule allows, yes. A rush fee may apply." },
  { cat:'delivery', q:'Can I choose the delivery format?', a:'Yes — AI, PSD, Figma, mp4, and more. We adapt to your needs.' },
  { cat:'delivery', q:'How many revisions are included?', a:'It depends on your plan. The PREMIUM plan includes unlimited revisions.' },
  { cat:'other', q:'Can I work with you fully online?', a:'Yes, we can meet via Zoom from anywhere in Japan.' },
  { cat:'other', q:'Do you handle international projects?', a:"We have overseas project experience. We'll coordinate time zones." },
];

const VOICES = [
  { who:'Cafe K', role:'Website Design', s:5, q:'"The sweetness came through and it was so easy to use! You captured our shop\'s vibe perfectly."' },
  { who:'Hair Salon H', role:'Banner Set', s:5, q:'"We request monthly campaign banners and our click rate has noticeably improved."' },
  { who:'Restaurant M', role:'Promo Video', s:4, q:'"A 30-second video that really conveys our atmosphere. Thank you for all the rounds of proposals."' },
  { who:'Accessories R', role:'Flyer + Logo', s:5, q:'"You were there with me every step of my first store opening. You\'re like a lucky charm."' },
];

const list = document.getElementById('faq-list');
let cat ='all';

function renderFAQ() {
list.innerHTML ='';
const filtered = FAQ.filter(f => cat ==='all' || f.cat === cat);
if (!filtered.length) {
list.innerHTML = `
    <div class="muted" style="padding: 14px;">
    No matching questions found. <a href="/contact-en/" style="color:var(--berry);">Contact us directly &rarr;</a>
    </div>
    `;
return;
}
filtered.forEach((f, i) => {
const d = document.createElement('details');
d.className ='faq-item';
if (i === 0 && cat !=='all') d.open = true;
d.innerHTML = `
    <summary>
    <span class="b">${BB.ICONS.berry(18,'var(--berry)')}</span>
<span class="grow">${f.q}</span>
<span class="toggle">+</span>
    </summary>
    <div class="ans">
    ${f.a}
    </div>
    `;
list.append(d);
});
}

document.getElementById('faq-cats').addEventListener('click', e => {
const b = e.target.closest('button');
if (!b) return;
document.getElementById('faq-cats').querySelectorAll('button').forEach(x => x.classList.remove('on'));
b.classList.add('on');
cat = b.dataset.cat;
renderFAQ();
});

const vf = document.getElementById('voice-feature');
const dots = document.getElementById('voice-dots');
const vlist= document.getElementById('voice-list');
let vi = 0;

function renderVoiceFeature() {
if (!vf) return;
const v = VOICES[vi];
vf.innerHTML = `
    <div class="who">
    <div class="imgph">
    <span class="lbl">${v.who.slice(0, 2)}</span>
    </div>
    <div>
    <h4>
    ${v.who}
    </h4>
    <div class="role">
    / ${v.role}
    </div>
    <div class="stars">
    ${'★'.repeat(v.s)}${'☆'.repeat(5 - v.s)}
    </div>
    </div>
    </div>
    <blockquote>
    ${v.q}
    </blockquote>
    <span class="corner">${BB.ICONS.berry(90,'var(--grape)')}</span>`;
if (dots) {
dots.innerHTML ='';
VOICES.forEach((_, i) => {
const s = document.createElement('span');
if (i === vi) s.className ='on';
s.addEventListener('click', () => { vi = i; renderVoiceFeature(); });
dots.append(s);
});
}
}

function renderVoiceList() {
if (!vlist) return;
vlist.innerHTML ='';
VOICES.forEach((v, i) => {
if (i === vi) return;
const row = document.createElement('div');
row.className ='v';
row.innerHTML = `
    <div class="imgph">
    <span class="lbl"></span>
    </div>
    <span class="name">${v.who}</span>
<span class="role">/ ${v.role}</span>
<span class="stars">${'★'.repeat(v.s)}</span>`;
row.addEventListener('click', () => { vi = i; renderVoiceFeature(); renderVoiceList(); });
row.style.cursor ='pointer';
vlist.append(row);
});
}

setInterval(() => {
if (document.hidden) return;
vi = (vi + 1) % VOICES.length;
renderVoiceFeature(); renderVoiceList();
}, 6000);

renderFAQ();
renderVoiceFeature();
renderVoiceList();

// ===== Quick hearing progress bar & contact.php carry-over =====
(function () {
  const form = document.getElementById('pre-hearing-form');
  if (!form) return;

  const bar   = document.getElementById('pre-progress-bar');
  const label = document.getElementById('pre-progress-label');
  const TOTAL_ITEMS = 4;

  function countFilled() {
    let count = 0;
    ['kind', 'target'].forEach(name => {
      if (form.querySelector(`input[name="${name}"]:checked`)) count++;
    });
    ['purpose', 'budget'].forEach(name => {
      const el = form.querySelector(`select[name="${name}"]`);
      if (el && el.value) count++;
    });
    return count;
  }

  function updateProgress() {
    const filled = countFilled();
    const pct = Math.round((filled / TOTAL_ITEMS) * 100);
    bar.style.width = pct + '%';
    label.textContent = `${filled} / ${TOTAL_ITEMS} items filled in`;
  }

  form.addEventListener('change', updateProgress);
  updateProgress();

  document.getElementById('ph-to-contact').addEventListener('click', function (e) {
    e.preventDefault();

    const getChecked = (name) =>
      [...form.querySelectorAll(`input[name="${name}"]:checked`)].map(i => i.value);

    const getSelect = (name) => {
      const el = form.querySelector(`select[name="${name}"]`);
      return el ? el.value : '';
    };

    const data = {
      kind:    getChecked('kind'),
      purpose: getSelect('purpose'),
      target:  getChecked('target'),
      budget:  getSelect('budget'),
    };

    sessionStorage.setItem('pre_hearing', JSON.stringify(data));
    location.href = '/contact-en/';
  });
})();

})();
    </script>
    <?php include "footer_en.php"; ?>
