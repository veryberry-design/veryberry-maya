<?php
/*
Template Name: Menu (EN)
*/
$pageTitle = "VeryBerry — Pricing & Menu";
$currentPage = "menu";
include "header_en.php";
?>
<!-- Static soft soap bubbles floating in the background -->
<div class="bubbles-bg static-bubbles" id="static-bubbles" aria-hidden="true">
</div>
<main class="wrap">
  <div class="sect-title sect-title-centered" style="margin-top: 60px;">
    <div class="en kicker-en">
      — price &amp; menu —
    </div>
    <h2>
      <span class="scrib">Pricing &amp; Menu </span>
    </h2>
    <p class="muted sm" style="max-width:520px; margin: 30px auto 0;">
      Pricing for web production. <br/>
      Costs vary based on scope, so feel free to get in touch.
    </p>
  </div>
  <!-- Anchor link buttons -->
  <nav class="menu-anchors" aria-label="Page navigation">
    <a href="#plan-compare">Plan Comparison </a>
    <a href="#blog-update">Blog Management </a>
    <a href="#options">Optional Add-ons </a>
    <a href="#other-menu">Other Services </a>
    <!-- ご利用条件は非表示中
    <a href="#notes">Terms &amp; Conditions </a>
    -->
    <a href="#type">Find Your Plan </a>
    <a href="#flow">How We Work </a>
    <a href="#quiz">Web Quiz </a>
  </nav>
  <!-- 1. PLAN COMPARISON -->
  <div id="plan-compare" class="sect-title sect-title-centered" style="margin-top: 56px;">
    <div class="en kicker-en">
      — plan comparison —
    </div>
    <h2>
      <span class="scrib">Website Development Plans </span>
    </h2>
    <p class="muted sm" style="max-width:480px; margin: 30px auto 0;">
      Our basic website plans. Choose the one that fits your needs.
    </p>
  </div>
  <section class="plan-row plan-row-v2" style="margin-top: 56px;">
    <div class="plan plan-v2">
      <div class="plan-head">
        <div class="pname">
          BASIC
        </div>
        <div class="pdesc">
          Basic
        </div>
      </div>
      <div class="plan-price">
        <span class="plan-price-num"><span class="yen">&yen;</span>150,000 </span>
        <span class="plan-price-unit">&sim; </span>
      </div>
      <ul class="plan-feats">
        <li>
          <span class="feat-l">Pages </span><span class="feat-v">1 <small>P </small></span>
        </li>
        <li>
          <span class="feat-l">Contact Form </span><span class="feat-v feat-no">&times; </span>
        </li>
        <li>
          <span class="feat-l">CMS </span><span class="feat-v feat-no">&times; </span>
        </li>
        <li>
          <span class="feat-l">SEO </span><span class="feat-v">Basic </span>
        </li>
        <li>
          <span class="feat-l">Revisions </span><span class="feat-v">3 <small>times </small></span>
        </li>
      </ul>
      <a class="btn" href="/contact-en/">Consult this plan </a>
    </div>
    <div class="plan plan-v2 best">
      <div class="plan-ribbon">
        <span class="plan-ribbon-l">Most Popular </span>
        <span class="plan-ribbon-s">— Recommended </span>
      </div>
      <div class="plan-glow" aria-hidden="true">
      </div>
      <div class="plan-head">
        <div class="pname">
          STANDARD
        </div>
        <div class="pdesc">
          Standard
        </div>
      </div>
      <div class="plan-price">
        <span class="plan-price-num"><span class="yen">&yen;</span>260,000 </span>
        <span class="plan-price-unit">&sim; </span>
      </div>
      <ul class="plan-feats">
        <li>
          <span class="feat-l">Pages </span><span class="feat-v">3 <small>P </small></span>
        </li>
        <li>
          <span class="feat-l">Contact Form </span><span class="feat-v feat-yes">&#9675; </span>
        </li>
        <li>
          <span class="feat-l">CMS </span><span class="feat-v feat-no">&times; </span>
        </li>
        <li>
          <span class="feat-l">SEO </span><span class="feat-v">Basic </span>
        </li>
        <li>
          <span class="feat-l">Revisions </span><span class="feat-v">5 <small>times </small></span>
        </li>
      </ul>
      <a class="btn berry" href="/contact-en/">Consult this plan &rarr; </a>
    </div>
    <div class="plan plan-v2">
      <div class="plan-head">
        <div class="pname">
          PREMIUM
        </div>
        <div class="pdesc">
          Premium
        </div>
      </div>
      <div class="plan-price">
        <span class="plan-price-num"><span class="yen">&yen;</span>450,000 <small>&sim;520,000 </small></span>
      </div>
      <ul class="plan-feats">
        <li>
          <span class="feat-l">Pages </span><span class="feat-v">5 <small>P </small></span>
        </li>
        <li>
          <span class="feat-l">Contact Form </span><span class="feat-v feat-yes">&#9675; </span>
        </li>
        <li>
          <span class="feat-l">CMS </span><span class="feat-v feat-yes">&#9675; </span>
        </li>
        <li>
          <span class="feat-l">SEO </span><span class="feat-v">Basic </span>
        </li>
        <li>
          <span class="feat-l">Revisions </span><span class="feat-v">Unlimited <small>&ast;1 </small></span>
        </li>
      </ul>
      <a class="btn" href="/contact-en/">Consult this plan </a>
    </div>
  </section>
  <!-- 2. OPTIONS -->
  <div id="options" class="sect-title sect-title-centered" style="margin-top: 70px;">
    <div class="en kicker-en">
      — options —
    </div>
    <h2>
      <span class="scrib">Optional Add-ons </span>
    </h2>
    <p class="muted sm" style="max-width:520px; margin: 30px auto 0;">
      Optional pricing per plan. Switch tabs to view each.
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
            <span class="opt-plan-l">Additional Page </span><span class="opt-plan-r"><span class="yen">&yen;</span>50,000 <small>(up to 1 page) </small></span>
          </li>
          <li>
            <span class="opt-plan-l">Form Setup <small class="opt-plan-note">We set up forms for inquiries, reservations, and more.</small></span><span class="opt-plan-r"><span class="yen">&yen;</span>30,000 </span>
          </li>
          <li>
            <span class="opt-plan-l">CMS Integration <small class="opt-plan-note">A system that lets you easily update your blog and product info.</small></span><span class="opt-plan-r"><span class="yen">&yen;</span>150,000 </span>
          </li>
        </ul>
      </div>
    </div>
    <div class="opt-plan-view" data-plan="standard" hidden>
      <div class="opt-plan-card">
        <ul class="opt-plan-list">
          <li>
            <span class="opt-plan-l">Additional Page </span><span class="opt-plan-r"><span class="yen">&yen;</span>30,000 <small>/ 1P </small></span>
          </li>
          <li>
            <span class="opt-plan-l">Form Setup <small class="opt-plan-note">We set up forms for inquiries, reservations, and more.</small></span><span class="opt-plan-r muted">Included in plan </span>
          </li>
          <li>
            <span class="opt-plan-l">CMS Integration <small class="opt-plan-note">A system that lets you easily update your blog and product info.</small></span><span class="opt-plan-r"><span class="yen">&yen;</span>120,000 </span>
          </li>
        </ul>
      </div>
    </div>
    <div class="opt-plan-view" data-plan="premium" hidden>
      <div class="opt-plan-card">
        <ul class="opt-plan-list">
          <li>
            <span class="opt-plan-l">Additional Page </span><span class="opt-plan-r"><span class="yen">&yen;</span>25,000 <small>/ 1P </small></span>
          </li>
          <li>
            <span class="opt-plan-l">Form Setup <small class="opt-plan-note">We set up forms for inquiries, reservations, and more.</small></span><span class="opt-plan-r muted">Included in plan </span>
          </li>
          <li>
            <span class="opt-plan-l">CMS Integration <small class="opt-plan-note">A system that lets you easily update your blog and product info.</small></span><span class="opt-plan-r muted">Included in plan </span>
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
      <span class="scrib">Blog &amp; Site Management </span>
    </h2>
    <p class="muted sm" style="max-width:520px; margin: 30px auto 0;">
      We go beyond just building your site. <br/>
      Monthly support for blog updates, SNS integration, and content management.
    </p>
    <p class="blog-promo"><span class="sl">＼</span>Pay upfront, get <b>1 month free</b>!<span class="sl">／</span></p>
  </div>
  <section class="blog-row" style="margin-top: 36px;">
    <div class="blog-plan">
      <div class="blog-plan-ribbon blog-plan-ribbon-light">
        Try just one article!
      </div>
      <div class="blog-plan-h">
        <span class="blog-plan-tag">spot </span>
        <h3 class="blog-plan-ttl">
          Spot
        </h3>
        <p class="blog-plan-sub">
          For those who want to try just one article
        </p>
      </div>
      <div class="blog-plan-price">
        <span class="blog-plan-num"><span class="yen">&yen;</span>1,500 </span>
        <span class="blog-plan-unit">/ article </span>
      </div>
      <ul class="blog-plan-feats">
        <li><span class="bp-l bp-has-tip">Articles<span class="bp-tip">Number of blog posts per month. You can order from a single article.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v">from 1 <b>article</b></span></li>
        <li><span class="bp-l bp-has-tip">Words / Article<span class="bp-tip">Approximate length per article. More words means richer content and better search visibility.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v">1,000 words / article </span></li>
        <li><span class="bp-l bp-has-tip">Thumbnail Image<span class="bp-tip">The thumbnail shown in article lists. An eye-catching image encourages clicks.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
        <li><span class="bp-l bp-has-tip">Proofreading &amp; Publishing<span class="bp-tip">We handle proofreading and publishing to your site. No need to upload yourself.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
        <li><span class="bp-l bp-has-tip">Monthly Report<span class="bp-tip">A monthly summary of how many people read your articles and where they came from.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-no">&times; </span></li>
        <li><span class="bp-l bp-has-tip">Keyword Research<span class="bp-tip">We research what people are searching for and select topics likely to be read.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-no">&times; </span></li>
        <li><span class="bp-l bp-has-tip">SEO Optimization<span class="bp-tip">We suggest improvements to your site structure and headings to rank better on Google.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-no">&times; </span></li>
      </ul>
      <a class="btn" href="/contact-en/">Consult this plan </a>
    </div>
    <div class="blog-plan blog-plan-best">
      <div class="blog-plan-ribbon">
        Top Pick!
      </div>
      <div class="blog-plan-h">
        <span class="blog-plan-tag">standard </span>
        <h3 class="blog-plan-ttl">
          Standard
        </h3>
        <p class="blog-plan-sub">
          For those who want consistent updates
        </p>
      </div>
      <div class="blog-plan-price">
        <span class="blog-plan-num"><span class="yen">&yen;</span>5,000 </span>
        <span class="blog-plan-unit">/ mo </span>
      </div>
      <ul class="blog-plan-feats">
        <li><span class="bp-l bp-has-tip">Blog Articles<span class="bp-tip">Number of blog posts per month. More frequent updates also help with SEO.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v"><b>4</b> / mo </span></li>
        <li><span class="bp-l bp-has-tip">Words / Article<span class="bp-tip">Approximate length per article. More words means richer content and better search visibility.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v">1,500 words / article </span></li>
        <li><span class="bp-l bp-has-tip">Thumbnail Image<span class="bp-tip">The thumbnail shown in article lists. An eye-catching image encourages clicks.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
        <li><span class="bp-l bp-has-tip">Proofreading &amp; Publishing<span class="bp-tip">We handle proofreading and publishing to your site. No need to upload yourself.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
        <li><span class="bp-l bp-has-tip">Monthly Report<span class="bp-tip">A monthly summary of how many people read your articles and where they came from.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-no">&times; </span></li>
        <li><span class="bp-l bp-has-tip">Keyword Research<span class="bp-tip">We research what people are searching for and select topics likely to be read.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-no">&times; </span></li>
        <li><span class="bp-l bp-has-tip">SEO Optimization<span class="bp-tip">We suggest improvements to your site structure and headings to rank better on Google.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-no">&times; </span></li>
      </ul>
      <a class="btn berry" href="/contact-en/">Consult this plan &rarr; </a>
    </div>
    <div class="blog-plan">
      <div class="blog-plan-ribbon blog-plan-ribbon-full">
        Grow your SEO for real!
      </div>
      <div class="blog-plan-h">
        <span class="blog-plan-tag">seo pro </span>
        <h3 class="blog-plan-ttl">
          SEO Pro
        </h3>
        <p class="blog-plan-sub">
          For those serious about growing search traffic
        </p>
      </div>
      <div class="blog-plan-price">
        <span class="blog-plan-num"><span class="yen">&yen;</span>18,000 &sim;</span>
        <span class="blog-plan-unit">/ mo </span>
      </div>
      <ul class="blog-plan-feats">
        <li><span class="bp-l bp-has-tip">Blog Articles<span class="bp-tip">Number of blog posts per month. More frequent updates also help with SEO.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v"><b>8</b> / mo </span></li>
        <li><span class="bp-l bp-has-tip">Words / Article<span class="bp-tip">Approximate length per article. More words means richer content and better search visibility.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v">2,500 words / article </span></li>
        <li><span class="bp-l bp-has-tip">Thumbnail Image<span class="bp-tip">The thumbnail shown in article lists. An eye-catching image encourages clicks.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
        <li><span class="bp-l bp-has-tip">Proofreading &amp; Publishing<span class="bp-tip">We handle proofreading and publishing to your site. No need to upload yourself.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
        <li><span class="bp-l bp-has-tip">Monthly Report<span class="bp-tip">A monthly summary of how many people read your articles and where they came from.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
        <li><span class="bp-l bp-has-tip">Keyword Research<span class="bp-tip">We research what people are searching for and select topics likely to be read.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
        <li><span class="bp-l bp-has-tip">SEO Optimization<span class="bp-tip">We suggest improvements to your site structure and headings to rank better on Google.<button class="bp-tip-close" aria-label="Close">&times;</button></span></span><span class="bp-v feat-yes">&#9675; </span></li>
      </ul>
      <a class="btn" href="/contact-en/">Consult this plan </a>
    </div>
  </section>
  <p class="blog-tip-hint"><span class="material-symbols-outlined blog-tip-hint-icon">touch_app</span>Hover over each item name to see a description</p>
  <!-- 1c. OTHER MENU -->
  <div id="other-menu" class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">
      — other menu —
    </div>
    <h2>
      <span class="scrib">Other Services </span>
    </h2>
    <p class="muted sm" style="max-width:520px; margin: 30px auto 0;">
      We also accept one-off requests for banners, videos, flyers, logos, and illustrations. <br/>
      Pricing varies by scope.
    </p>
  </div>
  <section class="other-grid" style="margin-top: 36px;">
    <article class="other-card">
      <div class="other-card-h">
        <span class="other-tag">banner </span>
        <h3 class="other-ttl">
          Banner Design
        </h3>
      </div>
      <div class="other-price">
        <span class="other-price-num"><span class="yen">&yen;</span>5,000&sim;</span>
        <span class="other-price-unit">/ piece </span>
      </div>
      <ul class="other-feats">
        <li>
          For SNS, ads, or website placement
        </li>
        <li>
          Size variations of the same design:<br>+&yen;3,000/piece~
        </li>
        <li>
          Includes up to 2 revisions
        </li>
      </ul>
      <a class="btn berry" href="/contact-en/">&rarr; Consult this service &rarr; </a>
    </article>
    <article class="other-card">
      <div class="other-card-h">
        <span class="other-tag">business card</span>
        <h3 class="other-ttl">
          Business Card
        </h3>
      </div>
      <div class="other-price">
        <span class="other-price-num"><span class="yen">&yen;</span>15,000&sim; </span>
        <span class="other-price-unit">/ design </span>
      </div>
      <ul class="other-feats">
        <li>
          Business cards (double-sided), shop cards, etc.
        </li>
        <li>
          Delivered as print-ready files (PDF / AI)
        </li>
        <li>
          Paper and printing consultation available
        </li>
      </ul>
      <a class="btn berry" href="/contact-en/">&rarr; Consult this service &rarr; </a>
    </article>
    <article class="other-card">
      <div class="other-card-h">
        <span class="other-tag">other </span>
        <h3 class="other-ttl">
          Other
        </h3>
      </div>
      <div class="other-price">
        <span class="other-price-num">Request a Quote </span>
      </div>
      <ul class="other-feats">
        <li>
          Shop cards, POP, SNS content, and more
        </li>
        <li>
          Ask us about Instagram / LINE assets and anything not listed
        </li>
      </ul>
      <a class="btn berry" href="/contact-en/">&rarr; Consult this service &rarr; </a>
    </article>
  </section>
  <!-- Notes / Terms（ご利用条件）は非表示中。表示するときはこのコメントを外す
  <div class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">— terms &amp; conditions —</div>
    <h2><span class="scrib">Terms &amp; Conditions</span></h2>
    <p class="muted sm" style="max-width:480px; margin: 16px auto 0;">Terms that apply to all services and plans.</p>
  </div>
  <div id="notes" class="notes-view notes-grid" style="margin-top: 30px;">
    <div class="notes-card">
      <div class="notes-h">
        <span class="notes-h-jp">Terms </span>
        <span class="notes-h-en">— notes </span>
      </div>
      <ol class="notes-list">
        <li>
          Additional revisions are accepted within <span class="webk-mark">30 days of delivery.</span>
        </li>
        <li>
          We require <span class="webk-mark">50% upfront</span> and <span class="webk-mark">50% upon delivery.</span>
        </li>
        <li>
          All prices shown are excluding tax. Consumption tax will be added.
        </li>
        <li>
          Custom requests may require a separate estimate.
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
      <span class="scrib">Find Your Plan </span>
    </h2>
    <p class="muted sm" style="max-width: 460px; margin: 30px auto 0;">
      Choose the type that best describes you. <br>We'll suggest the right plan.
    </p>
  </div>
  <section class="type-section" style="max-width: 880px; margin: 28px auto 0;">
    <div class="type-grid">
      <button class="type-card" data-type="shop" type="button">
      <div class="type-card-img"><img src="<?php echo MAYA_URI; ?>/img/type04.png" alt="" style="width:100%;"/></div>
      <span class="type-ttl">Opening a Shop </span>
      <span class="type-sub">Cafe, boutique, small salon </span>
      <span class="type-rec">STANDARD recommended </span>
      </button>
      <button class="type-card" data-type="creator" type="button">
      <div class="type-card-img"><img src="<?php echo MAYA_URI; ?>/img/type02.png" alt="" style="width:100%;"/></div>
      <span class="type-ttl">Artists &amp; Designers </span>
      <span class="type-sub">Portfolio, artwork showcase </span>
      <span class="type-rec">BASIC recommended </span>
      </button>
      <button class="type-card" data-type="event" type="button">
      <div class="type-card-img"><img src="<?php echo MAYA_URI; ?>/img/type08.png" alt="" style="width:85%;"/></div>
      <span class="type-ttl">Events &amp; Campaigns </span>
      <span class="type-sub">Limited-time LP, banner set </span>
      <span class="type-rec">BASIC + Options </span>
      </button>
      <button class="type-card" data-type="renew" type="button">
      <div class="type-card-img"><img src="<?php echo MAYA_URI; ?>/img/type05.png" alt="" style="width:100%;"/></div>
      <span class="type-ttl">Website Renewal </span>
      <span class="type-sub">Refresh your existing site </span>
      <span class="type-rec">PREMIUM recommended </span>
      </button>
    </div>
    <div class="type-result" id="type-result" hidden>
      <button class="type-result-close" id="type-result-close" aria-label="Close">&times; </button>
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
        <span class="type-result-meta-l">Recommended Plan </span>
        <span class="type-result-plan" id="type-result-plan"></span>
      </div>
      <!-- Bundle banner -->
      <div class="type-set-banner">
        <div class="type-set-banner-inner">
          <div class="type-set-banner-head">
            <p class="type-set-banner-ttl">Save more when you bundle!</p>
            <p class="type-set-banner-sub" id="type-result-set-desc"></p>
          </div>
          <div class="type-set-banner-body">
            <div class="type-set-banner-col">
              <span class="type-set-banner-before-lbl">Regular</span>
              <span class="type-set-banner-before-val" id="type-result-normal-price"></span>
            </div>
            <span class="type-set-banner-arrow">&rarr;</span>
            <div class="type-set-banner-col">
              <span class="type-set-banner-after-lbl">Bundle Price</span>
              <span class="type-set-banner-after-val" id="type-result-set-price"></span>
              <span class="type-set-banner-saving" id="type-result-saving"></span>
            </div>
          </div>
          <!-- Circle badge top right -->
          <div class="type-set-circle-badge" id="type-set-circle-badge">
            <span class="tsb-off">10%</span>
            <span class="tsb-sub">OFF</span>
          </div>
        </div>
      </div>
      <div class="type-result-cta">
        <a class="btn berry" href="/contact-en/" id="type-result-contact">&rarr; Consult with this type &rarr; </a>
        <a class="btn" href="#plan-compare">View Plans </a>
      </div>
    </div>
  </section>
  <div class="tcb-center">
    <div class="tcb-pill-wrap">
      <div class="tcb-pill-badge-group">
        <span class="tcb-pill-campaign">\ Campaign / </span>
        <span class="tcb-pill-badge">Quick 1-minute form </span>
      </div>
      <a class="tcb-pill" href="/contact-en/">
      <span class="tcb-pill-text">Contact Us </span>
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
      <span class="scrib">How We Work </span>
    </h2>
  </div>
  <div class="flowv-view flowv-ribbon" data-style="ribbon">
    <div class="flv-step">
      <div class="flv-l">
        <span class="flv-num">01 </span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          Inquiry
        </div>
        <p>
          Contact us via the inquiry form or SNS DM. We'll reply within 2 business days.
        </p>
      </div>
    </div>
    <div class="flv-step">
      <div class="flv-l">
        <span class="flv-num">02 </span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          Consultation
        </div>
        <p>
          We'll chat online. Just a rough idea of what you want is fine.
        </p>
      </div>
    </div>
    <div class="flv-step">
      <div class="flv-l">
        <span class="flv-num">03 </span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          Estimate &amp; Contract
        </div>
        <p>
          We'll send a quote and schedule. Once approved, we move to contract.
        </p>
      </div>
    </div>
    <div class="flv-step">
      <div class="flv-l">
        <span class="flv-num">04 </span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          Production
        </div>
        <p>
          Progress is shared along the way.
        </p>
      </div>
    </div>
    <div class="flv-step">
      <div class="flv-l">
        <span class="flv-num">05 </span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          Review &amp; Revisions
        </div>
        <p>
          We revise up to the plan limit. We take care until you're satisfied.
        </p>
      </div>
    </div>
    <div class="flv-step">
      <div class="flv-l">
        <span class="flv-num">06 </span>
      </div>
      <div class="flv-r">
        <div class="flv-name">
          Delivery
        </div>
        <p>
          Files delivered. Post-delivery support available for 30 days.
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
      <span class="scrib">Web Terms You Were Afraid to Ask </span>
    </h2>
    <p class="muted sm" style="max-width:560px; margin: 30px auto 0;">
      Do you know all the terms used in web production? <br/>
      Try picking the correct answer in this 2-choice quiz.
    </p>
  </div>
  <div class="quiz-wrap" style="max-width: 760px; margin: 30px auto 0;">
    <div class="webk-tabs" id="webk-tabs" role="tablist">
      <button class="webk-tab on" type="button" data-wkv="faq" role="tab">
      <span class="webk-tab-en">read </span>
      <span class="webk-tab-ja">Read </span>
      </button>
      <button class="webk-tab" type="button" data-wkv="quiz" role="tab">
      <span class="webk-tab-en">quiz </span>
      <span class="webk-tab-ja">Take the Quiz </span>
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
            Give the quiz a try!
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
        <button class="btn" id="quiz-reset" type="button">&#8635; Try Again </button>
      </div>
    </div>
  </div>
  <div style="text-align:center; margin-top:80px;">
    <a class="btn berry lg" href="/contact-en/">Contact Us &rarr;</a>
  </div>
<!-- Quiz coupon popup -->
<div class="coupon-overlay" id="coupon-overlay" hidden>
  <div class="coupon-modal">
    <div class="coupon-modal-head">
      <p class="coupon-modal-kicker">— quiz clear —</p>
      <h3 class="coupon-modal-ttl">Perfect score!</h3>
      <p class="coupon-modal-sub">You got a coupon code</p>
    </div>
    <div class="coupon-code-wrap">
      <span class="coupon-code-label">Coupon Code</span>
      <div class="coupon-code">ONIGIRI</div>
      <p class="coupon-code-desc">Enter it in the<br>"Coupon Code" field on the contact form<br>to get <strong>&yen;1,000 OFF</strong>!</p>
      <p class="coupon-code-note">* Valid once / Applicable on first order only</p>
    </div>
    <div class="coupon-modal-btns">
      <a class="btn berry lg" id="coupon-use-now" href="/contact-en/">&rarr; Use It Now &rarr;</a>
      <button class="btn" id="coupon-close" type="button">Use It Later</button>
    </div>
  </div>
</div>
<a class="coupon-float" id="coupon-float" href="/contact-en/" hidden>
  <span class="coupon-float-code">ONIGIRI</span>
  <span class="coupon-float-label">Coupon Active</span>
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
  q: 'What does "server" refer to?',
  faq_q: "What's the difference between a server and a domain?",
  answer_html: 'Think of it as the <mark class="webk-mark">"land"</mark> where your website data is stored.',
  explain_html: 'A server is the <mark class="webk-mark m-grape">"land"</mark>, and a domain is the <mark class="webk-mark m-grape">"address."</mark> Your website data lives on the server.',
  choices: [
    'It\'s like the "land" where website data is stored and kept.',
    'It\'s the internet address shown in the browser URL.',
  ],
  correct: 0,
  hint: 'Think of land, buildings, and addresses — which one is the server?',
  explain: 'Correct! A server is the "land," a domain is the "address." Your website data is stored on the server.',
  wrong: 'Not quite. The URL or address is the "domain." A server is like the "land" where website data is kept.',
},
{
  q: 'What does SEO stand for?',
  faq_q: 'What is SEO?',
  answer_html: 'Short for <mark class="webk-mark">Search Engine Optimization</mark> — the practice of improving your ranking in search results.',
  explain_html: 'It refers to <mark class="webk-mark m-grape">optimizing your site to appear higher in search engines</mark> like Google. Results take time — think of it as <mark class="webk-mark m-grape">a long-term investment.</mark>',
  choices: [
    'Short for Search Engine Optimization — the practice of improving your ranking in search results.',
    'Short for Site Edit Operation — the regular process of updating a website.',
  ],
  correct: 0,
  hint: 'S = Search, E = Engine, O = ...?',
  explain: 'Correct! SEO stands for Search Engine Optimization — improving your site so it ranks higher on Google.',
  wrong: 'Incorrect. SEO stands for "Search Engine Optimization" — improving your ranking in search results.',
},
{
  q: 'What is responsive design?',
  faq_q: 'What is responsive design?',
  answer_html: 'A technique that makes one website <mark class="webk-mark">adapt its layout to different screen sizes</mark> — smartphones, tablets, and PCs.',
  explain_html: 'It means building <mark class="webk-mark m-grape">one site that changes its appearance based on screen size.</mark> No need to build separate sites for each device.',
  choices: [
    'A technology that sends different designs to each user, automatically switching layouts based on who is viewing.',
    'A technique that makes one website adapt its layout to different screen sizes — smartphones, tablets, and PCs.',
  ],
  correct: 1,
  hint: '"Responsive" comes from "response." What is it responding to?',
  explain: 'Correct! One site that adapts its layout based on screen size. No need for separate mobile and desktop versions.',
  wrong: 'Incorrect. It adapts based on "screen size," not the individual user. One site covers all devices.',
},
{
  q: 'What does CMS refer to?',
  faq_q: 'What is a CMS? Is it the same as WordPress?',
  answer_html: 'A general term for <mark class="webk-mark">Content Management System</mark>, which includes <mark class="webk-mark">WordPress, microCMS, Shopify</mark>, and more.',
  explain_html: 'CMS is a <mark class="webk-mark m-grape">general term</mark> for Content Management System. WordPress is just one of them — others include microCMS, Shopify, and Movable Type.',
  choices: [
    'A proper noun referring only to WordPress — the name of a specific software product.',
    'A general term for Content Management System, which includes WordPress, microCMS, Shopify, and more.',
  ],
  correct: 1,
  hint: 'CMS = Content Management System. Can you think of examples other than WordPress?',
  explain: 'Correct! CMS stands for Content Management System. WordPress is just one — others include microCMS and Shopify.',
  wrong: 'Incorrect. CMS is a general term. WordPress is just one of many, along with microCMS and Shopify.',
},
{
  q: 'What is a feature of https websites?',
  faq_q: 'What is the difference between https and http?',
  answer_html: 'Communications are <mark class="webk-mark">encrypted</mark>, making form submissions and other exchanges <mark class="webk-mark">secure.</mark>',
  explain_html: 'The "s" stands for <mark class="webk-mark m-grape">Secure</mark>. SSL encrypts communication, keeping form submissions safe. <mark class="webk-mark m-grape">SSL is now essential</mark> for all websites.',
  choices: [
    'Communications are encrypted, making form submissions and other exchanges secure.',
    'It is a faster protocol — pages on https sites always load faster than http.',
  ],
  correct: 0,
  hint: 'The difference between http and https is the final "s." S stands for Secure.',
  explain: 'Correct! The "s" stands for Secure. SSL encrypts communication, keeping forms safe.',
  wrong: 'Incorrect. The "s" in https stands for Secure — it encrypts communication. It is not about page speed.',
},
{
  q: 'What is the relationship between a designer and a coder?',
  faq_q: "What's the difference between a designer and a coder?",
  answer_html: 'They are <mark class="webk-mark">separate skills</mark> — one creates the look, the other makes it work. Different people often handle each role.',
  explain_html: 'Design and coding are <mark class="webk-mark m-grape">separate skills</mark>, often done by different people. VeryBerry handles <mark class="webk-mark m-grape">both in one place.</mark>',
  choices: [
    'The same person always does both — design and coding are never split between different people.',
    'Separate skills — one creates the look, the other makes it work. Different people often handle each role.',
  ],
  correct: 1,
  hint: 'Creating the look vs. making it function — do these feel like different skills to you?',
  explain: 'Correct! Design and coding are separate skills, often done by different people. VeryBerry handles both in one place.',
  wrong: 'Incorrect. Design and coding are separate skills, often split between different people.',
},
{
  q: 'Which is true about a website after launch?',
  faq_q: 'Will my site automatically appear in search results once it goes live?',
  answer_html: 'Simply launching is not enough — <mark class="webk-mark">SEO work, content updates, and backlinks</mark> are needed to grow your visibility.',
  explain_html: 'Launching alone will not get you to the top of search results. <mark class="webk-mark m-grape">Ongoing effort</mark> — SEO, content, and backlinks — is required.',
  choices: [
    'Simply launching is not enough — SEO, content updates, and backlinks are needed to grow visibility.',
    'Once published, the site automatically ranks in search results — no further action needed.',
  ],
  correct: 0,
  hint: 'How many billions of websites are out there?',
  explain: 'Correct! Launching alone will not rank your site. SEO, content updates, and backlinks require ongoing effort.',
  wrong: 'Incorrect. Just going live does not rank your site. SEO, content, and backlinks require ongoing effort.',
},
{
  q: 'What share of web browsing comes from smartphones?',
  faq_q: 'How much of web browsing is done on smartphones today?',
  answer_html: 'Smartphones account for <mark class="webk-mark">more than half</mark>, and typical sites often see <mark class="webk-mark">70–80%</mark> mobile traffic.',
  explain_html: 'For typical sites, 70–80% of visitors are on mobile. <mark class="webk-mark m-grape">Mobile-first design</mark> is now the standard.',
  choices: [
    'Desktop browsing is still dominant — smartphones account for only 10–20%.',
    'Smartphones account for more than half, and typical sites often see 70–80% mobile traffic.',
  ],
  correct: 1,
  hint: 'What device do you usually use to browse websites?',
  explain: 'Correct! For typical sites, 70–80% of traffic comes from mobile. Mobile-first design is now the standard.',
  wrong: 'Incorrect. Mobile traffic dominates today — typical sites see 70–80% from smartphones.',
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
<span class="webk-toggle">+</span>
      </summary>
      <div class="webk-a">
      <p>
      <span class="webk-a-label">Answer</span>${q.answer_html || q.choices[q.correct]}
      </p>
      <p style="margin-top:10px;">
      ${q.explain_html || q.explain.replace(/^Correct!\s*/,'')}
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
if (answeredCount === 0) msgEl.textContent ='Give the quiz a try!';
else if (answeredCount
      < TOTAL) msgEl.textContent = `${TOTAL - answeredCount} left!`;
else if (correctCount === TOTAL) msgEl.textContent =' Perfect score! Web Expert!';
else if (correctCount >= TOTAL * 0.7) msgEl.textContent ='Impressive! You really know your stuff.';
else if (correctCount >= TOTAL * 0.4) msgEl.textContent ='Not bad at all!';
else msgEl.textContent ="Let's learn together!";
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
      <button class="quiz-hint-btn" type="button">Show Hint</button>
      <div class="quiz-choices">
      <button class="quiz-c" data-idx="0"><span class="quiz-c-label">A</span><span class="quiz-c-body">${q.choices[0]}</span></button>
<button class="quiz-c" data-idx="1"><span class="quiz-c-label">B</span><span class="quiz-c-body">${q.choices[1]}</span></button>
      </div>
      <div class="quiz-feedback" hidden>
      </div>
      <button class="quiz-next" type="button" hidden>Next Question &rarr;</button>
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
done.innerHTML =`<p>You answered all the questions!</p>`;
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

const PF_BERRY_IMGS = (window.BB && window.BB.BERRY_IMGS) || ['<?php echo MAYA_URI; ?>/img/3.png','<?php echo MAYA_URI; ?>/img/4.png','<?php echo MAYA_URI; ?>/img/5.png','<?php echo MAYA_URI; ?>/img/7.png'];
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
banner.innerHTML ='<span class="pf-banner-en">PERFECT!</span><span class="pf-banner-ja">Perfect score</span>';
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
    ttl: 'Opening a Shop',
    desc: "Cafes, boutiques, small salons — for businesses where getting customers through the door is the goal. We design with your brand's vibe in mind, prioritize mobile, and set up CMS so you can update menus yourself.",
    plan: 'STANDARD (from ¥260,000)',
    set_label: 'Recommended Bundle',
    set_desc: 'STANDARD + Blog Standard (¥5,000/mo)',
    set_badge: '10% OFF on web production',
    normal_price: '¥260,000~',
    set_price: '¥234,000~',
    saving: 'Save ¥26,000!',
    badge_label: '10%',
    badge_sub: 'OFF',
    hearing: { kind: ['Website'], purpose: 'Increase inquiries / attract more customers', target: ['Local / general customers'], budget: '¥300,000–500,000' },
    img: '<?php echo MAYA_URI; ?>/img/type03.jpg'
  },
  creator: {
    ttl: 'Artists & Designers',
    desc: "Your work is the star. We design a simple structure where your pieces speak for themselves. BASIC works great for showcasing artwork; STANDARD if you want more text and detail.",
    plan: 'BASIC (from ¥150,000)',
    set_label: 'Recommended Bundle',
    set_desc: 'BASIC + Banner Design (from ¥5,000/piece)',
    set_badge: '10% OFF on banners with web order!',
    normal_price: '¥150,000~',
    set_price: '¥135,000~',
    saving: 'Save ¥15,000!',
    badge_label: '10%',
    badge_sub: 'OFF',
    hearing: { kind: ['Website'], purpose: 'Connect with SNS or flyers', target: ['SNS followers / fans'], budget: '¥150,000–300,000' },
    img: '<?php echo MAYA_URI; ?>/img/type01.png'
  },
  event: {
    ttl: 'Events & Campaigns',
    desc: "For limited-time messages, a single LP beats multiple pages. We recommend combining banners and SNS assets in one cohesive tone, running alongside your ads.",
    plan: 'BASIC (from ¥150,000)',
    set_label: 'Recommended Bundle',
    set_desc: 'BASIC + 3+ Banners Bundle',
    set_badge: '10% OFF on 3+ banners!',
    normal_price: '¥150,000~',
    set_price: '¥135,000~',
    saving: 'Save ¥15,000!',
    badge_label: '10%',
    badge_sub: 'OFF',
    hearing: { kind: ['Landing Page', 'Banner'], purpose: 'Increase inquiries / attract more customers', target: ['Local / general customers'], budget: '¥150,000–300,000' },
    img: '<?php echo MAYA_URI; ?>/img/type07.png'
  },
  renew: {
    ttl: 'Website Renewal',
    desc: "For those thinking 'our site is outdated' or 'it's hard to use.' We start with an analysis, redesign thoughtfully, and review your content together. Application pages, blogs — we handle it all.",
    plan: 'PREMIUM (from ¥450,000)',
    set_label: 'Recommended Bundle',
    set_desc: 'PREMIUM + SEO Pro Blog (from ¥18,000/mo)',
    set_badge: 'SEO Pro Blog — half price 1st month!',
    normal_price: '¥18,000~/mo',
    set_price: '¥9,000~/mo',
    saving: 'Save ¥9,000 1st month!',
    badge_label: 'HALF',
    badge_sub: '1st mo.',
    hearing: { kind: ['Website'], purpose: 'Renew an existing website', target: ['Not decided yet'], budget: '¥500,000+' },
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
  contactBtn.href = '/contact-en/';
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
    location.href = '/contact-en/';
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
  if (afterLblEl)  afterLblEl.textContent  = key === 'renew' ? 'SEO Pro Blog 1st Month' : 'Bundle Price';
  if (beforeLblEl) beforeLblEl.textContent = 'Regular';

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
  /* Touch devices: add close button to each tooltip */
  document.querySelectorAll('.bp-tip').forEach(tip => {
    const btn = document.createElement('button');
    btn.className = 'bp-tip-close';
    btn.setAttribute('aria-label', 'Close');
    btn.textContent = '×';
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      tip.closest('.bp-has-tip').classList.remove('tip-open');
    });
    tip.appendChild(btn);
  });
  /* Tap to toggle */
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
        <?php include "footer_en.php"; ?>
