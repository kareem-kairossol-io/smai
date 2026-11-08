@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — خدمات الطب التجميلي' : 'SMAI Wellness Clinics — Aesthetic Medicine Services')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <div class="inner-hero__layout">
                <div class="inner-hero__copy">
                    <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'خدمات الطب التجميلي' : 'Aesthetic Medicine Services' }}</p>
                    <h1 class="inner-hero__title">{{ $isAr ? 'نتائج طبيعية . دقة طبية متخصصة' : 'Natural Results. Medical Precision.' }}</h1>
                    <p class="inner-hero__lead">
                        {{ $isAr
                            ? 'في SMAI Wellness Clinics، نؤمن بأن العناية التجميلية الفعالة تبدأ دائمًا بتقييم طبي دقيق، حيث تعتبر استشارة وتقييم طبيب الجلدية خطوة أولى لتشخيص وعلاج المشكلات الأساسية المتعلقة بالبشرة أو الشعر قبل البدء في أي إجراء تجميلي، مما يضمن الأمان والملاءمة التامة لكل شخص مع الحفاظ على مظهر طبيعي ومتوازن.'
                            : 'At SMAI, we believe that effective aesthetic care begins with a thorough medical assessment. When appropriate, dermatology medicine is recommended as a preliminary step to diagnose and manage underlying skin or hair conditions before proceeding with cosmetic treatments, ensuring procedures are safe, appropriate, and tailored to each individual’s needs.' }}
                    </p>
                </div>
                <div class="inner-hero__media">
                    <img alt="Aesthetic Medicine Services" loading="eager" src="{{ asset('assets/images/services/cosmetic_services_main.jpg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <article class="content-panel">
                    <h2>{{ $isAr ? 'البوتوكس (Botox)' : 'Botox' }}</h2>
                    <p>{{ $isAr ? 'البوتوكس هو إجراء تجميلي بالحقن، يعمل على إرخاء عضلات معينة في الوجه بشكل مؤقت، مما يساعد على تقليل ظهور خطوط وتجاعيد الوجه التعبيرية مع الحفاظ على تعبيرات الوجه الطبيعية.' : 'Botox is a minimally invasive injectable treatment that temporarily relaxes targeted facial muscles, helping reduce the appearance of wrinkles and fine lines while maintaining natural facial expression.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص الذين يعانون من الخطوط التعبيرية، مثل خطوط الجبهة، وخطوط العبوس، والتجاعيد حول العينين.' : 'Individuals concerned about expression lines such as forehead lines, frown lines, and crow’s feet.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'الفيلر (Dermal Fillers)' : 'Dermal Fillers' }}</h2>
                    <p>{{ $isAr ? 'الفيلر هو إجراء تجميلي بالحقن يحتوي على حمض الهيالورونيك ومواد أخرى متخصصة ويُستخدم لاستعادة الحجم الطبيعي، وتحسين ملامح الوجه وتناسقها.' : 'Dermal Fillers are injectable treatments containing hyaluronic acid used to restore volume, enhance facial contours, and soften lines.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص الراغبين في استعادة حجم الوجه، أو تحسين التناسق والملامح، أو إبراز بعض مناطق الوجه.' : 'Individuals seeking facial volume restoration, enhanced contours, improved symmetry, or softening of lines.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'ديرما بن (Derma Pen)' : 'Derma Pen' }}</h2>
                    <p>{{ $isAr ? 'الديرما بن علاج يعتمد على الوخز بالإبر الدقيقة لتحفيز عمليات التجدد الطبيعية للبشرة ودعم إنتاج الكولاجين وتحسين ملمس ونضارة البشرة.' : 'Derma pen is a microneedling treatment that uses fine, controlled micro-needles to stimulate the skin’s natural renewal processes and support collagen production.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'آثار حب الشباب، المسام الواسعة، عدم تجانس ملمس البشرة، والخطوط الدقيقة.' : 'Individuals concerned about acne scars, enlarged pores, uneven skin texture, fine lines, or dull skin.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'هيدرافيشيال (HydraFacial)' : 'HydraFacial' }}</h2>
                    <p>{{ $isAr ? 'علاج غير جراحي يجمع بين التنظيف العميق وتقشير البشرة وتنقية المسام والترطيب في جلسة واحدة.' : 'HydraFacial is a non-invasive skin treatment that deeply cleanses, exfoliates, extracts impurities, and hydrates the skin with instant radiance.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'البشرة الباهتة أو الجافة والمزدحمة بالشوائب والمسام الواسعة وللباحثين عن ترطيب ونضارة فورية.' : 'Individuals with dull, dehydrated, congested skin, enlarged pores, or looking for deep clinical cleansing.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'فصل وإعادة حقن البلازما (PRP)' : 'Plasma Separation and Reinjection' }}</h2>
                    <p>{{ $isAr ? 'إجراء تجميلي يعتمد على فصل البلازما الغنية بالصفائح من دم المريض وإعادة حقنها لدعم تجدد الأنسجة وتحسين جودة البشرة ونضارتها.' : 'Plasma separation and reinjection is a personalized treatment using the patient’s own plasma to support skin rejuvenation and cellular repair.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'تحسين ملمس البشرة والخطوط الدقيقة والمظهر الباهت والمهتمين بالحلول التجميلية التجديدية الطبيعية.' : 'Individuals seeking improvement in skin texture, fine lines, dullness and overall skin quality.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'حقن علاج تساقط الشعر' : 'Hair-Loss Injection Treatment' }}</h2>
                    <p>{{ $isAr ? 'حقن مخصصة لفروة الرأس تحتوي على عناصر ومحفزات علاجية تهدف إلى تقوية البصيلات وتقليل تساقط الشعر.' : 'Hair-loss injection treatment delivers targeted nutrients and therapeutic ingredients directly into the scalp to support hair follicles.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'حالات تساقط الشعر وضعف الكثافة والراغبين في تقوية الشعر ضمن برنامج طبي متكامل.' : 'Individuals wanting to improve hair density and strength as part of a personalized treatment plan.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'حقن النضارة (Glass Skin Booster)' : 'Glass Skin Booster' }}</h2>
                    <p>{{ $isAr ? 'علاج تجميلي بالحقن يحتوي على حمض الهيالورونيك ومجموعة عناصر داعمة لصحة البشرة لمنحها الترطيب الفائق واللمعان الصحي النضر.' : 'Glass Skin Booster is a facial injectable treatment containing hyaluronic acid and a blend of skin-supporting nutrients for luminous radiance.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'جفاف البشرة، المظهر المجهد، والراغبين في مظهر زجاجي مشرق وبشرة صحية ومرطبة بعمق.' : 'Individuals with dehydrated, dull, or tired-looking skin seeking a luminous, hydrated complexion.' }}</p>
                </article>

                <article class="content-panel">
                    <h2>{{ $isAr ? 'علاج الإكسوسوم (Exosome Therapy)' : 'Exosome Therapy' }}</h2>
                    <p>{{ $isAr ? 'علاج تجديدي متقدم يعتمد على جزيئات حيوية دقيقة تدعم التواصل بين الخلايا وتحفز تجدد البشرة وإنتاج الكولاجين والإيلاستين.' : 'Exosome Therapy is an advanced regenerative aesthetic treatment that utilizes exosome-based bioactive molecules to support cellular renewal and repair.' }}</p>
                    <h3>{{ $isAr ? 'ما يميزه' : 'Distinctive Benefits' }}</h3>
                    <ul class="content-list">
                        @if($isAr)
                            <li>دعم التواصل الخلوي المرتبط بتجدد البشرة وترميم الأنسجة</li>
                            <li>تحفيز إنتاج الكولاجين والإيلاستين لمرونة وتماسك أفضل</li>
                            <li>دعم تعافي البشرة بعد الإجراءات التجميلية المتنوعة</li>
                            <li>تقنية تجديدية حيوية متقدمة تتجاوز الترطيب السطحي التقليدي</li>
                        @else
                            <li>Supports cellular communication involved in skin renewal and repair</li>
                            <li>Promotes collagen and elastin support, improving firmness and elasticity</li>
                            <li>Enhances overall skin quality, texture, smoothness, and radiance</li>
                            <li>Advanced regenerative approach for patients seeking more than surface-level hydration</li>
                        @endif
                    </ul>
                </article>

                <article class="content-panel">
                    <a class="btn btn--gold content-cta" href="{{ route($prefix . 'contact') }}">
                        <span class="btn__label">{{ $isAr ? 'احجزي استشارتك التجميلية الآن وتمتعي بجمال طبيعي آمن' : 'Book a Cosmetic Consultation' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection
