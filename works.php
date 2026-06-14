<?php
/*
Template Name: Works
*/
$pageTitle = "ベリーベリーデザイン — 制作実績";
$currentPage = "works";
include "header.php";
?>
<img class="works-mouse" src="<?php echo MAYA_URI; ?>/img/mouse.png"  alt="" aria-hidden="true">
<img class="works-mouse2"src="<?php echo MAYA_URI; ?>/img/mouse2.png" alt="" aria-hidden="true">
<main class="wrap">
  <div class="sect-title" style="margin-top: 100px;">
    <h2>
      <span class="scrib">制作実績 </span>
    </h2>
    <span class="en">— works & case studies </span>
  </div>
  <div class="works-layout">
    <!-- Left filter -->
    <aside class="filter-side">
      <div class="group">
        <h4>
          カテゴリ <span class="en">CATEGORY </span>
        </h4>
        <div id="cat-list">
        </div>
      </div>
      <div class="group">
        <h4>
          タグ <span class="en">TAG </span>
        </h4>
        <div id="tag-list" style="display:flex; flex-wrap:wrap; gap:6px;">
        </div>
      </div>
      <div class="group">
        <h4>
          年 <span class="en">YEAR </span>
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
        <span class="muted sm">表示中: </span>
        <span class="stamp berry" id="cat-label">VIDEOS </span>
        <span class="grow"></span>
        <span class="muted sm" id="counter">1 / 4 </span>
        <button class="btn ghost" id="prev">← </button>
        <button class="btn ghost" id="next">→ </button>
      </div>
      <article class="featured-work" id="featured">
        <span class="click-badge" aria-hidden="true">Click!</span>
        <div class="imgph" style="aspect-ratio: 16/9;">
          <span class="lbl">[ featured ] </span>
        </div>
        <div class="ftitle">
          <h3 id="ftitle">
            MV「BERRY JAM」
          </h3>
          <span class="meta" id="fmeta">クライアント名 / 2026.02 / 60秒 </span>
        </div>
        <p class="desc" id="fdesc">
          紫の世界観で作った60秒のミュージックビデオ。スプラッシュ表現にこだわりました。
        </p>
        <span class="corner1" id="c1"></span>
        <span class="corner2" id="c2"></span>
      </article>
      <div class="thumb-row" id="thumbs">
      </div>
    </section>
  </div>
  <!-- ===== Color Gallery ===== -->
  <!-- <section class="cg-section">
    <div class="sect-title" style="margin-top:100px;">
      <h2>
        <span class="scrib">カラーギャラリー </span>
      </h2>
      <span class="en">— color palette book </span>
    </div>
    <p class="cg-lead">
      色から始まるデザインの世界。カラー別に集めたVeryBerry流の配色集です。<br/>
      気になるパレットをクリックするとカラーコードが確認できます。
    </p>
    <div class="cg-tabs" id="cg-tabs">
    </div>
    <div class="cg-grid" id="cg-grid">
    </div> -->
    <!-- Color palette popup -->
    <!-- <div class="color-modal" id="color-modal" hidden role="dialog" aria-modal="true" aria-labelledby="cm-name">
      <div class="color-modal-bd" id="cm-bd">
      </div>
      <div class="color-modal-card">
        <button class="color-modal-close" id="cm-close" aria-label="閉じる">× </button>
        <div class="color-modal-swatches" id="cm-swatches">
        </div>
        <div class="color-modal-body">
          <h3 class="color-modal-name" id="cm-name">
          </h3>
          <p class="color-modal-kw" id="cm-kw">
          </p>
        </div>
      </div>
    </div>
    <div class="cg-meanings">
      <div class="cg-mrow" style="--mc:#6b3aa0">
        <span class="cg-mrow-en">Purple </span>
        <div class="cg-mrow-inner">
          <div class="cg-mrow-box">
          </div>
          <div class="cg-mrow-body">
            <div class="cg-mrow-keys">
              <span>神秘 </span><span>高貴 </span><span>創造性 </span>
            </div>
            <p class="cg-mrow-desc">
              深みと格調を与え、芸術性や独自の世界観を表現したいデザインに。 <br>ラグジュアリーやアート系ブランドと相性抜群。
            </p>
          </div>
        </div>
      </div>
      <div class="cg-mrow" style="--mc:#d04a6c">
        <span class="cg-mrow-en">Pink </span>
        <div class="cg-mrow-inner">
          <div class="cg-mrow-box">
          </div>
          <div class="cg-mrow-body">
            <div class="cg-mrow-keys">
              <span>愛 </span><span>やさしさ </span><span>ロマンス </span>
            </div>
            <p class="cg-mrow-desc">
              温かみと親しみやすさを演出。スイーツ・コスメ・ブライダルなど、 <br>やわらかい印象を持たせたいブランドに。
            </p>
          </div>
        </div>
      </div>
      <div class="cg-mrow" style="--mc:#c41e3a">
        <span class="cg-mrow-en">Red </span>
        <div class="cg-mrow-inner">
          <div class="cg-mrow-box">
          </div>
          <div class="cg-mrow-body">
            <div class="cg-mrow-keys">
              <span>情熱 </span><span>エネルギー </span><span>力強さ </span>
            </div>
            <p class="cg-mrow-desc">
              視線を集める強さがある色。セールや告知など、瞬時に注目を引きたい <br>訴求デザインに効果的。
            </p>
          </div>
        </div>
      </div>
      <div class="cg-mrow" style="--mc:#e07020">
        <span class="cg-mrow-en">Orange </span>
        <div class="cg-mrow-inner">
          <div class="cg-mrow-box">
          </div>
          <div class="cg-mrow-body">
            <div class="cg-mrow-keys">
              <span>活気 </span><span>親しみやすさ </span><span>温かさ </span>
            </div>
            <p class="cg-mrow-desc">
              明るくフレンドリーな印象を与える。食品・レジャー・カジュアルな <br>ブランドのデザインによく使われる。
            </p>
          </div>
        </div>
      </div>
      <div class="cg-mrow" style="--mc:#c8a000">
        <span class="cg-mrow-en">Yellow </span>
        <div class="cg-mrow-inner">
          <div class="cg-mrow-box">
          </div>
          <div class="cg-mrow-body">
            <div class="cg-mrow-keys">
              <span>明るさ </span><span>希望 </span><span>楽しさ </span>
            </div>
            <p class="cg-mrow-desc">
              元気と前向きさを伝える色。子ども向けコンテンツや季節の販促物、 <br>ポップなデザインに映える。
            </p>
          </div>
        </div>
      </div>
      <div class="cg-mrow" style="--mc:#3a8042">
        <span class="cg-mrow-en">Green </span>
        <div class="cg-mrow-inner">
          <div class="cg-mrow-box">
          </div>
          <div class="cg-mrow-body">
            <div class="cg-mrow-keys">
              <span>自然 </span><span>成長 </span><span>癒し </span>
            </div>
            <p class="cg-mrow-desc">
              安心感と健やかさを演出する色。オーガニック・健康・環境系ブランドのデザインに多く取り入れられる。
            </p>
          </div>
        </div>
      </div>
      <div class="cg-mrow" style="--mc:#1860a8">
        <span class="cg-mrow-en">Blue </span>
        <div class="cg-mrow-inner">
          <div class="cg-mrow-box">
          </div>
          <div class="cg-mrow-body">
            <div class="cg-mrow-keys">
              <span>信頼 </span><span>冷静 </span><span>誠実 </span>
            </div>
            <p class="cg-mrow-desc">
              落ち着いた知性と信頼感を与える。企業・IT・金融・医療など、 <br>誠実さを伝えたいブランドに。
            </p>
          </div>
        </div>
      </div>
      <div class="cg-mrow" style="--mc:#606060">
        <span class="cg-mrow-en">Mono </span>
        <div class="cg-mrow-inner">
          <div class="cg-mrow-box">
          </div>
          <div class="cg-mrow-body">
            <div class="cg-mrow-keys">
              <span>洗練 </span><span>シンプル </span><span>強さ </span>
            </div>
            <p class="cg-mrow-desc">
              余計な色をそぎ落とした潔さが魅力。ハイブランドやモダン・ミニマルな雰囲気を出したいデザインに。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
</main>
<!-- Work detail popup — case-study style with chat + stats + points -->
<div class="work-modal" id="work-modal" hidden>
  <div class="work-modal-backdrop" data-close>
  </div>
  <article class="work-modal-card wm-big" role="dialog" aria-modal="true" aria-labelledby="wm-title">
    <button class="work-modal-close" data-close aria-label="閉じる">× </button>
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
            作品タイトル
          </h3>
          <div class="work-modal-meta" id="wm-meta">
            クライアント名
          </div>
        </div>
        <section class="wm-section">
          <h4 class="wm-section-h" data-en="overview">
            プロジェクト概要
          </h4>
          <p class="wm-section-desc" id="wm-desc">
          </p>
        </section>

        <section class="wm-section" id="wm-ba-sec">
          <h4 class="wm-section-h" data-en="before / after">
            ビフォア / アフター
          </h4>
          <div class="wm-ba" id="wm-ba">
            <div class="wm-ba-after imgph">
              <span class="lbl">[ After ] </span>
            </div>
            <div class="wm-ba-before imgph" id="wm-ba-before">
              <span class="lbl">[ Before ] </span>
            </div>
            <input type="range" min="0" max="100" value="50" class="wm-ba-slider" id="wm-ba-slider" aria-label="Before / After 比較"/>
            <div class="wm-ba-handle" id="wm-ba-handle">
              <span>‹‖› </span>
            </div>
            <span class="wm-ba-tag wm-ba-tag-l">Before </span>
            <span class="wm-ba-tag wm-ba-tag-r">After </span>
          </div>
        </section>
        <section class="wm-section" id="wm-pal-sec">
          <h4 class="wm-section-h" data-en="color palette">
            カラーパレット
          </h4>
          <div class="wm-palette" id="wm-palette">
          </div>
        </section>
        <section class="wm-section" id="wm-a11y-sec">
          <h4 class="wm-section-h" data-en="a11y score">
            アクセシビリティ指標
          </h4>
          <div class="wm-a11y" id="wm-a11y">
          </div>
        </section>
        <section class="wm-section">
          <h4 class="wm-section-h" data-en="highlights">
            こだわりポイント
          </h4>
          <div class="wm-points" id="wm-points">
          </div>
        </section>
        <section class="wm-section">
          <h4 class="wm-section-h" data-en="flow">
            制作の流れ
          </h4>
          <div class="wm-process" id="wm-process">
          </div>
        </section>
        <section class="wm-section">
          <h4 class="wm-section-h" data-en="tools">
            使ったもの
          </h4>
          <div class="wm-tools" id="wm-tools">
          </div>
        </section>
        <div class="wm-foot">
          <button class="btn" data-close>閉じる </button>
          <a class="btn berry" href="#" id="wm-url" target="_blank" rel="noopener" style="display:none;">サイトを見る → </a>
          <a class="btn berry" href="/contact/" id="wm-consult-btn">この感じで相談する → </a>
        </div>
      </div>
    </div>
  </article>
</div>
<script src="<?php echo MAYA_URI; ?>/js/app.js?v=2">
  </script>
  <script src="<?php echo MAYA_URI; ?>/js/works-data.js">
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
{ id:'other',  label:'その他', n: WORKS_DATA.filter(w => w.cat === 'other').length },
];
const TAGS = ['cosmetics','food','cafe','shop','illust','event'];

/* ===== 案件詳細データ ここから ===== */
const CASES = {
'カフェのコーポレートサイト': {
period:'2026.01 – 04', hours: 86, scope:'デザイン + コーディング',
desc:'地元カフェのコーポレートサイトをゼロから制作。<br>世界観を大切にしながら、CMSで自分で更新できる仕組みまで整えました。',
chat: [
{ who:'client', t:'近所のお客さんしか来てくれなくて…遠くからも来てほしいんです。' },
{ who:'client', t:'メニューも、毎月変わるのを自分で更新したいです。' },
{ who:'me', t:'なるほど。世界観をSNSで拡散しやすい作りにしますね。' },
{ who:'me', t:'更新もCMSでさくさく出来るようにします。' },
{ who:'client', t:'たすかります〜！' },
],
palette: ['#6B3AA0','#D04A6C','#FFF4E6','#3F6B34','#2A2030'],
a11y: [
{ l:'Performance', v:96 },
{ l:'Accessibility', v:100 },
{ l:'Best Practices', v:100 },
{ l:'SEO', v:98 },
],
ba: { hasBA:true },
points: [
{ t:'紫×クリームの世界観', d:'店内の雰囲気をそのまま画面に。' },
{ t:'スマホ優先設計', d:'お客さまの8割がスマホ閲覧。' },
{ t:'CMS完備', d:'毎月のメニュー更新が3分で完了。' },
],
process: ['ヒアリング','要件整理','ワイヤー','デザイン','コーディング','検証','公開'],
tools: ['Figma','Illustrator','HTML/CSS','JavaScript','microCMS'],
},
'Training Video': {
period:'2025', hours: 30, scope:'動画編集',
desc:'バスケット選手のトレーニング動画を撮影・編集。<br>祖父のガレージで飾らないリアルな雰囲気を残しながら、テンポよく仕上げました。',
chat: [
{ who:'client', t:'地元感を出してトレーニング動画を作って欲しい' },
{ who:'me', t:'きれいなスタジオより、ガレージみたいな場所の方が断然映えますね！' },
],
palette: [],
points: [
{ t:'テンポよい編集', d:'テンポと動きに合わせたカット割りで見やすく仕上げました。' },
{ t:'BGM・効果音', d:'動きを引き立てる音楽を選定。' },
],
process: ['音楽決め','動画撮影','編集','確認','納品'],
tools: ['Final Cut Pro X'],
},
'MV「BERRY JAM」': {
period:'2025.12 – 2026.02', hours: 64, scope:'動画編集',
desc:'アーティストの世界観を映像で表現した60秒のミュージックビデオ。<br>紫を基調にした色彩設計と、歌詞に合わせたカット演出にこだわりました。',
chat: [
{ who:'client', t:'紫っぽい世界観で、60秒のMVを作りたいんです！' },
{ who:'client', t:'歌詞のキーフレーズで、ぱっと色が変わる感じが欲しい…！' },
{ who:'me', t:'スプラッシュで色がはじけるカットを入れましょう。' },
{ who:'client', t:'それです！それです！' },
],
palette: ['#5E2A86','#C44569','#FFE0EC','#1D1126','#F5B6CE'],
points: [
{ t:'色彩演出', d:'歌詞の核に合わせて画面が紫に染まる。' },
{ t:'実写×アニメ', d:'手描きカットを実写に重ねる演出。' },
{ t:'リズム合わせ', d:'ビートと切替を1フレーム単位で調整。' },
],
process: ['企画','絵コンテ','撮影','編集','色調整','納品'],
tools: ['Premiere Pro','Final Cut Pro X','Photoshop'],
},
'夏キャンペーン バナー一式': {
period:'2025.11 – 2026.01', hours: 38, scope:'デザインのみ',
desc:'夏のセールキャンペーン用バナーを5サイズ×5パターン制作。<br>デザインシステムで統一感を保ちながら、効率よく量産しました。',
chat: [
{ who:'client', t:'夏のセール、5サイズ × 5パターンほしいんです…！' },
{ who:'me', t:'量だと作業ボリュームが心配。一式のデザインシステムでまとめましょう。' },
{ who:'client', t:'お願いします〜！' },
],
palette: ['#6B3AA0','#D04A6C','#FFD86E','#FFFFFF','#2A2030'],
points: [
{ t:'統一感とバリエ', d:'1つのシステムで全25枚を量産。' },
{ t:'視線誘導', d:'F字パターンを意識した配置。' },
{ t:'紫×白の対比', d:'CTAを最も目立つように。' },
],
process: ['ヒアリング','コンセプト','システム設計','量産','テスト','納品'],
tools: ['Illustrator','Photoshop','Figma'],
},
'basketball in Miyako': {
period:'2025', hours: 20, scope:'動画編集',
desc:'バスケットボールの練習風景を撮影・編集。<br>見ている人の背中を押せるような一本に仕上げました。',
chat: [
{ who:'client', t:'バスケしてるところを動画にしてほしいんです！' },
{ who:'me', t:'ナレーションを入れてゆったりな感じにしてみましょう！' },
],
palette: [],
points: [
{ t:'ナレーション', d:'ナレーションに合わせて緩急をつけ、見ている人がプレイに引き込まれるテンポにしました。' },
{ t:'テンポよい編集', d:'動きのあるシーンを中心にリズムよくカット。' },
],
process: ['音楽決め','動画撮影','レコーディング','編集','確認','納品'],
tools: ['Final Cut Pro X'],
},
'宮古島の海でトレーニング': {
period:'2025', hours: 20, scope:'動画編集',
desc:'宮古島の海辺でのトレーニング動画を撮影・編集。<br>自然の中でのトレーニングの迫力と美しさを映像に収めました。',
chat: [
{ who:'client', t:'宮古島の海でトレーニングしてる様子を動画にしたいんです。' },
{ who:'me', t:'海をバックに撮ると絵になりますね。最適な場所を探しましょう！' },
],
palette: [],
points: [
{ t:'流れを意識しました', d:'苦しさから達成感へ、表情の変化でストーリーを作りました' },
{ t:'臨場感のある編集', d:'体の動きと波のリズムを合わせたカット割り。' },
],
process: ['音楽決め','動画撮影','編集','確認','納品'],
tools: ['Final Cut Pro X'],
},
'ホエールウォッチングバナー(架空)': {
period:'2025', hours: 10, scope:'デザインのみ',
desc:'架空業者のホエールウォッチングツアーの集客用バナーを制作。<br>海の広がりとクジラの迫力を伝えるデザインに仕上げました。',
palette: [],
points: [
{ t:'海の世界観', d:'青を基調に、広大な海の雰囲気を表現しました。' },
{ t:'視線誘導', d:'クジラをメインに据えて一目で内容が伝わる構成。' },
],
process: ['素材集め','フレーム作成','デザイン'],
tools: ['Figma'],
},
'リフォーム会社Webサイト': {
period:'2026.05', hours: 60, scope:'デザイン + コーディング',
desc:'リフォーム会社向けのランディングページを制作。<br>問い合わせにつながる構成と、信頼感を伝えるデザインにこだわりました。',
chat: [
{ who:'client', t:'お客さんに安心して依頼してもらえるサイトにしたいんです。' },
{ who:'me', t:'施工実績と口コミを前面に出して、信頼感を作りましょう。' },
],
palette: [],
points: [
{ t:'写真を大全面に', d:'施工現場の写真をフルブリードで使い、リアルな仕上がりが一目で伝わる構成に。' },
{ t:'木の温かみをイメージした色味', d:'ウォームブラウン系のカラーで、リフォーム後の暮らしの温かさを演出。' },
],
process: ['ヒアリング','ワイヤー','デザイン','コーディング','確認','公開'],
tools: ['Figma','HTML/CSS','JavaScript'],
},
'Richard Newberry': {
period:'2026.05', hours: 15, scope:'デザインのみ',
desc:'Richard Newberryのバナーを制作。<br>本人のイメージに合わせたシャープでスタイリッシュなデザインに仕上げました。',
palette: [],
points: [
{ t:'個性を引き出すデザイン', d:'本人のキャラクターに合わせた世界観を構築。' },
{ t:'複数サイズ展開', d:'SNS・Web など用途に合わせて5パターン作成。' },
],
process: ['デザイン','確認','納品'],
tools: ['Photoshop'],
},
'パンケーキバナー（架空）': {
period:'2025', hours: 8, scope:'デザインのみ',
desc:'カフェのパンケーキメニュー告知用バナーを制作。<br>ふわふわ感と食欲をそそる配色で、思わずクリックしたくなるデザインに。',
palette: [],
points: [
{ t:'色使い', d:'温かみのある色とアメリカンな色合いでパンケーキの美味しさを表現。' },
{ t:'シンプルで伝わるレイアウト', d:'一瞬で内容が伝わる構成を意識。' },
],
process: ['素材集め','デザイン','確認',],
tools: ['Photoshop'],
},
'丼ものバナー（架空）': {
period:'2025', hours: 8, scope:'デザインのみ',
desc:'飲食店の丼メニュー告知用バナーを制作。<br>ボリューム感と満足感が伝わるデザインで、集客につながる仕上がりに。',
palette: [],
points: [
{ t:'迫力のある構成', d:'料理写真を大きく使い、ボリューム感を演出。' },
{ t:'湯気', d:'湯気を追加し、熱々感を表現しました' },
],
process: ['素材集め','デザイン','確認'],
tools: ['Photoshop'],
},
'ハンバーガーバナー（架空）': {
period:'2025', hours: 8, scope:'デザインのみ',
desc:'ハンバーガーショップの告知バナーを制作。<br>ポップでパンチのある世界観で、アメリカンな感じに仕上げました',
palette: [],
points: [
{ t:'ポップな世界観', d:'鮮やかな配色でブランドの元気さを表現。' },
{ t:'4パターン展開', d:'異なる訴求でA/Bテストができる構成。' },
],
process: ['素材集め','デザイン','確認'],
tools: ['Photoshop'],
},
'発酵緑茶のLP（架空）': {
period:'2024', hours: 25, scope:'デザインのみ',
desc:'発酵緑茶の商品ランディングページをデザイン。<br>健康・自然・上質さを伝える落ち着いた世界観にまとめました。',
palette: [],
points: [
{ t:'和モダンな世界観', d:'緑と白を基調に、上品さと健康感を演出。' },
{ t:'商品の魅力を整理した構成', d:'ユーザーの「なぜこれ？」に答える流れで設計。' },
],
process: ['構成設計','フレーム作成','素材集め','デザイン','確認'],
tools: ['Photoshop','Illustrator'],
},
'家事代行バナー（架空）': {
period:'2024', hours: 8, scope:'デザインのみ',
desc:'家事代行サービスの集客バナーを制作。<br>安心感と利便性が伝わる、清潔感のあるデザインに仕上げました。',
palette: [],
points: [
{ t:'清潔感のある配色', d:'白と淡いカラーで安心・信頼を表現。' },
{ t:'ターゲットに響くコピー', d:'一目で何の広告かわかるよう意識しました' },
],
process: ['素材集め','デザイン','確認'],
tools: ['Photoshop'],
},
'転職バナー': {
period:'2024', hours: 10, scope:'デザインのみ',
desc:'転職サービス向けのバナー3点セットを制作。<br>目が止まる素材を意識し、クリック率の向上を狙いました。',
palette: [],
points: [
{ t:'文字を使いすぎない', d:'文字は使いすぎず、イラストを全面に出しました' },
{ t:'3パターン展開', d:'訴求軸を変えてA/Bテストに対応。' },
],
process: ['素材集め','デザイン','確認','納品'],
tools: ['Illustrator','Photoshop'],
},
'YouTubeのサムネイル': {
period:'2024', hours: 8, scope:'デザインのみ',
desc:'YouTubeチャンネルのサムネイルデザインを担当。<br>チャンネルの世界観に合わせながら、クリック率を意識した構成に仕上げました。',
chat: [
{ who:'client', t:'こういう雰囲気のサムネを作ってほしいです！' },
{ who:'me', t:'チャンネルの世界観を守りながら、目に止まるデザインにしましょう！' },
],
palette: [],
points: [
{ t:'参考を元に', d:'お客様からいただいたイメージに沿って作成' },
{ t:'世界観の統一', d:'チャンネルのブランドカラーを軸にシリーズ感を出す。' },
],
process: ['ヒアリング','素材集め','デザイン','確認','納品'],
tools: ['Photoshop'],
},
'定食屋さんのメニュー': {
period:'2024', hours: 12, scope:'デザインのみ',
desc:'定食屋さんのメニュー表をデザイン。<br>読みやすさと食欲をそそる見た目を両立した、温かみのある仕上がりに。',
chat: [
{ who:'client', t:'もともとあるメニューの内容を全部入れたい' },
{ who:'me', t:'和食らしい温かみを残しながら、見やすく整理しましょう！' },
],
palette: [],
points: [
{ t:'温かみのある世界観', d:'和食に合う配色とフォントで<br>雰囲気を統一。' },
{ t:'見やすいレイアウト', d:'メニューをカテゴリ別に整理して一目でわかる構成。' },
],
process: ['ヒアリング','デザイン','確認','印刷データ納品'],
tools: ['Photoshop'],
},
};

/* ===== 案件詳細データ ここまで ===== */

const DEFAULT_CASE = {
period:'—', hours: 24, scope:'—',
chat: [
{ who:'client', t:'こういうこと、お願いできますか？' },
{ who:'me', t:'もちろん！こんな風にやってみますね。' },
],
palette: [],
points: [
{ t:'こだわり', d:'やりたいことを丁寧に翻訳しました。' },
],
process: ['ヒアリング','制作','確認','納品'],
tools: ['Figma'],
};

/* 実績データは js/works-data.js で管理しています */
/* ===== カテゴリ別グループ化 ここから ===== */
const WORKS = { all: WORKS_DATA };
['web','movie','banner','flyer','illust','other'].forEach(cat => {
  WORKS[cat] = WORKS_DATA.filter(w => w.cat === cat);
});
/* ===== カテゴリ別グループ化 ここまで ===== */

let curCat ='all';
let curIdx = 0;

/* URLパラメータ（index.phpの「詳細を見る」から来た場合）を反映 */
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
    location.href = '/contact/';
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
  var FAMILIES = [
    { id:'purple', label:'紫',     dot:'#6b3aa0' },
    { id:'pink',   label:'ピンク', dot:'#d04a6c' },
    { id:'red',    label:'赤',     dot:'#c41e3a' },
    { id:'orange', label:'橙',     dot:'#e07020' },
    { id:'yellow', label:'黄',     dot:'#c8a000' },
    { id:'green',  label:'緑',     dot:'#3a8042' },
    { id:'blue',   label:'青',     dot:'#1860a8' },
    { id:'mono',   label:'モノ',   dot:'#606060' },
  ];

  var PALETTES = [
    {f:'purple', code:'P001', name:'深夜の庭',     kw:'ミステリアス',   c:['#1a0d2e','#3d1f6a','#6b3aa0','#a988c9','#ede2f7']},
    {f:'purple', code:'P002', name:'藤の花',       kw:'やわらか',       c:['#7a52b0','#a07ac8','#c4a8e0','#e2d4f4','#f7f2fc']},
    {f:'purple', code:'P003', name:'葡萄の秋',     kw:'ナチュラル',     c:['#2e1248','#5e2e8a','#9060c0','#c0a0d8','#f0e8f8']},
    {f:'purple', code:'P004', name:'夕映え紫',     kw:'ロマンティック', c:['#4a1a70','#8040b8','#b878e8','#ddb8f8','#f8f0ff']},

    {f:'pink', code:'PK001', name:'苺ミルク',       kw:'スイート',       c:['#8a103a','#d04068','#f08098','#f8c0d0','#fdf0f4']},
    {f:'pink', code:'PK002', name:'春の桜',         kw:'やさしい',       c:['#c07090','#dca0b0','#eec8d4','#f8e4ea','#fff5f8']},
    {f:'pink', code:'PK003', name:'ローズクォーツ', kw:'エレガント',     c:['#a04060','#c87090','#e0a0b8','#f0ccd8','#fdf0f4']},
    {f:'pink', code:'PK004', name:'カーネーション', kw:'フレッシュ',     c:['#b82050','#e04878','#f490b0','#f8c8d8','#fff0f5']},

    {f:'red', code:'R001', name:'深紅',            kw:'ドラマチック',   c:['#3a0010','#8b0022','#c41030','#e85060','#ffd4d8']},
    {f:'red', code:'R002', name:'朱',              kw:'ジャパニーズ',   c:['#7a2000','#c04018','#e07040','#f4a870','#fce8d0']},
    {f:'red', code:'R003', name:'小豆',            kw:'和モダン',       c:['#4a1820','#8a3038','#b86068','#d8a0a4','#f4e0e0']},

    {f:'orange', code:'O001', name:'みかんの午後', kw:'あたたかい',     c:['#6a2800','#c05810','#e89030','#f4c060','#fef0c0']},
    {f:'orange', code:'O002', name:'キャラメル',   kw:'まろやか',       c:['#5a2800','#9a5018','#c88838','#e4b870','#f8e4b0']},
    {f:'orange', code:'O003', name:'サンセット',   kw:'ドラマチック',   c:['#8a2800','#d05020','#f09040','#f8c080','#feecd8']},

    {f:'yellow', code:'Y001', name:'レモンソーダ', kw:'さわやか',       c:['#705800','#b89800','#e8c800','#f4e060','#fefce0']},
    {f:'yellow', code:'Y002', name:'ひまわり',     kw:'のびのび',       c:['#785800','#c89000','#f0c818','#f8e460','#fefce4']},
    {f:'yellow', code:'Y003', name:'バニラ',       kw:'やさしい',       c:['#907840','#c8a860','#e4c888','#f0ddb0','#faf4e0']},

    {f:'green', code:'G001', name:'深い森',        kw:'ナチュラル',     c:['#0a280e','#1e5428','#3a7a42','#78b070','#c4e0bc']},
    {f:'green', code:'G002', name:'若葉',          kw:'フレッシュ',     c:['#284e1e','#508040','#80a860','#b0c890','#e4f0d8']},
    {f:'green', code:'G003', name:'抹茶',          kw:'和モダン',       c:['#2e3e1a','#5a6c30','#8a9a50','#b8c080','#e8eccc']},
    {f:'green', code:'G004', name:'ミント',        kw:'さわやか',       c:['#0a3e2e','#1a6852','#38a880','#80cca8','#ccf0e4']},

    {f:'blue', code:'B001', name:'深海',           kw:'ミステリアス',   c:['#040818','#0c1a3e','#1830a0','#4878d0','#b0d0f4']},
    {f:'blue', code:'B002', name:'空色',           kw:'のびのび',       c:['#0a2e5a','#1858a0','#3898d8','#82c4f0','#d4eefb']},
    {f:'blue', code:'B003', name:'ブルーベリー',   kw:'甘酸っぱい',    c:['#1a1448','#304090','#6080c8','#9eb8e4','#d8e6f8']},
    {f:'blue', code:'B004', name:'デニム',         kw:'カジュアル',     c:['#1a2840','#304868','#5878a0','#90a8c8','#d0dce8']},

    {f:'mono', code:'M001', name:'黒板',           kw:'コントラスト',   c:['#1a1a1a','#444444','#888888','#cccccc','#f5f5f5']},
    {f:'mono', code:'M002', name:'霧',             kw:'しずか',         c:['#282828','#585858','#989898','#d0d0d0','#f4f4f4']},
    {f:'mono', code:'M003', name:'インク',         kw:'シャープ',       c:['#0c0c18','#282840','#505070','#9090b0','#e4e4f0']},
  ];

  var curFamily = 'purple';

  /* tabs */
  var tabsEl = document.getElementById('cg-tabs');
  FAMILIES.forEach(function (f) {
    var btn = document.createElement('button');
    btn.className = 'cg-tab' + (f.id === curFamily ? ' active' : '');
    btn.dataset.f = f.id;
    btn.style.setProperty('--tc', f.dot);
    btn.innerHTML = '<span class="cg-dot"></span>' + f.label;
    tabsEl.appendChild(btn);
  });
  tabsEl.addEventListener('click', function (e) {
    var btn = e.target.closest('.cg-tab');
    if (!btn) return;
    curFamily = btn.dataset.f;
    tabsEl.querySelectorAll('.cg-tab').forEach(function (b) {
      b.classList.toggle('active', b === btn);
    });
    renderGrid();
  });

  /* grid */
  function renderGrid() {
    var grid = document.getElementById('cg-grid');
    var list = PALETTES.filter(function (p) { return p.f === curFamily; });
    grid.innerHTML = '';
    list.forEach(function (p) {
      var card = document.createElement('div');
      card.className = 'cg-card';
      card.innerHTML = `
        <div class="cg-swatches">
        ${p.c.map(function (h) { return '<span class="cg-swatch" style="background:' + h + '"></span>'; }).join('')}
        </div>
        <div class="cg-card-body">
        <span class="cg-name">${p.name}</span>
        <div class="cg-card-foot">
        <span class="cg-kw">${p.kw}</span>
        <span class="cg-code">#${p.code}</span>
        </div>
        </div>`;
      card.addEventListener('click', function () { openModal(p); });
      grid.appendChild(card);
    });
  }

  /* modal */
  var modal   = document.getElementById('color-modal');
  var cmBd    = document.getElementById('cm-bd');
  var cmClose = document.getElementById('cm-close');
  var cmSw    = document.getElementById('cm-swatches');
  var cmName  = document.getElementById('cm-name');
  var cmKw    = document.getElementById('cm-kw');

  function openModal(p) {
    cmName.textContent = p.name;
    cmKw.textContent   = p.kw;
    cmSw.innerHTML = p.c.map(function (h) {
      return `<div class="cm-swatch-wrap"><div class="cm-swatch" style="background:${h}"></div><button class="cm-hex" data-hex="${h}">${h.toUpperCase()}</button></div>`;
    }).join('');
    cmSw.querySelectorAll('.cm-hex').forEach(function (btn) {
      btn.addEventListener('click', function () {
        navigator.clipboard.writeText(btn.dataset.hex).then(function () {
          var orig = btn.textContent;
          btn.textContent = 'COPIED';
          setTimeout(function () { btn.textContent = orig; }, 1400);
        });
      });
    });

    modal.hidden = false;
    requestAnimationFrame(function () { modal.classList.add('open'); });
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modal.classList.remove('open');
    document.body.style.overflow = '';
    setTimeout(function () { modal.hidden = true; }, 260);
  }

  cmClose.addEventListener('click', closeModal);
  cmBd.addEventListener('click', closeModal);
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !modal.hidden) closeModal();
  });

  renderGrid();
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
          <?php include "footer.php"; ?>
