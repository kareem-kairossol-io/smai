@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
    $phone = $settings['phone'] ?? '012 22772729';
    $whatsapp = $settings['whatsapp'] ?? '201222772729';
    $email = $settings['email'] ?? 'info@smai.com.eg';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — تواصل معنا وحجز موعد' : 'SMAI Wellness Clinics — Contact Us')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'تواصل معنا' : 'Contact Us' }}</p>
            <h1 class="inner-hero__title">
                {{ $isAr ? 'خذ الخطوة الأولى نحو صحة وتعافٍ وثقة أفضل.' : 'Take the first step toward better health, recovery, and confidence.' }}
            </h1>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <article class="content-panel">
                    <h2>{{ $isAr ? 'احجز موعدًا' : 'Book an Appointment' }}</h2>
                    <p>{{ $isAr ? 'الهاتف | واتساب | الحجز عبر الإنترنت' : 'Phone | WhatsApp | Online Booking' }}</p>
                    
                    <div class="contact-actions">
                        <a class="btn btn--gold" data-contact="phone" href="tel:{{ $phone }}">
                            <span class="btn__label">{{ $isAr ? 'اتصل بالعيادة' : 'Call the Clinic' }}</span>
                            <span class="btn__shine"></span>
                        </a>
                        <a class="btn btn--ghost" data-contact="whatsapp" href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener">
                            <span class="btn__label">{{ $isAr ? 'واتساب' : 'WhatsApp' }}</span>
                        </a>
                        <a class="btn btn--ghost" data-contact="email" href="mailto:{{ $email }}">
                            <span class="btn__label">{{ $isAr ? 'البريد الإلكتروني' : 'Email' }}</span>
                        </a>
                    </div>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'مواقع العيادات' : 'Clinic Locations' }}</h2>
                    <ul class="content-list">
                        @foreach($locations as $l)
                            <li>
                                <strong>{{ $l->name }}</strong>
                                @if($l->address)
                                    <span style="opacity: 0.8;"> — {{ $l->address }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <a class="lnk" href="{{ route($prefix . 'locations') }}">
                        {{ $isAr ? 'عرض الفروع بالتفصيل والفيديوهات' : 'View Locations' }}<i></i>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection
