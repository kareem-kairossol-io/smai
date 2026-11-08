@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — إزالة الشعر بالليزر' : 'SMAI Wellness Clinics — Laser Hair Removal')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <div class="inner-hero__layout">
                <div class="inner-hero__copy">
                    <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'إزالة الشعر بالليزر' : 'Laser Hair Removal' }}</p>
                    <h1 class="inner-hero__title">
                        {{ $isAr ? 'إزالة الشعر بالليزر — تقنية Candela' : 'Laser Hair Removal – Candela Technology' }}
                    </h1>
                    <p class="inner-hero__lead">
                        {{ $isAr
                            ? 'إزالة شعر طبية متقدمة بالليزر باستخدام أنظمة Candela المعتمدة من FDA. آمنة وفعالة ومناسبة لأنواع متعددة من البشرة، مع تقليل طويل الأمد لنمو الشعر تحت إشراف طبي.'
                            : 'Advanced medical laser hair removal using FDA-approved Candela systems. Safe, effective, and suitable for multiple skin types, with long-lasting hair reduction under medical supervision.' }}
                    </p>
                </div>
                <div class="inner-hero__media">
                    <img alt="{{ $isAr ? 'إزالة الشعر بالليزر' : 'Laser hair removal treatment' }}" loading="eager" src="https://images.pexels.com/photos/29021130/pexels-photo-29021130/free-photo-of-professional-laser-hair-removal-procedure.jpeg?auto=compress&dpr=1&h=750&w=1260" />
                </div>
            </div>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <article class="content-panel">
                    <h2>{{ $isAr ? 'إزالة الشعر بالليزر' : 'Laser Hair Removal' }}</h2>
                    <p>{{ $isAr ? 'إزالة الشعر بالليزر علاج تجميلي طبي مصمم لتقليل نمو الشعر غير المرغوب فيه بشكل ملحوظ من خلال استهداف بصيلات الشعر بطاقة ضوئية مركزة.' : 'Laser hair removal is a medical aesthetic treatment designed to significantly reduce unwanted hair growth by targeting hair follicles with focused light energy.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'إزالة الشعر بالليزر — تقنية Candela' : 'Laser Hair Removal – Candela Technology' }}</h2>
                    <p>{{ $isAr ? 'نستخدم في عيادتنا أنظمة ليزر Candela، وهي معيار عالمي رائد في تقنيات الليزر الطبي، ومعروفة بالدقة والسلامة والراحة عبر أنواع مختلفة من البشرة.' : 'At our clinic, we use Candela laser systems, a global gold standard in medical laser technology, known for their precision, safety, and comfort across different skin types.' }}</p>
                    <p>{{ $isAr ? 'تُجرى جميع العلاجات بواسطة متخصصين مدربين تحت إشراف طبي صارم لضمان أفضل النتائج وسلامة المريض.' : 'All treatments are performed by trained specialists under strict medical supervision to ensure optimal results and patient safety.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'لماذا Candela؟' : 'Why Candela?' }}</h2>
                    <ul class="content-list">
                        @if($isAr)
                            <li>تقنية طبية معتمدة من FDA</li>
                            <li>مناسبة لمجموعة واسعة من درجات لون البشرة</li>
                            <li>نظام تبريد متقدم لراحة أكبر وتجربة خالية من الألم</li>
                            <li>استهداف دقيق لتقليل الشعر بفعالية وعلى المدى الطويل</li>
                        @else
                            <li>FDA-approved, medical-grade technology</li>
                            <li>Suitable for a wide range of skin tones</li>
                            <li>Advanced cooling system for enhanced comfort</li>
                            <li>Precise targeting for effective, long-term hair reduction</li>
                        @endif
                    </ul>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'ما الذي تتوقعه؟' : 'What to Expect' }}</h2>
                    <ul class="content-list">
                        @if($isAr)
                            <li>استشارة مخصصة قبل العلاج لتقييم البشرة والشعر</li>
                            <li>عدة جلسات للوصول إلى أفضل النتائج الملحوظة</li>
                            <li>انزعاج بسيط ودون فترة تعطل أو انقطاع عن الأنشطة</li>
                            <li>انخفاض تدريجي ومستمر في نمو الشعر بعد كل جلسة</li>
                        @else
                            <li>Personalized consultation before treatment</li>
                            <li>Multiple sessions for optimal results</li>
                            <li>Minimal discomfort and no downtime</li>
                            <li>Progressive hair reduction after each session</li>
                        @endif
                    </ul>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'السلامة والإشراف الطبي' : 'Safety & Medical Supervision' }}</h2>
                    <p>{{ $isAr ? 'سلامتك هي أولويتنا. تُخصص كل خطة علاج بناءً على نوع بشرتك وخصائص الشعر وتاريخك الطبي لضمان تجربة آمنة وفعالة.' : 'Your safety is our priority. Each treatment plan is customized based on your skin type, hair characteristics, and medical history, ensuring a safe and effective experience.' }}</p>
                    <a class="btn btn--gold content-cta" href="{{ route($prefix . 'contact') }}">
                        <span class="btn__label">{{ $isAr ? 'احجزي جلستك الآن' : 'Book a Session' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection
