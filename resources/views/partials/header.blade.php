@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
    $phone = $settings['phone'] ?? '012 22772729';
    $facebook = $settings['facebook_url'] ?? 'https://www.facebook.com/smaiwellnessclinics/';
    $instagram = $settings['instagram_url'] ?? 'https://www.instagram.com/smaiwellnessclinics/';
    $tiktok = $settings['tiktok_url'] ?? 'https://www.tiktok.com/@smaiwellnessclinics';
@endphp

<header class="header" id="header">
    <div class="header__inner">
        <a aria-label="{{ $isAr ? 'عيادات SMAI Wellness — الرئيسية' : 'SMAI Wellness Clinics — home' }}" class="brandlock" href="{{ route($prefix . 'home') }}">
            <img alt="SMAI Wellness Clinics" class="brandlock__smai" src="{{ asset('assets/images/brand/smai-logo.webp') }}" />
            <span aria-hidden="true" class="brandlock__div"></span>
            <span class="brandlock__partner">
                <span class="brandlock__label">{{ $isAr ? 'الشريك الطبي لـ' : 'Medical Partner of' }}</span>
                <img alt="Al Ahly Club" class="brandlock__ahly" src="{{ asset('assets/images/specialists-exact/alahly.png') }}" />
            </span>
        </a>
        <nav aria-label="{{ $isAr ? 'القائمة الرئيسية' : 'Primary' }}" class="nav">
            <ul class="nav__list">
                <li>
                    <a class="nav__link {{ request()->routeIs($prefix . 'home') ? 'is-active' : '' }}" href="{{ route($prefix . 'home') }}">
                        <span>{{ $isAr ? 'الرئيسية' : 'Home' }}</span>
                    </a>
                </li>
                <li>
                    <a class="nav__link {{ request()->routeIs($prefix . 'about') ? 'is-active' : '' }}" href="{{ route($prefix . 'about') }}">
                        <span>{{ $isAr ? 'عن العيادات' : 'About' }}</span>
                    </a>
                </li>
                <li class="nav__item nav__item--services">
                    <a class="nav__link {{ request()->routeIs($prefix . 'services*') ? 'is-active' : '' }}" href="{{ route($prefix . 'services') }}">
                        <span>{{ $isAr ? 'الخدمات' : 'Services' }}</span>
                        <svg aria-hidden="true" class="nav__chev" viewBox="0 0 12 8">
                            <path d="M1 1.5 6 6.5 11 1.5" fill="none" stroke="currentColor" stroke-width="1.3"></path>
                        </svg>
                    </a>
                    <ul class="nav__services-menu">
                        <li><a href="{{ route($prefix . 'service.detail', 'clinical-nutrition') }}">{{ $isAr ? 'التغذية العلاجية' : 'Clinical Nutrition' }}</a></li>
                        <li><a href="{{ route($prefix . 'service.detail', 'iv-drips') }}">{{ $isAr ? 'المحاليل الوريدية والعافية' : 'IV Drips & Medical Wellness' }}</a></li>
                        <li><a href="{{ route($prefix . 'service.detail', 'recovery-physiotherapy') }}">{{ $isAr ? 'العلاج الطبيعي والاستشفاء' : 'Recovery & Physiotherapy' }}</a></li>
                        <li><a href="{{ route($prefix . 'service.detail', 'cosmetic-services') }}">{{ $isAr ? 'خدمات الطب التجميلي' : 'Aesthetic Medicine Services' }}</a></li>
                        <li><a href="{{ route($prefix . 'service.detail', 'laser-hair-removal') }}">{{ $isAr ? 'إزالة الشعر بالليزر' : 'Laser Hair Removal' }}</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav__link {{ request()->routeIs($prefix . 'specialists') ? 'is-active' : '' }}" href="{{ route($prefix . 'specialists') }}">
                        <span>{{ $isAr ? 'الأطباء' : 'Specialists' }}</span>
                    </a>
                </li>
                <li>
                    <a class="nav__link {{ request()->routeIs($prefix . 'locations') ? 'is-active' : '' }}" href="{{ route($prefix . 'locations') }}">
                        <span>{{ $isAr ? 'الفروع' : 'Locations' }}</span>
                    </a>
                </li>
                <li>
                    <a class="nav__link {{ request()->routeIs($prefix . 'media') ? 'is-active' : '' }}" href="{{ route($prefix . 'media') }}">
                        <span>{{ $isAr ? 'الميديا' : 'Media' }}</span>
                    </a>
                </li>
                <li>
                    <a class="nav__link {{ request()->routeIs($prefix . 'contact') ? 'is-active' : '' }}" href="{{ route($prefix . 'contact') }}">
                        <span>{{ $isAr ? 'اتصل بنا' : 'Contact' }}</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="header__actions">
            <div aria-label="SMAI social media" class="headsocial">
                <a aria-label="Facebook" class="headsocial__link" data-social="facebook" href="{{ $facebook }}" rel="noopener noreferrer" target="_blank">
                    <svg aria-hidden="true" viewBox="0 0 32 32">
                        <path d="M18.8 32V17.4h4.9l.7-5.7h-5.6V8.1c0-1.6.5-2.8 2.8-2.8h3V.2C24.1.1 22.4 0 20.4 0c-4.2 0-7 2.6-7 7.3v4.4H8.6v5.7h4.8V32h5.4Z" fill="currentColor"></path>
                    </svg>
                </a>
                <a aria-label="Instagram" class="headsocial__link" data-social="instagram" href="{{ $instagram }}" rel="noopener noreferrer" target="_blank">
                    <svg aria-hidden="true" viewBox="0 0 32 32">
                        <rect fill="none" height="29" rx="9" stroke="currentColor" stroke-width="2.6" width="29" x="1.5" y="1.5"></rect>
                        <circle cx="16" cy="16" fill="none" r="6.6" stroke="currentColor" stroke-width="2.6"></circle>
                        <circle cx="24.4" cy="7.7" fill="currentColor" r="1.9"></circle>
                    </svg>
                </a>
                <a aria-label="TikTok" class="headsocial__link" data-social="tiktok" href="{{ $tiktok }}" rel="noopener noreferrer" target="_blank">
                    <svg aria-hidden="true" viewBox="0 0 32 32">
                        <path d="M18.2 4.2c.7 3.3 2.6 5.2 5.8 5.8v4.1a11.2 11.2 0 0 1-5.8-2v8.1a8.2 8.2 0 1 1-7.1-8.1v4.2a4 4 0 1 0 2.9 3.9V4.2h4.2Z" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
            <a aria-label="{{ $isAr ? 'Switch to English' : 'التبديل إلى العربية' }}" class="lang-switch" href="{{ route('locale.switch', $isAr ? 'en' : 'ar') }}">
                <svg aria-hidden="true" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" fill="none" r="9" stroke="currentColor" stroke-width="1.4"></circle>
                    <path d="M3.5 12h17M12 3c2.4 2.5 3.7 5.5 3.7 9S14.4 18.5 12 21M12 3C9.6 5.5 8.3 8.5 8.3 12S9.6 18.5 12 21" fill="none" stroke="currentColor" stroke-width="1.2"></path>
                </svg>
                <span>{{ $isAr ? 'EN' : 'AR' }}</span>
            </a>
            <button aria-controls="mobilenav" aria-expanded="false" aria-label="{{ $isAr ? 'فتح القائمة' : 'Open menu' }}" class="burger" id="burger">
                <span></span><span></span>
            </button>
        </div>
    </div>
    <div aria-hidden="true" class="header__line"><i id="scrollProgress"></i></div>
</header>

<!-- ============ MOBILE NAV ============ -->
<div aria-hidden="true" class="mnav" id="mobilenav">
    <div class="mnav__bg"></div>
    <div class="mnav__body">
        <div class="mnav__top">
            <img alt="SMAI Wellness Clinics" class="mnav__logo" src="{{ asset('assets/images/brand/smai-logo.webp') }}" />
            <div class="mnav__partner">
                <span>{{ $isAr ? 'الشريك الطبي لـ' : 'Medical Partner of' }}</span>
                <img alt="Al Ahly Club" src="{{ asset('assets/images/specialists-exact/alahly.png') }}" />
            </div>
        </div>
        <ul class="mnav__list">
            <li><a class="{{ request()->routeIs($prefix . 'home') ? 'is-active' : '' }}" href="{{ route($prefix . 'home') }}"><i>01</i>{{ $isAr ? 'الرئيسية' : 'Home' }}</a></li>
            <li><a class="{{ request()->routeIs($prefix . 'about') ? 'is-active' : '' }}" href="{{ route($prefix . 'about') }}"><i>02</i>{{ $isAr ? 'عن العيادات' : 'About' }}</a></li>
            <li class="mnav__services">
                <a class="{{ request()->routeIs($prefix . 'services*') ? 'is-active' : '' }}" href="{{ route($prefix . 'services') }}"><i>03</i>{{ $isAr ? 'الخدمات' : 'Services' }}</a>
                <ul class="mnav__sub">
                    <li><a href="{{ route($prefix . 'service.detail', 'clinical-nutrition') }}">{{ $isAr ? 'التغذية العلاجية' : 'Clinical Nutrition' }}</a></li>
                    <li><a href="{{ route($prefix . 'service.detail', 'iv-drips') }}">{{ $isAr ? 'المحاليل الوريدية والعافية' : 'IV Drips & Medical Wellness' }}</a></li>
                    <li><a href="{{ route($prefix . 'service.detail', 'recovery-physiotherapy') }}">{{ $isAr ? 'العلاج الطبيعي والاستشفاء' : 'Recovery & Physiotherapy' }}</a></li>
                    <li><a href="{{ route($prefix . 'service.detail', 'cosmetic-services') }}">{{ $isAr ? 'خدمات الطب التجميلي' : 'Aesthetic Medicine Services' }}</a></li>
                    <li><a href="{{ route($prefix . 'service.detail', 'laser-hair-removal') }}">{{ $isAr ? 'إزالة الشعر بالليزر' : 'Laser Hair Removal' }}</a></li>
                </ul>
            </li>
            <li><a class="{{ request()->routeIs($prefix . 'specialists') ? 'is-active' : '' }}" href="{{ route($prefix . 'specialists') }}"><i>04</i>{{ $isAr ? 'الأطباء' : 'Specialists' }}</a></li>
            <li><a class="{{ request()->routeIs($prefix . 'locations') ? 'is-active' : '' }}" href="{{ route($prefix . 'locations') }}"><i>05</i>{{ $isAr ? 'الفروع' : 'Locations' }}</a></li>
            <li><a class="{{ request()->routeIs($prefix . 'media') ? 'is-active' : '' }}" href="{{ route($prefix . 'media') }}"><i>06</i>{{ $isAr ? 'الميديا' : 'Media' }}</a></li>
            <li><a class="{{ request()->routeIs($prefix . 'contact') ? 'is-active' : '' }}" href="{{ route($prefix . 'contact') }}"><i>07</i>{{ $isAr ? 'اتصل بنا' : 'Contact' }}</a></li>
            <li><a class="{{ request()->routeIs($prefix . 'faq') ? 'is-active' : '' }}" href="{{ route($prefix . 'faq') }}"><i>08</i>{{ $isAr ? 'الأسئلة الشائعة' : 'FAQ' }}</a></li>
        </ul>
        <div class="mnav__foot">
            <a class="btn btn--gold btn--full" href="{{ route($prefix . 'contact') }}">
                <span class="btn__label">{{ $isAr ? 'احجز استشارتك الآن' : 'Book an Appointment' }}</span>
                <span class="btn__shine"></span>
            </a>
            <div class="mnav__social">
                <a aria-label="Facebook" data-social="facebook" href="{{ $facebook }}" rel="noopener noreferrer" target="_blank">Facebook</a>
                <a aria-label="Instagram" data-social="instagram" href="{{ $instagram }}" rel="noopener noreferrer" target="_blank">Instagram</a>
                <a aria-label="TikTok" data-social="tiktok" href="{{ $tiktok }}" rel="noopener noreferrer" target="_blank">TikTok</a>
            </div>
        </div>
    </div>
</div>
