<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'slug' => 'clinical-nutrition',
                'badge_en' => '01 / Personalized Care',
                'badge_ar' => '01 / رعاية مخصصة',
                'title_en' => 'Clinical Nutrition',
                'title_ar' => 'التغذية العلاجية',
                'hero_subtitle_en' => 'Personalized nutrition for Real Life',
                'hero_subtitle_ar' => 'تغذية متخصصة تناسب أسلوب حياتك',
                'short_desc_en' => 'Our clinical nutrition programs optimize body composition, metabolic health, and physical performance through medical oversight and sustainable plans.',
                'short_desc_ar' => 'نقدم برامج متخصصة في التغذية العلاجية تهدف إلى دعم إدارة الوزن، تحسين التمثيل الغذائي وتحقيق التوازن في مكونات الجسم لتعزيز الأداء البدني.',
                'full_desc_en' => 'We focus on sustainable results, not restrictive diets. Every plan begins with a comprehensive health assessment and is designed to support your energy, immunity, and overall health with continuous medical monitoring.',
                'full_desc_ar' => 'نركز على نتائج مستدامة قائمة على أسس علمية، وليس على الأنظمة الغذائية القاسية. ونجمع بين التقييم الطبي وعلم التغذية وتعديل نمط الحياة لمساعدتك على تحسين صحتك ومستوى طاقتك على المدى الطويل.',
                'items_json' => [
                    [
                        'title_en' => 'Weight management programs',
                        'title_ar' => 'برامج إدارة الوزن والدهون',
                        'desc_en' => 'Safe, medically supervised weight loss or gain tailored to your metabolic rate.',
                        'desc_ar' => 'برامج نزول أو زيادة الوزن تحت إشراف طبي دقيق ومصممة وفق معدل الحرق لكل حالة.'
                    ],
                    [
                        'title_en' => 'Body composition analysis',
                        'title_ar' => 'تحليل مكونات الجسم الدقيق',
                        'desc_en' => 'Advanced segmental body composition tracking fat mass, lean muscle, and water retention.',
                        'desc_ar' => 'قياس متطور لتوزيع الدهون، الكتلة العضلية، وسوائل الجسم لتقييم التطور بدقة.'
                    ],
                    [
                        'title_en' => 'Medical nutrition therapy',
                        'title_ar' => 'التغذية العلاجية للحالات المزمنة',
                        'desc_en' => 'Specialized dietary protocols for diabetes, PCOS, insulin resistance, hypertension, and digestive health.',
                        'desc_ar' => 'أنظمة علاجية لمرضى السكري، مقاومة الأنسولين، تكيس المبايض، الضغط، واضطرابات الجهاز الهضمي.'
                    ],
                    [
                        'title_en' => 'Lifestyle & Habit coaching',
                        'title_ar' => 'الإرشاد السلوكي وتعديل العادات',
                        'desc_en' => 'One-on-one lifestyle coaching to build lifelong healthy eating habits without feeling deprived.',
                        'desc_ar' => 'جلسات دعم ومتابعة لتغيير نمط الحياة وبناء عادات صحية مستمرة دون حرمان.'
                    ]
                ],
                'image' => 'assets/images/services-cards/c-nutrition.webp',
                'order' => 1,
            ],
            [
                'slug' => 'iv-drips',
                'badge_en' => '02 / Cellular Vitality',
                'badge_ar' => '02 / حيوية خلوية',
                'title_en' => 'IV Drips & Medical Wellness',
                'title_ar' => 'المحاليل الوريدية والعافية الطبية',
                'hero_subtitle_en' => 'Targeted Therapy. Immediate Support.',
                'hero_subtitle_ar' => 'دعم متخصص لاحتياجات جسمك من الداخل',
                'short_desc_en' => 'Essential vitamins, minerals, and hydration delivered straight into the bloodstream for maximum bioavailability, cellular vitality, and instant restoration.',
                'short_desc_ar' => 'مزيج مختار من الفيتامينات والمعادن ومضادات الأكسدة والسوائل، يتم إعطاؤها مباشرة عبر الوريد لضمان امتصاص أسرع وأعلى فعالية تحت إشراف طبي.',
                'full_desc_en' => 'Administered under strict medical supervision after health screening. Formulations are customized for immunity, detox, athletic recovery, radiant skin, and longevity.',
                'full_desc_ar' => 'يتم تقديم كافة الجلسات تحت إشراف أطباء متخصصين بعد تقييم طبي شامل، لضمان أعلى مستويات الأمان وملاءمة المكونات لاحتياجات جسمك وأهدافك الصحية.',
                'items_json' => [
                    [
                        'title_en' => 'NAD+ IV Therapy',
                        'title_ar' => 'العلاج الوريدي NAD+',
                        'desc_en' => 'Supports cellular energy production, DNA repair, mental clarity, and longevity.',
                        'desc_ar' => 'يدعم إنتاج الطاقة الخلوية، ترميم الحمض النووي، تعزيز التركيز الذهني وتأخير الشيخوخة.'
                    ],
                    [
                        'title_en' => 'Myers Cocktail',
                        'title_ar' => 'كوكتيل مايرز الوريدي',
                        'desc_en' => 'Classic combination of B-complex vitamins, Vitamin C, and minerals for complete vitality.',
                        'desc_ar' => 'التركيبة الذهبية من فيتامينات B وفيتامين C والمعادن لاستعادة النشاط والحيوية.'
                    ],
                    [
                        'title_en' => 'Immunity Booster',
                        'title_ar' => 'محلول تعزيز المناعة',
                        'desc_en' => 'High-potency antioxidants and Vitamin C to strengthen immune resilience against fatigue.',
                        'desc_ar' => 'جرعات مركزة من مضادات الأكسدة وفيتامين C لتقوية الجهاز المناعي ومقاومة الإجهاد.'
                    ],
                    [
                        'title_en' => 'Athletic Performance & Recovery',
                        'title_ar' => 'محلول الأداء والاستشفاء الرياضي',
                        'desc_en' => 'Replaces lost electrolytes and amino acids to reduce muscle soreness and accelerate recovery.',
                        'desc_ar' => 'تعويض سريع للأملاح والأحماض الأمينية لتقليل الإجهاد العضلي وتسريع استشفاء الرياضيين.'
                    ]
                ],
                'image' => 'assets/images/services-cards/c-iv.webp',
                'order' => 2,
            ],
            [
                'slug' => 'recovery-physiotherapy',
                'badge_en' => '03 / Mobility & Strength',
                'badge_ar' => '03 / حركة وقوة',
                'title_en' => 'Recovery & Physiotherapy',
                'title_ar' => 'العلاج الطبيعي والاستشفاء',
                'hero_subtitle_en' => 'Restore Movement. Enhance Performance.',
                'hero_subtitle_ar' => 'استعد حركتك وارتقِ بأدائك البدني',
                'short_desc_en' => 'Personalized rehabilitation programs, manual therapies, and state-of-the-art recovery technology to resolve pain and restore functional movement.',
                'short_desc_ar' => 'برامج تأهيل مخصصة وعلاج يدوي وأحدث تقنيات الاستشفاء لتخفيف الآلام، تسريع التعافي، واستعادة الحركة الطبيعية بأمان.',
                'full_desc_en' => 'Our physiotherapists work closely with you whether recovering from a sports injury, dealing with postural neck/back pain, or undergoing post-surgery rehabilitation.',
                'full_desc_ar' => 'يقوم أخصائيو العلاج الطبيعي بإجراء تقييم دقيق ووضع برامج علاجية مخصصة للرياضيين وأصحاب آلام الظهر والمفاصل والتأهيل بعد الجراحات.',
                'items_json' => [
                    [
                        'title_en' => 'Sports Injury Rehabilitation',
                        'title_ar' => 'تأهيل الإصابات الرياضية',
                        'desc_en' => 'Specialized protocols for athletes to return to peak performance safely and rapidly.',
                        'desc_ar' => 'بروتوكولات متقدمة للرياضيين تضمن العودة للملاعب والأداء الأمثل بأسرع وقت وأمان.'
                    ],
                    [
                        'title_en' => 'Manual Therapy & Joint Mobilization',
                        'title_ar' => 'العلاج اليدوي وتحريك المفاصل',
                        'desc_en' => 'Hands-on techniques targeting stiffness, spinal misalignments, and soft tissue tension.',
                        'desc_ar' => 'تقنيات يدوية متخصصة لفك التشنجات وتخفيف آلام الفقرات وتحسين حركة المفاصل.'
                    ],
                    [
                        'title_en' => 'Post-Operative Rehabilitation',
                        'title_ar' => 'التأهيل بعد العمليات الجراحية',
                        'desc_en' => 'Graduated exercise and movement therapy following orthopedic and arthroscopic surgeries.',
                        'desc_ar' => 'برامج تدريجية لاستعادة القوة والمدى الحركي الكامل بعد جراحات العظام والمفاصل.'
                    ],
                    [
                        'title_en' => 'Advanced Cold & Compression Recovery',
                        'title_ar' => 'الاستشفاء بالضغط والتبريد المتطور',
                        'desc_en' => 'Pneumatic compression and cryo technology to flush lactic acid and rejuvenate tired muscles.',
                        'desc_ar' => 'أجهزة الضغط الهوائي والتبريد لتنشيط الدورة الدموية وتجديد طاقة العضلات المجهدة.'
                    ]
                ],
                'image' => 'assets/images/services-cards/c-recovery.webp',
                'order' => 3,
            ],
            [
                'slug' => 'cosmetic-services',
                'badge_en' => '04 / Natural Elegance',
                'badge_ar' => '04 / أناقة طبيعية',
                'title_en' => 'Aesthetic Medicine Services',
                'title_ar' => 'خدمات الطب التجميلي',
                'hero_subtitle_en' => 'Subtle Enhancement. Medical Safety.',
                'hero_subtitle_ar' => 'تعزيز الجمال الطبيعي بأعلى المعايير الطبية',
                'short_desc_en' => 'Evidence-based aesthetic treatments enhancing facial harmony, skin vitality, and body contouring while preserving your authentic, natural look.',
                'short_desc_ar' => 'إجراءات تجميلية دقيقة تحت إشراف أطباء متخصصين للحفاظ على التناسق والملامح الطبيعية وتعزيز نضارة وشباب البشرة.',
                'full_desc_en' => 'We believe in refinement, not drastic alteration. Using only certified premium injectables and equipment, our aesthetic doctors create individualized plans respecting facial balance.',
                'full_desc_ar' => 'نؤمن بتحسين المظهر دون مبالغة. نستخدم أرقى المواد المعتمدة دولياً، ونضع خطة مصممة خصيصاً لملامح وجهك لضمان نتائج طبيعية ومشرقة.',
                'items_json' => [
                    [
                        'title_en' => 'Botox & Expression Lines',
                        'title_ar' => 'حقن البوتوكس وتجاعيد التعبير',
                        'desc_en' => 'Softens forehead, frown lines, and crow feet while maintaining natural facial expressions.',
                        'desc_ar' => 'تخفيف الخطوط التعبيرية في الجبهة وحول العينين مع الحفاظ على مرونة التعبيرات الطبيعية.'
                    ],
                    [
                        'title_en' => 'Dermal Fillers & Contouring',
                        'title_ar' => 'حقن الفيلر ونحت الملامح',
                        'desc_en' => 'Restores youthful volume, refines jawline definition, and enhances lip contours.',
                        'desc_ar' => 'استعادة الحجم المفقود وتحديد خط الفك وإبراز جمال الشفاه والوجنتين بتناسق تام.'
                    ],
                    [
                        'title_en' => 'Skin Boosters & Polynucleotides',
                        'title_ar' => 'معززات البشرة ومحفزات الكولاجين',
                        'desc_en' => 'Deep cellular hydration, collagen stimulation, and renewed skin glow.',
                        'desc_ar' => 'ترطيب عميق وإعادة نضارة البشرة وتحفيز إنتاج الكولاجين الطبيعي من الداخل.'
                    ],
                    [
                        'title_en' => 'Non-Surgical Body Contouring',
                        'title_ar' => 'نحت وتنسيق القوام الموضعي',
                        'desc_en' => 'Medical mesotherapy and technology targeting stubborn localized fat and skin laxity.',
                        'desc_ar' => 'جلسات الميزوثيرابي والتقنيات الطبية المعتمدة لإذابة الدهون الموضعية وشد الجلد.'
                    ]
                ],
                'image' => 'assets/images/services-cards/c-cosmetic.webp',
                'order' => 4,
            ],
            [
                'slug' => 'laser-hair-removal',
                'badge_en' => '05 / Precision & Comfort',
                'badge_ar' => '05 / دقة وراحة',
                'title_en' => 'Laser Hair Removal',
                'title_ar' => 'إزالة الشعر بالليزر',
                'hero_subtitle_en' => 'Smooth, Confident, Effortless.',
                'hero_subtitle_ar' => 'بشرة ناعمة ونتائج تدوم طويلاً',
                'short_desc_en' => 'Gold-standard medical laser technology for safe, painless, and permanent hair reduction across all skin tones and hair textures under clinical hygiene standards.',
                'short_desc_ar' => 'أحدث أجهزة الليزر الطبية المعتمدة لإزالة الشعر بفعالية وأمان لكافة أنواع البشرة وتحت إشراف طبي متخصص.',
                'full_desc_en' => 'Experience effortless smoothness with integrated cooling technology that guarantees maximum patient comfort and visible reduction from the very first session.',
                'full_desc_ar' => 'تمتعي ببشرة حريرية وراحة فائقة بفضل تقنيات التبريد المتطورة التي تجعل الجلسة غير مؤلمة تماماً مع نتائج ملحوظة من أول جلسة.',
                'items_json' => [
                    [
                        'title_en' => 'Full Body & Targeted Sessions',
                        'title_ar' => 'جلسات كامل الجسم والمناطق المحددة',
                        'desc_en' => 'Comprehensive packages or tailored sessions according to your personal schedule.',
                        'desc_ar' => 'باقات متكاملة لكامل الجسم أو جلسات فردية للمناطق المختارة حسب رغبتك.'
                    ],
                    [
                        'title_en' => 'Advanced Contact Cooling',
                        'title_ar' => 'تقنية التبريد المستمر فائقة الراحة',
                        'desc_en' => 'Protects skin surface and ensures completely comfortable sessions.',
                        'desc_ar' => 'حماية فائقة لسطح الجلد لضمان جلسة لطيفة ومريحة وخالية من الألم.'
                    ],
                    [
                        'title_en' => 'Safe for All Skin Types',
                        'title_ar' => 'أمان تام لكافة درجات البشرة',
                        'desc_en' => 'Calibrated wavelengths proven safe for fair, medium, and deep skin tones.',
                        'desc_ar' => 'أطوال موجية مخصصة ومصرح بها طبياً تناسب درجات البشرة الفاتحة والقمحية والداكنة.'
                    ]
                ],
                'image' => 'assets/images/services-cards/c-cosmetic.webp',
                'order' => 5,
            ]
        ];

        foreach ($services as $item) {
            Service::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
