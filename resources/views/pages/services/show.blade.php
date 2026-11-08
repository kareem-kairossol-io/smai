@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', 'SMAI — ' . $service->title)

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <div class="inner-hero__layout">
                <div class="inner-hero__copy">
                    <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $service->badge ?? ($isAr ? 'الخدمات' : 'Services') }}</p>
                    <h1 class="inner-hero__title">{{ $service->title }}</h1>
                    @if($service->hero_subtitle)
                        <p class="inner-hero__lead">{{ $service->hero_subtitle }}</p>
                    @endif
                </div>
                <div class="inner-hero__media">
                    <img alt="{{ $service->title }}" loading="eager" src="{{ asset($service->image ?? 'assets/images/about/about_hero.jpg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <article class="content-panel">
                    <h2>{{ $isAr ? 'عن الخدمة' : 'About This Service' }}</h2>
                    <p>{{ $service->short_desc }}</p>
                    @if($service->full_desc)
                        <p>{{ $service->full_desc }}</p>
                    @endif
                </article>

                @if(!empty($service->items))
                    <article class="content-panel">
                        <h2>{{ $isAr ? 'البرامج والإجراءات المشمولة' : 'Included Programs & Procedures' }}</h2>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-top: 20px;">
                            @foreach($service->items as $item)
                                <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(200,169,107,0.2); border-radius: 12px; padding: 20px;">
                                    <h3 style="color: #C8A96B; margin-bottom: 8px; font-size: 1.15rem;">
                                        {{ $isAr ? ($item['title_ar'] ?? $item['title_en'] ?? '') : ($item['title_en'] ?? '') }}
                                    </h3>
                                    <p style="margin: 0; font-size: 0.95rem; line-height: 1.6; opacity: 0.85;">
                                        {{ $isAr ? ($item['desc_ar'] ?? $item['desc_en'] ?? '') : ($item['desc_en'] ?? '') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </article>
                @endif

                <article class="content-panel">
                    <a class="btn btn--gold content-cta" href="{{ route($prefix . 'contact') }}">
                        <span class="btn__label">{{ $isAr ? 'احجز استشارتك الآن' : 'Book a Consultation' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection
