@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — الأسئلة الشائعة' : 'SMAI Wellness Clinics — Frequently Asked Questions')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'الأسئلة الشائعة' : 'FAQ' }}</p>
            <h1 class="inner-hero__title">{{ $isAr ? 'الأسئلة الأكثر شيوعاً' : 'Frequently Asked Questions' }}</h1>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                @foreach($faqs as $categorySlug => $group)
                    <section class="faq-group">
                        <h2>{{ $group->first()->category }}</h2>
                        @foreach($group as $faq)
                            <article class="faq-item">
                                <h3>{{ $faq->question }}</h3>
                                <div>{!! nl2br(e($faq->answer)) !!}</div>
                            </article>
                        @endforeach
                    </section>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
