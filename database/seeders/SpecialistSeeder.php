<?php

namespace Database\Seeders;

use App\Models\Specialist;
use Illuminate\Database\Seeder;

class SpecialistSeeder extends Seeder
{
    public function run(): void
    {
        $specialists = [
            [
                'name_en' => 'Dr. Hesham El Amry',
                'name_ar' => 'د. هشام العمري',
                'slug' => 'dr-hesham-el-amry',
                'img' => 'hesham-el-amry',
                'role_en' => 'Consultant in Clinical Nutrition & Mesotherapy',
                'role_ar' => 'استشاري التغذية العلاجية والميزوثيرابي',
                'quals_en' => [
                    'Member of American Society for Nutrition',
                    'Member of Egyptian British Society of Obesity'
                ],
                'quals_ar' => [
                    'عضو الجمعية الأمريكية للتغذية',
                    'عضو الجمعية المصرية البريطانية لعلاج السمنة'
                ],
                'branches_en' => ['Al Ahly Club — Nasr City'],
                'branches_ar' => ['النادي الأهلي — مدينة نصر'],
                'order' => 1,
            ],
            [
                'name_en' => 'Dr. Rania El Sallamy',
                'name_ar' => 'د. رانيا السلامي',
                'slug' => 'dr-rania-el-sallamy',
                'img' => 'rania-el-sallamy',
                'role_en' => 'Professor of Clinical Nutrition & Public Health',
                'role_ar' => 'أستاذ التغذية العلاجية والصحة العامة',
                'quals_en' => [
                    'Consultant Obesity & Body Contouring Physician'
                ],
                'quals_ar' => [
                    'استشاري علاج السمنة وتنسيق القوام'
                ],
                'branches_en' => ['Al Ahly Club — Al Gezira', 'Al Ahly Club — Nasr City'],
                'branches_ar' => ['النادي الأهلي — الجزيرة', 'النادي الأهلي — مدينة نصر'],
                'order' => 2,
            ],
            [
                'name_en' => 'Dr. Tamer Ali',
                'name_ar' => 'د. تامر علي',
                'slug' => 'dr-tamer-ali',
                'img' => 'tamer-ali',
                'role_en' => 'Professor of Internal Medicine & Endocrinology',
                'role_ar' => 'أستاذ الأمراض الباطنة والغدد الصماء',
                'quals_en' => [
                    'Consultant of Endocrine Diseases Nutrition'
                ],
                'quals_ar' => [
                    'استشاري تغذية أمراض الغدد الصماء'
                ],
                'branches_en' => ['Kargo Mall — Sheikh Zayed'],
                'branches_ar' => ['كارجو مول — الشيخ زايد'],
                'order' => 3,
            ],
            [
                'name_en' => 'Dr. Mai Ramadan',
                'name_ar' => 'د. مي رمضان',
                'slug' => 'dr-mai-ramadan',
                'img' => 'mai-ramadan',
                'role_en' => 'Consultant of Clinical Nutrition',
                'role_ar' => 'استشاري التغذية العلاجية',
                'quals_en' => [
                    'Consultant of Non-Surgical Body Contouring',
                    'Faculty of Medicine, Ain Shams University'
                ],
                'quals_ar' => [
                    'استشاري تنسيق القوام غير الجراحي',
                    'كلية الطب، جامعة عين شمس'
                ],
                'branches_en' => ['Al Ahly Club — Al Gezira', 'Kargo Mall — Sheikh Zayed'],
                'branches_ar' => ['النادي الأهلي — الجزيرة', 'كارجو مول — الشيخ زايد'],
                'order' => 4,
            ],
            [
                'name_en' => 'Dr. Walaa Basyoni',
                'name_ar' => 'د. ولاء بسيوني',
                'slug' => 'dr-walaa-basyoni',
                'img' => 'walaa-basyoni',
                'role_en' => 'Consultant of Clinical Nutrition',
                'role_ar' => 'استشاري التغذية العلاجية',
                'quals_en' => [
                    'Lecturer — Medical doctorate, Ain Shams University',
                    'Life Coach Scope Certified'
                ],
                'quals_ar' => [
                    'مدرس دكتور، كلية الطب جامعة عين شمس',
                    'لايف كوتش معتمد دولياً SCOPE'
                ],
                'branches_en' => ['Al Ahly Club — Nasr City', 'Al Ahly Club — Al Gezira'],
                'branches_ar' => ['النادي الأهلي — مدينة نصر', 'النادي الأهلي — الجزيرة'],
                'order' => 5,
            ],
            [
                'name_en' => 'Dr. Esraa Amin',
                'name_ar' => 'د. إسراء أمين',
                'slug' => 'dr-esraa-amin',
                'img' => 'esraa-amin',
                'role_en' => 'Consultant of Clinical Nutrition',
                'role_ar' => 'استشاري التغذية العلاجية',
                'quals_en' => [
                    'PhD, Cairo University'
                ],
                'quals_ar' => [
                    'دكتوراه التغذية الإكلينيكية، جامعة القاهرة'
                ],
                'branches_en' => ['Al Ahly Club — Nasr City'],
                'branches_ar' => ['النادي الأهلي — مدينة نصر'],
                'order' => 6,
            ],
            [
                'name_en' => 'Dr. Hebatallah Mounir',
                'name_ar' => 'د. هبة الله منير',
                'slug' => 'dr-hebatallah-mounir',
                'img' => 'hebatallah-mounir',
                'role_en' => 'Consultant in Clinical Nutrition',
                'role_ar' => 'استشاري التغذية العلاجية',
                'quals_en' => [
                    'Consultant in Obesity & Body Contouring'
                ],
                'quals_ar' => [
                    'استشاري علاج السمنة وتنسيق القوام'
                ],
                'branches_en' => ['Al Ahly Club — Nasr City'],
                'branches_ar' => ['النادي الأهلي — مدينة نصر'],
                'order' => 7,
            ],
            [
                'name_en' => 'Dr. Mai Shalaby',
                'name_ar' => 'د. مي شلبي',
                'slug' => 'dr-mai-shalaby',
                'img' => 'mai-shalaby',
                'role_en' => 'Certified Sports & Performance Nutrition Specialist',
                'role_ar' => 'أخصائي معتمد في التغذية الرياضية وأداء الرياضيين',
                'quals_en' => [
                    'American Council on Exercise (ACE)',
                    'Performance Nutrition Specialist, IOPN'
                ],
                'quals_ar' => [
                    'المجلس الأمريكي للتمارين الرياضية (ACE)',
                    'أخصائي تغذية الأداء الرياضي (IOPN)'
                ],
                'branches_en' => ['Al Ahly Club — Nasr City', 'Al Ahly Club — Al Gezira'],
                'branches_ar' => ['النادي الأهلي — مدينة نصر', 'النادي الأهلي — الجزيرة'],
                'order' => 8,
            ],
            [
                'name_en' => 'Dr. Jackline Azmy',
                'name_ar' => 'د. جاكلين عزمي',
                'slug' => 'dr-jackline-azmy',
                'img' => 'jackline-azmy',
                'role_en' => 'Specialist in Clinical Nutrition & Metabolic Health',
                'role_ar' => 'أخصائي التغذية العلاجية والصحة الأيضية',
                'quals_en' => [
                    'Specialist in Non-Surgical Body Contouring'
                ],
                'quals_ar' => [
                    'أخصائي تنسيق القوام غير الجراحي'
                ],
                'branches_en' => ['Al Ahly Club — Nasr City'],
                'branches_ar' => ['النادي الأهلي — مدينة نصر'],
                'order' => 9,
            ],
            [
                'name_en' => 'Dr. Carol Sameh',
                'name_ar' => 'د. كارول سامح',
                'slug' => 'dr-carol-sameh',
                'img' => 'carol-sameh',
                'role_en' => 'Specialist in Clinical Nutrition',
                'role_ar' => 'أخصائي التغذية العلاجية',
                'quals_en' => [
                    'Specialist in Non-Surgical Body Contouring'
                ],
                'quals_ar' => [
                    'أخصائي تنسيق القوام غير الجراحي'
                ],
                'branches_en' => ['Al Ahly Club — Nasr City'],
                'branches_ar' => ['النادي الأهلي — مدينة نصر'],
                'order' => 10,
            ],
            [
                'name_en' => 'Dr. Sahar Essam El Hady',
                'name_ar' => 'د. سحر عصام الهادي',
                'slug' => 'dr-sahar-essam-el-hady',
                'img' => 'sahar-essam-el-hady',
                'role_en' => 'Specialist in Clinical Nutrition',
                'role_ar' => 'أخصائي التغذية العلاجية',
                'quals_en' => [
                    'Certified Health Coach, International Coaching Federation (ICF)'
                ],
                'quals_ar' => [
                    'مدرب صحي معتمد من الاتحاد الدولي للكوتشينج (ICF)'
                ],
                'branches_en' => ['Al Ahly Club — Al Gezira', 'Al Ahly Club — Nasr City'],
                'branches_ar' => ['النادي الأهلي — الجزيرة', 'النادي الأهلي — مدينة نصر'],
                'order' => 11,
            ],
            [
                'name_en' => 'Dr. Esraa Farouk',
                'name_ar' => 'د. إسراء فاروق',
                'slug' => 'dr-esraa-farouk',
                'img' => 'esraa-farouk',
                'role_en' => 'Specialist in Clinical Nutrition',
                'role_ar' => 'أخصائي التغذية العلاجية',
                'quals_en' => [
                    'Certified Health Coach, International Coaching Federation (ICF)'
                ],
                'quals_ar' => [
                    'مدرب صحي معتمد من الاتحاد الدولي للكوتشينج (ICF)'
                ],
                'branches_en' => ['Al Ahly Club — Al Gezira', 'Kargo Mall — Sheikh Zayed'],
                'branches_ar' => ['النادي الأهلي — الجزيرة', 'كارجو مول — الشيخ زايد'],
                'order' => 12,
            ],
            [
                'name_en' => 'Dr. Soha Abou Zeid',
                'name_ar' => 'د. سهى أبو زيد',
                'slug' => 'dr-soha-abou-zeid',
                'img' => 'soha-abou-zeid',
                'role_en' => 'Specialist in Clinical Nutrition',
                'role_ar' => 'أخصائي التغذية العلاجية',
                'quals_en' => [
                    'Specialist in Comprehensive Diabetes Care'
                ],
                'quals_ar' => [
                    'أخصائي الرعاية الشاملة لمرضى السكري'
                ],
                'branches_en' => ['Kargo Mall — Sheikh Zayed'],
                'branches_ar' => ['كارجو مول — الشيخ زايد'],
                'order' => 13,
            ],
            [
                'name_en' => 'Dr. Omar Omran',
                'name_ar' => 'د. عمر عمران',
                'slug' => 'dr-omar-omran',
                'img' => 'omar-omran',
                'role_en' => 'Nutritionist & Non-Surgical Body Contouring Specialist',
                'role_ar' => 'أخصائي التغذية وتنسيق القوام غير الجراحي',
                'quals_en' => [
                    'American Board certified BCNSP (ASPEN)',
                    'Clinical Nutrition Diploma, Cairo University',
                    'Member of Egyptian Functional Medicine Association'
                ],
                'quals_ar' => [
                    'حاصل على البورد الأمريكي BCNSP (ASPEN)',
                    'دبلوم التغذية العلاجية، جامعة القاهرة',
                    'عضو الجمعية المصرية للطب الوظيفي'
                ],
                'branches_en' => ['Kargo Mall — Sheikh Zayed'],
                'branches_ar' => ['كارجو مول — الشيخ زايد'],
                'order' => 14,
            ],
            [
                'name_en' => 'Dr. Hadeel Arafa',
                'name_ar' => 'د. هديل عرفة',
                'slug' => 'dr-hadeel-arafa',
                'img' => 'hadeel-arafa',
                'role_en' => 'Certified Clinical Nutritionist',
                'role_ar' => 'أخصائي معتمد في التغذية العلاجية',
                'quals_en' => [
                    'Clinical Nutrition Diploma — AUC',
                    'Obesity Management & Sport Nutrition Diploma — NNI',
                    'Non-Surgical Body Contouring Specialist'
                ],
                'quals_ar' => [
                    'دبلوم التغذية العلاجية — الجامعة الأمريكية بالقاهرة',
                    'دبلوم علاج السمنة والتغذية الرياضية — المعهد القومي للتغذية',
                    'أخصائي تنسيق القوام غير الجراحي'
                ],
                'branches_en' => ['Kargo Mall — Sheikh Zayed'],
                'branches_ar' => ['كارجو مول — الشيخ زايد'],
                'order' => 15,
            ],
        ];

        foreach ($specialists as $item) {
            Specialist::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
