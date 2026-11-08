@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
    
    // Fallback images if not set
    $serviceImages = [
        'clinical-nutrition' => 'assets/images/services/clinical_nutrition_main.jpg',
        'iv-drips' => 'assets/images/services/iv_drips_main.jpg',
        'recovery-physiotherapy' => 'assets/images/services/recovery_physio_main.jpg',
        'cosmetic-services' => 'assets/images/services/cosmetic_services_main.jpg',
        'laser-hair-removal' => 'assets/images/services/cosmetic_services_main.jpg',
    ];
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — خدماتنا الرئيسية' : 'SMAI Wellness Clinics — Our Core Services')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <div class="inner-hero__layout">
                <div class="inner-hero__copy">
                    <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'الخدمات' : 'Services' }}</p>
                    <h1 class="inner-hero__title">{{ $isAr ? 'خدماتنا الرئيسية' : 'Our Core Services' }}</h1>
                </div>
                <div class="inner-hero__media">
                    <img alt="SMAI Core Services" loading="eager" src="{{ asset('assets/images/about/about_hero.jpg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <div class="service-index">
                    @foreach($services as $i => $s)
                        @php
                            $img = $serviceImages[$s->slug] ?? 'assets/images/about/about_hero.jpg';
                        @endphp
                        <a class="service-index__card" href="{{ route($prefix . 'service.detail', $s->slug) }}">
                            <span class="service-index__media">
                                <img alt="{{ $s->title }}" loading="lazy" src="{{ asset($img) }}" />
                            </span>
                            <span>0{{ $i + 1 }}</span>
                            <h2>{{ $s->title }}</h2>
                            <p>{{ $s->hero_subtitle ?? $s->short_desc }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
