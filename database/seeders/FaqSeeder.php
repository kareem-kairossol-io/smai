<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            // General
            [
                'category_slug' => 'general',
                'category_en' => 'General Questions',
                'category_ar' => 'أسئلة عامة',
                'question_en' => 'What is a wellness clinic?',
                'question_ar' => 'ما هي عيادة العافية؟',
                'answer_en' => 'A wellness clinic focuses on preventive, therapeutic, and performance-based care. We combine medical expertise with personalized treatment plans to support your health, recovery, and appearance — all under professional medical supervision.',
                'answer_ar' => 'تركز عيادة العافية على الرعاية الوقائية والعلاجية وتلك المتعلقة بتحسين الأداء. نحن نجمع بين الخبرة الطبية وخطط العلاج المخصصة لدعم صحتك وعملية تعافيك ومظهرك، وذلك كله تحت إشراف طبي متخصص.',
                'order' => 1,
            ],
            [
                'category_slug' => 'general',
                'category_en' => 'General Questions',
                'category_ar' => 'أسئلة عامة',
                'question_en' => 'Do I need a consultation before starting treatment?',
                'question_ar' => 'هل أحتاج إلى استشارة قبل بدء العلاج؟',
                'answer_en' => 'Yes. Every client undergoes an initial medical consultation to assess health history, goals, and suitability for any treatment. This ensures safety, effectiveness, and personalized care.',
                'answer_ar' => 'نعم، يخضع كل عميل لاستشارة طبية أولية لتقييم التاريخ الصحي والأهداف ومدى ملاءمة العلاج؛ وذلك لضمان السلامة والفعالية وتوفير رعاية مخصصة.',
                'order' => 2,
            ],
            [
                'category_slug' => 'general',
                'category_en' => 'General Questions',
                'category_ar' => 'أسئلة عامة',
                'question_en' => 'Are treatments medically supervised?',
                'question_ar' => 'هل تخضع العلاجات لإشراف طبي؟',
                'answer_en' => 'Absolutely. All services are delivered or supervised by licensed physicians and certified healthcare professionals.',
                'answer_ar' => 'بالتأكيد؛ إذ يتم تقديم جميع الخدمات أو الإشراف عليها من قِبَل أطباء مرخصين ومتخصصين معتمدين في مجال الرعاية الصحية.',
                'order' => 3,
            ],

            // Clinical Nutrition
            [
                'category_slug' => 'nutrition',
                'category_en' => 'Clinical Nutrition',
                'category_ar' => 'التغذية العلاجية',
                'question_en' => 'What is clinical nutrition?',
                'question_ar' => 'ما هي التغذية العلاجية؟',
                'answer_en' => 'Clinical nutrition uses evidence-based dietary plans to manage medical conditions, optimize body composition, improve metabolism, and enhance athletic performance.',
                'answer_ar' => 'التغذية العلاجية هي خطط غذائية قائمة على الأدلة العلمية؛ وذلك بهدف إدارة الحالات الطبية، وتحسين تكوين الجسم، وتعزيز عمليات التمثيل الغذائي، والارتقاء بالأداء الرياضي.',
                'order' => 4,
            ],
            [
                'category_slug' => 'nutrition',
                'category_en' => 'Clinical Nutrition',
                'category_ar' => 'التغذية العلاجية',
                'question_en' => 'Is nutrition only for weight loss?',
                'question_ar' => 'هل يقتصر دور التغذية على إنقاص الوزن؟',
                'answer_en' => 'Not at all. Our nutrition programs support weight management, muscle gain, metabolic health, sports performance, and hormonal balance.',
                'answer_ar' => 'على الإطلاق؛ إذ تدعم برامجنا الغذائية التحكم في الوزن، بناء العضلات، صحة التمثيل الغذائي، الأداء الرياضي، والتوازن الهرموني.',
                'order' => 5,
            ],
            [
                'category_slug' => 'nutrition',
                'category_en' => 'Clinical Nutrition',
                'category_ar' => 'التغذية العلاجية',
                'question_en' => 'Do athletes need a different nutrition plan?',
                'question_ar' => 'هل يحتاج الرياضيون إلى خطة تغذية مختلفة؟',
                'answer_en' => 'Yes. Athletes require specialized performance nutrition plans tailored to training load, competition schedule, recovery needs, and body composition goals.',
                'answer_ar' => 'نعم، يحتاج الرياضيون إلى خطط تغذية متخصصة لتعزيز الأداء، بحيث تكون مصممة خصيصاً لتلائم الحمل التدريبي وجدول المنافسات واحتياجات الاستشفاء.',
                'order' => 6,
            ],

            // IV Drips
            [
                'category_slug' => 'iv-drips',
                'category_en' => 'IV Drips & Medical Wellness',
                'category_ar' => 'العلاج بالحقن الوريدي والعافية الطبية',
                'question_en' => 'What are IV drips?',
                'question_ar' => 'ما هو العلاج بالحقن الوريدي؟',
                'answer_en' => 'IV drips deliver fluids, vitamins, minerals, and antioxidants directly into the bloodstream for faster and more effective absorption.',
                'answer_ar' => 'يعمل الحقن الوريدي على إيصال السوائل والفيتامينات والمعادن ومضادات الأكسدة مباشرةً إلى مجرى الدم، مما يضمن امتصاصاً أسرع وأكثر فعالية.',
                'order' => 7,
            ],
            [
                'category_slug' => 'iv-drips',
                'category_en' => 'IV Drips & Medical Wellness',
                'category_ar' => 'العلاج بالحقن الوريدي والعافية الطبية',
                'question_en' => 'What are the benefits of IV therapy?',
                'question_ar' => 'ما هي فوائد العلاج بالحقن الوريدي؟',
                'answer_en' => 'IV therapy can help with energy and immunity support, hydration, muscle fatigue recovery, stress relief, and healthy skin & hair.',
                'answer_ar' => 'يمكن أن يساعد في تعزيز الطاقة ودعم المناعة، الترطيب الفوري، تخفيف إجهاد العضلات، التعامل مع التوتر، وتحسين صحة البشرة والشعر.',
                'order' => 8,
            ],
            [
                'category_slug' => 'iv-drips',
                'category_en' => 'IV Drips & Medical Wellness',
                'category_ar' => 'العلاج بالحقن الوريدي والعافية الطبية',
                'question_en' => 'Is IV therapy safe?',
                'question_ar' => 'هل يُعد العلاج بالحقن الوريدي آمناً؟',
                'answer_en' => 'Yes, when administered after medical assessment and under physician supervision. All formulations are medically approved and customized to your needs.',
                'answer_ar' => 'نعم، عند إجرائه بعد التقييم الطبي وتحت إشراف الطبيب؛ إذ أن جميع التركيبات معتمدة طبياً ومُعدّة خصيصاً لتلبية احتياجاتك.',
                'order' => 9,
            ],

            // Recovery & Physiotherapy
            [
                'category_slug' => 'recovery',
                'category_en' => 'Recovery & Physiotherapy',
                'category_ar' => 'الاستشفاء والعلاج الطبيعي',
                'question_en' => 'Who needs physiotherapy?',
                'question_ar' => 'من يحتاج إلى العلاج الطبيعي؟',
                'answer_en' => 'Physiotherapy is beneficial for athletes, post-surgery patients, chronic pain sufferers, desk workers with posture-related pain, and anyone seeking improved mobility.',
                'answer_ar' => 'العلاج الطبيعي مناسب للرياضيين، وحالات ما بعد الإصابات والعمليات، ومن يعانون من آلام مزمنة أو آلام وضعية الجلوس، ولكل من يرغب في تحسين الحركة.',
                'order' => 10,
            ],
            [
                'category_slug' => 'recovery',
                'category_en' => 'Recovery & Physiotherapy',
                'category_ar' => 'الاستشفاء والعلاج الطبيعي',
                'question_en' => 'Do I need imaging or a referral before physiotherapy?',
                'question_ar' => 'هل أحتاج إلى أشعة أو تحويل من طبيب؟',
                'answer_en' => 'Not always. Our physiotherapists perform full assessments. If imaging or specialist referrals are required, we will guide you accordingly.',
                'answer_ar' => 'ليس بالضرورة. يقوم أخصائي العلاج الطبيعي بإجراء تقييم شامل للحالة، وفي حال الحاجة إلى أشعة أو استشارة تخصصية، سيتم توجيهك إلى الخطوة المناسبة.',
                'order' => 11,
            ],

            // Aesthetic Medicine
            [
                'category_slug' => 'aesthetic',
                'category_en' => 'Aesthetic Medicine',
                'category_ar' => 'الطب التجميلي',
                'question_en' => 'What cosmetic injectables do you offer?',
                'question_ar' => 'ما أنواع الحقن التجميلية التي تقدمونها؟',
                'answer_en' => 'We provide medically approved injectables including Botox, dermal fillers, skin boosters, hair-loss treatments, and exosome therapy.',
                'answer_ar' => 'نقدم البوتوكس، الفيلر، حقن النضارة للبشرة، حقن تساقط الشعر، وعلاجات الإكسوسوم التجديدية المتقدمة تحت إشراف أطباء متخصصين.',
                'order' => 12,
            ],
            [
                'category_slug' => 'aesthetic',
                'category_en' => 'Aesthetic Medicine',
                'category_ar' => 'الطب التجميلي',
                'question_en' => 'Will my results look natural?',
                'question_ar' => 'هل ستكون النتائج طبيعية؟',
                'answer_en' => 'Yes. Our philosophy is enhancement, not overcorrection. Treatments are customized to preserve facial harmony and natural expressions.',
                'answer_ar' => 'نعم. فلسفتنا تعتمد على تحسين المظهر وليس المبالغة في التغيير، مع الحفاظ على تناسق الوجه وتعبيراته الطبيعية.',
                'order' => 13,
            ],
            [
                'category_slug' => 'aesthetic',
                'category_en' => 'Aesthetic Medicine',
                'category_ar' => 'الطب التجميلي',
                'question_en' => 'How long do injectables last?',
                'question_ar' => 'كم تستمر نتائج الحقن التجميلية؟',
                'answer_en' => 'Botox typically lasts 3–6 months, while dermal fillers typically last 9–18 months depending on the area treated and product used.',
                'answer_ar' => 'يدوم البوتوكس عادةً من 3 إلى 6 أشهر، بينما يستمر الفيلر من 9 إلى 18 شهرًا حسب نوع المنتج والمنطقة المعالجة.',
                'order' => 14,
            ],

            // Candela Laser Hair Removal
            [
                'category_slug' => 'laser',
                'category_en' => 'Laser Hair Removal – Candela FAQ',
                'category_ar' => 'أسئلة إزالة الشعر بالليزر — Candela',
                'question_en' => 'Why is Candela considered one of the best laser machines?',
                'question_ar' => 'لماذا يُعد Candela من أفضل أجهزة الليزر؟',
                'answer_en' => 'Candela machines feature advanced dynamic cooling technology for maximum comfort, high precision targeting of hair follicles, and proven safety across all skin tones.',
                'answer_ar' => 'توفر أجهزة Candela تقنية تبريد متقدمة للراحة، واستهدافاً عالي الدقة لبصيلات الشعر، وعلاجاً آمناً لأنواع متعددة من البشرة مع نتائج سريعة وطويلة الأمد.',
                'order' => 15,
            ],
            [
                'category_slug' => 'laser',
                'category_en' => 'Laser Hair Removal – Candela FAQ',
                'category_ar' => 'أسئلة إزالة الشعر بالليزر — Candela',
                'question_en' => 'How many sessions will I need?',
                'question_ar' => 'كم جلسة أحتاج؟',
                'answer_en' => 'Most clients require 6–8 sessions spaced 4–6 weeks apart, depending on hair thickness, skin type, treatment area, and individual hormonal factors.',
                'answer_ar' => 'يحتاج معظم العملاء إلى 6–8 جلسات بفاصل 4–6 أسابيع بحسب سُمك الشعر ولونه، ونوع البشرة، والمنطقة المعالجة، والعوامل الهرمونية.',
                'order' => 16,
            ],
            [
                'category_slug' => 'laser',
                'category_en' => 'Laser Hair Removal – Candela FAQ',
                'category_ar' => 'أسئلة إزالة الشعر بالليزر — Candela',
                'question_en' => 'Is the laser treatment painful?',
                'question_ar' => 'هل العلاج مؤلم؟',
                'answer_en' => 'Most clients describe the sensation as a mild snapping or gentle warmth. Candela’s built-in dynamic cooling system significantly minimizes discomfort.',
                'answer_ar' => 'يصف معظم العملاء الإحساس بأنه وخز خفيف أو دفء لطيف، ويقلل نظام التبريد المدمج في جهاز Candela الانزعاج بشكل واضح ومريح جداً.',
                'order' => 17,
            ],
        ];

        foreach ($faqs as $item) {
            Faq::updateOrCreate([
                'category_slug' => $item['category_slug'],
                'question_en' => $item['question_en']
            ], $item);
        }
    }
}
