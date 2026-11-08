@extends('layouts.app')

@php
    $isAr = app()->getLocale() === 'ar';
    $prefix = $isAr ? 'ar.' : '';
@endphp

@section('title', $isAr ? 'عيادات SMAI Wellness — المحاليل الوريدية والعافية الطبية' : 'SMAI Wellness Clinics — IV Drips & Medical Wellness')

@section('content')
<main class="inner-main" id="top">
    <section class="inner-hero">
        <div class="wrap">
            <div class="inner-hero__layout">
                <div class="inner-hero__copy">
                    <p class="eyebrow"><span class="eyebrow__dot"></span>{{ $isAr ? 'المحاليل الوريدية والعافية الطبية' : 'IV Drips & Medical Wellness' }}</p>
                    <h1 class="inner-hero__title">{{ $isAr ? 'دعم متخصص لاحتياجات جسمك من الداخل' : 'Targeted Therapy. Immediate Support.' }}</h1>
                    <p class="inner-hero__lead">
                        {{ $isAr
                            ? 'تقدم جلسات المحاليل الوريدية مزيجًا مختارًا من الفيتامينات والمعادن والمغذيات والسوائل مباشرة عبر الوريد وفق بروتوكولات مخصصة وتحت إشراف طبي متخصص.'
                            : 'Our IV therapies deliver essential vitamins, minerals, and hydration directly into the bloodstream for maximum absorption and faster results.' }}
                    </p>
                </div>
                <div class="inner-hero__media">
                    <img alt="IV Drips and Medical Wellness" loading="eager" src="{{ asset('assets/images/services/iv_drips_main.jpg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="inner-content">
        <div class="wrap">
            <div class="content-stack">
                <!-- 1 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '1. العلاج الوريدي NAD+' : '1. NAD+ IV Therapy' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'الطاقة الخلوية والحيوية العامة وتأخير الشيخوخة' : 'Cellular Energy, Vitality & Healthy Aging' }}</p>
                    <p>{{ $isAr ? 'يهدف العلاج الوريدي بـ NAD+ إلى دعم إنتاج الطاقة على المستوى الخلوي وتعزيز الحيوية العامة. ويتميز إعطاؤه عن طريق الوريد بوصوله المباشر إلى الدورة الدموية، ويمكن دمجه ضمن برامج العافية الطبية المصممة لدعم الطاقة، ووظائف الخلايا، والصحة مع التقدم في العمر.' : 'NAD+ IV Therapy is designed to support cellular energy production and overall vitality. Delivered intravenously, NAD+ provides a direct route of administration and may be incorporated into personalized wellness programs focused on energy, cellular function, and healthy aging.' }}</p>
                    <h3>{{ $isAr ? 'يوصى به لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'البالغين الذين يعانون من انخفاض مستوى الطاقة أو الراغبين في دعم الحيوية العامة والطاقة الخلوية ضمن برنامج صحي متكامل ومتخصص.' : 'Adults experiencing low energy or looking to support overall vitality, cellular energy and wellness as part of a personalized health program.' }}</p>
                </article>

                <!-- 2 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '2. الطاقة والحيوية' : '2. Energy & Vitality' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'دعم غذائي خلال فترات الإجهاد والنشاط' : 'Targeted Nutritional Support for Energy Metabolism' }}</p>
                    <p>{{ $isAr ? 'صُمم محلول الطاقة والحيوية لتقديم دعم غذائي للجسم خلال فترات الإجهاد البدني أو الذهني. ويحتوي على مزيج مختار من الفيتامينات والمعادن والعناصر الغذائية للمساعدة في دعم إنتاج الطاقة، والترطيب، والحيوية العامة.' : 'The Energy & Vitality IV is designed to support the body when you feel physically or mentally depleted. A carefully selected combination of vitamins, minerals, and nutrients provides targeted nutritional support to help maintain energy metabolism, hydration, and overall vitality.' }}</p>
                    <h3>{{ $isAr ? 'يوصى به لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص الذين يعانون من الإرهاق أو انخفاض النشاط نتيجة ضغط العمل، أو نمط الحياة المزدحم، أو المجهود البدني والذهني، أو عدم الحصول على التغذية الكافية.' : 'Individuals experiencing fatigue or reduced activity due to demanding work, busy lifestyles, physical or mental exertion, or inadequate nutritional intake.' }}</p>
                </article>

                <!-- 3 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '3. الاسترخاء ومقاومة الإجهاد' : '3. Anti-Stress & Relaxation' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'دعم الجهاز العصبي واستعادة التوازن' : 'Nervous-System Support & Balanced Wellbeing' }}</p>
                    <p>{{ $isAr ? 'صُمم محلول مقاومة الإجهاد والاسترخاء لتقديم دعم غذائي خلال فترات التوتر والإرهاق وضغوط الحياة اليومية. ويحتوي على مزيج مختار من الفيتامينات والعناصر الغذائية الأساسية التي تدعم وظائف الجهاز العصبي الطبيعية والصحة العامة، بما يساعد الجسم على استعادة توازنه وحيويته.' : 'The Anti-Stress & Relaxation IV is formulated to provide nutritional support during periods of stress, fatigue, and demanding lifestyles. A tailored blend of vitamins and essential nutrients supports normal nervous-system function and overall wellbeing, helping you take a moment to recharge and restore balance.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص الذين يمرون بفترات من التوتر والإرهاق أو نمط حياة مليء بالضغوط، ويمكن إدراجه ضمن برنامج عافية طبي مخصص وفقًا للاحتياجات الفردية.' : 'Adults experiencing work-related pressure, daily stress, mental fatigue, or demanding routines who are looking for nutritional support as part of a comprehensive wellness program.' }}</p>
                </article>

                <!-- 4 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '4. دعم المناعة' : '4. Immunity Support' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'دفاعات طبيعية وحماية مضادة للأكسدة' : 'Natural Defence Mechanisms & Antioxidant Protection' }}</p>
                    <p>{{ $isAr ? 'يحتوي محلول دعم المناعة على مزيج مركز من الفيتامينات والمعادن ومضادات الأكسدة المختارة لدعم وظائف الجهاز المناعي الطبيعية وآليات الدفاع الطبيعية للجسم. ويأتي ضمن نهج استباقي للعناية بالصحة، خاصة خلال فترات زيادة الإجهاد البدني أو التأثيرات البيئية.' : 'The Immunity Support IV provides a concentrated combination of vitamins, minerals, and antioxidants selected to support normal immune function and the body’s natural defence mechanisms.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص الراغبين في دعم وظائف المناعة والحالة الغذائية، خاصة خلال فترات الإجهاد البدني أو التعرض للآثار السلبية البيئية أو عند عدم كفاية الحصول على العناصر الغذائية.' : 'Individuals looking to support their immune function and nutritional status, particularly during periods of physical or environmental stress or when dietary intake may be inadequate.' }}</p>
                </article>

                <!-- 5 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '5. التخلص من السموم (ديتوكس) ودعم الكبد' : '5. Detox & Liver Support' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'دعم غذائي ومضاد للأكسدة للعمليات الطبيعية' : 'Nutritional & Antioxidant Support for Natural Detoxification' }}</p>
                    <p>{{ $isAr ? 'صُمم محلول التخلص من السموم ودعم وظائف الكبد لتوفير دعم غذائي ومضادات للأكسدة للعمليات الطبيعية التي يقوم بها الجسم للتخلص من نواتج التمثيل الغذائي ودعم وظائف الكبد الطبيعية بكفاءة.' : 'The Detox & Liver Support IV is designed to provide nutritional and antioxidant support for the body’s natural detoxification processes and normal liver function.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'البالغين الراغبين في الحصول على دعم غذائي ومضادات للأكسدة كجزء من نمط حياة صحي، خاصة خلال فترات ضغط العمل أو عدم انتظام نمط الحياة.' : 'Adults looking for nutritional and antioxidant support as part of a healthy lifestyle, particularly during periods of demanding or irregular routines.' }}</p>
                </article>

                <!-- 6 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '6. دعم صحة وحيوية الشعر' : '6. Hair Boost' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'تقوية البصيلات ودعم حيوية ونمو الشعر' : 'Targeted Nutrients for Follicle Strength & Vitality' }}</p>
                    <p>{{ $isAr ? 'يوفر المحلول الوريدي لدعم حيوية الشعر مجموعة مختارة من الفيتامينات والمعادن والعناصر الغذائية التي تدعم صحة الشعر وتقوي البصيلات وتحافظ على مظهره وحيويته.' : 'Provides targeted vitamins, minerals, and nutrients to support healthy hair, strengthen hair follicles, and promote overall hair health.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص الذين يعانون من تساقط الشعر، ضعف الشعر وترققه، أو الذين يحتاجون إلى دعم غذائي إضافي ضمن خطة متكاملة لاستعادة حيوية وقوة الشعر.' : 'Individuals experiencing hair loss, weak or thinning hair, increased hair shedding and those looking for additional nutritional support.' }}</p>
                </article>

                <!-- 7 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '7. النضارة والإشراق' : '7. Beauty & Glow' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'ترطيب البشرة ودعم المظهر الحيوي والمشرق' : 'Skin Health, Deep Hydration & Inner Radiance' }}</p>
                    <p>{{ $isAr ? 'صُمم محلول النضارة والإشراق لدعم صحة البشرة وترطيبها وتعزيز إشراقتها ومظهرها الحيوي من الداخل كجزء مكمل لروتين متكامل للعناية بالبشرة.' : 'The Beauty & Glow IV is designed to support skin health, hydration, and overall radiance from within. It complements a comprehensive skincare and wellness routine.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'البالغين المهتمين بدعم صحة البشرة، وترطيبها، وتحسين الحالة الغذائية والمظهر العام للبشرة ضمن برنامج متكامل للعناية والجمال.' : 'Adults interested in supporting skin health, hydration, nutritional status, and overall skin appearance.' }}</p>
                </article>

                <!-- 8 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '8. دعم وضبط إدارة الوزن' : '8. Weight Management' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'دعم مكمل للبرامج الطبية لإدارة الوزن' : 'Medically Supervised Support for Metabolic Wellness' }}</p>
                    <p>{{ $isAr ? 'صُمم محلول دعم إدارة الوزن ليكون جزءًا مكملًا لبرنامج طبي متكامل لإدارة الوزن بطريقة صحية، ووفقًا لاحتياجات كل حالة لدعم إنتاج الطاقة وتعزيز التمثيل الغذائي.' : 'The Weight Management IV is designed to complement a medically supervised approach to healthy weight management.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص المشاركين في برامج طبية لإدارة الوزن والذين قد يحتاجون إلى دعم إضافي للترطيب أو تحسين الحالة الغذائية.' : 'Individuals participating in a medical weight-management program who may require additional hydration or nutritional support.' }}</p>
                </article>

                <!-- 9 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '9. الدعم الغذائي بعد جراحات السمنة' : '9. Post-Bariatric Support' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'دعم غذائي مخصص للتعويض والامتصاص' : 'Targeted Nutritional Support Following Bariatric Procedures' }}</p>
                    <p>{{ $isAr ? 'صُمم هذا المحلول الوريدي لتوفير دعم غذائي مخصص للأشخاص بعد جراحات السمنة لتعويض التغيرات في عملية الهضم وامتصاص العناصر الغذائية.' : 'The Post-Bariatric IV is designed to provide targeted nutritional support for individuals following bariatric surgery.' }}</p>
                    <h3>{{ $isAr ? 'يوصى به لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص الذين خضعوا لجراحات السمنة ويحتاجون إلى دعم غذائي إضافي بناءً على التقييم الطبي ونتائج التحاليل.' : 'Individuals who have undergone bariatric surgery and require additional nutritional support based on their medical assessment.' }}</p>
                </article>

                <!-- 10 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '10. الاستشفاء للرياضيين' : '10. Athlete Recovery' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'الترطيب والتعافي الغذائي بعد المجهود البدني' : 'Electrolytes, Muscle Recovery & Performance Sustainability' }}</p>
                    <p>{{ $isAr ? 'صُمم محلول استشفاء الرياضيين لدعم الترطيب والتعافي الغذائي بعد المجهود البدني الشاق، وتعويض الأملاح والفيتامينات اللازمة لدعم العضلات والأداء.' : 'The Athlete Recovery IV is designed to support hydration and nutritional recovery with fluids, electrolytes, and amino acids.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الرياضيين والأشخاص الذين يمارسون تدريبات مكثفة أو يشاركون في المنافسات ويحتاجون إلى دعم إضافي للترطيب والاستشفاء.' : 'Athletes and individuals undertaking intensive training or competition who may require additional hydration.' }}</p>
                </article>

                <!-- 11 -->
                <article class="therapy-card">
                    <h2>{{ $isAr ? '11. المحلول الوريدي الملكي (العافية الشاملة)' : '11. Royal Wellness IV Drip' }}</h2>
                    <p class="therapy-tag">{{ $isAr ? 'تجربة عافية ملكية متكاملة تحت إشراف طبي' : 'Where Medical Excellence Meets Luxury Wellness' }}</p>
                    <p>{{ $isAr ? 'يُعد هذا المحلول الوريدي واحدًا من أرقى المحاليل العلاجية المتكاملة، حيث يجمع بين عناصر متكاملة للدعم الغذائي والترطيب الفائق في جلسة واحدة.' : 'The Royal Wellness Drip is our signature, all-inclusive IV therapy designed to support overall health, balance, and optimal body function.' }}</p>
                    <h3>{{ $isAr ? 'مناسب لـ' : 'Recommended For' }}</h3>
                    <p>{{ $isAr ? 'الأشخاص الراغبين في الحصول على دعم شامل للعافية، أو العناية الوقائية، أو تركيبة وريدية واحدة ومتكاملة.' : 'Individuals seeking complete wellness support, preventative care, lifestyle optimization, or a balanced IV therapy.' }}</p>
                </article>

                <article class="content-panel">
                    <p>{{ $isAr ? 'تُقدم جميع جلسات المحاليل الوريدية تحت إشراف فريق طبي مؤهل، وبعد تقييم الحالة والاحتياجات الفردية.' : 'All IV treatments are administered by licensed medical professionals following a full health assessment.' }}</p>
                    <a class="btn btn--gold content-cta" href="{{ route($prefix . 'contact') }}">
                        <span class="btn__label">{{ $isAr ? 'احجز موعد جلستك القادمة واختر نوع محلولك الوريدي' : 'Book an IV Session' }}</span>
                        <span class="btn__shine"></span>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection
