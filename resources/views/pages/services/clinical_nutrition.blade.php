@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — التغذية العلاجية' : 'SMAI Wellness Clinics — Clinical Nutrition')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <div class="inner-hero__layout">
                <div class="inner-hero__copy">
                    <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'التغذية العلاجية' : 'Clinical Nutrition' }}</p>
                    <h1 class="inner-hero__title">
                        {{ $isAr ? 'تغذية متخصصة تناسب حياتك' : 'Personalized Nutrition for Real Life' }}
                    </h1>
                    <p class="inner-hero__lead">
                        {{ $isAr
                            ? 'نقدم برامج متخصصة في التغذية العلاجية تهدف إلى دعم إدارة الوزن، تحسين التمثيل الغذائي وتحقيق التوازن في مكونات الجسم لتعزيز الأداء البدني. يبدأ كل برنامج بتقييم شامل للحالة الصحية والاحتياجات الغذائية، مع متابعة طبية لضمان وضع خطة عملية تناسب نمط حياتك وأهدافك.'
                            : 'Our clinical nutrition programs are designed to optimize body composition, metabolic health, and physical performance. Every plan is based on detailed assessment and medical oversight.' }}
                    </p>
                </div>
                <div class="inner-hero__media">
                    <img alt="Clinical Nutrition Assessment" loading="eager" src="{{ asset('assets/images/services/clinical_nutrition_main.jpg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <article class="content-panel">
                    <h2>{{ $isAr ? 'خدماتنا تشمل' : 'Services Include' }}</h2>
                    <ul class="content-list">
                        @if($isAr)
                            <li>برامج إدارة الوزن والدهون</li>
                            <li>تحليل مكونات الجسم الدقيق</li>
                            <li>التغذية العلاجية للحالات الطبية المزمنة</li>
                            <li>الإرشاد الطبي والعلمي لتغيير العادات ونمط الحياة</li>
                        @else
                            <li>Weight management programs</li>
                            <li>Body composition analysis</li>
                            <li>Medical nutrition therapy</li>
                            <li>Lifestyle and Habit coaching</li>
                        @endif
                    </ul>
                </article>

                <figure class="content-visual content-visual--wide">
                    <img alt="Sports Nutrition and High Performance" loading="lazy" src="{{ asset('assets/images/services/sports_nutrition.jpg') }}" />
                </figure>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'لماذا تختار برامج التغذية لدينا؟' : 'Why Choose Our Nutrition Care?' }}</h2>
                    <p>
                        {{ $isAr
                            ? 'نركز على نتائج مستدامة قائمة على أسس علمية، وليس على الأنظمة الغذائية القاسية أو الحلول المؤقتة. ونجمع بين التقييم الطبي، وعلم التغذية، وتعديل نمط الحياة لمساعدتك على تحسين صحتك، ومستوى طاقتك، وتكوين جسمك، وجودة حياتك على المدى الطويل.'
                            : 'We focus on sustainable results, not restrictive diets. Every plan is designed to support your energy, immunity, and overall health.' }}
                    </p>
                    <a class="btn btn--gold content-cta" href="{{ route($prefix . 'contact') }}">
                        <span class="btn__label">{{ $isAr ? 'احجز موعدك الآن لتبدأ رحلتك نحو تغذية سليمة' : 'Start Your Nutrition Journey' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection
