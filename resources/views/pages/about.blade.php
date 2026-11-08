@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — من نحن' : 'SMAI Wellness Clinics — About Us')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <div class="inner-hero__layout">
                <div class="inner-hero__copy">
                    <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'من نحن' : 'About Us' }}</p>
                    <h1 class="inner-hero__title">{{ $isAr ? 'من نحن' : 'Who We Are' }}</h1>
                </div>
                <div class="inner-hero__media">
                    <img alt="SMAI Wellness Clinic Suite" loading="eager" src="{{ asset('assets/images/about/about_hero.jpg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <article class="content-panel">
                    <h2>{{ $isAr ? 'من نحن' : 'Who We Are' }}</h2>
                    @if($isAr)
                        <p>SMAI Wellness Clinics علامة طبية متخصصة في مجال العافية، تقدم منظومة متكاملة من خدمات الصحة والاستشفاء والتجميل تحت سقف واحد.</p>
                        <p>نقدم خدماتنا للذين يسعون إلى الارتقاء بأدائهم وصحتهم من خلال رعاية طبية متميزة تجمع بين الخصوصية وتلبية الاحتياجات لكل فرد على حدة.</p>
                    @else
                        <p>We are a medically led wellness clinic combining preventive care, therapeutic treatments, and aesthetic medicine. Our approach is holistic, ethical, and results-driven, ensuring that every service supports long-term health and well-being.</p>
                    @endif
                </article>

                <figure class="content-visual content-visual--wide">
                    <img alt="Multidisciplinary Medical Team" loading="lazy" src="{{ asset('assets/images/about/about_team.jpg') }}" />
                </figure>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'رؤيتنا' : 'Vision' }}</h2>
                    @if($isAr)
                        <p>أن نكون من المراكز الطبية الرائدة في مجال العافية والرعاية الصحية، وأن نصبح مرجعًا طبيًا موثوقًا للممارسة الطبية الأخلاقية، والنتائج الحقيقية، من خلال خبرات متخصصة ونهج يضع المريض في قلب الرعاية.</p>
                    @else
                        <p>To be a leading medical centre in wellness and preventive care, known for clinical excellence, ethical practice, and measurable patient outcomes.</p>
                        <p>To become a leading medical reference centre in wellness and preventive care, recognized for clinical excellence, ethical medical practice, and measurable outcomes — delivered through specialized expertise and a patient-centred, human approach.</p>
                    @endif
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'رسالتنا' : 'Mission' }}</h2>
                    @if($isAr)
                        <p>تقديم خدمات طبية متخصصة وعالية المستوى في مجال العافية، من خلال أطباء ومتخصصين ذوي خبرة، وبروتوكولات قائمة على الأدلة العلمية، ورعاية فردية تضمن حصول كل مريض على خطة آمنة وفعالة ومناسبة لاحتياجاته، مع متابعة النتائج وقياسها.</p>
                    @else
                        <p>To provide high-standard medical wellness services through expert clinicians, evidence-based protocols, and personalized care, ensuring each patient receives safe, effective, and measurable treatment outcomes.</p>
                    @endif
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'قيمنا' : 'Values' }}</h2>
                    <ul class="content-list">
                        @if($isAr)
                            <li><strong>التميز الطبي والسلامة:</strong> تقديم رعاية صحية وفق أعلى المعايير الطبية، مع الالتزام بسلامة المرضى وجودة الخدمة.</li>
                            <li><strong>الممارسة الأخلاقية:</strong> الالتزام باتخاذ القرارات الأخلاقية، وتثقيف المريض، والموافقة المستنيرة.</li>
                            <li><strong>الرعاية الفردية المخصصة:</strong> خطط علاج فردية مصممة وفق احتياجات كل فرد لمراعاة احتياجاته وأهدافه.</li>
                        @else
                            <li><strong>Clinical Excellence &amp; Safety:</strong> Delivering care according to the highest medical standards.</li>
                            <li><strong>Ethical Practice:</strong> Commitment to ethical decision-making, patient education, and informed consent.</li>
                            <li><strong>Personalized Care:</strong> Individualized treatment plans tailored to each patient’s needs.</li>
                        @endif
                    </ul>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'لماذا تختار عيادات SMAI؟' : 'Why Choose Us' }}</h2>
                    <ul class="content-list">
                        @if($isAr)
                            <li>فريق طبي متعدد التخصصات</li>
                            <li>خطط علاجية مصممة وفق احتياجات كل حالة</li>
                            <li>بروتوكولات علمية قائمة على أسس علمية</li>
                            <li>أجهزة ومنتجات طبية عالية الجودة</li>
                            <li>رعاية طبية مهنية وشفافة</li>
                        @else
                            <li>Multidisciplinary medical team</li>
                            <li>Personalized treatment plans</li>
                            <li>Evidence-based protocols</li>
                            <li>Premium equipment and products</li>
                            <li>Ethical, transparent care</li>
                        @endif
                    </ul>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection
