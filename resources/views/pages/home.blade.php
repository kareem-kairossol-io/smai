@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — نرتقي بالعافية لتصبح فناً' : 'SMAI Wellness Clinics — Where Wellness Becomes Art')

@section('content')
<main id="top">
    <!-- ============ HERO ============ -->
    <section class="hero" id="hero">
        <div aria-hidden="true" class="hero__bg">
            <div class="hero__glowA js-par" data-speed="0.12"></div>
            <div class="hero__glowB js-par" data-speed="-0.08"></div>
            <div class="hero__grid"></div>
            <div class="hero__grain"></div>
        </div>
        <div class="hero__inner">
            <div class="hero__copy">
                <p class="eyebrow reveal">
                    <span class="eyebrow__dot"></span>{{ $isAr ? 'مرحبًا بكم في SMAI Wellness Clinics' : 'Welcome to SMAI Wellness Clinics' }}
                </p>
                <h1 class="hero__title">
                    @if($isAr)
                        <span class="line"><span class="w">نرتقي بالعافية</span></span>
                        <span class="line"><span class="w it">لتصبح فناً</span></span>
                    @else
                        <span class="line"><span class="w">Where</span> <span class="w">Wellness</span></span>
                        <span class="line"><span class="w">Becomes</span> <span class="w it">Art</span></span>
                    @endif
                </h1>
                <p class="hero__lede reveal">
                    {{ $isAr
                        ? 'عيادات متكاملة للعافية والرعاية الطبية، تقدم خدمات التغذية العلاجية والرياضية، المحاليل الوريدية المتخصصة ، العلاج الطبيعي والاستشفاء، إلى جانب أحدث خدمات الطب التجميلي، تحت إشراف طبي متخصص.'
                        : 'A comprehensive wellness clinic offering personalized nutrition, IV therapy, physiotherapy & Recovery, and advanced cosmetic treatments — all under medical supervision.' }}
                </p>
                <div class="hero__cta reveal">
                    <a class="btn btn--gold js-magnetic" href="#book">
                        <span class="btn__label">{{ $isAr ? 'احجز استشارتك الآن' : 'Book Your Consultation' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                </div>
                <div class="hero__partner reveal">
                    <img alt="Al Ahly Club" loading="lazy" src="{{ asset('assets/images/specialists-exact/alahly.png') }}" />
                    <div>
                        <strong>{{ $isAr ? 'الشريك الطبي للنادي الأهلي' : 'Medical Partner of Al Ahly Club' }}</strong>
                        <span>{{ $isAr ? 'شراكة في التغذية العلاجية والعافية' : 'Clinical nutrition & wellness partnership' }}</span>
                    </div>
                </div>
            </div>
            <div class="hero__visual">
                <div class="portal portal--wellness js-tilt">
                    <div aria-hidden="true" class="portal__ring"></div>
                    <div class="portal__frame">
                        <div aria-hidden="true" class="portal__glow"></div>
                        <div aria-hidden="true" class="wellness-art">
                            <div class="wellness-art__beam wellness-art__beam--a"></div>
                            <div class="wellness-art__beam wellness-art__beam--b"></div>
                            <div class="wellness-art__orbit wellness-art__orbit--a"></div>
                            <div class="wellness-art__orbit wellness-art__orbit--b"></div>
                            <div class="wellness-art__orbit wellness-art__orbit--c"></div>
                            <div class="wellness-art__ribbon wellness-art__ribbon--a"></div>
                            <div class="wellness-art__ribbon wellness-art__ribbon--b"></div>
                            <div class="wellness-art__core">
                                <span class="wellness-art__coreGlow"></span>
                                <span class="wellness-art__pulseRing wellness-art__pulseRing--a"></span>
                                <span class="wellness-art__pulseRing wellness-art__pulseRing--b"></span>
                                <span class="wellness-art__scan"></span>
                                <img alt="" class="wellness-art__logo" src="{{ asset('assets/images/brand/smai-logo.webp') }}" />
                                <small>{{ $isAr ? 'عافية مخصصة' : 'PERSONALIZED WELLNESS' }}</small>
                            </div>
                            <span class="wellness-art__node wellness-art__node--a"></span>
                            <span class="wellness-art__node wellness-art__node--b"></span>
                            <span class="wellness-art__node wellness-art__node--c"></span>
                            <span class="wellness-art__caption wellness-art__caption--a">{{ $isAr ? 'التغذية' : 'Nutrition' }}</span>
                            <span class="wellness-art__caption wellness-art__caption--b">{{ $isAr ? 'الأداء' : 'Performance' }}</span>
                            <span class="wellness-art__caption wellness-art__caption--c">{{ $isAr ? 'التعافي' : 'Recovery' }}</span>
                        </div>
                    </div>
                    <div class="chip chip--a js-par" data-speed="0.22">
                        <span class="chip__k">{{ $isAr ? 'دقة' : 'Precision' }}</span>
                        <span class="chip__v">{{ $isAr ? 'رعاية مخصصة' : 'Personalized Care' }}</span>
                    </div>
                    <div class="chip chip--b js-par" data-speed="-0.18">
                        <span class="chip__k">{{ $isAr ? 'مصمم من أجل' : 'Built for' }}</span>
                        <span class="chip__v">{{ $isAr ? 'أداء أفضل' : 'Better Performance' }}</span>
                    </div>
                    <div class="chip chip--c js-par" data-speed="0.14">
                        <span class="chip__k">{{ $isAr ? 'قائم على العلم' : 'Science-led' }}</span>
                        <span class="chip__v">{{ $isAr ? 'العافية' : 'Wellness' }}</span>
                    </div>
                </div>
                <ul class="hero__stats">
                    <li><b>{{ $locations->count() }}</b><span>{{ $isAr ? 'مواقع العيادات' : 'Clinic locations' }}</span></li>
                    <li><b>{{ $specialists->count() }}</b><span>{{ $isAr ? 'الأخصائيون والاستشاريون' : 'Specialists & consultants' }}</span></li>
                    <li><b>1</b><span>{{ $isAr ? 'خطة مخصصة لك' : 'Personalized plan for you' }}</span></li>
                </ul>
            </div>
        </div>
        <a aria-label="Scroll to content" class="hero__scroll" href="#about">
            <span aria-hidden="true" class="hero__scrollline"></span>
            <span>{{ $isAr ? 'مرر' : 'Scroll' }}</span>
        </a>
    </section>

    <!-- ============ MARQUEE ============ -->
    <div aria-hidden="true" class="marquee">
        <div class="marquee__track">
            @if($isAr)
                <span>التغذية العلاجية</span><i>✦</i><span>الصحة الأيضية</span><i>✦</i><span>الأداء الرياضي</span><i>✦</i><span>تنسيق القوام</span><i>✦</i><span>تقييم العافية</span><i>✦</i><span>المكملات الوريدية</span><i>✦</i><span>التعافي</span><i>✦</i>
                <span>التغذية العلاجية</span><i>✦</i><span>الصحة الأيضية</span><i>✦</i><span>الأداء الرياضي</span><i>✦</i><span>تنسيق القوام</span><i>✦</i><span>تقييم العافية</span><i>✦</i><span>المكملات الوريدية</span><i>✦</i><span>التعافي</span><i>✦</i>
            @else
                <span>Clinical Nutrition</span><i>✦</i><span>Metabolic Health</span><i>✦</i><span>Sports Performance</span><i>✦</i><span>Body Contouring</span><i>✦</i><span>Wellness Assessment</span><i>✦</i><span>IV Supplementation</span><i>✦</i><span>Recovery</span><i>✦</i>
                <span>Clinical Nutrition</span><i>✦</i><span>Metabolic Health</span><i>✦</i><span>Sports Performance</span><i>✦</i><span>Body Contouring</span><i>✦</i><span>Wellness Assessment</span><i>✦</i><span>IV Supplementation</span><i>✦</i><span>Recovery</span><i>✦</i>
            @endif
        </div>
    </div>

    <!-- ============ ABOUT ============ -->
    <section class="about section" id="about">
        <div class="wrap">
            <div class="about__grid">
                <div class="about__aside">
                    <p class="sechead reveal"><i>01</i>{{ $isAr ? 'فلسفتنا' : 'Our Philosophy' }}</p>
                    <div class="about__mark reveal">
                        <div class="about__markinner" style="height: 100%;width: 100%;">
                            <img alt="" loading="lazy" style="width: 100%;height: 100%;object-fit: cover;" src="{{ asset('assets/images/services/philosophy_wellness.jpg') }}" />
                        </div>
                    </div>
                    <p class="about__note reveal">
                        {{ $isAr ? 'نؤمن بأن العافية ليست رفاهية، بل أسلوب حياة.' : 'We believe wellness is not a luxury — it is a lifestyle.' }}
                    </p>
                </div>
                <div class="about__main">
                    <h2 class="h2 reveal-lines">
                        @if($isAr)
                            العافية ليست رفاهية — <em>بل أسلوب حياة.</em>
                        @else
                            Wellness is not a luxury — <em>it is a lifestyle.</em>
                        @endif
                    </h2>
                    <p class="lede reveal">
                        {{ $isAr
                            ? 'صُممت عياداتنا لدعم صحة الجسم والمظهر من خلال رعاية طبية قائمة على أسس علمية، وخطط علاجية مصممة وفقًا لاحتياجات كل فرد. سواء كان هدفك تحسين صحتك، تسريع التعافي، أو تعزيز ثقتك بنفسك، يعمل فريقنا متعدد التخصصات على تقديم رعاية متكاملة تساعدك على الوصول إلى أهدافك بأمان وفعالية.'
                            : 'Our clinic is designed to support your body, mind, and appearance through evidence-based medical care and individualized treatment plans. Whether your goal is better health, faster recovery, or enhanced confidence, our multidisciplinary team is here to support you.' }}
                    </p>
                    <p class="sechead reveal" style="margin-top:clamp(32px,4.5vw,52px);margin-bottom:0;">
                        <i>✦</i>{{ $isAr ? 'خدماتنا الرئيسية' : 'Our Core Services' }}
                    </p>
                    <div class="about__pillars" style="grid-template-columns:repeat(auto-fit,minmax(180px,1fr));margin-top:1.2rem;">
                        @foreach($services as $idx => $s)
                            <article class="pillar reveal">
                                <span class="pillar__n">0{{ $idx + 1 }}</span>
                                <h3>{{ $s->title }}</h3>
                            </article>
                        @endforeach
                    </div>
                    <div class="about__cta reveal" style="margin-top:clamp(26px,3vw,38px);">
                        <a class="btn btn--gold js-magnetic" href="#services">
                            <span class="btn__label">{{ $isAr ? 'اكتشف خدماتنا' : 'Explore Our Services' }}</span>
                            <span class="btn__shine"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SERVICES (DYNAMIC) ============ -->
    <section class="services section" id="services">
        <div class="wrap">
            <header class="sectop">
                <div>
                    <p class="sechead reveal"><i>02</i>{{ $isAr ? 'ما نقدمه' : 'What We Do' }}</p>
                    <h2 class="h2 reveal-lines">
                        @if($isAr)
                            خدماتنا <em>الأساسية</em>.
                        @else
                            Our Core <em>Services</em>.
                        @endif
                    </h2>
                </div>
                <p class="sectop__note reveal">
                    {{ $isAr
                        ? 'تُقدَّم كل خدمة بواسطة متخصصين مؤهلين وتُخصص بعد التقييم. اسحب أو مرر لاستكشاف الخدمات.'
                        : 'Every service is delivered by qualified specialists and tailored after assessment. Drag, scroll or swipe to explore.' }}
                </p>
            </header>
        </div>
        <div class="hscroll" id="hscroll">
            <div class="hscroll__track" id="hscrollTrack">
                @foreach($services as $index => $srv)
                    <article class="scard" data-idx="0{{ $index + 1 }}">
                        <div class="scard__top">
                            <span class="scard__num">0{{ $index + 1 }}</span>
                            <svg aria-hidden="true" class="scard__ico" viewBox="0 0 48 48">
                                @if($srv->slug === 'clinical-nutrition')
                                    <path d="M24 6c8 5 13 11 13 19a13 13 0 1 1-26 0c0-8 5-14 13-19Z" fill="none" stroke="currentColor" stroke-width="1.3"></path>
                                    <path d="M24 20v14M18 26h12" stroke="currentColor" stroke-linecap="round" stroke-width="1.3"></path>
                                @elseif($srv->slug === 'iv-drips')
                                    <path d="M20 6h8v10l6 18a6 6 0 0 1-5.6 8h-8.8A6 6 0 0 1 14 34l6-18V6Z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1.3"></path>
                                    <path d="M17 26h14" stroke="currentColor" stroke-width="1.3"></path>
                                @elseif($srv->slug === 'recovery-physiotherapy')
                                    <circle cx="24" cy="24" fill="none" r="7" stroke="currentColor" stroke-width="1.3"></circle>
                                    <path d="M24 4v8M24 36v8M4 24h8M36 24h8" stroke="currentColor" stroke-linecap="round" stroke-width="1.3"></path>
                                    <path d="M24 13a11 11 0 0 1 0 22" fill="none" opacity=".5" stroke="currentColor" stroke-width="1.3"></path>
                                @else
                                    <path d="M14 10c-4 8-4 20 0 28M34 10c4 8 4 20 0 28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.3"></path>
                                    <path d="M20 24h8" stroke="currentColor" stroke-linecap="round" stroke-width="1.3"></path>
                                @endif
                            </svg>
                        </div>
                        <h3>{{ $srv->title }}</h3>
                        <p>{{ $srv->short_desc }}</p>
                        <a class="scard__link" href="{{ route($prefix . 'service.detail', $srv->slug) }}">
                            {{ $isAr ? 'استكشف الخدمة' : 'Explore service' }}<i></i>
                        </a>
                    </article>
                @endforeach

                <article class="scard scard--cta">
                    <h3>{{ $isAr ? 'لست متأكدًا من أين تبدأ؟' : 'Not sure where to start?' }}</h3>
                    <p>{{ $isAr ? 'ابدأ باستشارة وتقييم طبي شامل، وسنضع معك خطة علاجية مخصصة تناسب احتياجاتك وأهدافك.' : 'Begin with a wellness assessment. We will map the right personalized pathway with you.' }}</p>
                    <a class="btn btn--gold btn--sm" href="#book">
                        <span class="btn__label">{{ $isAr ? 'احجز استشارتك الآن' : 'Book a Consultation' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                </article>
            </div>
        </div>
        <div class="wrap">
            <div class="hscroll__bar"><i id="hscrollBar"></i></div>
        </div>
    </section>

    <!-- ============ SIGNATURE TECH ============ -->
    <section class="tech section" id="tech">
        <div aria-hidden="true" class="tech__bg"><span class="tech__orb js-par" data-speed="0.1"></span></div>
        <div class="wrap">
            <div class="tech__grid">
                <div class="tech__visual reveal">
                    <div class="scanner">
                        <div class="scanner__ring r1"></div>
                        <div class="scanner__ring r2"></div>
                        <div class="scanner__ring r3"></div>
                        <div class="scanner__core"><span>So<i>Check</i></span></div>
                        <div class="scanner__sweep"></div>
                        <ul class="scanner__tags">
                            <li style="--a:-58deg">{{ $isAr ? 'المعادن' : 'Minerals' }}</li>
                            <li style="--a:8deg">{{ $isAr ? 'العناصر النزرة' : 'Trace elements' }}</li>
                            <li style="--a:64deg">{{ $isAr ? 'الإجهاد التأكسدي' : 'Oxidative stress' }}</li>
                            <li style="--a:132deg">{{ $isAr ? 'مؤشرات المعادن الثقيلة' : 'Heavy-metal indicators' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="tech__copy">
                    <p class="sechead reveal"><i>03</i>{{ $isAr ? 'تقنية العافية المميزة' : 'Signature Wellness Technology' }}</p>
                    <h2 class="h2 reveal-lines">
                        @if($isAr)
                            الرؤية أولًا. <em>ثم</em> الخطة.
                        @else
                            Insight first. <em>Then</em> the plan.
                        @endif
                    </h2>
                    <p class="lede reveal">
                        {{ $isAr
                            ? 'Oligo / So Check تقنية غير جراحية لتقييم العافية باستخدام القياس الطيفي لتقييم توازن المعادن والعناصر النزرة ومؤشرات المعادن الثقيلة والإجهاد التأكسدي — بما يمنح الأخصائي نقطة بداية أوضح.'
                            : 'Oligo / So Check is a non-invasive wellness assessment technology using spectrophotometry to evaluate mineral balance, trace elements, heavy-metal indicators and oxidative stress — giving your specialist a clearer starting point.' }}
                    </p>
                    <ul class="ticks">
                        <li class="reveal">{{ $isAr ? 'غير جراحي ومريح' : 'Non-invasive and comfortable' }}</li>
                        <li class="reveal">{{ $isAr ? 'تُراجع النتائج مع الأخصائي' : 'Results reviewed with your specialist' }}</li>
                        <li class="reveal">{{ $isAr ? 'يُستخدم كأداة فحص للعافية — وليس بديلًا للتشخيص' : 'Used as a wellness screening tool — not a diagnostic substitute' }}</li>
                    </ul>
                    <a class="btn btn--ghost js-magnetic" href="#book">
                        <span class="btn__label">{{ $isAr ? 'احجز تقييمًا' : 'Book an Assessment' }}</span>
                        <svg aria-hidden="true" class="btn__arrow" viewBox="0 0 24 24">
                            <path d="M5 12h13M13 6l6 6-6 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ WHY SMAI ============ -->
    <section class="why section" id="why">
        <div class="wrap">
            <header class="sectop">
                <div>
                    <p class="sechead reveal"><i>04</i>{{ $isAr ? 'رحلة المريض' : 'Patient Journey' }}</p>
                    <h2 class="h2 reveal-lines">
                        @if($isAr)
                            نهج مخصص، <em>خطوة بخطوة</em>.
                        @else
                            A personalized approach, <em>step by step</em>.
                        @endif
                    </h2>
                </div>
                <p class="sectop__note reveal">
                    {{ $isAr
                        ? 'نحرص في SMAI على أن تبدأ تجربتك بالتقييم الطبي وتنتهي بمتابعة واضحة للنتائج.'
                        : 'Two clinics inside Al Ahly Club and one in Sheikh Zayed.' }}
                </p>
            </header>
            <ol class="steps">
                <li class="step reveal">
                    <span class="step__n">01</span>
                    <h3>{{ $isAr ? 'التقييم الطبي الأولي' : 'Initial Consultation & Assessment' }}</h3>
                    <p>{{ $isAr ? 'تبدأ تجربتك بتقييم طبي واستشارة أولية لتحديد احتياجاتك وأهدافك الصحية بدقة.' : 'You meet a consultant who listens to your history, routine and goals before anything else.' }}</p>
                </li>
                <li class="step reveal">
                    <span class="step__n">02</span>
                    <h3>{{ $isAr ? 'خطة علاجية متخصصة' : 'Personalized Treatment Plan' }}</h3>
                    <p>{{ $isAr ? 'وضع خطة علاجية مخصصة لك وفقًا للتقييم الطبي واحتياجات حالتك الفردية.' : 'Body composition and wellness assessment build an objective picture of your starting point.' }}</p>
                </li>
                <li class="step reveal">
                    <span class="step__n">03</span>
                    <h3>{{ $isAr ? 'رعاية طبية وبروتوكولات واضحة' : 'Professional Medical Care' }}</h3>
                    <p>{{ $isAr ? 'تقديم الخدمات بواسطة فريق طبي مؤهل ووفق بروتوكولات علمية واضحة وقائمة على الأدلة.' : 'Nutrition, metabolic, performance or contouring pathways — combined only where they serve you.' }}</p>
                </li>
                <li class="step reveal">
                    <span class="step__n">04</span>
                    <h3>{{ $isAr ? 'المتابعة وتقييم التطور' : 'Follow-up & Progress Tracking' }}</h3>
                    <p>{{ $isAr ? 'متابعة مستمرة وتقييم لتطور الحالة والنتائج المحققة لضمان أفضل عائد صحي مستدام.' : 'Regular reviews, coaching and adjustments so progress holds beyond the clinic.' }}</p>
                </li>
            </ol>
        </div>
    </section>

    <!-- ============ SPECIALISTS (DYNAMIC) ============ -->
    <section class="team section" id="specialists">
        <div class="wrap">
            <header class="sectop sectop--team">
                <div>
                    <p class="sechead reveal"><i>05</i>{{ $isAr ? 'أطباؤنا' : 'Our Specialists' }}</p>
                    <h2 class="h2 reveal-lines">
                        @if($isAr)
                            الفريق وراء <em>خطتك</em>.
                        @else
                            The people behind <em>your plan</em>.
                        @endif
                    </h2>
                </div>
                <div class="team__nav">
                    <button aria-label="{{ $isAr ? 'الطبيب السابق' : 'Previous specialist' }}" class="rnd" id="teamPrev">
                        <svg viewBox="0 0 24 24"><path d="M15 5l-7 7 7 7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path></svg>
                    </button>
                    <button aria-label="{{ $isAr ? 'الطبيب التالي' : 'Next specialist' }}" class="rnd" id="teamNext">
                        <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path></svg>
                    </button>
                </div>
            </header>
        </div>
        <div class="swiper team__swiper" id="teamSwiper">
            <div class="swiper-wrapper" id="teamWrapper" data-rendered="blade">
                @foreach($specialists as $i => $doc)
                    <div class="swiper-slide">
                        <article class="doc doc--exact">
                            <img class="doc__poster" src="{{ $doc->image_url }}" alt="{{ $doc->name }} — SMAI Wellness Clinics" loading="{{ $i < 3 ? 'eager' : 'lazy' }}" decoding="async" />
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="wrap">
            <div class="team__progress"><i id="teamProgress"></i></div>
        </div>
    </section>

    <!-- ============ PARTNERSHIP ============ -->
    <section class="partner section" id="partner">
        <div class="partner__inner wrap">
            <div class="partner__crest reveal">
                <div aria-hidden="true" class="partner__halo"></div>
                <img alt="Al Ahly Club" loading="lazy" src="{{ asset('assets/images/specialists-exact/alahly.png') }}" />
            </div>
            <div class="partner__copy">
                <p class="sechead reveal"><i>06</i>{{ $isAr ? 'الشراكة' : 'Partnership' }}</p>
                <h2 class="h2 reveal-lines">
                    @if($isAr)
                        الشريك الطبي لـ <em>النادي الأهلي</em>.
                    @else
                        Medical Partner of <em>Al Ahly Club</em>.
                    @endif
                </h2>
                <p class="lede reveal">
                    {{ $isAr
                        ? 'عيادات SMAI Wellness هي الشريك الطبي للنادي الأهلي، مع عيادات داخل النادي في مدينة نصر والجزيرة — لتقديم خدمات التغذية العلاجية والعافية للأعضاء والرياضيين والعائلات.'
                        : 'SMAI Wellness Clinics is the medical partner of Al Ahly Club, with clinics inside the club in Nasr City and Al Gezira — bringing clinical nutrition and wellness care to members, athletes and families.' }}
                </p>
                <div class="partner__logos reveal">
                    <img alt="SMAI Wellness Clinics" src="{{ asset('assets/images/brand/smai-logo.webp') }}" />
                    <span aria-hidden="true">×</span>
                    <img alt="Al Ahly Club" src="{{ asset('assets/images/specialists-exact/alahly.png') }}" />
                </div>
            </div>
        </div>
    </section>

    <!-- ============ REELS / MEDIA (DYNAMIC) ============ -->
    <section class="reels section" id="media">
        <div class="wrap">
            <header class="sectop">
                <div>
                    <p class="sechead reveal"><i>07</i>{{ $isAr ? 'داخل SMAI' : 'Inside SMAI' }}</p>
                    <h2 class="h2 reveal-lines">
                        @if($isAr)
                            العافية <em>في حركة</em>.
                        @else
                            Wellness <em>in motion</em>.
                        @endif
                    </h2>
                </div>
                <p class="sectop__note reveal">
                    {{ $isAr
                        ? 'لحظات من عياداتنا وأطبائنا ومجتمعنا — مباشرة من قنواتنا.'
                        : 'Moments from our clinics, our specialists and our community — straight from our channels.' }}
                </p>
            </header>
        </div>
        <div class="swiper reels__swiper" id="reelsSwiper">
            <div class="swiper-wrapper" id="reelsWrapper" data-rendered="blade">
                @foreach($reels as $i => $reel)
                    <div class="swiper-slide">
                        <article class="reel reel--fb reel--live-preview reel--iframe-preview">
                            <span class="reel__video" aria-hidden="true">
                                <iframe
                                    src="{{ $reel->facebook_embed_url }}"
                                    title="{{ $reel->title }}"
                                    scrolling="no"
                                    frameborder="0"
                                    loading="{{ $i < 4 ? 'eager' : 'lazy' }}"
                                    allow="autoplay; encrypted-media; picture-in-picture; web-share"
                                    allowfullscreen="true"
                                    tabindex="-1"></iframe>
                            </span>

                            <span class="reel__cover reel__cover--transparent" style="background:{{ $reel->cover_gradient }}" aria-hidden="true">
                                <span class="reel__aura" style="--ax:{{ 18 + ($i * 17) % 64 }}%;--ay:{{ 22 + ($i * 29) % 52 }}%"></span>
                                <img class="reel__wm" src="{{ asset('assets/images/brand/smai-logo.webp') }}" alt="" loading="lazy" aria-hidden="true">
                                <span class="reel__noise"></span>
                            </span>

                            <span class="reel__tag">{{ $isAr ? 'فيسبوك ريل' : 'Facebook Reel' }}</span>

                            <div class="reel__scrim">
                                <span class="reel__play" aria-hidden="true">
                                    <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" fill="currentColor"></path></svg>
                                </span>
                                <div>
                                    <h3 class="reel__title">{{ $reel->title }}</h3>
                                    <p class="reel__sub">{{ $reel->sub }}</p>
                                </div>
                            </div>

                            <a class="reel__hit js-reel" data-i="{{ $i }}" href="{{ $reel->url }}" aria-label="{{ $isAr ? 'مشاهدة: ' . $reel->title : 'Watch ' . $reel->title }}"></a>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="wrap reels__foot">
            <div class="reels__nav">
                <button aria-label="{{ $isAr ? 'الريل السابق' : 'Previous reel' }}" class="rnd" id="reelPrev">
                    <svg viewBox="0 0 24 24"><path d="M15 5l-7 7 7 7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path></svg>
                </button>
                <button aria-label="{{ $isAr ? 'الريل التالي' : 'Next reel' }}" class="rnd" id="reelNext">
                    <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path></svg>
                </button>
            </div>
            <p class="reels__hint">{{ $isAr ? 'معاينات مباشرة · اضغط للفتح بالصوت' : 'Live previews · Tap to open with sound' }}</p>
        </div>
    </section>

    <!-- ============ LOCATIONS (DYNAMIC) ============ -->
    <section class="locs section" id="locations">
        <div class="wrap">
            <header class="sectop">
                <div>
                    <p class="sechead reveal"><i>08</i>{{ $isAr ? 'الفروع' : 'Locations' }}</p>
                    <h2 class="h2 reveal-lines">
                        @if($isAr)
                            ثلاثة مواقع لـ <em>SMAI</em>.
                        @else
                            Three homes for <em>SMAI</em>.
                        @endif
                    </h2>
                </div>
                <p class="sectop__note reveal">
                    {{ $isAr
                        ? 'عيادتان داخل النادي الأهلي وعيادة في الشيخ زايد.'
                        : 'Two clinics inside Al Ahly Club and one in Sheikh Zayed.' }}
                </p>
            </header>
            <div class="locs__grid" id="locsGrid">
                @foreach($locations as $loc)
                    <article class="loc reveal" data-loc="{{ $loc->key }}">
                        <div aria-hidden="true" class="loc__map"><span class="loc__pin"></span></div>
                        <div class="loc__body">
                            <span class="loc__tag">{{ $loc->tag }}</span>
                            <h3>
                                @if($isAr)
                                    {{ $loc->tag }}<br /><em>{{ $loc->area }}</em>
                                @else
                                    {{ $loc->name }}
                                @endif
                            </h3>
                            <p class="loc__meta">{{ $loc->meta }}</p>
                            <div class="loc__acts">
                                @if($loc->video_path)
                                    <button class="lnk js-loc-video" data-title="{{ $loc->video_title }}" data-video="{{ asset($loc->video_path) }}" type="button">
                                        <svg aria-hidden="true" class="lnk__play" viewBox="0 0 16 16"><path d="M4.5 3l8 5-8 5z" fill="currentColor"></path></svg>
                                        {{ $isAr ? 'عرض الفرع' : 'Show Branch View' }}<i></i>
                                    </button>
                                @endif
                                <a class="lnk js-directions" data-q="{{ $loc->map_query }}" href="https://www.google.com/maps/search/?api=1&query={{ urlencode($loc->map_query) }}" target="_blank" rel="noopener">
                                    {{ $isAr ? 'الاتجاهات' : 'Get Directions' }}<i></i>
                                </a>
                                <a class="lnk lnk--alt" href="#book">
                                    {{ $isAr ? 'احجز في هذا الفرع' : 'Book at This Branch' }}<i></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ============ SOCIAL ============ -->
    <section class="social section" id="social">
        <div class="wrap">
            <header class="sectop">
                <div>
                    <p class="sechead reveal"><i>09</i>{{ $isAr ? 'مجتمعنا' : 'Community' }}</p>
                    <h2 class="h2 reveal-lines">
                        @if($isAr)
                            ابقَ على تواصل<br /><em>خارج العيادة.</em>
                        @else
                            Stay connected<br /><em>beyond the clinic.</em>
                        @endif
                    </h2>
                </div>
            </header>
            <div class="social__grid">
                <a class="stile stile--fb reveal" data-social="facebook" href="{{ $settings['facebook_url'] ?? '#' }}" rel="noopener noreferrer" target="_blank">
                    <span aria-hidden="true" class="stile__glow"></span>
                    <span aria-hidden="true" class="stile__ico">
                        <svg viewBox="0 0 32 32">
                            <path d="M18.8 32V17.4h4.9l.7-5.7h-5.6V8.1c0-1.6.5-2.8 2.8-2.8h3V.2C24.1.1 22.4 0 20.4 0c-4.2 0-7 2.6-7 7.3v4.4H8.6v5.7h4.8V32h5.4Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <span class="stile__body">
                        <b>Facebook</b>
                        <em>{{ $isAr ? 'ريلز وأخبار العيادة وأبرز ما يقدمه الأطباء' : 'Reels, clinic news & specialist highlights' }}</em>
                    </span>
                    <span aria-hidden="true" class="stile__go">
                        <svg viewBox="0 0 24 24"><path d="M7 17L17 7M8 7h9v9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    </span>
                </a>
                <a class="stile stile--ig reveal" data-social="instagram" href="{{ $settings['instagram_url'] ?? '#' }}" rel="noopener noreferrer" target="_blank">
                    <span aria-hidden="true" class="stile__glow"></span>
                    <span aria-hidden="true" class="stile__ico">
                        <svg viewBox="0 0 32 32">
                            <rect fill="none" height="29" rx="9" stroke="currentColor" stroke-width="2.6" width="29" x="1.5" y="1.5"></rect>
                            <circle cx="16" cy="16" fill="none" r="6.6" stroke="currentColor" stroke-width="2.6"></circle>
                            <circle cx="24.4" cy="7.7" fill="currentColor" r="1.9"></circle>
                        </svg>
                    </span>
                    <span class="stile__body">
                        <b>Instagram</b>
                        <em>{{ $isAr ? 'العافية ونمط الحياة وما وراء الكواليس' : 'Wellness, lifestyle & behind the scenes' }}</em>
                    </span>
                    <span aria-hidden="true" class="stile__go">
                        <svg viewBox="0 0 24 24"><path d="M7 17L17 7M8 7h9v9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    </span>
                </a>
                <a class="stile stile--tt reveal" data-social="tiktok" href="{{ $settings['tiktok_url'] ?? '#' }}" rel="noopener noreferrer" target="_blank">
                    <span aria-hidden="true" class="stile__glow"></span>
                    <span aria-hidden="true" class="stile__ico">
                        <svg aria-hidden="true" viewBox="0 0 32 32">
                            <path d="M18.2 4.2c.7 3.3 2.6 5.2 5.8 5.8v4.1a11.2 11.2 0 0 1-5.8-2v8.1a8.2 8.2 0 1 1-7.1-8.1v4.2a4 4 0 1 0 2.9 3.9V4.2h4.2Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <span class="stile__body">
                        <b>TikTok</b>
                        <em>{{ $isAr ? 'فيديوهات ولحظات من العيادة ومحتوى العافية' : 'Videos, clinic moments & wellness content' }}</em>
                    </span>
                    <span aria-hidden="true" class="stile__go">
                        <svg viewBox="0 0 24 24"><path d="M7 17L17 7M8 7h9v9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ BOOKING / APPOINTMENTS CTA ============ -->
    <section class="book section" id="book">
        <div aria-hidden="true" class="book__bg"><span class="book__orb js-par" data-speed="0.09"></span></div>
        <div class="wrap">
            <div class="book__card reveal">
                <p class="eyebrow eyebrow--dark"><span class="eyebrow__dot"></span>{{ $isAr ? 'المواعيد' : 'Appointments' }}</p>
                <h2 class="book__title">
                    @if($isAr)
                        خذ الخطوة الأولى نحو صحة وتعافٍ وثقة <em>أفضل.</em>
                    @else
                        Take the first step toward better health, recovery, and <em>confidence.</em>
                    @endif
                </h2>
                <p class="book__lede">
                    {{ $isAr
                        ? 'أخبرنا بهدفك — الوزن أو الأداء أو الصحة الأيضية أو ببساطة الشعور بشكل أفضل. وسنوصلك بالأخصائي والفرع المناسبين.'
                        : 'Tell us your goal — weight, performance, metabolic health or simply feeling better. We will match you with the right specialist and branch.' }}
                </p>

                <div class="book__acts">
                    <a class="btn btn--gold js-magnetic" data-contact="phone" href="tel:{{ $settings['phone'] ?? '01222772729' }}">
                        <span class="btn__label">{{ $isAr ? 'اتصل بالعيادة' : 'Call the Clinic' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                    <a class="btn btn--dark js-magnetic" data-contact="whatsapp" href="https://wa.me/{{ $settings['whatsapp'] ?? '201222772729' }}" target="_blank" rel="noopener">
                        <span class="btn__label">{{ $isAr ? 'تواصل عبر واتساب' : 'WhatsApp Us' }}</span>
                    </a>
                </div>
                <p class="book__fine">
                    {{ $isAr ? 'تفضل البريد الإلكتروني؟' : 'Prefer email?' }}
                    <a data-contact="email" href="mailto:{{ $settings['email'] ?? 'info@smai.com.eg' }}">{{ $isAr ? 'أرسل لنا رسالة' : 'Send us a message' }}</a>
                </p>
            </div>
        </div>
    </section>
</main>
@endsection
