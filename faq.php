<?php
/*
Template Name: FAQ
*/
$pageTitle = "ベリーベリーデザイン — よくある質問";
$currentPage = "faq";
include "header.php";
?>
<main class="wrap">
  <div class="sect-title sect-title-centered" style="margin-top: 100px;">
    <div class="en kicker-en">
      — help & voices —
    </div>
    <h2>
      <span class="scrib">よくある質問・お客様の声 </span>
    </h2>
    <p class="muted sm" style="max-width: 480px; margin: 18px auto 0; line-height: 2;">
      気になること、よく聞かれる質問や、ご依頼前の不安を <br/>
      やさしくほぐしてみたよ度です
    </p>
  </div>
  <!-- はじめての方へ コルクボード -->
  <section class="first-time-section">
    <div class="bboard">
      <div class="bboard-inner">
        <div class="bboard-header-note">
          <span class="bboard-pin bboard-pin-rose" aria-hidden="true"></span>
          <span class="bboard-label-en">— for first-timers — </span>
          <h3 class="bboard-ttl">
            はじめての方へ
          </h3>
          <p class="bboard-intro">
            「何から相談したらいいかわからない」<br/>
            ー それが一番多いご相談です。 <br/>
            デザインのことがわからなくても大丈夫。<br/>
            ゆっくり三ステップで進めます。
          </p>
        </div>
        <div class="bboard-notes">
          <div class="bboard-note bboard-note-a">
            <span class="bboard-pin bboard-pin-rose" aria-hidden="true"></span>
            <span class="ft-n">01 </span>
            <span class="ft-en">say hi </span>
            <span class="ft-jp">まずはちょっと話す </span>
            <p>
              やりたいこと、もやもやしていること、どんなフォームでも。
            </p>
          </div>
          <div class="bboard-note bboard-note-b">
            <span class="bboard-pin bboard-pin-lavender" aria-hidden="true"></span>
            <span class="ft-n">02 </span>
            <span class="ft-en">talk together </span>
            <span class="ft-jp">一緒に整理する </span>
            <p>
              Zoom30分、もしくはチャットで、<br/>もやもやを形にします。
            </p>
          </div>
          <div class="bboard-note bboard-note-c">
            <span class="bboard-pin bboard-pin-grape" aria-hidden="true"></span>
            <span class="ft-n">03 </span>
            <span class="ft-en">plan & quote </span>
            <span class="ft-jp">見積もりを出す </span>
            <p>
              費用とスケジュールを文面で。<br/>スタートはそれから大丈夫。
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
        <span class="scrib">よくある質問 </span>
      </h3>
    </div>
    <div class="faq-stack">
      <div class="faq-cats" id="faq-cats">
        <button class="on" data-cat="all">ALL </button>
        <button data-cat="price">料金 </button>
        <button data-cat="due">納期 </button>
        <button data-cat="delivery">納品 </button>
        <button data-cat="other">その他 </button>
      </div>
      <div class="faq-list" id="faq-list">
      </div>
    </div>
  </section>
  <!-- 問い合わせ前のチェックリスト -->
  <section class="checklist-section" style="margin-top: 100px;">
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">— before you ask —</div>
      <h3><span class="scrib">簡単ヒアリング</span></h3>
      <p class="muted sm" style="max-width: 480px; margin: 12px auto 0;">
        選ぶだけでOK！入力した内容をそのままお問い合わせフォームに引き継げます。<br>
        わからない項目は飛ばしても大丈夫です。
      </p>
    </div>

    <!-- 進捗バー -->
    <div class="pre-progress" id="pre-progress">
      <div class="pre-progress-bar" id="pre-progress-bar" style="width:0%"></div>
    </div>
    <span class="pre-progress-label" id="pre-progress-label">0 / 8 項目入力済み</span>

    <div class="checklist-card">
      <form id="pre-hearing-form" novalidate>

        <!-- Q1: 作りたいもの -->
        <div class="ph-item" data-key="kind">
          <div class="ph-q">
            <span class="ph-num">01</span>
            <span class="ph-label">何を作りたいですか？</span>
            <span class="ph-tag">複数選択OK</span>
          </div>
          <div class="ph-check-row">
            <label class="ph-check"><input type="checkbox" name="kind" value="Webサイト"><span class="ph-cb">Webサイト</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="LP（ランディングページ）"><span class="ph-cb">LP</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="バナー"><span class="ph-cb">バナー</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="チラシ"><span class="ph-cb">チラシ</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="ロゴ"><span class="ph-cb">ロゴ</span></label>
            <label class="ph-check"><input type="checkbox" name="kind" value="まだ決まっていない"><span class="ph-cb">まだ決まっていない</span></label>
          </div>
        </div>

        <!-- Q2: 達成したいこと -->
        <div class="ph-item" data-key="purpose">
          <div class="ph-q">
            <span class="ph-num">02</span>
            <span class="ph-label">一番達成したいことは？</span>
          </div>
          <select name="purpose" class="ph-select">
            <option value="">— 選択してください —</option>
            <option>お問い合わせ・集客を増やしたい</option>
            <option>会社・サービスの信頼感をあげたい</option>
            <option>採用・スタッフ募集をしたい</option>
            <option>既存サイトをリニューアルしたい</option>
            <option>SNSやチラシと連動させたい</option>
            <option>まだはっきりしていない</option>
          </select>
        </div>

        <!-- Q3: ターゲット -->
        <div class="ph-item" data-key="target">
          <div class="ph-q">
            <span class="ph-num">03</span>
            <span class="ph-label">誰に見てほしいですか？</span>
            <span class="ph-tag">複数選択OK</span>
          </div>
          <div class="ph-check-row">
            <label class="ph-check"><input type="checkbox" name="target" value="近隣の個人・一般のお客様"><span class="ph-cb">近隣の個人・一般のお客様</span></label>
            <label class="ph-check"><input type="checkbox" name="target" value="法人・企業向け"><span class="ph-cb">法人・企業向け</span></label>
            <label class="ph-check"><input type="checkbox" name="target" value="求職者・スタッフ候補"><span class="ph-cb">求職者・スタッフ候補</span></label>
            <label class="ph-check"><input type="checkbox" name="target" value="SNSのフォロワー・ファン"><span class="ph-cb">SNSのフォロワー・ファン</span></label>
            <label class="ph-check"><input type="checkbox" name="target" value="まだ決まっていない"><span class="ph-cb">まだ決まっていない</span></label>
          </div>
        </div>

        <!-- Q4: 予算 -->
        <div class="ph-item" data-key="budget">
          <div class="ph-q">
            <span class="ph-num">04</span>
            <span class="ph-label">ご予算の目安は？</span>
          </div>
          <select name="budget" class="ph-select">
            <option value="">— 選択してください —</option>
            <option>15〜30万円</option>
            <option>30〜50万円</option>
            <option>50万円〜</option>
            <option>未定・相談したい</option>
          </select>
        </div>

      </form>

      <div class="checklist-foot">
        <span class="muted sm" id="ph-filled-msg">入力した内容をそのままお問い合わせフォームへ引き継げます</span>
        <a class="btn berry lg" id="ph-to-contact" href="/contact/">
          このまま相談してみる →
        </a>
      </div>
    </div>
  </section>
  <!-- お客様の声（非表示中）
  <section class="voices-section" style="margin-top: 80px;">
    <div class="sect-title sect-title-centered">
      <div class="en kicker-en">
        — voices —
      </div>
      <h3>
        <span class="scrib">お客様の声 </span>
      </h3>
      <p class="muted sm" style="max-width: 460px; margin: 12px auto 0;">
        これまでご一緒した方からいただいた感想です
      </p>
    </div>
    <div class="voices-stack">
      <article class="voice-feature" id="voice-feature">
      </article>
      <div class="dots" id="voice-dots">
      </div>
      <div class="voice-list" id="voice-list">
      </div>
    </div>
  </section>
  -->
  <!-- ご相談だけでもOK バナー -->
  <section class="casual-cta-section" style="margin-top: 100px;">
    <div class="casual-cta">
      <div class="casual-cta-deco" aria-hidden="true">
      </div>
      <div class="casual-cta-body">
        <span class="casual-cta-tag">— just talking is fine — </span>
        <h3 class="casual-cta-ttl">
          ご相談だけでもOKです
        </h3>
        <p class="casual-cta-msg">
          「ちゃんと依頼できるかわからない」「まだアイデア段階」そんな状態でもウェルカムです。 <br/>
          ふんわり話して、一緒に整理しましょう。無理に取り込みたりはしません。
        </p>
        <div class="casual-cta-btns">
          <a class="btn berry lg" href="/contact/">ふんわり相談してみる → </a>
          <a class="btn lg" href="/menu/" style="background-color: white;">メニューを見る </a>
        </div>
      </div>
    </div>
  </section>
  <div style="text-align:center; margin-top:50px;">
    <p class="muted sm">
      解決しない場合は、お気軽にご相談ください。
    </p>
    <a class="btn berry lg" href="/contact/">お問い合わせ → </a>
  </div>
</main>
<script src="<?php echo MAYA_URI; ?>/js/app.js?v=2">
  </script>
  <script>
    (function () {
const FAQ = [
{ cat:'price', q:'依頼の最小ロットは？', a:'バナー1枚から承っています。お気軽にどうぞ。' },
{ cat:'price', q:'見積りは無料ですか？', a:'はい、お見積もりは無料です。内容をうかがって2営業日以内にお返事します。' },
{ cat:'price', q:'支払いタイミングは？', a:'契約時に着手金 50%、納品時に残り 50% をお願いしています。' },
{ cat:'due', q:'納期はどのくらいですか？', a:'内容や規模によりますが、LP 1枚で約1ヶ月、5ページのサイトで約2ヶ月が目安です。' },
{ cat:'due', q:'急ぎでもいけますか？', a:'スケジュールに余裕があれば対応しています。特急料金が発生する場合があります。' },
{ cat:'delivery', q:'納品形式は選べますか？', a:'AIファイル / PSD / Figma / mp4 など、ご希望に合わせて対応します。' },
{ cat:'delivery', q:'修正は何回までOKですか？', a:'プランによって異なります。PREMIUMプランは修正無制限です。' },
{ cat:'other', q:'オンラインのみでも依頼できる？', a:'はい、全国どこからでもZoomで打ち合わせ可能です。' },
{ cat:'other', q:'海外案件は対応していますか？', a:'要相談ですが、対応実績あります。タイムゾーン調整しましょう。' },
];

const VOICES = [
{ who:'カフェ K様', role:'WEBサイト制作', s:5, q:'こんなにあまずっぱくて、こんなに使いやすい！店の世界観を上手にすくい上げてもらえました。' },
{ who:'美容室 H様', role:'バナー一式', s:5, q:'毎月のキャンペーンバナーをお願いしています。クリック率が目に見えて上がりました。' },
{ who:'飲食店 M様', role:'プロモーション動画', s:4, q:'30秒の動画で、お店の雰囲気が伝わるようになりました。何度も提案いただき助かりました。' },
{ who:'アクセサリ R様', role:'チラシ＋ロゴ', s:5, q:'はじめての店舗オープンに、寄り添って一緒に考えてくれました。お守りみたいな存在です。' },
];

const list = document.getElementById('faq-list');
let cat ='all';

function renderFAQ() {
list.innerHTML ='';
const filtered = FAQ.filter(f => cat ==='all' || f.cat === cat);
if (!filtered.length) {
list.innerHTML = `
    <div class="muted" style="padding: 14px;">
    該当する質問が見つかりませんでした。<a href="/contact/" style="color:var(--berry);">直接お問い合わせ →</a>
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
<span class="toggle">＋</span>
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
    ／ ${v.role}
    </div>
    <div class="stars">
    ${''.repeat(v.s)}${''.repeat(5 - v.s)}
    </div>
    </div>
    </div>
    <blockquote>
    "${v.q}"
    </blockquote>
    <span class="corner">${BB.ICONS.berry(90,'var(--grape)')}</span>`;
dots.innerHTML ='';
VOICES.forEach((_, i) => {
const s = document.createElement('span');
if (i === vi) s.className ='on';
s.addEventListener('click', () => { vi = i; renderVoiceFeature(); });
dots.append(s);
});
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
<span class="role">／ ${v.role}</span>
<span class="stars">${''.repeat(v.s)}</span>`;
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

// ===== ミニヒアリング 進捗バー & contact.php引き継ぎ =====
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
    label.textContent = `${filled} / ${TOTAL_ITEMS} 項目入力済み`;
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
    location.href = '/contact/';
  });
})();

})();
    </script>
    <?php include "footer.php"; ?>
