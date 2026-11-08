<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'key' => 'nasr',
                'name_en' => 'SMAI — Al Ahly Club (Nasr City)',
                'name_ar' => 'عيادات SMAI — النادي الأهلي (مدينة نصر)',
                'tag_en' => 'Al Ahly Club',
                'tag_ar' => 'النادي الأهلي',
                'area_en' => 'Nasr City',
                'area_ar' => 'مدينة نصر',
                'meta_en' => 'Clinical nutrition · Body contouring · Wellness assessment',
                'meta_ar' => 'التغذية العلاجية · تنسيق القوام · تقييم العافية',
                'video_path' => 'assets/videos/nasir-city.mp4',
                'video_title_en' => 'SMAI — Al Ahly Club (Nasr City)',
                'video_title_ar' => 'عيادات SMAI — النادي الأهلي (مدينة نصر)',
                'map_query' => 'SMAI Wellness Clinics Al Ahly Club Nasr City',
                'phone' => '012 22772729',
                'whatsapp' => '201222772729',
                'email' => 'info@smai.com.eg',
                'address_en' => 'Inside Al Ahly Sporting Club, Nasr City Branch, Cairo, Egypt',
                'address_ar' => 'داخل مقر النادي الأهلي للألعاب الرياضية، فرع مدينة نصر، القاهرة، مصر',
                'order' => 1,
            ],
            [
                'key' => 'gezira',
                'name_en' => 'SMAI — Al Ahly Club (Al Gezira)',
                'name_ar' => 'عيادات SMAI — النادي الأهلي (الجزيرة)',
                'tag_en' => 'Al Ahly Club',
                'tag_ar' => 'النادي الأهلي',
                'area_en' => 'Al Gezira',
                'area_ar' => 'الجزيرة',
                'meta_en' => 'Clinical nutrition · Performance nutrition · Coaching',
                'meta_ar' => 'التغذية العلاجية · تغذية الأداء · التوجيه',
                'video_path' => 'assets/videos/gezira.mp4',
                'video_title_en' => 'SMAI — Al Ahly Club (Al Gezira)',
                'video_title_ar' => 'عيادات SMAI — النادي الأهلي (الجزيرة)',
                'map_query' => 'SMAI Wellness Clinics Al Ahly Club Al Gezira',
                'phone' => '012 22772729',
                'whatsapp' => '201222772729',
                'email' => 'info@smai.com.eg',
                'address_en' => 'Inside Al Ahly Sporting Club, Al Gezira Branch, Zamalek, Cairo, Egypt',
                'address_ar' => 'داخل مقر النادي الأهلي للألعاب الرياضية، فرع الجزيرة، الزمالك، القاهرة، مصر',
                'order' => 2,
            ],
            [
                'key' => 'zayed',
                'name_en' => 'SMAI — Kargo Mall (Sheikh Zayed)',
                'name_ar' => 'عيادات SMAI — كارجو مول (الشيخ زايد)',
                'tag_en' => 'Sheikh Zayed',
                'tag_ar' => 'الشيخ زايد',
                'area_en' => 'Sheikh Zayed',
                'area_ar' => 'الشيخ زايد',
                'meta_en' => 'Clinical nutrition · Metabolic health · Diabetes care',
                'meta_ar' => 'التغذية العلاجية · الصحة الأيضية · رعاية السكري',
                'video_path' => 'assets/videos/zayed.mp4',
                'video_title_en' => 'SMAI — Kargo Mall (Sheikh Zayed)',
                'video_title_ar' => 'عيادات SMAI — كارجو مول (الشيخ زايد)',
                'map_query' => 'SMAI Wellness Clinics Kargo Mall Sheikh Zayed',
                'phone' => '012 22772729',
                'whatsapp' => '201222772729',
                'email' => 'info@smai.com.eg',
                'address_en' => 'Kargo Mall, Sheikh Zayed, Giza, Egypt',
                'address_ar' => 'كارجو مول، الشيخ زايد، الجيزة، مصر',
                'order' => 3,
            ],
        ];

        foreach ($locations as $item) {
            Location::updateOrCreate(['key' => $item['key']], $item);
        }
    }
}
