@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — فروع العيادات' : 'SMAI Wellness Clinics — Our Locations')

@section('content')
<main class="inner-main inner-main--reuse" id="top">
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

                            @if($loc->address)
                                <p style="font-size: 0.85rem; opacity: 0.75; margin-bottom: 14px;">
                                    📍 {{ $loc->address }}
                                </p>
                            @endif

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
                                <a class="lnk lnk--alt" href="{{ route($prefix . 'contact') }}?branch={{ urlencode($loc->name) }}">
                                    {{ $isAr ? 'احجز في هذا الفرع' : 'Book at This Branch' }}<i></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
