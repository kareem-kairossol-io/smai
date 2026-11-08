@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
    $phone = $settings['phone'] ?? '012 22772729';
    $whatsapp = $settings['whatsapp'] ?? '201222772729';
    $email = $settings['email'] ?? 'info@smai.com.eg';
    $facebook = $settings['facebook_url'] ?? 'https://www.facebook.com/smaiwellnessclinics/';
    $instagram = $settings['instagram_url'] ?? 'https://www.instagram.com/smaiwellnessclinics/';
    $tiktok = $settings['tiktok_url'] ?? 'https://www.tiktok.com/@smaiwellnessclinics';
@endphp

<footer class="foot" id="contact">
    <div class="wrap">
        <div class="foot__top">
            <div class="foot__brand">
                <img alt="SMAI Wellness Clinics" class="foot__logo" src="{{ asset('assets/images/brand/smai-logo.webp') }}" />
                <p>
                    {{ $isAr ? 'عيادات متكاملة للعافية، التغذية العلاجية وحلول الصحة المتقدمة تحت إشراف طبي متخصص.' : 'Personalized wellness, clinical nutrition and advanced health solutions.' }}
                </p>
                <div class="foot__partner">
                    <img alt="Al Ahly Club" loading="lazy" src="{{ asset('assets/images/specialists-exact/alahly.png') }}" />
                    <span>{{ $isAr ? 'الشريك الطبي لـ' : 'Medical Partner of' }}<br /><b>{{ $isAr ? 'النادي الأهلي' : 'Al Ahly Club' }}</b></span>
                </div>
            </div>
            <nav aria-label="{{ $isAr ? 'استكشف' : 'Explore' }}" class="foot__col">
                <h4>{{ $isAr ? 'استكشف' : 'Explore' }}</h4>
                <a href="{{ route($prefix . 'about') }}">{{ $isAr ? 'من نحن' : 'About' }}</a>
                <a href="{{ route($prefix . 'services') }}">{{ $isAr ? 'الخدمات' : 'Services' }}</a>
                <a href="{{ route($prefix . 'specialists') }}">{{ $isAr ? 'الأطباء' : 'Specialists' }}</a>
                <a href="{{ route($prefix . 'media') }}">{{ $isAr ? 'الميديا' : 'Media' }}</a>
                <a href="{{ route($prefix . 'faq') }}">{{ $isAr ? 'الأسئلة الشائعة' : 'FAQ' }}</a>
            </nav>
            <div class="foot__col">
                <h4>{{ $isAr ? 'الفروع' : 'Clinics' }}</h4>
                <a href="{{ route($prefix . 'locations') }}">{{ $isAr ? 'النادي الأهلي — مدينة نصر' : 'Al Ahly Club — Nasr City' }}</a>
                <a href="{{ route($prefix . 'locations') }}">{{ $isAr ? 'النادي الأهلي — الجزيرة' : 'Al Ahly Club — Al Gezira' }}</a>
                <a href="{{ route($prefix . 'locations') }}">{{ $isAr ? 'كارجو مول — الشيخ زايد' : 'Kargo Mall — Sheikh Zayed' }}</a>
            </div>
            <div class="foot__col foot__col--contact">
                <h4>{{ $isAr ? 'تواصل معنا' : 'Contact' }}</h4>
                <a class="foot__ph" data-contact="phone" href="tel:{{ $phone }}">{{ $phone }}</a>
                <a data-contact="whatsapp" href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener">WhatsApp — {{ $phone }}</a>
                <a data-contact="email" href="mailto:{{ $email }}">{{ $email }}</a>
                <div class="foot__social">
                    <a aria-label="Facebook" data-social="facebook" href="{{ $facebook }}" rel="noopener noreferrer" target="_blank">
                        <svg viewBox="0 0 32 32">
                            <path d="M18.8 32V17.4h4.9l.7-5.7h-5.6V8.1c0-1.6.5-2.8 2.8-2.8h3V.2C24.1.1 22.4 0 20.4 0c-4.2 0-7 2.6-7 7.3v4.4H8.6v5.7h4.8V32h5.4Z" fill="currentColor"></path>
                        </svg>
                    </a>
                    <a aria-label="Instagram" data-social="instagram" href="{{ $instagram }}" rel="noopener noreferrer" target="_blank">
                        <svg viewBox="0 0 32 32">
                            <rect fill="none" height="29" rx="9" stroke="currentColor" stroke-width="2.6" width="29" x="1.5" y="1.5"></rect>
                            <circle cx="16" cy="16" fill="none" r="6.6" stroke="currentColor" stroke-width="2.6"></circle>
                            <circle cx="24.4" cy="7.7" fill="currentColor" r="1.9"></circle>
                        </svg>
                    </a>
                    <a aria-label="TikTok" data-social="tiktok" href="{{ $tiktok }}" rel="noopener noreferrer" target="_blank">
                        <svg aria-hidden="true" viewBox="0 0 32 32">
                            <path d="M18.2 4.2c.7 3.3 2.6 5.2 5.8 5.8v4.1a11.2 11.2 0 0 1-5.8-2v8.1a8.2 8.2 0 1 1-7.1-8.1v4.2a4 4 0 1 0 2.9 3.9V4.2h4.2Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="foot__bar">
            <span>&copy; <span id="yr">{{ date('Y') }}</span> {{ $isAr ? 'عيادات SMAI Wellness. جميع الحقوق محفوظة.' : 'SMAI Wellness Clinics. All rights reserved.' }}</span>
        </div>
    </div>
</footer>

<!-- ============ REEL MODAL ============ -->
<div aria-hidden="true" aria-label="Reel player" aria-modal="true" class="modal" id="reelModal" role="dialog">
    <div class="modal__scrim" data-close=""></div>
    <div class="modal__shell">
        <button aria-label="Close" class="modal__close" data-close="">
            <svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"></path></svg>
        </button>
        <button aria-label="Previous reel" class="modal__arrow modal__arrow--prev" id="modalPrev">
            <svg viewBox="0 0 24 24"><path d="M15 5l-7 7 7 7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path></svg>
        </button>
        <button aria-label="Next reel" class="modal__arrow modal__arrow--next" id="modalNext">
            <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path></svg>
        </button>
        <div class="modal__stage">
            <div class="modal__frame" id="modalFrame">
                <div class="modal__fallback" id="modalFallback">
                    <img alt="" aria-hidden="true" src="{{ asset('assets/images/brand/smai-logo.webp') }}" />
                    <p class="modal__ftitle" id="modalTitle">{{ $isAr ? 'فيديو' : 'Reel' }}</p>
                    <p class="modal__ftext">{{ $isAr ? 'إذا لم يظهر الفيديو، قد يكون المتصفح يحجب محتوى فيسبوك.' : 'If the video does not appear, your browser may be blocking Facebook content.' }}</p>
                </div>
                <div class="modal__loading" id="modalLoading">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
        <div class="modal__bar">
            <span class="modal__count" id="modalCount">1 / 6</span>
            <a class="modal__fb" href="#" id="modalFb" rel="noopener" target="_blank">
                {{ $isAr ? 'المشاهدة على فيسبوك' : 'Watch on Facebook' }}
                <svg viewBox="0 0 24 24"><path d="M7 17L17 7M8 7h9v9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
            </a>
        </div>
    </div>
</div>

<!-- ============ VIDEO MODAL ============ -->
<div aria-hidden="true" aria-label="Branch Tour Video" aria-modal="true" class="modal modal--video" id="videoModal" role="dialog">
    <div class="modal__scrim" data-close=""></div>
    <div class="modal__shell">
        <button aria-label="Close" class="modal__close" data-close="">
            <svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"></path></svg>
        </button>
        <div class="modal__stage">
            <div class="modal__frame modal__frame--video">
                <video id="locVideoPlayer" playsinline controls preload="metadata"></video>
            </div>
        </div>
        <div class="modal__bar">
            <span class="modal__vtitle" id="videoModalTitle">{{ $isAr ? 'جولة في الفرع' : 'Branch View' }}</span>
        </div>
    </div>
</div>

<div aria-hidden="true" class="cursor" id="cursor"><span></span></div>
