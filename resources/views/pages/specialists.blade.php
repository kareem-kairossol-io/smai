@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — أطباؤنا ونخبة الاستشاريين' : 'SMAI Wellness Clinics — Our Specialists')

@section('content')
<main class="inner-main inner-main--reuse" id="top">
    <!-- Team Carousel Section -->
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
        <div class="wrap"><div class="team__progress"><i id="teamProgress"></i></div></div>
    </section>

    <!-- Comprehensive Specialists Directory with Branch Details -->
    <section class="section" style="padding-top: 40px; padding-bottom: 80px; border-top: 1px solid rgba(255,255,255,0.06);">
        <div class="wrap">
            <header class="sectop" style="margin-bottom: 40px;">
                <div>
                    <p class="sechead reveal"><i>✦</i>{{ $isAr ? 'دليل الأطباء والاستشاريين' : 'Specialists Directory' }}</p>
                    <h2 class="h2 reveal-lines">
                        {{ $isAr ? 'نخبة من أساتذة واستشاريي' : 'Meet our multidisciplinary' }}
                        <em>{{ $isAr ? 'التغذية والطب العلاجي' : 'medical consultants' }}</em>.
                    </h2>
                </div>
                <p class="sectop__note reveal">
                    {{ $isAr ? 'أطباء معتمدون واستشاريون متخصصون في تقديم رعاية طبية قائمة على الأدلة.' : 'Licensed consultants and university professors dedicated to your individual health journey.' }}
                </p>
            </header>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 24px;">
                @foreach($specialists as $doc)
                    <article style="background: rgba(255,255,255,0.02); border: 1px solid rgba(200,169,107,0.18); border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; transition: transform 0.3s ease, border-color 0.3s ease;">
                        <div style="position: relative; aspect-ratio: 4/5; overflow: hidden; background: #081B1A;">
                            <img src="{{ $doc->image_url }}" alt="{{ $doc->name }}" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" />
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; background: linear-gradient(0deg, #0B2422 0%, rgba(11,36,34,0.85) 60%, transparent 100%);">
                                <h3 style="color: #fff; font-size: 1.25rem; margin: 0 0 4px 0; font-family: var(--font-serif, serif);">{{ $doc->name }}</h3>
                                <p style="color: #C8A96B; font-size: 0.9rem; margin: 0; font-weight: 500;">{{ $doc->role }}</p>
                            </div>
                        </div>

                        <div style="padding: 20px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                @if(!empty($doc->quals))
                                    <div style="margin-bottom: 16px;">
                                        <h4 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.4); margin-bottom: 8px;">
                                            {{ $isAr ? 'المؤهلات والعضويات' : 'Qualifications' }}
                                        </h4>
                                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 6px;">
                                            @foreach($doc->quals as $q)
                                                <li style="font-size: 0.85rem; color: rgba(255,255,255,0.8); display: flex; align-items: flex-start; gap: 8px;">
                                                    <span style="color: #C8A96B; font-size: 1rem; line-height: 1;">•</span>
                                                    <span>{{ $q }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if(!empty($doc->branches))
                                    <div style="margin-bottom: 16px;">
                                        <h4 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.4); margin-bottom: 8px;">
                                            {{ $isAr ? 'الفروع المتاحة' : 'Available Branches' }}
                                        </h4>
                                        <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                                            @foreach($doc->branches as $b)
                                                <span style="font-size: 0.78rem; padding: 4px 10px; background: rgba(200,169,107,0.12); color: #C8A96B; border: 1px solid rgba(200,169,107,0.25); border-radius: 20px;">
                                                    {{ $b }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <a href="{{ route($prefix . 'contact') }}?doctor={{ urlencode($doc->name) }}" class="btn btn--gold btn--sm" style="width: 100%; text-align: center; margin-top: 10px;">
                                <span class="btn__label">{{ $isAr ? 'حجز موعد استشارة' : 'Book Consultation' }}</span>
                                <span class="btn__shine"></span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
