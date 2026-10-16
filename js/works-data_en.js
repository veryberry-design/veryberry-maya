/* ===== Works Data (English) ===== */
const WORKS_DATA = [
  {
    cat:'movie', tags:[{l:'Video Editing', c:'movie'}],
    ttl:'Training Video',
    date:'2025', client:'', meta:'/ 2025',
    desc:'Shot and edited a basketball training video. Raw, unfiltered energy filmed in a real garage.',
    thumb:'/wp-content/themes/maya/img/works/thumb13.webp',
    youtube:'fpVZkDfr2CQ'
  },
  {
    cat:'movie', tags:[{l:'Video Editing', c:'movie'}],
    ttl:'Basketball in Miyako',
    date:'2025', client:'', meta:'/ 2025',
    desc:'Basketball training footage shot and edited in Miyako Island.',
    thumb:'/wp-content/themes/maya/img/works/thumb14.webp',
    youtube:'GfylSVOsGJw'
  },
  {
    cat:'movie', tags:[{l:'Video Editing', c:'movie'}],
    ttl:'Training in Miyako Ocean',
    date:'2025', client:'', meta:'/ 2025',
    desc:'Training footage shot and edited against the backdrop of the Miyako Island ocean.',
    thumb:'/wp-content/themes/maya/img/works/thumb12.webp',
    youtube:'qXuIzQaOu-4'
  },
  {
    cat:'banner', tags:[{l:'Design', c:'design'}],
    ttl:'Whale Watching Banner (Concept)',
    date:'2025', client:'Concept', meta:'Concept / 2025',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_11.webp', img:'/wp-content/themes/maya/img/works/portfolilo_11.png'
  },
  {
    cat:'web', tags:[{l:'Design + Coding', c:'both'}, {l:'Blog Management', c:'blog'}],
    ttl:'Renovation Company Website',
    date:'2026.05', client:'', meta:'/ 2026.05',
    desc:'A landing page for a renovation company. Focused on a layout that drives inquiries and a design that builds trust.',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_10_2.webp', img:'/wp-content/themes/maya/img/works/yui.jpg',
    url:'https://yui-oki.jp/'
  },
  {
    cat:'banner', tags:[{l:'Design', c:'other'}],
    ttl:'Richard Newberry',
    date:'2025', client:'Richard Newberry', meta:'/ 2026.05',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_09.webp',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_09.jpg','/wp-content/themes/maya/img/works/portfolilo_09_2.png','/wp-content/themes/maya/img/works/portfolilo_09_3.png','/wp-content/themes/maya/img/works/portfolilo_09_4.jpg','/wp-content/themes/maya/img/works/portfolilo_09_5.png']
  },
  {
    cat:'banner', tags:[{l:'Design', c:'other'}],
    ttl:'Pancake Banner (Concept)',
    date:'2025', client:'', meta:'/ 2026.05',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_08.webp',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_08.jpg','/wp-content/themes/maya/img/works/portfolilo_08_2.png','/wp-content/themes/maya/img/works/portfolilo_08_3.jpg','/wp-content/themes/maya/img/works/portfolilo_08_4.jpg']
  },
  {
    cat:'banner', tags:[{l:'Design', c:'other'}],
    ttl:'Rice Bowl Banner (Concept)',
    date:'2025', client:'', meta:'/ 2025',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_07.webp',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_07.png','/wp-content/themes/maya/img/works/portfolilo_07_2.png','/wp-content/themes/maya/img/works/portfolilo_07_3.jpg']
  },
  {
    cat:'banner', tags:[{l:'Design', c:'other'}],
    ttl:'Burger Banner (Concept)',
    date:'2025', client:'', meta:'/ 2025',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_06.webp',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_06.png','/wp-content/themes/maya/img/works/portfolilo_06_2.png','/wp-content/themes/maya/img/works/portfolilo_06_3.png','/wp-content/themes/maya/img/works/portfolilo_06_4.png']
  },
  {
    cat:'other', tags:[{l:'Design Only', c:'other'}],
    ttl:'Fermented Green Tea LP (Concept)',
    date:'2024', client:'', meta:'/ 2024',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/thumb05.webp', img:'/wp-content/themes/maya/img/works/portfolilo_05.jpg'
  },
  {
    cat:'banner', tags:[{l:'Design', c:'design'}],
    ttl:'Housekeeping Banner (Concept)',
    date:'2024', client:'', meta:'/ 2024',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_04.webp', img:'/wp-content/themes/maya/img/works/portfolilo_04.jpg'
  },
  {
    cat:'banner', tags:[{l:'Design', c:'design'}],
    ttl:'Job Change Banner',
    date:'2025', client:'', meta:'/ 2025',
    desc:'A set of 3 banners for a job-change service.',
    thumb:'/wp-content/themes/maya/img/works/portfolilo_03.webp',
    imgs:['/wp-content/themes/maya/img/works/portfolilo_03.jpg','/wp-content/themes/maya/img/works/portfolilo_03_2.png','/wp-content/themes/maya/img/works/portfolilo_03_3.jpg']
  },
  {
    cat:'other', tags:[{l:'Design', c:'other'}],
    ttl:'YouTube Thumbnail',
    date:'2025', client:'', meta:'/ 2025',
    desc:"Thumbnail design matching the channel's visual identity. Optimized for click-through rate.",
    thumb:'/wp-content/themes/maya/img/works/portfolilo_02.webp', img:'/wp-content/themes/maya/img/works/portfolilo_02.png'
  },
  {
    cat:'flyer', tags:[{l:'Design', c:'design'}],
    ttl:'Diner Menu',
    date:'2024', client:'Diner', meta:'Diner / 2024 / Menu',
    desc:'',
    thumb:'/wp-content/themes/maya/img/works/thumb01.webp', img:'/wp-content/themes/maya/img/works/portfolilo_01.png'
  },
];

const CAT_LABELS = { movie: 'VIDEOS' };
function catLabel(id) { return CAT_LABELS[id] || id.toUpperCase(); }
