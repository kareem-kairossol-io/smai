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
<!DOCTYPE html>
<html dir="{{ $isAr ? 'rtl' : 'ltr' }}" lang="{{ $isAr ? 'ar' : 'en' }}">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, viewport-fit=cover" name="viewport" />
    <title>@yield('title', $isAr ? 'عيادات SMAI Wellness — نرتقي بالعافية لتصبح فناً' : 'SMAI Wellness Clinics — Where Wellness Becomes Art')</title>
    <meta content="@yield('meta_description', $isAr ? 'عيادات متكاملة للعافية والرعاية الطبية تقدم التغذية العلاجية، المحاليل الوريدية، العلاج الطبيعي والاستشفاء، والطب التجميلي تحت إشراف طبي متخصص.' : 'A comprehensive wellness clinic offering personalized nutrition, IV therapy, physiotherapy & recovery, and advanced cosmetic treatments — all under medical supervision.')" name="description" />
    <meta content="#0B2422" name="theme-color" />
    <meta content="@yield('title', 'SMAI Wellness Clinics')" property="og:title" />
    <meta content="@yield('meta_description', 'A comprehensive wellness clinic offering personalized nutrition, IV therapy, physiotherapy & recovery.')" property="og:description" />
    <meta content="website" property="og:type" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Fonts -->
    <link as="font" crossorigin="" href="{{ asset('assets/fonts/manrope-latin-400-normal.woff2') }}" rel="preload" type="font/woff2" />
    <link as="font" crossorigin="" href="{{ asset('assets/fonts/cormorant-garamond-latin-300-normal.woff2') }}" rel="preload" type="font/woff2" />
    <link href="{{ asset('assets/css/fonts.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper-bundle.min.css') }}" rel="stylesheet" />

    @if($isAr)
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet" />
    @endif

    <!-- Main Styles -->
    <link href="{{ asset('assets/css/style.css?v=13') }}" rel="stylesheet" />
    <link href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='7' fill='%230B2422'/%3E%3Ctext x='16' y='22' font-family='Georgia,serif' font-size='16' fill='%23C8A96B' text-anchor='middle'%3ES%3C/text%3E%3C/svg%3E" rel="icon" />

    @stack('styles')
</head>
<body>
    <!-- ============ PRELOADER ============ -->
    <div aria-hidden="true" class="loader" id="loader">
        <div class="loader__inner">
            <img alt="" class="loader__logo" src="{{ asset('assets/images/brand/smai-logo.webp') }}" />
            <div class="loader__bar"><span></span></div>
            <div class="loader__word">{{ $isAr ? 'العافية · التغذية · الأداء' : 'WELLNESS · NUTRITION · PERFORMANCE' }}</div>
        </div>
        <div class="loader__panel"></div>
    </div>

    <!-- ============ HEADER ============ -->
    @include('partials.header')

    <!-- ============ MAIN CONTENT ============ -->
    @yield('content')

    <!-- ============ FOOTER ============ -->
    @include('partials.footer')

    <!-- Vendor Scripts -->
    <script src="{{ asset('assets/vendor/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper-bundle.min.js') }}"></script>

    <!-- Dynamic Site Configuration fed directly from Laravel Database -->
    <script>
        @php
            $reelsList = \App\Models\MediaReel::where('is_active', true)->orderBy('order')->get();
            $specialistsList = \App\Models\Specialist::where('is_active', true)->orderBy('order')->get();
        @endphp

        window.SITE_CONFIG = {
            locale: "{{ app()->getLocale() }}",
            assetRoot: "{{ asset('assets') }}/",
            contact: {
                phone: "{{ $phone }}",
                whatsapp: "{{ $whatsapp }}",
                email: "{{ $email }}"
            },
            social: {
                facebook: "{{ $facebook }}",
                instagram: "{{ $instagram }}",
                tiktok: "{{ $tiktok }}"
            },
            reelsAr: [
                @foreach($reelsList as $r)
                    "{{ addslashes($r->title_ar) }}",
                @endforeach
            ],
            reels: [
                @foreach($reelsList as $r)
                    {
                        url: "{{ $r->url }}",
                        title: "{{ addslashes($r->title) }}",
                        sub: "{{ addslashes($r->sub) }}"
                    },
                @endforeach
            ],
            specialists: [
                @foreach($specialistsList as $doc)
                    {
                        name: "{{ addslashes($doc->name) }}",
                        img: "{{ $doc->img }}",
                        role: "{{ addslashes($doc->role) }}",
                        quals: @json($doc->quals),
                        branches: @json($doc->branches)
                    },
                @endforeach
            ]
        };
    </script>

    <!-- Main JavaScript App Bundle -->
    <script src="{{ asset('assets/js/main.js?v=13') }}"></script>

    @stack('scripts')
</body>
</html>
