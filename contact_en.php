<?php
/*
Template Name: Contact (EN)
*/
$pageTitle = "VeryBerry — Contact";
$currentPage = "contact";
include "header_en.php";
?>
<main class="wrap">
  <div class="sect-title sect-title-centered" style="margin-top: 100px;">
    <span class="en">— contact </span>
    <h2>
      <span class="scrib">Contact </span>
    </h2>
  </div>
  <div class="contact-shell">
    <p class="intro">
      Feel free to reach out for consultations or quotes. <br/>
      We'll get back to you within 2 business days.
    </p>

    <!-- Progress bar -->
    <div class="cf-sticky-bar" id="cf-sticky-bar">
      <div class="cf-sticky-steps">
        <span class="cf-ss active" data-step="1">01<small>Request</small></span>
        <span class="cf-ss" data-step="2">02<small>Current</small></span>
        <span class="cf-ss" data-step="3">03<small>Design</small></span>
        <span class="cf-ss" data-step="4">04<small>Budget</small></span>
        <span class="cf-ss" data-step="5">05<small>Details</small></span>
        <span class="cf-ss" data-step="6">06<small>Contact</small></span>
      </div>
      <div class="cf-sticky-track">
        <div class="cf-sticky-fill" id="cf-sticky-fill" style="width:0%"></div>
      </div>
    </div>

    <form id="cf" class="blob contact-long" novalidate>

      <!-- Hearing sheet carry-over banner -->
      <div class="inherit-banner" id="inherit-banner" hidden>
        <span class="inherit-icon material-symbols-outlined">check_circle</span>
        <span class="inherit-msg">Your hearing sheet answers have been carried over! Please review before sending.</span>
      </div>

      <!-- STEP 01: What to create + Goal -->
      <div class="cf-section cf-active" data-step="1">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 01 / 06</span>
          <h3 class="cf-section-ttl">What would you like to create?</h3>
        </div>
        <div class="form-field">
          <label>What to create <span class="req">Required</span></label>
          <div class="check-row" id="cf-kind-row">
            <label><input type="checkbox" name="kind" value="Website"><span class="cb-box"></span>Website</label>
            <label><input type="checkbox" name="kind" value="LP (Landing Page)"><span class="cb-box"></span>LP</label>
            <label><input type="checkbox" name="kind" value="Banner"><span class="cb-box"></span>Banner</label>
            <label><input type="checkbox" name="kind" value="Video"><span class="cb-box"></span>Video</label>
            <label><input type="checkbox" name="kind" value="Flyer"><span class="cb-box"></span>Flyer</label>
            <label><input type="checkbox" name="kind" value="Logo"><span class="cb-box"></span>Logo</label>
            <label><input type="checkbox" name="kind" value="Illustration"><span class="cb-box"></span>Illustration</label>
            <label><input type="checkbox" name="kind" value="Other" id="kind-other"><span class="cb-box"></span>Other</label>
          </div>
          <div id="kind-other-wrap" style="display:none; margin-top:10px;">
            <input type="text" name="kind_other" id="kind-other-text" placeholder="Please describe what you have in mind">
          </div>
        </div>
        <div class="form-field">
          <label>What is your main goal? <span class="req">Required</span></label>
          <select name="purpose" id="cf-purpose">
            <option value="">— Please select —</option>
            <option>Increase inquiries / attract more customers</option>
            <option>Build trust in our brand / service</option>
            <option>Recruitment / staff hiring</option>
            <option>Renew an existing website</option>
            <option>Connect with SNS or flyers</option>
            <option>Not sure yet</option>
          </select>
        </div>
        <div class="cf-nav">
          <span></span>
          <button type="button" class="btn berry cf-next">Next &rarr;</button>
        </div>
      </div>

      <!-- STEP 02: Existing site + Target -->
      <div class="cf-section" data-step="2">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 02 / 06</span>
          <h3 class="cf-section-ttl">About your current site and target audience</h3>
        </div>
        <div class="form-field">
          <label>Do you already have a website? <span class="opt">Optional</span></label>
          <div class="check-row check-row-col">
            <label><input type="radio" name="existing" value="Yes (Renewal)" id="existing-yes"><span class="cb-box"></span>Yes (Renewal)</label>
            <label><input type="radio" name="existing" value="No (New)"><span class="cb-box"></span>No (New)</label>
            <label><input type="radio" name="existing" value="Not decided"><span class="cb-box"></span>Not decided</label>
          </div>
          <div class="form-field" id="existing-url-wrap" style="display:none; margin-top:12px; margin-bottom:0;">
            <label for="existing-url" style="font-size:12px; color:#888;">Current site URL <span class="opt">Optional</span></label>
            <input type="url" id="existing-url" name="existing_url" placeholder="https://example.com">
          </div>
        </div>
        <div class="form-field">
          <label>Who is your target audience? <span class="opt">Optional</span></label>
          <div class="check-row">
            <label><input type="checkbox" name="target" value="Local / general customers"><span class="cb-box"></span>Local / general customers</label>
            <label><input type="checkbox" name="target" value="Businesses / corporations"><span class="cb-box"></span>Businesses / corporations</label>
            <label><input type="checkbox" name="target" value="Job seekers / staff candidates"><span class="cb-box"></span>Job seekers / staff candidates</label>
            <label><input type="checkbox" name="target" value="SNS followers / fans"><span class="cb-box"></span>SNS followers / fans</label>
            <label><input type="checkbox" name="target" value="Not decided yet"><span class="cb-box"></span>Not decided yet</label>
          </div>
        </div>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">&larr; Back</button>
          <button type="button" class="btn berry cf-next">Next &rarr;</button>
        </div>
      </div>

      <!-- STEP 03: Design + Reference URL -->
      <div class="cf-section" data-step="3">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 03 / 06</span>
          <h3 class="cf-section-ttl">What design style are you going for?</h3>
        </div>
        <div class="form-field">
          <label>Preferred design style? (Multiple OK) <span class="opt">Optional</span></label>
          <div class="check-row">
            <label><input type="checkbox" name="tone" value="Simple &amp; clean"><span class="cb-box"></span>Simple &amp; clean</label>
            <label><input type="checkbox" name="tone" value="Cute &amp; soft"><span class="cb-box"></span>Cute &amp; soft</label>
            <label><input type="checkbox" name="tone" value="Luxury &amp; refined"><span class="cb-box"></span>Luxury &amp; refined</label>
            <label><input type="checkbox" name="tone" value="Friendly &amp; warm"><span class="cb-box"></span>Friendly &amp; warm</label>
            <label><input type="checkbox" name="tone" value="Stylish &amp; cool"><span class="cb-box"></span>Stylish &amp; cool</label>
            <label><input type="checkbox" name="tone" value="Your call"><span class="cb-box"></span>Your call</label>
          </div>
        </div>
        <div class="form-field">
          <label>Reference URL <span class="opt">Optional</span></label>
          <input type="text" name="ref" id="cf-ref" placeholder="https://... / Share a URL that captures the vibe you're going for"/>
        </div>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">&larr; Back</button>
          <button type="button" class="btn berry cf-next">Next &rarr;</button>
        </div>
      </div>

      <!-- STEP 04: Budget + Timeline + Assets -->
      <div class="cf-section" data-step="4">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 04 / 06</span>
          <h3 class="cf-section-ttl">Schedule and budget</h3>
        </div>
        <div class="field-row">
          <div class="form-field">
            <label>Approximate budget <span class="opt">Optional</span></label>
            <select name="budget" id="cf-budget">
              <option value="">— Select —</option>
              <option>¥150,000–300,000</option>
              <option>¥300,000–500,000</option>
              <option>¥500,000+</option>
              <option>Not decided / Let's discuss</option>
            </select>
          </div>
          <div class="form-field">
            <label>Target launch date <span class="opt">Optional</span></label>
            <select name="due" id="cf-due">
              <option value="">— Select —</option>
              <option>Within 1 month (urgent)</option>
              <option>Within 2–3 months</option>
              <option>Within 6 months</option>
              <option>No rush / flexible</option>
            </select>
          </div>
        </div>
        <div class="form-field">
          <label>Asset availability (Multiple OK) <span class="opt">Optional</span></label>
          <div class="check-row">
            <label><input type="checkbox" name="assets" value="Logo file available"><span class="cb-box"></span>Logo file available</label>
            <label><input type="checkbox" name="assets" value="Photos / images available"><span class="cb-box"></span>Photos / images available</label>
            <label><input type="checkbox" name="assets" value="Text / copy available"><span class="cb-box"></span>Text / copy available</label>
            <label><input type="checkbox" name="assets" value="Reference sites available"><span class="cb-box"></span>Reference sites available</label>
            <label><input type="checkbox" name="assets" value="Nothing yet (will prepare)"><span class="cb-box"></span>Nothing yet (will prepare)</label>
          </div>
        </div>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">&larr; Back</button>
          <button type="button" class="btn berry cf-next">Next &rarr;</button>
        </div>
      </div>

      <!-- STEP 05: Message + Things to avoid -->
      <div class="cf-section" data-step="5">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 05 / 06</span>
          <h3 class="cf-section-ttl">Tell us more</h3>
        </div>
        <div class="form-field">
          <label>Message <span class="req">Required</span></label>
          <textarea name="msg" id="cf-msg" placeholder="What you want, the vibe, the background — a rough idea is totally fine."></textarea>
          <p class="muted tiny" style="margin-top:6px;">* If hearing sheet answers exist, they will be inserted automatically</p>
        </div>
        <div class="form-field">
          <label>Things to avoid / design you dislike <span class="opt">Optional</span></label>
          <textarea name="ng" placeholder="e.g. I don't like a cluttered look, please avoid pink, etc."></textarea>
        </div>
        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">&larr; Back</button>
          <button type="button" class="btn berry cf-next">Next &rarr;</button>
        </div>
      </div>

      <!-- STEP 06: Contact info -->
      <div class="cf-section" data-step="6">
        <div class="cf-section-head">
          <span class="cf-step-num">STEP 06 / 06</span>
          <h3 class="cf-section-ttl">Finally, your contact details</h3>
        </div>
        <div class="field-row">
          <div class="form-field">
            <label>Name <span class="req">Required</span></label>
            <input type="text" name="name" placeholder="e.g. Berry Taro"/>
          </div>
          <div class="form-field">
            <label>Company / Business name <span class="opt">Optional</span></label>
            <input type="text" name="company" placeholder="Leave blank if individual"/>
          </div>
        </div>
        <div class="form-field">
          <label>Email address <span class="req">Required</span></label>
          <input type="email" name="email" placeholder="example@berry.com"/>
        </div>
        <div class="form-field">
          <label>Phone number <span class="opt">Optional</span></label>
          <input type="tel" name="tel" placeholder="000-0000-0000"/>
        </div>
        <!-- Coupon code -->
        <div class="form-field">
          <label>Coupon Code <span class="opt">Optional</span>
            <span class="cf-field-note">Earned by getting a perfect quiz score &middot; ¥1,000 OFF &middot; One use only</span>
          </label>
          <input type="text" name="coupon" id="cf-coupon" style="text-transform:uppercase; letter-spacing:.1em;"/>
        </div>

        <!-- Referral -->
        <div class="form-field">
          <label>Referred by <span class="opt">Optional</span>
            <span class="cf-field-note">Please tell us the name of the person who referred you</span>
          </label>
          <input type="text" name="referral" id="cf-referral" placeholder="e.g. Berry Hanako"/>
        </div>

        <label style="display:flex; align-items:center; gap:10px; margin: 16px 0; font-size:13px; cursor:pointer;">
          <input type="checkbox" name="agree"><span class="cb-box"></span>
          <span>I agree to the Privacy Policy <span class="req">Required</span></span>
        </label>

        <!-- Privacy Policy -->
        <details class="pp-details" style="margin: 0 0 18px; font-size:12px; color:#888; border:1px solid #eee; border-radius:0; padding:10px 14px;">
          <summary style="cursor:pointer; font-weight:600; color:#555;">Privacy Policy</summary>
          <div style="margin-top:10px; line-height:1.8;">
            <p><strong>1. Purpose of collection</strong><br>
            Information you provide is used solely to respond to your inquiry and to provide our services.</p>
            <p><strong>2. Third-party disclosure</strong><br>
            We will not share your personal information with third parties without your consent, except as required by law.</p>
            <p><strong>3. Security</strong><br>
            We take appropriate measures to protect your personal information from unauthorized access, loss, or misuse.</p>
            <p><strong>4. Contact</strong><br>
            For inquiries regarding personal information, please contact us via the contact form.</p>
          </div>
        </details>

        <div class="cf-nav">
          <button type="button" class="cf-back btn-flat">&larr; Back</button>
          <button type="submit" class="btn berry lg">Send &rarr;</button>
        </div>
      </div>

    </form>
  </div>
</main>

<!-- Send animation overlay -->
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
  <p class="mail-status" id="mail-status">Sending your message...</p>
</div>

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

  // Next
  form.querySelectorAll('.cf-next').forEach(btn => {
    btn.addEventListener('click', function () {
      const section = this.closest('.cf-section');
      const step = parseInt(section.dataset.step);

      if (step === 1) {
        const kindChecked = [...form.querySelectorAll('input[name="kind"]:checked')].length > 0;
        const purposeVal  = form.querySelector('[name="purpose"]').value;
        if (!kindChecked) { showError(section, 'Please select what you want to create.'); return; }
        if (!purposeVal)  { showError(section, 'Please select your main goal.'); return; }
      }

      clearError(section);
      showStep(step + 1);
    });
  });

  // Back
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

  // Show text input when "Other" is checked
  const kindOther = document.getElementById('kind-other');
  const kindOtherWrap = document.getElementById('kind-other-wrap');
  if (kindOther && kindOtherWrap) {
    kindOther.addEventListener('change', function () {
      kindOtherWrap.style.display = this.checked ? 'block' : 'none';
      if (!this.checked) document.getElementById('kind-other-text').value = '';
    });
  }

  // Show existing site URL field
  document.querySelectorAll('input[name="existing"]').forEach(radio => {
    radio.addEventListener('change', function () {
      const wrap = document.getElementById('existing-url-wrap');
      if (wrap) wrap.style.display = this.value === 'Yes (Renewal)' ? 'block' : 'none';
    });
  });

  // ===== Carry over from faq_en.php hearing sheet =====
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
    if (Array.isArray(data.kind) && data.kind.length)   lines.push(`What to create: ${data.kind.join(', ')}`);
    if (data.purpose)                                    lines.push(`Main goal: ${data.purpose}`);
    if (Array.isArray(data.target) && data.target.length) lines.push(`Target audience: ${data.target.join(', ')}`);
    if (data.budget)                                     lines.push(`Budget: ${data.budget}`);

    if (lines.length) {
      const msgEl = document.getElementById('cf-msg');
      if (msgEl) msgEl.value = '[From Hearing Sheet]\n' + lines.join('\n');
    }

    const banner = document.getElementById('inherit-banner');
    if (banner) {
      banner.removeAttribute('hidden');
      banner.querySelector('.inherit-msg').textContent =
        'Your hearing sheet answers have been carried over! Please review before sending.';
    }
  })();

  (function () {
    const code = sessionStorage.getItem('coupon_code');
    if (!code) return;
    const el = document.getElementById('cf-coupon');
    if (el) el.value = code;
    sessionStorage.removeItem('coupon_code');
  })();

  // Carry over from works_en.php "Consult with this style"
  (function () {
    const raw = sessionStorage.getItem('works_consult');
    if (!raw) return;

    let data;
    try { data = JSON.parse(raw); } catch (e) { return; }
    sessionStorage.removeItem('works_consult');

    const msgEl = document.getElementById('cf-msg');
    if (!msgEl) return;

    const text = [
      '[Reference Work]',
      `Title: ${data.title}`,
      `Category: ${data.category}`,
      '',
      'I would like something with a similar feel to this work.',
    ].join('\n');

    msgEl.value = text;

    const banner = document.getElementById('inherit-banner');
    if (banner) {
      banner.removeAttribute('hidden');
      banner.querySelector('.inherit-msg').textContent =
        `"${data.title}" style has been carried over. Add any details before sending.`;
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
      '[From Type Diagnosis]',
      `Type: ${data.ttl}`,
      `Recommended plan: ${data.plan}`,
      `Bundle: ${data.set_desc}`,
      `Bundle price: ${data.set_price}`,
    ].join('\n');

    msgEl.value = text;

    const banner = document.getElementById('inherit-banner');
    if (banner) {
      banner.removeAttribute('hidden');
      banner.querySelector('.inherit-msg').textContent =
        `"${data.ttl}" type info has been carried over. Add any details before sending.`;
    }
  })();

  // Submit handler
  form.addEventListener('submit', e => {
    e.preventDefault();
    const lastSection = form.querySelector('.cf-section[data-step="6"]');

    const nameVal   = form.querySelector('[name="name"]').value.trim();
    const emailVal  = form.querySelector('[name="email"]').value.trim();
    const agreeChecked = form.querySelector('[name="agree"]').checked;

    if (!nameVal)      { showError(lastSection, 'Please enter your name.'); return; }
    if (!emailVal)     { showError(lastSection, 'Please enter your email address.'); return; }
    if (!agreeChecked) { showError(lastSection, 'You must agree to the Privacy Policy.'); return; }

    function getChecked(name) {
      return [...form.querySelectorAll(`input[name="${name}"]:checked`)].map(i => i.value).join(', ') || null;
    }
    function getVal(name) {
      const el = form.querySelector(`[name="${name}"]`);
      return el && el.value ? el.value : null;
    }

    const existingVal = getVal('existing');
    const existingUrl = getVal('existing_url');

    // Append text to "Other"
    let kindVal = getChecked('kind');
    const kindOtherText = (form.querySelector('[name="kind_other"]') || {}).value.trim();
    if (kindVal && kindOtherText) {
      kindVal = kindVal.replace('Other', `Other (${kindOtherText})`);
    }

    const summary = [
      ['What to create',   kindVal],
      ['Main goal',        getVal('purpose')],
      ['Existing site',    existingVal ? existingVal + (existingUrl ? '  URL: ' + existingUrl : '') : null],
      ['Target audience',  getChecked('target')],
      ['Design style',     getChecked('tone')],
      ['Reference URL',    getVal('ref')],
      ['Budget',           getVal('budget')],
      ['Timeline',         getVal('due')],
      ['Asset availability', getChecked('assets')],
      ['Things to avoid',  getVal('ng')],
      ['Coupon Code',      getVal('coupon')],
      ['Referral',         getVal('referral')],
    ].filter(([, v]) => v).map(([k, v]) => `[${k}] ${v}`).join('\n');

    const msgEl = document.getElementById('cf-msg');
    if (msgEl) {
      const original = msgEl.value.trim();
      msgEl.value = summary + (original ? '\n\n[Additional notes]\n' + original : '');
    }

    const overlay = document.getElementById('mail-overlay');
    overlay.removeAttribute('hidden');
    setTimeout(() => {
      document.getElementById('mail-scene').classList.add('mail-fly');
      document.getElementById('mail-status').textContent = 'Your message has been sent!';
    }, 1600);
    setTimeout(() => {
      overlay.setAttribute('hidden', '');
      celebrate();
      form.innerHTML = `
        <div style="text-align:center; padding: 40px 0;">
          <div class="material-symbols-outlined" style="font-size:60px; color:var(--berry);">mark_email_read</div>
          <h3 style="margin: 12px 0 6px;">Message Sent!</h3>
          <p class="muted sm">We'll get back to you within 2 business days.<br/>An auto-reply has been sent to your email address.</p>
          <div style="margin-top:18px;"><a class="btn" href="/top-en/">Back to Top</a></div>
        </div>`;
    }, 2800);
  });

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
<?php include "footer_en.php"; ?>
