/* ==========================================================================
   SMAI WELLNESS CLINICS — main.js
   ========================================================================== */
(function () {
'use strict';

/* --------------------------------------------------------------------------
   1) SITE DATA  —  EDIT HERE
   All replaceable content lives in this block. Contact details are left as
   empty strings on purpose: fill them in and the site wires itself up.
   -------------------------------------------------------------------------- */
const SITE = {

  /* ---- CONTACT — replace the empty strings ---- */
  contact: {
    phone:    '012 22772729',
    whatsapp: '201222772729',
    email:    'info@smai.com.eg'
  },

  /* ---- SOCIAL — replace with the real profile URLs ---- */
  social: {
    facebook:  'https://www.facebook.com/',
    instagram: 'https://www.instagram.com/',
    tiktok:    'https://www.tiktok.com/'
  },

  /* ---- FACEBOOK REELS (real URLs) ---- */
  reels: [
    { url:'https://www.facebook.com/reel/1087369413784073', title:'Inside the Clinic',      sub:'SMAI Wellness' },
    { url:'https://www.facebook.com/reel/4120172988291096', title:'Nutrition, Personalized', sub:'SMAI Wellness' },
    { url:'https://www.facebook.com/reel/1138767009121800', title:'Meet the Specialists',    sub:'SMAI Wellness' },
    { url:'https://www.facebook.com/reel/1530597694956377', title:'Wellness Assessment',     sub:'SMAI Wellness' },
    { url:'https://www.facebook.com/reel/1316537320310810', title:'Performance & Recovery',  sub:'SMAI Wellness' },
    { url:'https://www.facebook.com/reel/1572436324320382', title:'A Smarter Approach',      sub:'SMAI Wellness' }
  ],

  /* ---- SPECIALISTS ---- */
  specialists: [
    { name:'Dr. Hesham El Amry', img:'hesham-el-amry',
      role:'Consultant in Clinical Nutrition & Mesotherapy',
      quals:['Member of American Society for Nutrition','Member of Egyptian British Society of Obesity'],
      branches:['Al Ahly Club — Nasr City'] },

    { name:'Dr. Rania El Sallamy', img:'rania-el-sallamy',
      role:'Professor of Clinical Nutrition & Public Health',
      quals:['Consultant Obesity & Body Contouring Physician'],
      branches:['Al Ahly Club — Al Gezira','Al Ahly Club — Nasr City'] },

    { name:'Dr. Tamer Ali', img:'tamer-ali',
      role:'Professor of Internal Medicine & Endocrinology',
      quals:['Consultant of Endocrine Diseases Nutrition'],
      branches:['Kargo Mall — Sheikh Zayed'] },

    { name:'Dr. Mai Ramadan', img:'mai-ramadan',
      role:'Consultant of Clinical Nutrition',
      quals:['Consultant of Non-Surgical Body Contouring','Faculty of Medicine, Ain Shams University'],
      branches:['Al Ahly Club — Al Gezira','Kargo Mall — Sheikh Zayed'] },

    { name:'Dr. Walaa Basyoni', img:'walaa-basyoni',
      role:'Consultant of Clinical Nutrition',
      quals:['Lecturer — Medical doctorate, Ain Shams University','Life Coach Scope Certified'],
      branches:['Al Ahly Club — Nasr City','Al Ahly Club — Al Gezira'] },

    { name:'Dr. Esraa Amin', img:'esraa-amin',
      role:'Consultant of Clinical Nutrition',
      quals:['PhD, Cairo University'],
      branches:['Al Ahly Club — Nasr City'] },

    { name:'Dr. Hebatallah Mounir', img:'hebatallah-mounir',
      role:'Consultant in Clinical Nutrition',
      quals:['Consultant in Obesity & Body Contouring'],
      branches:['Al Ahly Club — Nasr City'] },

    { name:'Dr. Mai Shalaby', img:'mai-shalaby',
      role:'Certified Sports & Performance Nutrition Specialist',
      quals:['American Council on Exercise (ACE)','Performance Nutrition Specialist, IOPN'],
      branches:['Al Ahly Club — Nasr City','Al Ahly Club — Al Gezira'] },

    { name:'Dr. Jackline Azmy', img:'jackline-azmy',
      role:'Specialist in Clinical Nutrition & Metabolic Health',
      quals:['Specialist in Non-Surgical Body Contouring'],
      branches:['Al Ahly Club — Nasr City'] },

    { name:'Dr. Carol Sameh', img:'carol-sameh',
      role:'Specialist in Clinical Nutrition',
      quals:['Specialist in Non-Surgical Body Contouring'],
      branches:['Al Ahly Club — Nasr City'] },

    { name:'Dr. Sahar Essam El Hady', img:'sahar-essam-el-hady',
      role:'Specialist in Clinical Nutrition',
      quals:['Certified Health Coach, International Coaching Federation (ICF)'],
      branches:['Al Ahly Club — Al Gezira','Al Ahly Club — Nasr City'] },

    { name:'Dr. Esraa Farouk', img:'esraa-farouk',
      role:'Specialist in Clinical Nutrition',
      quals:['Certified Health Coach, International Coaching Federation (ICF)'],
      branches:['Al Ahly Club — Al Gezira','Kargo Mall — Sheikh Zayed'] },

    { name:'Dr. Soha Abou Zeid', img:'soha-abou-zeid',
      role:'Specialist in Clinical Nutrition',
      quals:['Specialist in Comprehensive Diabetes Care'],
      branches:['Kargo Mall — Sheikh Zayed'] },

    { name:'Dr. Omar Omran', img:'omar-omran',
      role:'Nutritionist & Non-Surgical Body Contouring Specialist',
      quals:['American Board certified BCNSP (ASPEN)','Clinical Nutrition Diploma, Cairo University','Member of Egyptian Functional Medicine Association'],
      branches:['Kargo Mall — Sheikh Zayed'] },

    { name:'Dr. Hadeel Arafa', img:'hadeel-arafa',
      role:'Certified Clinical Nutritionist',
      quals:['Clinical Nutrition Diploma — AUC','Obesity Management & Sport Nutrition Diploma — NNI','Non-Surgical Body Contouring Specialist'],
      branches:['Kargo Mall — Sheikh Zayed'] }
  ]
};

/* --------------------------------------------------------------------------
   2) HELPERS
   -------------------------------------------------------------------------- */
const $  = (s, c) => (c || document).querySelector(s);
const $$ = (s, c) => Array.from((c || document).querySelectorAll(s));
const REDUCED = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const FINE    = window.matchMedia('(hover:hover) and (pointer:fine)').matches;
const hasGSAP = typeof window.gsap !== 'undefined';

if (hasGSAP && window.ScrollTrigger) gsap.registerPlugin(ScrollTrigger);

/* --------------------------------------------------------------------------
   3) CONTACT + SOCIAL WIRING
   -------------------------------------------------------------------------- */
function wireContacts() {
  const c = SITE.contact;
  $$('[data-contact]').forEach(el => {
    const k = el.dataset.contact;
    let href = null, label = null;
    if (k === 'phone'    && c.phone)    { href = 'tel:' + c.phone.replace(/\s/g,''); label = c.phone; }
    if (k === 'whatsapp' && c.whatsapp) { href = 'https://wa.me/' + c.whatsapp.replace(/\D/g,''); label = el.closest('.foot__col--contact') ? c.phone : 'WhatsApp'; }
    if (k === 'email'    && c.email)    { href = 'mailto:' + c.email; label = c.email; }

    if (href) {
      el.setAttribute('href', href);
      if (k !== 'phone' || !el.classList.contains('btn')) el.removeAttribute('aria-disabled');
      if (el.classList.contains('foot__ph') || el.closest('.foot__col--contact')) el.textContent = label;
      if (k === 'whatsapp') el.setAttribute('target','_blank'), el.setAttribute('rel','noopener');
    } else {
      el.setAttribute('href', '#book');
      el.setAttribute('title', 'Contact details to be added');
    }
  });

  $$('[data-social]').forEach(el => {
    const url = SITE.social[el.dataset.social];
    if (url) { el.setAttribute('href', url); el.setAttribute('target','_blank'); el.setAttribute('rel','noopener'); }
  });

  $$('.js-directions').forEach(el => {
    el.setAttribute('href', 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(el.dataset.q));
    el.setAttribute('target','_blank'); el.setAttribute('rel','noopener');
  });

  const yr = $('#yr'); if (yr) yr.textContent = new Date().getFullYear();
}

/* --------------------------------------------------------------------------
   4) BUILD SPECIALIST CARDS
   -------------------------------------------------------------------------- */
function buildSpecialists() {
  const wrap = $('#teamWrapper'); if (!wrap) return;
  wrap.innerHTML = SITE.specialists.map((d, i) => `
    <div class="swiper-slide">
      <article class="doc doc--exact">
        <img class="doc__poster" src="assets/images/specialists-exact/${d.img}.jpg" alt="${d.name} — SMAI Wellness Clinics" loading="${i < 3 ? 'eager' : 'lazy'}" decoding="async">
      </article>
    </div>`).join('');
}


/* --------------------------------------------------------------------------
   5) BUILD REEL CARDS
   -------------------------------------------------------------------------- */
const COVERS = [
  'linear-gradient(155deg,#1C544B 0%,#0B2422 62%,#143B36 100%)',
  'linear-gradient(155deg,#243F3B 0%,#0B2422 55%,#3A5A4E 100%)',
  'linear-gradient(155deg,#2A3B38 0%,#0E2E2B 58%,#6B5A3C 120%)',
  'linear-gradient(155deg,#17423C 0%,#0B2422 60%,#256B5F 118%)',
  'linear-gradient(155deg,#20302E 0%,#0E2E2B 50%,#8A7346 128%)',
  'linear-gradient(155deg,#1B4C45 0%,#0B2422 66%,#0E2E2B 100%)'
];

function buildReels() {
  const wrap = $('#reelsWrapper'); if (!wrap) return;

  const previewEmbedURL = url =>
    'https://www.facebook.com/plugins/video.php?href=' +
    encodeURIComponent(url) +
    '&show_text=0&autoplay=1&width=360&height=640';

  wrap.innerHTML = SITE.reels.map((r, i) => `
    <div class="swiper-slide">
      <article class="reel reel--fb reel--live-preview">
        <span class="reel__video" aria-hidden="true">
          <iframe
            src="${previewEmbedURL(r.url)}"
            title="SMAI Reel ${i + 1}"
            scrolling="no"
            frameborder="0"
            loading="${i < 4 ? 'eager' : 'lazy'}"
            allow="autoplay; encrypted-media; picture-in-picture; web-share"
            allowfullscreen="true"
            tabindex="-1"></iframe>
        </span>

        <span class="reel__cover reel__cover--transparent" style="background:${COVERS[i % COVERS.length]}" aria-hidden="true">
          <span class="reel__aura" style="--ax:${18 + (i * 17) % 64}%;--ay:${22 + (i * 29) % 52}%"></span>
          <img class="reel__wm" src="assets/images/brand/smai-logo.webp" alt="" loading="lazy" aria-hidden="true">
          <span class="reel__noise"></span>
        </span>

        <span class="reel__tint" aria-hidden="true"></span>
        <span class="reel__mark">Reel ${String(i + 1).padStart(2,'0')}</span>
        <span class="reel__play" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></span>
        <span class="reel__body" aria-hidden="true">
          <span class="reel__title">${r.title}</span>
          <span class="reel__sub">${r.sub}</span>
        </span>
        <button class="reel__hit js-reel" type="button" data-i="${i}" aria-label="Open SMAI Reel ${i + 1}"></button>
      </article>
    </div>`).join('');
}

/* --------------------------------------------------------------------------
   6) PRELOADER
   -------------------------------------------------------------------------- */
function runLoader(done) {
  const l = $('#loader');
  if (!l) return done();
  if (REDUCED || !hasGSAP) { l.style.display = 'none'; document.documentElement.classList.add('no-anim'); return done(); }

  const tl = gsap.timeline({ onComplete: () => { l.classList.add('is-done'); l.style.display = 'none'; done(); } });
  tl.to('.loader__logo', { opacity:1, y:0, duration:.8, ease:'power3.out' }, 0)
    .fromTo('.loader__logo', { y:14 }, { y:0, duration:.8, ease:'power3.out' }, 0)
    .to('.loader__word',  { opacity:1, duration:.6 }, .25)
    .to('.loader__bar span', { width:'100%', duration:1.15, ease:'power2.inOut' }, .3)
    .to('.loader__inner', { opacity:0, y:-14, duration:.5, ease:'power2.in' }, 1.5)
    .to('.loader__panel', { scaleY:1, duration:.75, ease:'power4.inOut', transformOrigin:'bottom' }, 1.6)
    .to('.loader',        { yPercent:-100, duration:.85, ease:'power4.inOut' }, 2.05);
}

/* --------------------------------------------------------------------------
   7) HEADER
   -------------------------------------------------------------------------- */
function initHeader() {
  const header = $('#header'), prog = $('#scrollProgress');
  let last = 0;

  const onScroll = () => {
    const y = window.scrollY;
    header.classList.toggle('is-stuck', y > 40);
    header.classList.toggle('is-hidden', y > 420 && y > last && !document.body.classList.contains('is-locked'));
    last = y;
    if (prog) {
      const max = document.documentElement.scrollHeight - window.innerHeight;
      prog.style.width = (max > 0 ? (y / max) * 100 : 0) + '%';
    }
  };
  window.addEventListener('scroll', onScroll, { passive:true });
  onScroll();

  /* active link on scroll */
  const links = $$('.nav__link');
  const sections = links.map(a => $(a.getAttribute('href'))).filter(Boolean);
  if ('IntersectionObserver' in window && sections.length) {
    const io = new IntersectionObserver(es => {
      es.forEach(e => {
        if (!e.isIntersecting) return;
        links.forEach(a => a.classList.toggle('is-active', a.getAttribute('href') === '#' + e.target.id));
      });
    }, { rootMargin:'-45% 0px -50% 0px' });
    sections.forEach(s => io.observe(s));
  }

  /* mobile nav */
  const burger = $('#burger'), mnav = $('#mobilenav');
  const setNav = open => {
    burger.classList.toggle('is-open', open);
    burger.setAttribute('aria-expanded', String(open));
    mnav.classList.toggle('is-open', open);
    mnav.setAttribute('aria-hidden', String(!open));
    document.body.classList.toggle('is-locked', open);
    if (open) $$('.mnav__list a', mnav).forEach((a, i) => a.style.setProperty('--d', (0.06 * i + 0.12) + 's'));
  };
  burger.addEventListener('click', () => setNav(!mnav.classList.contains('is-open')));
  $$('.mnav__list a, .mnav__foot a', mnav).forEach(a => a.addEventListener('click', () => setNav(false)));
  document.addEventListener('keydown', e => { if (e.key === 'Escape' && mnav.classList.contains('is-open')) setNav(false); });

  /* smooth anchors */
  $$('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href');
      if (id === '#' || id.length < 2) return;
      const t = document.querySelector(id);
      if (!t) return;
      e.preventDefault();
      const top = t.getBoundingClientRect().top + window.scrollY - (id === '#top' ? 0 : 68);
      window.scrollTo({ top, behavior: REDUCED ? 'auto' : 'smooth' });
    });
  });
}

/* --------------------------------------------------------------------------
   8) SCROLL ANIMATIONS
   -------------------------------------------------------------------------- */
function splitHeadings() {
  $$('.reveal-lines').forEach(h => {
    if (h.dataset.split) return;
    h.dataset.split = '1';
    // wrap each <br>-separated chunk in a masked line
    const chunks = h.innerHTML.split(/<br\s*\/?>/i);
    h.innerHTML = chunks.map(c => `<span class="rl"><span>${c}</span></span>`).join('');
    $$('.rl > span', h).forEach((s, i) => s.style.setProperty('--d', (i * 0.09) + 's'));
  });

  /* trigger the masked line reveal on entry */
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver(es => {
      es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
    }, { rootMargin:'0px 0px -12% 0px', threshold:0.05 });
    $$('.reveal-lines').forEach(h => io.observe(h));
  } else {
    $$('.reveal-lines').forEach(h => h.classList.add('is-in'));
  }
}

function initAnimations() {
  if (REDUCED || !hasGSAP) {
    document.documentElement.classList.add('no-anim');
    return;
  }
  splitHeadings();

  /* hero intro */
  gsap.set('.hero .reveal', { opacity:0, y:18 });

  const tl = gsap.timeline({ defaults:{ ease:'power3.out' } });
  tl.from('.header__inner > *', { y:-18, opacity:0, duration:.8, stagger:.08 }, 0)
    .to('.hero .eyebrow',    { y:0, opacity:1, duration:.7 }, .1)
    .from('.hero__title .w', { yPercent:112, opacity:0, duration:1.05, stagger:.045, ease:'power4.out' }, .18)
    .to('.hero__lede',       { y:0, opacity:1, duration:.85 }, .5)
    .to('.hero__cta',        { y:0, opacity:1, duration:.75 }, .62)
    .to('.hero__partner',    { y:0, opacity:1, duration:.75 }, .78)
    .from('.portal',         { scale:.94, opacity:0, duration:1.25, ease:'power3.out' }, .25)
    .from('.wellness-art__core', { scale:.72, opacity:0, duration:1.05, ease:'back.out(1.35)' }, .48)
    .from('.wellness-art__orbit', { scale:.72, opacity:0, duration:.9, stagger:.08, ease:'power3.out' }, .56)
    .from('.wellness-art__caption', { y:10, opacity:0, duration:.65, stagger:.08 }, .72)
    .from('.chip',           { scale:.8, opacity:0, duration:.8, stagger:.11 }, .85)
    .from('.hero__stats li', { y:22, opacity:0, duration:.7, stagger:.08 }, .95);

  /* generic reveals — siblings animate together with a stagger */
  const groups = new Map();
  $$('.reveal').forEach(el => {
    if (el.closest('.hero')) return;
    const key = el.parentElement;
    if (!groups.has(key)) groups.set(key, []);
    groups.get(key).push(el);
  });
  groups.forEach(items => {
    gsap.to(items, {
      opacity:1, y:0, duration:.95, ease:'power3.out', stagger:.09,
      scrollTrigger:{ trigger:items[0], start:'top 88%', once:true }
    });
  });

  /* parallax layers */
  $$('.js-par').forEach(el => {
    const sp = parseFloat(el.dataset.speed || '0.12');
    gsap.to(el, {
      yPercent: sp * 100,
      ease:'none',
      scrollTrigger:{ trigger: el.closest('section') || el, start:'top bottom', end:'bottom top', scrub:1 }
    });
  });

  /* section-scoped soft parallax on the hero sculpture */
  gsap.to('.wellness-art__core', {
    yPercent:-5, ease:'none',
    scrollTrigger:{ trigger:'.hero', start:'top top', end:'bottom top', scrub:1 }
  });

  /* service cards drift in on their own */
  gsap.from('.hscroll__track > *', {
    y:38, opacity:0, duration:.9, ease:'power3.out', stagger:.07,
    scrollTrigger:{ trigger:'.hscroll', start:'top 88%', once:true }
  });

  /* doctor + reel cards */
  ['.team__swiper', '.reels__swiper'].forEach(sel => {
    const s = $(sel); if (!s) return;
    gsap.from($$('.swiper-slide', s), {
      y:42, opacity:0, duration:.9, ease:'power3.out', stagger:.07,
      scrollTrigger:{ trigger:s, start:'top 88%', once:true }
    });
  });
}

/* --------------------------------------------------------------------------
   9) HERO TILT
   -------------------------------------------------------------------------- */
function initTilt() {
  if (!FINE || REDUCED) return;
  $$('.js-tilt').forEach(el => {
    let raf = null, tx = 0, ty = 0, cx = 0, cy = 0;
    const loop = () => {
      cx += (tx - cx) * .08; cy += (ty - cy) * .08;
      el.style.transform = `perspective(1100px) rotateY(${cx}deg) rotateX(${cy}deg)`;
      raf = requestAnimationFrame(loop);
    };
    el.addEventListener('mouseenter', () => { if (!raf) loop(); });
    el.addEventListener('mousemove', e => {
      const r = el.getBoundingClientRect();
      tx = ((e.clientX - r.left) / r.width - .5) * 8;
      ty = -((e.clientY - r.top) / r.height - .5) * 8;
    });
    el.addEventListener('mouseleave', () => {
      tx = 0; ty = 0;
      setTimeout(() => { if (raf) { cancelAnimationFrame(raf); raf = null; el.style.transform = ''; } }, 700);
    });
  });
}

/* --------------------------------------------------------------------------
   10) MAGNETIC BUTTONS + CURSOR
   -------------------------------------------------------------------------- */
function initMagnetic() {
  if (!FINE || REDUCED) return;
  $$('.js-magnetic').forEach(el => {
    el.addEventListener('mousemove', e => {
      const r = el.getBoundingClientRect();
      const x = (e.clientX - r.left - r.width / 2) * .22;
      const y = (e.clientY - r.top - r.height / 2) * .3;
      el.style.transform = `translate(${x}px, ${y}px)`;
    });
    el.addEventListener('mouseleave', () => { el.style.transform = ''; });
  });
}

function initCursor() {
  const c = $('#cursor');
  if (!c || !FINE || REDUCED) { if (c) c.remove(); return; }
  let x = 0, y = 0, tx = 0, ty = 0;
  document.addEventListener('mousemove', e => { tx = e.clientX; ty = e.clientY; c.classList.add('is-on'); });
  document.addEventListener('mouseleave', () => c.classList.remove('is-on'));
  const loop = () => { x += (tx - x) * .18; y += (ty - y) * .18; c.style.transform = `translate(${x}px, ${y}px)`; requestAnimationFrame(loop); };
  loop();
  const hoverables = 'a, button, .scard, .doc, .reel, .stile, .loc';
  document.addEventListener('mouseover', e => { if (e.target.closest(hoverables)) c.classList.add('is-hover'); });
  document.addEventListener('mouseout',  e => { if (e.target.closest(hoverables)) c.classList.remove('is-hover'); });
}

/* --------------------------------------------------------------------------
   11) SERVICES HORIZONTAL SCROLL
   -------------------------------------------------------------------------- */
function initHScroll() {
  const el = $('#hscroll'), bar = $('#hscrollBar');
  if (!el) return;

  const update = () => {
    const max = el.scrollWidth - el.clientWidth;
    const p = max > 0 ? el.scrollLeft / max : 0;
    const w = Math.max(14, (el.clientWidth / el.scrollWidth) * 100);
    if (bar) { bar.style.width = w + '%'; bar.style.transform = `translateX(${(p * (100 - w)) / w * 100}%)`; }
  };
  el.addEventListener('scroll', update, { passive:true });
  window.addEventListener('resize', update);
  update();

  /* drag to scroll (desktop) */
  let down = false, sx = 0, sl = 0, moved = false;
  el.addEventListener('pointerdown', e => {
    if (e.pointerType !== 'mouse') return;
    down = true; moved = false; sx = e.clientX; sl = el.scrollLeft; el.classList.add('is-drag');
  });
  el.addEventListener('pointermove', e => {
    if (!down) return;
    const d = e.clientX - sx;
    if (Math.abs(d) > 4) moved = true;
    el.scrollLeft = sl - d;
  });
  const up = () => { down = false; el.classList.remove('is-drag'); };
  el.addEventListener('pointerup', up);
  el.addEventListener('pointerleave', up);
  el.addEventListener('click', e => { if (moved) { e.preventDefault(); e.stopPropagation(); } }, true);

  /* horizontal wheel support */
  el.addEventListener('wheel', e => {
    if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) return;
    const max = el.scrollWidth - el.clientWidth;
    if ((el.scrollLeft <= 0 && e.deltaY < 0) || (el.scrollLeft >= max - 1 && e.deltaY > 0)) return;
    e.preventDefault();
    el.scrollLeft += e.deltaY;
  }, { passive:false });
}

/* --------------------------------------------------------------------------
   12) SWIPERS
   -------------------------------------------------------------------------- */
let reelsSwiper = null;

function initSwipers() {
  if (typeof Swiper === 'undefined') return;

  const teamProg = $('#teamProgress');
  new Swiper('#teamSwiper', {
    slidesPerView:'auto',
    spaceBetween:18,
    grabCursor:true,
    speed:750,
    watchSlidesProgress:true,
    navigation:{ nextEl:'#teamNext', prevEl:'#teamPrev' },
    keyboard:{ enabled:true },
    breakpoints:{ 900:{ spaceBetween:22 } },
    on:{
      init(s){ upd(s); }, progress(s){ upd(s); }, resize(s){ upd(s); }
    }
  });
  function upd(s){
    if (!teamProg) return;
    const w = Math.max(12, (1 / Math.max(1, s.slides.length - s.params.slidesPerView + 1)) * 100);
    teamProg.style.width = Math.max(12, (s.width / s.virtualSize) * 100) + '%';
    teamProg.style.transform = `translateX(${s.progress * (100 / Math.max(0.01, (s.width / s.virtualSize)) - 100)}%)`;
  }

  reelsSwiper = new Swiper('#reelsSwiper', {
    slidesPerView:'auto',
    spaceBetween:16,
    grabCursor:true,
    speed:700,
    navigation:{ nextEl:'#reelNext', prevEl:'#reelPrev' },
    keyboard:{ enabled:true },
    breakpoints:{ 900:{ spaceBetween:20 } }
  });
}

/* --------------------------------------------------------------------------
   13) REEL MODAL
   -------------------------------------------------------------------------- */
function initModal() {
  const modal = $('#reelModal'); if (!modal) return;
  const frame = $('#modalFrame'), loading = $('#modalLoading');
  const count = $('#modalCount'), fbLink = $('#modalFb'), fbTitle = $('#modalTitle');
  let idx = 0, lastFocus = null;

  const embedURL = url =>
    'https://www.facebook.com/plugins/video.php?height=476&href=' +
    encodeURIComponent(url) + '&show_text=false&width=267&autoplay=true&t=0';

  function load(i) {
    idx = (i + SITE.reels.length) % SITE.reels.length;
    const r = SITE.reels[idx];
    $$('iframe', frame).forEach(f => f.remove());
    loading.style.display = 'flex';

    const f = document.createElement('iframe');
    f.src = embedURL(r.url);
    f.title = r.title;
    f.setAttribute('scrolling','no');
    f.setAttribute('frameborder','0');
    f.setAttribute('allowfullscreen','true');
    f.setAttribute('allow','autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share');
    f.addEventListener('load', () => { loading.style.display = 'none'; });
    frame.appendChild(f);

    count.textContent = (idx + 1) + ' / ' + SITE.reels.length;
    fbLink.href = r.url;
    if (fbTitle) fbTitle.textContent = r.title;
    // graceful fallback: if the embed never reports load, keep the FB button obvious
    setTimeout(() => { loading.style.display = 'none'; }, 6000);
  }

  function open(i) {
    lastFocus = document.activeElement;
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden','false');
    document.body.classList.add('is-locked');
    load(i);
    $('.modal__close', modal).focus({ preventScroll:true });
  }
  function close() {
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden','true');
    document.body.classList.remove('is-locked');
    setTimeout(() => { $$('iframe', frame).forEach(f => f.remove()); }, 420);
    if (lastFocus) lastFocus.focus({ preventScroll:true });
  }

  document.addEventListener('click', e => {
    const btn = e.target.closest('.js-reel');
    if (btn) { e.preventDefault(); open(parseInt(btn.dataset.i, 10) || 0); return; }
    if (e.target.closest('[data-close]')) close();
  });
  $('#modalPrev').addEventListener('click', () => load(idx - 1));
  $('#modalNext').addEventListener('click', () => load(idx + 1));

  document.addEventListener('keydown', e => {
    if (!modal.classList.contains('is-open')) return;
    if (e.key === 'Escape') close();
    if (e.key === 'ArrowLeft')  load(idx - 1);
    if (e.key === 'ArrowRight') load(idx + 1);
  });

  /* swipe between reels on touch */
  let sx = 0, sy = 0;
  modal.addEventListener('touchstart', e => { sx = e.touches[0].clientX; sy = e.touches[0].clientY; }, { passive:true });
  modal.addEventListener('touchend', e => {
    const dx = e.changedTouches[0].clientX - sx, dy = e.changedTouches[0].clientY - sy;
    if (Math.abs(dx) > 60 && Math.abs(dx) > Math.abs(dy)) load(idx + (dx < 0 ? 1 : -1));
  }, { passive:true });
}

/* --------------------------------------------------------------------------
   14) BOOT
   -------------------------------------------------------------------------- */
function boot() {
  wireContacts();
  buildSpecialists();
  buildReels();
  initHeader();
  initSwipers();
  initModal();
  initHScroll();
  initTilt();
  initMagnetic();
  initCursor();
  runLoader(() => {
    initAnimations();
    if (hasGSAP && window.ScrollTrigger) {
      ScrollTrigger.refresh();
      window.addEventListener('load', () => ScrollTrigger.refresh());
      // images below the fold change layout height as they arrive
      let t; window.addEventListener('resize', () => { clearTimeout(t); t = setTimeout(() => ScrollTrigger.refresh(), 220); });
      setTimeout(() => ScrollTrigger.refresh(), 1200);
    }
  });
}

if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
else boot();

})();
