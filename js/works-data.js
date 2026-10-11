/* ===== 実績データ ここから ===== */
/* 新しい実績を追加するときはこのファイルだけ編集すればOK */
/* 新しい行を先頭に追加してください（新しい順になります） */

const WORKS_DATA = [
  {
    cat:'movie', tags:[{l:'動画編集', c:'movie'}],
    ttl:'Training Video',
    date:'2025', client:'', meta:'/ 2025',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/thumb13.png',
    youtube:'fpVZkDfr2CQ'
  },
  {
    cat:'movie', tags:[{l:'動画編集', c:'movie'}],
    ttl:'basketball in Miyako',
    date:'2025', client:'', meta:'/ 2025',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/thumb14.png',
    youtube:'GfylSVOsGJw'
  },
  {
    cat:'movie', tags:[{l:'動画編集', c:'movie'}],
    ttl:'宮古島の海でトレーニング',
    date:'2025', client:'', meta:'/ 2025',
    desc:'宮古島でのトレーニングの様子を撮影・編集した動画です。',
    thumb:'/wp-content/themes/maya/img/works/thumb12.JPG',
    youtube:'qXuIzQaOu-4'
  },
  {
    cat:'banner', tags:[{l:'デザイン', c:'design'}],
    ttl:'ホエールウォッチングバナー(架空)',
    date:'2025', client:'架空業者', meta:'架空業者 / 2025',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_11.png', img:'/wp-content/themes/maya/img/works/portfolilo_11.png'
  },
  {
    cat:'web', tags:[{l:'デザイン＋コーディング', c:'both'}],
    ttl:'リフォーム会社Webサイト',
    date:'2026.05', client:'', meta:'/ 2026.05',
    desc:'リフォーム会社向けのランディングページ。問い合わせにつながる構成と、信頼感を伝えるデザインにこだわりました。',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_10_2.jpg', img:'/wp-content/themes/maya/img/works/portfolilo_10.jpg',
    url:'http://veryberry.weblike.jp/reform/'
  },
  {
    cat:'banner', tags:[{l:'デザイン', c:'other'}],
    ttl:'Richard Newberry',
    date:'2025', client:'Richard Newberry', meta:'/ 2026.05',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_09.jpg',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_09.jpg','/wp-content/themes/maya/img/works/portfolilo_09_2.png','/wp-content/themes/maya/img/works/portfolilo_09_3.png','/wp-content/themes/maya/img/works/portfolilo_09_4.jpg','/wp-content/themes/maya/img/works/portfolilo_09_5.png']
  },
  {
    cat:'banner', tags:[{l:'デザイン', c:'other'}],
    ttl:'パンケーキバナー（架空）',
    date:'2025', client:'', meta:'/ 2026.05',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_08.jpg',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_08.jpg','/wp-content/themes/maya/img/works/portfolilo_08_2.png','/wp-content/themes/maya/img/works/portfolilo_08_3.jpg','/wp-content/themes/maya/img/works/portfolilo_08_4.jpg']
  },
  {
    cat:'banner', tags:[{l:'デザイン', c:'other'}],
    ttl:'丼ものバナー（架空）',
    date:'2025', client:'', meta:'/ 2025',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_07.png',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_07.png','/wp-content/themes/maya/img/works/portfolilo_07_2.png','/wp-content/themes/maya/img/works/portfolilo_07_3.jpg']
  },
  {
    cat:'banner', tags:[{l:'デザイン', c:'other'}],
    ttl:'ハンバーガーバナー（架空）',
    date:'2025', client:'', meta:'/ 2025',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_06.png',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_06.png','/wp-content/themes/maya/img/works/portfolilo_06_2.png','/wp-content/themes/maya/img/works/portfolilo_06_3.png','/wp-content/themes/maya/img/works/portfolilo_06_4.png']
  },
  {
    cat:'other', tags:[{l:'デザインのみ', c:'other'}],
    ttl:'発酵緑茶のLP（架空）',
    date:'2024', client:'', meta:'/ 2024',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/thumb05.jpg', img:'/wp-content/themes/maya/img/works/portfolilo_05.jpg'
  },
  {
    cat:'banner', tags:[{l:'デザイン', c:'design'}],
    ttl:'家事代行バナー（架空）',
    date:'2024', client:'', meta:'/ 2024',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_04.jpg', img:'/wp-content/themes/maya/img/works/portfolilo_04.jpg'
  },
  {
    cat:'banner', tags:[{l:'デザイン', c:'design'}],
    ttl:'転職バナー',
    date:'2025', client:'', meta:'/ 2025',
    desc:'転職サービス向けバナー3点セット。',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_03.jpg',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_03.jpg','/wp-content/themes/maya/img/works/portfolilo_03_2.png','/wp-content/themes/maya/img/works/portfolilo_03_3.jpg']
  },
  {
    cat:'other', tags:[{l:'デザイン', c:'other'}],
    ttl:'YouTubeのサムネイル',
    date:'2025', client:'', meta:'/ 2025',
    desc:'チャンネルの世界観に合わせたサムネイルデザイン。クリック率を意識した構成です。',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_02.png', img:'/wp-content/themes/maya/img/works/portfolilo_02.png'
  },
  {
    cat:'flyer', tags:[{l:'デザイン', c:'design'}],
    ttl:'定食屋さんのメニュー',
    date:'2024', client:'定食屋', meta:'定食屋 / 2024 / メニュー表',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/thumb01.jpg', img:'/wp-content/themes/maya/img/works/portfolilo_01.png'
  },
];

const CAT_LABELS = { movie: 'VIDEOS' };
function catLabel(id) { return CAT_LABELS[id] || id.toUpperCase(); }

/* ===== 実績データ ここまで ===== */
