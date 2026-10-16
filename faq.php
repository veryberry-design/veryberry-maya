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
      — help —
    </div>
    <h2>
      <span class="scrib">よくある質問 </span>
    </h2>
    <p class="muted sm" style="max-width: 480px; margin: 18px auto 0; line-height: 2;">
      気になること、よく聞かれる質問や、ご依頼前の不安を <br/>
      やさしくほぐしてみたよ度です
    </p>
  </div>
  <!-- はじめての方へ コルクボード -->
  <section class="first-time-section">
    <div class="ftr-head">
      <span class="ftr-en">— for first-timers — </span>
      <h3 class="ftr-ttl">
        はじめての方へ
      </h3>
      <p class="ftr-intro">
        「何から相談したらいいかわからない」<br class="sp-only"/>
        ー それが一番多いご相談です。 <br/>
        デザインのことがわからなくても大丈夫。<br class="sp-only"/>
        ゆっくり三ステップで進めます。
      </p>
    </div>
    <div class="ftr-field">
      <!-- ゴールに向かって流れる点線の道 -->
      <svg class="ftr-road" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <path class="ftr-road-pc" d="M16 30 C 30 90, 40 90, 50 60 S 70 10, 84 30"/>
        <path class="ftr-road-sp" d="M30 4 C 95 14, 95 26, 50 34 S 5 54, 50 66 S 95 86, 72 98"/>
      </svg>
      <div class="ftr-steps">
        <div class="ftr-pol">
          <!-- 画像を入れるときは style="background-image:url('<?php echo MAYA_URI; ?>/img/xxx.png');" を追加 -->
          <div class="ftr-photo ftr-photo-1"></div>
          <div class="ftr-cap">
            <div class="ftr-row"><span class="ft-n">01 </span><span class="ft-en">say hi </span></div>
            <h4 class="ft-jp">まずはちょっと話す </h4>
            <p>
              やりたいこと、もやもやしていること、どんなフォームでも。
            </p>
          </div>
        </div>
        <div class="ftr-pol">
          <div class="ftr-photo ftr-photo-2"></div>
          <div class="ftr-cap">
            <div class="ftr-row"><span class="ft-n">02 </span><span class="ft-en">talk together </span></div>
            <h4 class="ft-jp">一緒に整理する </h4>
            <p>
              Zoom30分、もしくはチャットで、<br/>もやもやを形にします。
            </p>
          </div>
        </div>
        <div class="ftr-pol">
          <div class="ftr-photo ftr-photo-3"></div>
          <div class="ftr-cap">
            <div class="ftr-row"><span class="ft-n">03 </span><span class="ft-en">plan &amp; quote </span></div>
            <h4 class="ft-jp">見積もりを出す </h4>
            <p>
              費用とスケジュールを文面で。<br/>スタートはそれから大丈夫。
            </p>
          </div>
        </div>
      </div>
      <span class="ftr-flag" aria-hidden="true">
        <svg viewBox="0 0 28 36"><path d="M4 2v32" stroke="#5a4d6a" stroke-width="2" stroke-linecap="round"/><path d="M5 3h18l-5 6 5 6H5z" fill="#ffe59a"/></svg>goal!
      </span>
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
<script src="<?php echo maya_asset( '/js/app.js' ); ?>">
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


renderFAQ();

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
