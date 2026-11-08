@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — الميديا والأخبار' : 'SMAI Wellness Clinics — Media & News')

@section('content')
<main class="inner-main inner-main--reuse" id="top">
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
                        ? 'لحظات من عياداتنا وأطبائنا ومجتمعنا — مباشرة من قنواتنا الرسمية.'
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
</main>
@endsection
