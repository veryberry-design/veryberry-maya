<?php
/*
Template Name: About
*/
$pageTitle = "VeryBerry — ベリーのお部屋";
$currentPage = "about";
include "header.php";
?>
<!-- Drifting soap bubbles background -->
<div class="bubbles-bg" id="bubbles-bg" aria-hidden="true">
</div>
<main class="wrap">
  <!-- Page intro -->
  <div class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">
      — berry's room —
    </div>
    <h2>
      <span class="scrib">ベリーのお部屋 </span>
    </h2>
    <p class="muted sm" style="max-width: 480px; margin: 18px auto 0; line-height: 2;">
      私のことを少しでも知ってもらえたら嬉しいです。 <br/>
      趣味や好きなこと、うちの子のことも紹介しています。 <br/>
      もし興味あったら、すこしのぞいてみてください
    </p>
  </div>
  <!-- KAMISHIBAI (paper theater) -->
  <section class="kami-section" style="margin-top: 80px;">
    <div class="kami-frame">
      <div class="kami-stage" id="kami-stage" aria-label="紙芝居">
        <!-- 表紙 -->
        <div class="kami-scene cover active" data-i="0">
          <div class="kami-cover-deco-bg" aria-hidden="true">
            <span class="kcb-cloud kcb-c1">
            <svg viewBox="0 0 260 120" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <filter id="cf1" x="-20%" y="-20%" width="140%" height="140%">
                  <feGaussianBlur stdDeviation="4"/>
                </filter>
                <linearGradient id="cg1" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%"   stop-color="white"          stop-opacity="1"/>
                  <stop offset="70%"  stop-color="rgb(210,228,248)" stop-opacity="0.8"/>
                  <stop offset="100%" stop-color="rgb(180,210,240)" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g filter="url(#cf1)" fill="url(#cg1)">
                <ellipse cx="130" cy="94" rx="115" ry="28"/>
                <circle  cx="58"  cy="76" r="36"/>
                <circle  cx="102" cy="54" r="46"/>
                <circle  cx="162" cy="62" r="40"/>
                <circle  cx="212" cy="76" r="30"/>
                <circle  cx="78"  cy="60" r="28"/>
              </g>
            </svg>
            </span>
            <span class="kcb-cloud kcb-c2">
            <svg viewBox="0 0 190 90" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <filter id="cf2" x="-20%" y="-20%" width="140%" height="140%">
                  <feGaussianBlur stdDeviation="3.5"/>
                </filter>
                <linearGradient id="cg2" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%"   stop-color="white"           stop-opacity="1"/>
                  <stop offset="65%"  stop-color="rgb(210,228,248)" stop-opacity="0.75"/>
                  <stop offset="100%" stop-color="rgb(180,210,240)" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g filter="url(#cf2)" fill="url(#cg2)">
                <ellipse cx="95"  cy="70" rx="82" ry="24"/>
                <circle  cx="42"  cy="56" r="28"/>
                <circle  cx="80"  cy="40" r="34"/>
                <circle  cx="128" cy="48" r="30"/>
                <circle  cx="162" cy="58" r="22"/>
              </g>
            </svg>
            </span>
            <span class="kcb-cloud kcb-c3">
            <svg viewBox="0 0 150 72" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <filter id="cf3" x="-20%" y="-20%" width="140%" height="140%">
                  <feGaussianBlur stdDeviation="3"/>
                </filter>
                <linearGradient id="cg3" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%"   stop-color="white"           stop-opacity="1"/>
                  <stop offset="65%"  stop-color="rgb(210,228,248)" stop-opacity="0.7"/>
                  <stop offset="100%" stop-color="rgb(180,210,240)" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g filter="url(#cf3)" fill="url(#cg3)">
                <ellipse cx="75"  cy="55" rx="62" ry="20"/>
                <circle  cx="34"  cy="44" r="22"/>
                <circle  cx="66"  cy="30" r="28"/>
                <circle  cx="106" cy="38" r="24"/>
                <circle  cx="130" cy="48" r="18"/>
              </g>
            </svg>
            </span>
            <span class="kcb-spark kcb-s1">
            <svg width="16" height="16" viewBox="0 0 20 20">
              <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
            </svg>
            </span>
            <span class="kcb-spark kcb-s2">
            <svg width="11" height="11" viewBox="0 0 20 20">
              <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
            </svg>
            </span>
            <span class="kcb-spark kcb-s3">
            <svg width="20" height="20" viewBox="0 0 20 20">
              <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
            </svg>
            </span>
            <span class="kcb-spark kcb-s4">
            <svg width="9"  height="9"  viewBox="0 0 20 20">
              <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
            </svg>
            </span>
          </div>
          <div class="kami-cover-art">
            <div class="kami-cover-kicker">
              — a story of —
            </div>
            <div class="kami-cover-name">
              VeryBerry
            </div>
            <div class="kami-cover-sub">
              a quiet introduction<br class="sp-only"> in 9 scenes
            </div>
          </div>
        </div>
        <!-- 01 はじめまして -->
        <div class="kami-scene" data-i="1">
          <div class="kami-photo">
            <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/profile03.JPG');background-size:cover;background-position:center;"></div>
          </div>
          <div class="kami-text">
            <span class="kami-tag">scene 01 / はじめまして </span>
            <div style="font-family:var(--script); font-size:15px; color:#d04a6c; letter-spacing:0.12em; margin-bottom:4px;">NEWBERRY MAYA KRISTEN</div>
            <h3>
              にゅーべりー まや <br/>くりすてぃーん
            </h3>
            <p>
              アメリカ出身、沖縄在住のWebデザイナー・コーダーです。<br/>
              ものづくりが好きで、デザインやWeb制作の新しい技術、アイデアを日々学びながら活動しています。<br/>
              現在はWeb制作会社でサイトの更新・運用管理に携わり、チームのマネジメントや業務改善にも取り組んでいます。<br/>
              制作において大切にしているのは、お客様一人ひとりの想いや目的を丁寧に汲み取り、デザインと機能の両面から最適な形を考えることです。<br/>
              見た目の美しさだけでなく、情報の伝わりやすさや使いやすさにもこだわり、細部まで工夫を重ねながら制作しています。<br/>
              ただご依頼いただいたものを形にするだけでなく、課題や目標を共有し、一緒に考えながらより良いものをつくり上げていく。<br/>
              そんな、気軽に相談できる身近なパートナーでありたいと考えています。
            </p>
            <div class="stamp-row">
              <span class="stamp">Okinawa </span>
              <span class="stamp">designer + coder </span>
              <span class="stamp">since 2024 </span>
            </div>
          </div>
        </div>
        <!-- 02 1998 -->
        <div class="kami-scene" data-i="2">
          <div class="kami-photo">
            <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/profile04.png');background-size:cover;background-position:center;"></div>
          </div>
          <div class="kami-text_line">
            <span class="kami-tag">scene 02 / 1998</span>
            <h3>
              About me
            </h3>
            <p>
              アメリカ生まれで宮古島育ちです！<br/>
              現在は沖縄でゆんたく〜しながら生きてます^ ^
            </p>
            <ul class="kami-list">
              <li><span class="kami-label">血液型：</span><span class="kami-value">A型</span></li>
              <li><span class="kami-label">性格：</span><span class="kami-value">行動派</span></li>
              <li><span class="kami-label">好きな色：</span><span class="kami-value">紫一択!!!</span></li>
              <li><span class="kami-label">好きな食べ物：</span><span class="kami-value">基本なんでも!<br/> 最近はシャケにハマりまくってます...</span></li>
              <li><span class="kami-label">趣味：</span><span class="kami-value">料理  / Webデザイン / 食べ物マグネット集め</span></li>
            </ul>
          </div>
        </div>
        <!-- 03 2022 -->
        <div class="kami-scene" data-i="3">
          <div class="kami-photo">
            <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/profile05.jpg');background-size:cover;background-position:center;"></div>
          </div>
          <div class="kami-text">
            <span class="kami-tag">scene 03 / 2022</span>
            <h3>
              思わぬところで、<br/>運命に出会った
            </h3>
            <p>
              大学卒業後、塾で約4年間、英語講師として勤務していました。<br>
              仕事を通してデザインに携わる機会があり、自分の頭の中にあるアイデアを形にする楽しさを知りました。<br>
              そこからデザインの世界に魅了され、働きながらオンラインスクールでデザインやWeb制作の基礎を学び始めました。<br>
              学びを深めるうちに、見た目の美しさだけでなく、情報をわかりやすく伝え、使いやすさを考えるWeb制作の奥深さにも惹かれるようになりました。
            </p>
          </div>
        </div>
        <!-- 04 2019 -->
        <div class="kami-scene" data-i="4">
          <div class="kami-photo">
            <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/profile06.jpg');background-size:cover;background-position:center;"></div>
          </div>
          <div class="kami-text">
            <span class="kami-tag">scene 04 / 2024 </span>
            <h3>
              Web業界へ
            </h3>
            <p>
              未経験からWeb業界への挑戦を決意したものの、最初は知識も実績もない状態からのスタートでした。<br>
              まずは基礎をしっかり身につけたいと考え、3ヶ月間の職業訓練校に通い、HTML・CSSをはじめとするWeb制作の知識や技術を学びました。<br>
              学習と並行して資格取得にも挑戦し、「<span class="webk-mark">Webクリエイター能力認定試験 HTML5 エキスパート</span>」に合格。
            </p>
            <a href="<?php echo MAYA_URI; ?>/img/certificate.pdf" target="_blank" rel="noopener" class="cert-link">
              <img src="<?php echo MAYA_URI; ?>/img/certificate.jpg" alt="Webクリエイター能力認定試験 HTML5 エキスパート 認定証" class="cert-img" />
              <span class="cert-caption">※クリックしたら結果が見れます</span>
            </a>
            <p>
              学びを重ねることで少しずつ自信がつき、Web制作の仕事に携わりたいという想いがさらに強くなりました。<br>
              職業訓練校の修了後は、念願だったWeb制作会社に入社。<br>
              実際の現場でさまざまな経験を積む中で、Web制作の奥深さや、学んだ知識を仕事に活かせる喜びを日々実感しています。<br>
              未経験からのスタートだったからこそ、学び続けることの大切さを実感しています。これからも新しい知識や技術を積極的に取り入れ、できることの幅を広げていきたいと考えています。
            </p>
          </div>
        </div>
        
        <!-- 05 できること -->
        <div class="kami-scene" data-i="5">
          <div class="kami-photo">
            <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/profile07.jpg');background-size:cover;background-position:center;"></div>
          </div>
          <div class="kami-text_line">
            <span class="kami-tag">scene 05 / now</span>
            <h3>
              できること
            </h3>
            <p>
              Webサイトのデザインからコーディングまで基本なんでもできます。<br/>
              紙もデジタルも動画も、できることは全部使って届けたいものを届けます！
            </p>
            <ul class="kami-list">
              <li><span class="kami-label">コーディング</span><span class="kami-value">HTML / CSS / JavaScript / PHP</span></li>
              <li><span class="kami-label">デザイン</span><span class="kami-value">Webサイト / バナー / チラシ</span></li>
              <li><span class="kami-label">CMS構築</span><span class="kami-value">WordPress など</span></li>
              <li><span class="kami-label">SEO</span><span class="kami-value">内部対策 / メタ / 構造化データ</span></li>
              <li><span class="kami-label">動画編集</span><span class="kami-value">簡単な編集・SNS向け動画など</span></li>
              <li><span class="kami-label">ブログ代行</span><span class="kami-value">定期更新 / 記事作成</span></li>
            </ul>
            <div class="stamp-row">
              <span class="stamp">Figma</span>
              <span class="stamp">Illustrator</span>
              <span class="stamp">Photoshop</span>
              <span class="stamp">Final Cut Pro X</span>
              <span class="stamp">HTML / CSS / JS</span>
            </div>
          </div>
        </div>
        <!-- 06 レグ紹介 -->
        <div class="kami-scene" data-i="6">
          <div class="kami-photo">
            <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu02.jpg');background-size:cover;background-position:center;"></div>
          </div>
          <div class="kami-text">
            <span class="kami-tag">scene 06 / うちの子 </span>
            <h3>
              レグのこと。
            </h3>
            <p>
             ドワーフロップイヤーズのメス、3歳。<br/>
             性格は人懐っこくてグルメな食いしん坊!<br/>
             毎日癒してくれる愛おしい存在です( ⁎ᵕᴗᵕ⁎ )<br/>
             下の方にレグの写真集もあるので良かったら見てください。
            </p>
            <div class="stamp-row">
              <span class="stamp">ドワーフロップイヤーズ</span>
              <span class="stamp">3歳 </span>
              <span class="stamp">好物: ブロッコリー・バナナ</span>
            </div>
            <a href="#reg-room" class="btn berry" style="display:inline-block; margin-top:14px;">レグの部屋を見る →</a>
          </div>
        </div>
        <!-- 裏表紙 -->
        <div class="kami-scene cover" data-i="7">
          <div class="kami-cover-deco-bg" aria-hidden="true">
            <span class="kcb-cloud kcb-c1b">
            <svg viewBox="0 0 260 120" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <filter id="cf1b" x="-20%" y="-20%" width="140%" height="140%">
                  <feGaussianBlur stdDeviation="4"/>
                </filter>
                <linearGradient id="cg1b" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%"   stop-color="white"            stop-opacity="1"/>
                  <stop offset="70%"  stop-color="rgb(210,228,248)" stop-opacity="0.8"/>
                  <stop offset="100%" stop-color="rgb(180,210,240)" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g filter="url(#cf1b)" fill="url(#cg1b)">
                <ellipse cx="130" cy="94" rx="115" ry="28"/>
                <circle cx="58"  cy="76" r="36"/>
                <circle cx="102" cy="54" r="46"/>
                <circle cx="162" cy="62" r="40"/>
                <circle cx="212" cy="76" r="30"/>
                <circle cx="78"  cy="60" r="28"/>
              </g>
            </svg>
            </span>
            <span class="kcb-cloud kcb-c2b">
            <svg viewBox="0 0 190 90" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <filter id="cf2b" x="-20%" y="-20%" width="140%" height="140%">
                  <feGaussianBlur stdDeviation="3.5"/>
                </filter>
                <linearGradient id="cg2b" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%"   stop-color="white"            stop-opacity="1"/>
                  <stop offset="65%"  stop-color="rgb(210,228,248)" stop-opacity="0.75"/>
                  <stop offset="100%" stop-color="rgb(180,210,240)" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g filter="url(#cf2b)" fill="url(#cg2b)">
                <ellipse cx="95"  cy="70" rx="82" ry="24"/>
                <circle  cx="42"  cy="56" r="28"/>
                <circle  cx="80"  cy="40" r="34"/>
                <circle  cx="128" cy="48" r="30"/>
                <circle  cx="162" cy="58" r="22"/>
              </g>
            </svg>
            </span>
            <span class="kcb-cloud kcb-c3b">
            <svg viewBox="0 0 150 72" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <filter id="cf3b" x="-20%" y="-20%" width="140%" height="140%">
                  <feGaussianBlur stdDeviation="3"/>
                </filter>
                <linearGradient id="cg3b" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%"   stop-color="white"            stop-opacity="1"/>
                  <stop offset="65%"  stop-color="rgb(210,228,248)" stop-opacity="0.7"/>
                  <stop offset="100%" stop-color="rgb(180,210,240)" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g filter="url(#cf3b)" fill="url(#cg3b)">
                <ellipse cx="75"  cy="55" rx="62" ry="20"/>
                <circle  cx="34"  cy="44" r="22"/>
                <circle  cx="66"  cy="30" r="28"/>
                <circle  cx="106" cy="38" r="24"/>
                <circle  cx="130" cy="48" r="18"/>
              </g>
            </svg>
            </span>
            <span class="kcb-spark kcb-sb1">
            <svg width="16" height="16" viewBox="0 0 20 20">
              <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
            </svg>
            </span>
            <span class="kcb-spark kcb-sb2">
            <svg width="11" height="11" viewBox="0 0 20 20">
              <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
            </svg>
            </span>
            <span class="kcb-spark kcb-sb3">
            <svg width="20" height="20" viewBox="0 0 20 20">
              <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
            </svg>
            </span>
            <span class="kcb-spark kcb-sb4">
            <svg width="9"  height="9"  viewBox="0 0 20 20">
              <path d="M10 0 L11.5 8.5 L20 10 L11.5 11.5 L10 20 L8.5 11.5 L0 10 L8.5 8.5 Z" fill="currentColor"/>
            </svg>
            </span>
          </div>
          <div class="kami-cover-art">
            <div class="kami-cover-kicker">
              — thank you —
            </div>
            <div class="kami-cover-name">
              Let's chat.
            </div>
            <div class="kami-cover-sub">
              最後まで読んでくれてありがとう
            </div>
            <div class="kami-cover-deco">
            </div>
            <div style="margin-top: 24px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
              <a class="btn berry" href="/contact/">お話してみる → </a>
              <a class="btn" href="/works/">実績を見る </a>
            </div>
          </div>
        </div>
      </div>
      <!-- side arrows (outside kami-stage to avoid overflow:hidden clipping) -->
      <button class="kami-arrow prev" id="kami-prev" type="button" aria-label="前へ">‹ </button>
      <button class="kami-arrow next" id="kami-next" type="button" aria-label="次へ">› </button>
      <!-- bottom controls -->
      <div class="kami-controls">
        <button class="btn ghost" id="kami-reset" type="button">↻ 最初から </button>
        <div class="kami-dots" id="kami-dots" role="tablist">
        </div>
        <span class="kami-counter" id="kami-counter">1 / 11 </span>
      </div>
    </div>
  </section>
  <!-- レグの部屋 (photo gallery) -->
  <section class="reg-gallery" id="reg-room">
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">
        — meet reg —
      </div>
      <h2>
        <span class="scrib">レグの部屋 </span>
      </h2>
      <p class="muted sm" style="max-width: 460px; margin: 12px auto 0;">
        写真をクリックすると大きく見られます
      </p>
    </div>
    <div class="reg-grid" id="reg-grid">
      <div class="reg-tile big" data-i="0" data-lbl="[ reg 01 ]">
        <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu/regu02.JPG');background-size:cover;background-position:center;"></div>
        <div class="reg-cap">
          小さなお嬢様
        </div>
      </div>
      <div class="reg-tile" data-i="1" data-lbl="[ reg 02 ]">
        <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu/regu08.JPG');background-size:cover;background-position:center;"></div>
        <div class="reg-cap">
          ぺろぺろ
        </div>
      </div>
      <div class="reg-tile" data-i="2" data-lbl="[ reg 03 ]">
        <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu/regu03.JPG');background-size:cover;background-position:center;"></div>
        <div class="reg-cap">
          ハロウィン
        </div>
      </div>
      <div class="reg-tile tall" data-i="3" data-lbl="[ reg 04 ]">
        <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu/regu05.JPG');background-size:cover;background-position:center;"></div>
        <div class="reg-cap">
          ジャンプ!!
        </div>
      </div>
      <div class="reg-tile" data-i="4" data-lbl="[ reg 05 ]">
        <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu/regu04.JPG');background-size:cover;background-position:center;"></div>
        <div class="reg-cap">
          大人しく抱っこされるレグ
        </div>
      </div>
      <div class="reg-tile" data-i="5" data-lbl="[ reg 06 ]">
        <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu/regu06.JPG');background-size:cover;background-position:center;"></div>
        <div class="reg-cap">
          ベットの下から...
        </div>
      </div>
      <div class="reg-tile" data-i="6" data-lbl="[ reg 07 ]">
        <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu/regu09.JPG');background-size:cover;background-position:center;"></div>
        <div class="reg-cap">
          ボールとレグ
        </div>
      </div>
      <div class="reg-tile" data-i="7" data-lbl="[ reg 08 ]">
        <div class="imgph has-img" style="background-image:url('<?php echo MAYA_URI; ?>/img/regu/regu01.JPG');background-size:cover;background-position:center;"></div>
        <div class="reg-cap">
          うさちゅ〜る
        </div>
      </div>
    </div>
  </section>
  <!-- Apple Music style playlist -->
  <section class="apple-shell" style="margin-top: 100px;">
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">
        — work bgm —
      </div>
      <h2>
        <span class="scrib">作業中のおとも </span>
      </h2>
      <p class="muted sm" style="max-width: 480px; margin: 12px auto 0;">
        気分でジャンルを切り替えて聴いています
      </p>
    </div>
    <div class="playlist-tabs" id="playlist-tabs">
      <button class="on" data-pl="jpop">J-POP</button>
      <button data-pl="cool">かっこいい </button>
      <button data-pl="sour">まったり</button>
      <button data-pl="slow">あまずっぱい </button>
    </div>
    <div class="apple-player fade-in" id="apple-player">
      <div class="apple-player-head">
        <div class="apple-player-cover">
          <span class="apple-player-cover-art" id="pl-cover"></span>
        </div>
        <div class="apple-player-meta">
          <span class="apple-player-kind">Playlist </span>
          <div class="apple-player-ttl" id="pl-title">
            VeryBerry / あまずっぱい気持ち
          </div>
          <div class="apple-player-by">
            curated by VeryBerry
          </div>
          <div class="apple-player-stats">
            <span id="pl-count">10曲 </span>
            <span>· </span>
            <span id="pl-duration">42分 </span>
            <span>· </span>
            <span id="pl-updated">更新 2026.05.10 </span>
          </div>
          <p class="apple-player-sub" id="pl-sub">
            夜更かしの作業に。穏やかなピアノとアンビエントを中心に。
          </p>
        </div>
      </div>
      <ol class="apple-player-list" id="pl-list">
      </ol>
      <iframe id="pl-iframe" allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;overflow:hidden;background:transparent;display:none;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="">
      </iframe>
    </div>
  </section>
  <!-- Recommended movies / drama / anime -->
  <section style="margin-top: 100px;">
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">
        — what i love —
      </div>
      <h2>
        <span class="scrib">おすすめの映画たち </span>
      </h2>
      <p class="muted sm" style="max-width: 480px; margin: 12px auto 0;">
        何度も見返している、デザインの栄養になってる作品たち
      </p>
    </div>
    <div class="playlist-tabs" id="media-tabs" style="margin-top: 28px;">
      <button class="media-tab on" data-mt="movie">映画 </button>
      <button class="media-tab" data-mt="drama">ドラマ </button>
      <button class="media-tab" data-mt="anime">アニメ </button>
    </div>
    <div class="media-grid fade-in" id="media-grid">
    </div>
  </section>
  <!-- Random scrapbook gallery -->
  <!-- <section class="scrap-section">
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">
        — another gallery —
      </div>
      <h2>
        <span class="scrib">もうひとつのギャラリー </span>
      </h2>
      <p class="muted sm" style="max-width: 460px; margin: 12px auto 0;">
        仕事じゃない、純粋に好きで撮ったり描いたりしたものを少しずつ
      </p>
    </div>
    <div class="scrap-grid" id="scrap-grid">
    </div>
  </section> -->
  <!-- Thanks outro -->
  <section class="thanks-section">
    <div class="thanks-card">
      <div class="thanks-emoji">
      </div>
      <div class="thanks-en">
        — thank you for visiting —
      </div>
      <h2 class="thanks-ttl">
        最後まで見てくださり、<br>ありがとうございます！
      </h2>
      <p class="thanks-msg">
        ここまで読んでくださって<br class="sp-only">ありがとうございます。 <br/>
        私のことが少しでも<br class="sp-only">伝わったらうれしいです。 <br/>
        おしゃべりはいつでも大歓迎、<br class="sp-only">お気軽にどうぞ。
      </p>
      <div class="thanks-actions">
        <a class="btn berry lg" href="/contact/">お話してみる → </a>
        <a class="btn lg" href="/works/">実績を見る </a>
      </div>
    </div>
  </section>
</main>
<!-- Reg photo lightbox -->
<div class="scrap-modal" id="reg-lightbox" hidden>
  <div class="scrap-modal-backdrop" data-close>
  </div>
  <div class="scrap-modal-card" role="dialog" aria-modal="true">
    <button class="scrap-modal-close" data-close aria-label="閉じる">× </button>
    <div class="scrap-modal-img imgph" id="reg-lb-img">
      <video id="reg-lb-video" muted loop playsinline style="width:100%;height:100%;object-fit:contain;display:none;"></video>
    </div>
    <div class="scrap-modal-body">
      <p class="scrap-modal-note" id="reg-lb-cap">
        — caption —
      </p>
      <div class="scrap-modal-date" id="reg-lb-nav" style="display:flex; gap:10px; align-items:center; justify-content:space-between;">
        <button class="btn ghost" id="reg-prev" type="button">‹ 前 </button>
        <span class="muted sm" id="reg-count">1 / 8 </span>
        <button class="btn ghost" id="reg-next" type="button">次 › </button>
      </div>
    </div>
  </div>
</div>
<!-- Media (movie/drama/anime) detail modal -->
<div class="media-modal" id="media-modal" hidden>
  <div class="media-modal-backdrop" data-close>
  </div>
  <article class="media-modal-card" role="dialog" aria-modal="true">
    <button class="media-modal-close" data-close aria-label="閉じる">× </button>
    <div class="media-modal-scroll">
      <div class="media-modal-video" id="media-modal-video">
      </div>
      <div class="media-modal-body">
        <span class="media-modal-tag" id="media-modal-tag">— tag — </span>
        <h3 class="media-modal-title" id="media-modal-title">
          — title —
        </h3>
        <div class="media-modal-meta" id="media-modal-meta">
          — meta —
        </div>
        <p class="media-modal-review" id="media-modal-review">
          — review —
        </p>
      </div>
    </div>
  </article>
</div>
<!-- Scrap detail modal -->
<div class="scrap-modal" id="scrap-modal" hidden>
  <div class="scrap-modal-backdrop" data-close>
  </div>
  <article class="scrap-modal-card" role="dialog" aria-modal="true">
    <button class="scrap-modal-close" data-close aria-label="閉じる">× </button>
    <div class="scrap-modal-img imgph" id="scrap-modal-img">
      <span class="lbl" id="scrap-modal-lbl">[ scrap ] </span>
    </div>
    <div class="scrap-modal-body">
      <p class="scrap-modal-note" id="scrap-modal-note">
        — note —
      </p>
      <div class="scrap-modal-date" id="scrap-modal-date">
        — date —
      </div>
    </div>
  </article>
</div>
<script src="<?php echo MAYA_URI; ?>/js/app.js?v=2">
  </script>
  <!-- Drifting bubbles -->
  <script>
    (function () {
const layer = document.getElementById('bubbles-bg');
if (!layer) return;
const COUNT = 9;
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
b.style.cssText = `left: ${left}%; width: ${size}px; height: ${size}px; --dur: ${dur}s; --delay: ${delay}s;`;
const inner = document.createElement('div');
inner.className ='sb-inner';
b.appendChild(inner);
layer.appendChild(b);
}
})();
</script>
    <!-- Kamishibai (paper theater) -->
    <script>
    (function () {
const stage = document.getElementById('kami-stage');
if (!stage) return;
const scenes = stage.querySelectorAll('.kami-scene');
const prev = document.getElementById('kami-prev');
const next = document.getElementById('kami-next');
const reset = document.getElementById('kami-reset');
const dotsEl = document.getElementById('kami-dots');
const counter = document.getElementById('kami-counter');
let cur = 0;
const total = scenes.length;

for (let i = 0; i
    < total; i++) {
const d = document.createElement('button');
d.className ='kami-dot' + (i === 0 ?' on' :'');
d.dataset.i = i;
d.setAttribute('role','tab');
d.setAttribute('aria-label', `シーン ${i + 1}`);
dotsEl.appendChild(d);
}
const dots = dotsEl.querySelectorAll('.kami-dot');

function go(n) {
n = (n + total) % total;
scenes[cur].classList.remove('active');
scenes[cur].classList.add(n >
    cur ?'prev' :'next');
setTimeout(() => {
scenes.forEach(s => s.classList.remove('prev','next'));
}, 600);
scenes[n].classList.remove('prev','next');
scenes[n].classList.add('active');
cur = n;
dots.forEach((d, i) => d.classList.toggle('on', i === cur));
counter.textContent = `${cur + 1} / ${total}`;
}
prev.addEventListener('click', e => { e.stopPropagation(); go(cur - 1); });
next.addEventListener('click', e => { e.stopPropagation(); go(cur + 1); });
reset.addEventListener('click', () => go(0));
dotsEl.addEventListener('click', e => {
const b = e.target.closest('.kami-dot');
if (b) go(parseInt(b.dataset.i, 10));
});
/* ページ送りは矢印・ドット・キーボードのみ（中身をクリックしても進まない） */
document.addEventListener('keydown', e => {
if (document.body.dataset.page !=='about') return;
if (e.target.matches('input, textarea, select')) return;
if (e.key ==='ArrowLeft') { go(cur - 1); }
if (e.key ==='ArrowRight') { go(cur + 1); }
});
})();
    </script>
    <!-- Reg gallery lightbox -->
    <script>
    (function () {
const grid = document.getElementById('reg-grid');
const lb = document.getElementById('reg-lightbox');
const lbImg = document.getElementById('reg-lb-img');
const lbVideo = document.getElementById('reg-lb-video');
const cap = document.getElementById('reg-lb-cap');
const cnt = document.getElementById('reg-count');
const prev = document.getElementById('reg-prev');
const next = document.getElementById('reg-next');
const tiles = grid.querySelectorAll('.reg-tile');
let cur = 0;

function show(i) {
cur = (i + tiles.length) % tiles.length;
const t = tiles[cur];
if (t.dataset.video) {
  lbImg.style.backgroundImage = 'none';
  lbVideo.src = t.dataset.video;
  lbVideo.style.display = 'block';
  lbVideo.play();
} else {
  lbVideo.pause();
  lbVideo.style.display = 'none';
  lbVideo.src = '';
  const bg = t.querySelector('.imgph').style.backgroundImage;
  lbImg.style.backgroundImage = bg;
  lbImg.style.backgroundSize = 'contain';
  lbImg.style.backgroundPosition = 'center';
  lbImg.style.backgroundRepeat = 'no-repeat';
}
cap.textContent = t.querySelector('.reg-cap').textContent;
cnt.textContent = `${cur + 1} / ${tiles.length}`;
}
function open(i) {
show(i);
lb.hidden = false;
requestAnimationFrame(() => lb.classList.add('open'));
document.body.style.overflow ='hidden';
}
function close() {
lb.classList.remove('open');
document.body.style.overflow ='';
setTimeout(() => { lb.hidden = true; }, 250);
}
tiles.forEach((t, i) => t.addEventListener('click', () => open(i)));
lb.addEventListener('click', e => { if (e.target.closest('[data-close]')) close(); });
prev.addEventListener('click', e => { e.stopPropagation(); show(cur - 1); });
next.addEventListener('click', e => { e.stopPropagation(); show(cur + 1); });
document.addEventListener('keydown', e => {
if (lb.hidden) return;
if (e.key ==='Escape') close();
if (e.key ==='ArrowLeft') show(cur - 1);
if (e.key ==='ArrowRight') show(cur + 1);
});
})();
    </script>
    <!-- Apple Music playlist -->
    <script>
    (function () {
const PLAYLISTS = {
slow: {
cover:'', title:'VeryBerry / あまずっぱい気持ち',
sub:'夜更かしの作業に。穏やかなピアノとアンビエントを中心に。',
updated:'更新 2026.05.10', apple:'#',
tracks: [
/* 01 */ { iframe:'https://embed.music.apple.com/jp/album/she-knows/1711029060?i=1711029063' },
/* 02 */ { iframe:'https://embed.music.apple.com/jp/album/%E3%83%8A%E3%83%83%E3%82%B7%E3%83%B3%E3%82%B0-%E3%82%A8%E3%83%AB%E3%82%B9-%E3%83%9E%E3%82%BF%E3%83%BC%E3%82%BA/1582667542?i=1582667548' },
/* 03 */ { iframe:'https://embed.music.apple.com/jp/album/low/1553592476?i=1553592477' },
/* 04 */ { iframe:'https://embed.music.apple.com/jp/album/whatever-it-takes-feat-guardin-jakkybo%C3%AD-9tails-halberd/1589123873?i=1589123874' },
/* 05 */ { iframe:'https://embed.music.apple.com/jp/album/lowkey/1724864127?i=1724864128' },
],
},
cool: {
cover:'', title:'VeryBerry / 集中スイッチ',
sub:'締切前のラストスパートに。リズムに乗せてくれる曲たち。',
updated:'更新 2026.04.02', apple:'#',
tracks: [
/* 01 */ { iframe:'https://embed.music.apple.com/jp/album/goodies-feat-petey-pablo/302992621?i=302992638' },
/* 02 */ { iframe:'https://embed.music.apple.com/jp/album/brilliant-bitch/1711846796?i=1711847115' },
/* 03 */ { iframe:'https://embed.music.apple.com/jp/album/ride-slow/1226725825?i=1226726743' },
/* 04 */ { iframe:'https://embed.music.apple.com/jp/album/one-punch/1595698519?i=1595698780' },
/* 05 */ { iframe:'https://embed.music.apple.com/jp/album/butterflies/1572620792?i=1572620793' },
],
},
fresh: {
cover:'', title:'VeryBerry / 朝の散歩',
sub:'朝のスケッチ・散歩のおとも。風を感じる音たち。',
updated:'更新 2026.05.04', apple:'#',
tracks: [{},{},{},{},{},{},{},{},{},{}],
},
sour: {
cover:'', title:'VeryBerry / 夜更かしの作業BGM',
sub:'デザイン中の気持ち。少しの切なさと、少しの甘さ。',
btn:'https://music.apple.com/profile/0ng39031726059j',
updated:'更新 2026.05.12', apple:'#',
tracks: [
/* 01 */ { iframe:'https://embed.music.apple.com/jp/album/can-we-kiss-forever-feat-adriana-proenza/1489363268?i=1489363270' },
/* 02 */ { iframe:'https://embed.music.apple.com/jp/album/unmade-bed/1707915510?i=1707915799' },
/* 03 */ { iframe:'https://embed.music.apple.com/jp/album/dear-alcohol-feat-atlus-kelsie-watts-carly-pearl-erv/1738323102?i=1738323533' },
/* 04 */ { iframe:'https://embed.music.apple.com/jp/album/electric-feel/1482330424?i=1482330425' },
/* 05 */ { iframe:'https://embed.music.apple.com/jp/album/safe-sound-from-the-hunger-games-soundtrack-feat/1445870930?i=1445870931' },
],
},
jpop: {
cover:'', title:'VeryBerry / J-POP',
sub:'', updated:'', apple:'#',
tracks: [
/* 01 */ { iframe:'https://embed.music.apple.com/jp/album/2-skies-feat-yng-muto-nyng/1542549252?i=1542549254' },
/* 02 */ { iframe:'https://embed.music.apple.com/jp/album/mayday-feat-dizzy-loud-era-lil-chill/1693532541?i=1693532812' },
/* 03 */ { iframe:'https://embed.music.apple.com/jp/album/aurora-feat-%E6%9F%8A%E4%BA%BA/1788150232?i=1788150415' },
/* 04 */ { iframe:'https://embed.music.apple.com/jp/album/%E7%94%9F%E3%81%8D%E3%81%A6%E3%82%86%E3%81%8F/1539912550?i=1539912921' },
/* 05 */ { iframe:'https://embed.music.apple.com/jp/album/red-wine-it-tastes-young-rich/1801083932?i=1801083942' },
],
},
};

const tabs   = document.getElementById('playlist-tabs');
const player = document.getElementById('apple-player');
const list   = document.getElementById('pl-list');
const iframeEl = document.getElementById('pl-iframe');


function render(key) {
const pl = PLAYLISTS[key];
document.getElementById('pl-cover').textContent = pl.cover;
document.getElementById('pl-title').textContent = pl.title;
document.getElementById('pl-sub').textContent = pl.sub;
document.getElementById('pl-updated').textContent = pl.updated;
if (pl.iframe) {
  iframeEl.src = pl.iframe;
  iframeEl.style.display = 'block';
  list.style.display = 'none';
  document.getElementById('pl-count').textContent = '';
  document.getElementById('pl-duration').textContent = '';
} else {
  iframeEl.style.display = 'none';
  iframeEl.src = '';
  list.style.display = '';
  document.getElementById('pl-count').textContent = `${pl.tracks.length}曲`;
  document.getElementById('pl-duration').textContent = '';
  list.innerHTML = pl.tracks.map((t, i) => `
    <li class="apple-track">
    <span class="apple-track-num">${i + 1}</span>
    ${t.iframe ? `<iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;overflow:hidden;background:transparent;grid-column:2/-1;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="${t.iframe}"></iframe>` : ''}
    </li>
    `).join('');
}
player.classList.remove('fade-in');
void player.offsetWidth;
player.classList.add('fade-in');
}

tabs.addEventListener('click', e => {
const b = e.target.closest('button');
if (!b) return;
tabs.querySelectorAll('button').forEach(x => x.classList.toggle('on', x === b));
render(b.dataset.pl);
});

render('jpop');
})();
    </script>
    <!-- Movies / Drama / Anime recommendations -->
    <script>
    (function () {
const MEDIA = {
movie: [
{ ttl:'僕のワンダフル・ライフ', year: 2017, emoji:'', tag:'感動', tube:'2xna7EXGgnI', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie01.jpg', review:'犬の目線で描かれた、命と愛の物語。何度見ても泣いてしまう大好きな一本です。' },
{ ttl:'エクストリームジョブ', year: 2019, emoji:'', tag:'笑える', tube:'oJEaGXlaAds', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie02.jpg', review:'' },
{ ttl:'最強のふたり', year: 2011, emoji:'', tag:'感動・笑える', tube:'IfHOM7dPzZA', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie03.jpg', review:'' },
{ ttl:'リチャード・ジュエル', year: 2019, emoji:'', tag:'実話', tube:'9J8OqAeAwic', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie04.jpg', review:'' },
{ ttl:'84m²', year: 2022, emoji:'', tag:'ミステリー', tube:'FjX3lvt_0IM', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie05.jpg', review:'' },
{ ttl:'セキュリティ・チェック', year: 2020, emoji:'', tag:'アクション', tube:'cE5FM2wjBUY', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie06.jpg', review:'' },
{ ttl:'オールド・ガード', year: 2020, emoji:'', tag:'アクション', tube:'1vWU0JuymGU', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie07.jpg', review:'' },
{ ttl:'フロッグ', year: 2022, emoji:'', tag:'サスペンス・ホラー', tube:'wEPYgVmNXSM', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie08.jpg', review:'' },
{ ttl:'スイス・アーミー・マン', year: 2016, emoji:'', tag:'笑える', tube:'O9CA2_VW9g4', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie09.jpg', review:'' },
{ ttl:'シャッター・アイランド', year: 2010, emoji:'', tag:'サスペンス', tube:'C2QHD98f-wg', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie10.jpg', review:'' },
{ ttl:'ハングオーバー 消えた花ムコと史上最悪の二日酔い', year: 2009, emoji:'', tag:'コメディー', tube:'b5Z1Ll6mRg4', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie11.jpg', review:'' },
{ ttl:'DROP／ドロップ', year: 2025, emoji:'', tag:'サスペンス', tube:'l3lz999_clo', thumb:'<?php echo MAYA_URI; ?>/img/movie/movie12.jpg', review:'' },
],
drama: [
{ ttl:'ブレイキング・バッド', year: 2008, emoji:'', tag:'犯罪ミステリー', tube:'gIAca7Ycg0w', thumb:'<?php echo MAYA_URI; ?>/img/movie/drama01.png', review:'' },
{ ttl:'メンタリスト', year: 2008, emoji:'', tag:'犯罪ミステリー・笑える', tube:'V7hDuOHoqa8', thumb:'<?php echo MAYA_URI; ?>/img/movie/drama02.png', review:'' },
{ ttl:'デクスター', year: 2006, emoji:'', tag:'サスペンス', tube:'8SyJPh3IXKA', thumb:'<?php echo MAYA_URI; ?>/img/movie/drama03.png', review:'' },
{ ttl:'リンカーン弁護士', year: 2022, emoji:'', tag:'犯罪ミステリー', tube:'a_lEQ7kFaK0', thumb:'<?php echo MAYA_URI; ?>/img/movie/drama04.png', cc:true, review:'' },
{ ttl:'Sweet Home －俺と世界の絶望－', year: 2020, emoji:'', tag:'サスペンス・ホラー', tube:'A7S_qWGkxH4', thumb:'<?php echo MAYA_URI; ?>/img/movie/drama05.png', review:'' },
{ ttl:'復讐代行人～模範タクシー～', year: 2021, emoji:'', tag:'アクション・笑える', tube:'Rdy-0gxaAtA', thumb:'<?php echo MAYA_URI; ?>/img/movie/drama06.png', review:'' },
{ ttl:'セリング・サンセット ～ハリウッド、夢の豪華物件', year: 2019, emoji:'', tag:'リアリティーショー', tube:'8TJmRHcRc4c', thumb:'<?php echo MAYA_URI; ?>/img/movie/drama07.png', cc:true, review:'' },
{ ttl:'サンタクラリータ・ダイエット', year: 2017, emoji:'', tag:'コメディー', tube:'MES2ktJz3TQ', thumb:'<?php echo MAYA_URI; ?>/img/movie/drama08.png', review:'' },
],
anime: [
{ ttl:'俺だけレベルアップな件', year: 2024, emoji:'', tag:'アクション', tube:'9NgavznS_Xs', thumb:'<?php echo MAYA_URI; ?>/img/movie/anime01.webp', review:'' },
{ ttl:'ガチアクタ', year: 2024, emoji:'', tag:'アクション', tube:'fcGBcw6qV4w', thumb:'<?php echo MAYA_URI; ?>/img/movie/anime02.webp', review:'' },
{ ttl:'鴨乃橋ロンの禁断推理', year: 2023, emoji:'', tag:'犯罪ミステリー', tube:'2fC2jsOYwsU', thumb:'<?php echo MAYA_URI; ?>/img/movie/anime03.webp', review:'' },
{ ttl:'慎重勇者', year: 2019, emoji:'', tag:'アクション', tube:'-K4TaXrKHRc', thumb:'<?php echo MAYA_URI; ?>/img/movie/anime04.webp', review:'' },
{ ttl:'新米オッサン冒険者、最強パーティに死ぬほど鍛えられて無敵になる。', year: 2024, emoji:'', tag:'アクション', tube:'juYfh7xTYdo', thumb:'<?php echo MAYA_URI; ?>/img/movie/anime05.webp', review:'' },
],
};

const tabs = document.getElementById('media-tabs');
const grid = document.getElementById('media-grid');
const modal = document.getElementById('media-modal');

function render(key) {
const list = MEDIA[key] || [];
grid.innerHTML = list.map((m, i) => {
const posterStyle = m.thumb
  ? `background-image:url('${m.thumb}');background-size:cover;background-position:center;`
  : m.tube
    ? `background-image:url('https://img.youtube.com/vi/${m.tube}/mqdefault.jpg');background-size:cover;background-position:center;`
    : '';
return `
    <div class="media-card" data-i="${i}" style="--i:${i};">
    <div class="media-poster" style="${posterStyle}">
    ${!m.thumb && !m.tube ? `<span class="media-poster-emoji">${m.emoji}</span>` : ''}
    <span class="media-poster-tag">${m.tag}</span>
    </div>
    <div class="media-info">
    <div class="media-ttl">${m.ttl}</div>
    <div class="media-year">${m.year}</div>
    </div>
    </div>`;
}).join('');
grid.querySelectorAll('.media-card').forEach((c, i) => c.addEventListener('click', () => openModal(list[i])));
grid.classList.remove('fade-in');
void grid.offsetWidth;
grid.classList.add('fade-in');
}

function openModal(m) {
document.getElementById('media-modal-tag').textContent = m.tag;
document.getElementById('media-modal-title').textContent = m.ttl;
document.getElementById('media-modal-meta').textContent = `${m.year}`;
document.getElementById('media-modal-review').textContent = m.review;
const vid = document.getElementById('media-modal-video');
if (m.tube) {
const ccParams = m.cc ? '&cc_load_policy=1&cc_lang_pref=ja' : '';
vid.innerHTML = `
    <iframe src="https://www.youtube-nocookie.com/embed/${m.tube}?${ccParams}" title="${m.ttl}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
    `;
} else if (m.tiktok) {
vid.innerHTML = `<iframe src="https://www.tiktok.com/embed/v2/${m.tiktok}" style="width:100%;height:700px;border:none;" allowfullscreen allow="encrypted-media;"></iframe>`;
} else {
vid.innerHTML = `
    <div class="media-modal-novideo">
    予告動画は準備中です
    </div>
    `;
}
modal.hidden = false;
requestAnimationFrame(() => modal.classList.add('open'));
document.body.style.overflow ='hidden';
}
function closeModal() {
modal.classList.remove('open');
document.body.style.overflow ='';
document.getElementById('media-modal-video').innerHTML ='';
setTimeout(() => { modal.hidden = true; }, 250);
}
modal.addEventListener('click', e => { if (e.target.closest('[data-close]')) closeModal(); });
document.addEventListener('keydown', e => { if (e.key ==='Escape' && !modal.hidden) closeModal(); });

tabs.addEventListener('click', e => {
const b = e.target.closest('button');
if (!b) return;
tabs.querySelectorAll('button').forEach(x => x.classList.toggle('on', x === b));
render(b.dataset.mt);
});

render('movie');
})();
    </script>
    <!-- Scrap gallery -->
    <script>
    (function () {
const SCRAPS = [
{ lbl:'紫陽花', size:'l', rot: -1.4, note:'雨上がりの紫陽花、ちょうど好きな色だった。', date:'2026.05.20' },
{ lbl:'コーヒー', size:'s', rot: 0.8, note:'朝のコーヒー。お店ぜんぶの香りに包まれて幸せだった。', date:'2026.05.12' },
{ lbl:'夕焼け', size:'m', rot: -0.6, note:'ベランダから見えた夕焼け。紫からオレンジへ。', date:'2026.04.28' },
{ lbl:'本屋', size:'s', rot: 1.2, note:'神保町の古本屋さん。あの本、買えばよかった。', date:'2026.04.18' },
{ lbl:'らくがき', size:'l', rot: 0.4, note:'休日のスケッチ。何も決めずに描くのがいちばん楽しい。', date:'2026.04.10' },
{ lbl:'紫陽花2', size:'s', rot: -1.2, note:'近所の紫陽花。今年もちゃんと咲いてくれてありがとう。', date:'2026.06.02' },
{ lbl:'カフェ', size:'s', rot: 0.6, note:'初めて入ったカフェ。器がすごく可愛かった。', date:'2026.03.22' },
{ lbl:'葉っぱ', size:'m', rot: -0.8, note:'光に透ける葉っぱ。緑がきれい。', date:'2026.05.30' },
{ lbl:'はがき', size:'s', rot: 1.0, note:'友だちからのお手紙。今でも手紙はいちばん嬉しい。', date:'2026.02.14' },
];

const grid = document.getElementById('scrap-grid');
const modal = document.getElementById('scrap-modal');

grid.innerHTML = SCRAPS.map((s, i) => `
    <div class="scrap-card size-${s.size}" data-i="${i}" style="transform: rotate(${s.rot}deg);">
    <div class="scrap-img imgph">
    <span class="lbl">[ ${s.lbl} ]</span>
    </div>
    <div class="scrap-note-peek">
    ${s.note}
    </div>
    </div>
    `).join('');

grid.querySelectorAll('.scrap-card').forEach((c, i) => c.addEventListener('click', () => open(SCRAPS[i])));

function open(s) {
document.getElementById('scrap-modal-lbl').textContent = `[ ${s.lbl} ]`;
document.getElementById('scrap-modal-note').textContent = s.note;
document.getElementById('scrap-modal-date').textContent = s.date;
modal.hidden = false;
requestAnimationFrame(() => modal.classList.add('open'));
document.body.style.overflow ='hidden';
}
function close() {
modal.classList.remove('open');
document.body.style.overflow ='';
setTimeout(() => { modal.hidden = true; }, 250);
}
modal.addEventListener('click', e => { if (e.target.closest('[data-close]')) close(); });
document.addEventListener('keydown', e => { if (e.key ==='Escape' && !modal.hidden) close(); });
})();
    </script>
    <script>
    (function () {
  document.querySelectorAll('.kami-thumbs').forEach(function (row) {
    var mainEl  = document.getElementById(row.dataset.main);
    var lblEl   = document.getElementById(row.dataset.lbl);
    var thumbs  = Array.from(row.querySelectorAll('.kami-thumb'));
    thumbs.forEach(function (thumb, idx) {
      thumb.addEventListener('click', function (e) {
        e.stopPropagation();
        thumbs.forEach(function (t) { t.classList.remove('active'); });
        thumb.classList.add('active');
        var img = thumb.querySelector('img');
        if (img && mainEl) mainEl.src = img.src;
      });
    });
  });
})();
    </script>
    <?php include "footer.php"; ?>
