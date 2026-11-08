@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — العلاج الطبيعي والاستشفاء' : 'SMAI Wellness Clinics — Recovery & Physiotherapy')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <div class="inner-hero__layout">
                <div class="inner-hero__copy">
                    <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'العلاج الطبيعي والاستشفاء' : 'Recovery & Physiotherapy' }}</p>
                    <h1 class="inner-hero__title">{{ $isAr ? 'استعد حركتك الطبيعية وعزز تعافيك البدني' : 'Restore Movement. Enhance Recovery.' }}</h1>
                    <p class="inner-hero__lead">
                        {{ $isAr
                            ? 'نقدم خدمات متخصصة في العلاج الطبيعي والاستشفاء تهدف إلى تخفيف الألم، واستعادة الحركة، وتحسين الوظائف البدنية، ودعم الأداء الرياضي، كما تتضمن برامجنا إرشادات متخصصة للمساعدة في الوقاية من الإصابات وتقليل احتمالية تكرارها.'
                            : 'Our recovery and physiotherapy services are designed to relieve pain, restore mobility, and optimize physical performance. Our plans provide injury prevention guidelines.' }}
                    </p>
                </div>
                <div class="inner-hero__media">
                    <img alt="Recovery and Physiotherapy" loading="eager" src="{{ asset('assets/images/services/recovery_physio_main.jpg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <article class="content-panel">
                    <h2>{{ $isAr ? 'منهجنا' : 'Our Approach' }}</h2>
                    <p>{{ $isAr ? 'نجمع بين التقييم الطبي والحركي، والعلاج اليدوي، وتقنيات العلاج الطبيعي الحديثة، والأجهزة العلاجية المتخصصة لتقديم برامج آمنة ومبنية على احتياجات كل حالة، مع متابعة تطور الحالة وقياس النتائج.' : 'We combine hands-on therapy with modern physiotherapy techniques and equipment to deliver safe, measurable outcomes.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? '1. حلول علاجية متخصصة لإصابات الملاعب وآلام العضلات والمفاصل' : '1. Therapeutic Solutions for Sports Injuries, Muscle & Joint Pain' }}</h2>
                    <p>{{ $isAr ? 'رعاية متكاملة ومصممة طبيًا للتعامل مع إصابات الملاعب، وآلام العضلات، وآلام المفاصل، ومشكلات الحركة.' : 'Comprehensive, medically guided care for sports injuries, muscle pain, joint discomfort, and movement-related conditions.' }}</p>
                    <p>{{ $isAr ? 'يبدأ البرنامج بالتقييم الإكلينيكي للحالة، ثم وضع خطة علاجية مناسبة تهدف إلى تقليل الألم، واستعادة الحركة، ودعم التعافي، والعودة الآمنة إلى الأنشطة اليومية أو ممارسة الرياضة.' : 'Our approach combines clinical assessment with personalized treatment and strategies to help reduce pain, restore mobility, support recovery, and safely return you to your daily activities or sport.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? '2. برامج متخصصة لآلام ومشكلات الرقبة والعمود الفقري' : '2. Specialized Programs for Neck & Spine Conditions' }}</h2>
                    <p>{{ $isAr ? 'برامج علاجية موجهة طبيًا للتعامل مع مشكلات الرقبة والعمود الفقري، بما في ذلك الألم، والتيبس، والمشكلات المرتبطة بالحركة.' : 'Medically guided programs designed to address neck and spine conditions, including pain, stiffness, and movement-related problems.' }}</p>
                    <p>{{ $isAr ? 'يبدأ كل برنامج بتقييم شامل للحالة لتحديد خطة علاجية فردية تتناسب مع طبيعة الأعراض واحتياجات المريض.' : 'Each program begins with a thorough assessment to develop an individualized treatment plan.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? '3. العلاج بالليزر والموجات فوق الصوتية' : '3. Laser & Ultrasound Therapy' }}</h2>
                    <p>{{ $isAr ? 'تقنيات علاجية غير جراحية يمكن استخدامها للمساعدة في تخفيف الألم، وتقليل الالتهاب، ودعم تعافي الأنسجة، وتحسين الحركة.' : 'Non-invasive therapeutic techniques used to help relieve pain, reduce inflammation, support tissue healing, and improve mobility.' }}</p>
                    <p>{{ $isAr ? 'ويتم دمج العلاج بالليزر والموجات فوق الصوتية ضمن برامج علاجية مخصصة للحالات العضلية والمفصلية والإصابات الرياضية، وفقًا للتقييم الإكلينيكي.' : 'Laser and ultrasound therapy can be incorporated into personalized treatment programs for muscle, joint, and sports-related conditions.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? '4. جلسات الاستشفاء العضلي' : '4. Muscle Recovery Sessions' }}</h2>
                    <p>{{ $isAr ? 'جلسات متخصصة لدعم تعافي العضلات بعد التمرين أو التدريب والمجهود البدني، وتخفيف التوتر والإجهاد العضلي وتحسين المرونة والحركة.' : 'Specialized sessions designed to support muscle recovery after exercise, training, or physical exertion, relieving muscle tension and soreness.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? '5. المساج الطبي المتخصص' : '5. Specialized Medical Massage' }}</h2>
                    <p>{{ $isAr ? 'جلسات علاجية موجهة تهدف إلى تخفيف التوتر العضلي، وتقليل الألم والتيبس، وتحسين الدورة الدموية والحركة.' : 'A targeted therapeutic massage designed to relieve muscle tension, reduce pain and stiffness, and improve circulation and mobility.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? '6. الحجامة والوخز بالإبر الجافة' : '6. Cupping & Dry Needling' }}</h2>
                    <p>{{ $isAr ? 'تقنيات علاجية يمكن دمجها ضمن خطط العلاج الطبيعي المخصصة للمساعدة في تخفيف التوتر العضلي، وتقليل الألم، وتحسين الحركة.' : 'Targeted therapeutic techniques that may be incorporated into personalized treatment plans to help relieve muscle tension and pain.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? '7. العلاج الطبيعي للرياضيين وكبار السن' : '7. Physiotherapy for Athletes & Older Adults' }}</h2>
                    <p>{{ $isAr ? 'برامج علاج طبيعي مخصصة للتعامل مع الإصابات الرياضية، ومحدودية الحركة، ومشكلات العضلات والمفاصل والتحديات المرتبطة بالعمر.' : 'Personalized physiotherapy programs designed to address sports injuries, mobility limitations, muscle and joint conditions, and age-related movement challenges.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? '8. العلاج بتقنية TECAR (TECAR Therapy)' : '8. TECAR Therapy (Transfer of Energy Capacitive & Resistive)' }}</h2>
                    <p>{{ $isAr ? 'تتميز هذه التقنية بما يعرف بالعلاج بالإنفاذ الحراري عن طريق استخدام بعض الترددات الراديوية في الطب الطبيعي وإعادة التأهيل لتوليد حرارة عميقة مسكنة ومحفزة للتعافي.' : 'TECAR Therapy is a form of radiofrequency diathermy used in physical medicine and rehabilitation. Depending on the mode and parameters, it produces controlled deep tissue heating.' }}</p>
                    <h3>{{ $isAr ? 'التأثيرات العلاجية المقترحة' : 'Proposed Therapeutic Effects' }}</h3>
                    <ul class="content-list">
                        @if($isAr)
                            <li>دعم تدفق الدم موضعياً وتروية الأنسجة</li>
                            <li>المساعدة في تقليل التوتر والتقلصات العضلية وتخفيف الألم</li>
                            <li>تحسين مرونة وحركة الأنسجة ومدى الحركة</li>
                            <li>تهيئة الأنسجة قبل التمارين العلاجية أو العلاج اليدوي</li>
                        @else
                            <li>Increased local blood flow and tissue perfusion</li>
                            <li>Reduction of muscle tension and spasm, and pain modulation</li>
                            <li>Improved tissue mobility and range of motion</li>
                            <li>Preparation of tissues before therapeutic exercise or manual therapy</li>
                        @endif
                    </ul>
                </article>

                <article class="content-panel">
                    <a class="btn btn--gold content-cta" href="{{ route($prefix . 'contact') }}">
                        <span class="btn__label">{{ $isAr ? 'احجز استشارتك الآن مع خبرائنا في العلاج الطبيعي لتتعافى أسرع' : 'Schedule a Recovery Assessment' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection
