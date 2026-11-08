<?php

namespace Database\Seeders;

use App\Models\MediaReel;
use Illuminate\Database\Seeder;

class MediaReelSeeder extends Seeder
{
    public function run(): void
    {
        $covers = [
            'linear-gradient(155deg,#1C544B 0%,#0B2422 62%,#143B36 100%)',
            'linear-gradient(155deg,#243F3B 0%,#0B2422 55%,#3A5A4E 100%)',
            'linear-gradient(155deg,#2A3B38 0%,#0E2E2B 58%,#6B5A3C 120%)',
            'linear-gradient(155deg,#17423C 0%,#0B2422 60%,#256B5F 118%)',
            'linear-gradient(155deg,#20302E 0%,#0E2E2B 50%,#8A7346 128%)',
            'linear-gradient(155deg,#1B4C45 0%,#0B2422 66%,#0E2E2B 100%)'
        ];

        $reels = [
            [
                'url' => 'https://www.facebook.com/reel/976249308615805?locale=ar_AR',
                'title_en' => 'Inside the Clinic',
                'title_ar' => 'داخل العيادة',
                'sub_en' => 'SMAI Wellness',
                'sub_ar' => 'SMAI Wellness',
                'order' => 1,
            ],
            [
                'url' => 'https://www.facebook.com/reel/4120172988291096',
                'title_en' => 'Nutrition, Personalized',
                'title_ar' => 'تغذية مخصصة',
                'sub_en' => 'SMAI Wellness',
                'sub_ar' => 'SMAI Wellness',
                'order' => 2,
            ],
            [
                'url' => 'https://www.facebook.com/reel/1138767009121800',
                'title_en' => 'Meet the Specialists',
                'title_ar' => 'تعرّف على الأطباء',
                'sub_en' => 'SMAI Wellness',
                'sub_ar' => 'SMAI Wellness',
                'order' => 3,
            ],
            [
                'url' => 'https://www.facebook.com/reel/1530597694956377',
                'title_en' => 'Wellness Assessment',
                'title_ar' => 'تقييم العافية',
                'sub_en' => 'SMAI Wellness',
                'sub_ar' => 'SMAI Wellness',
                'order' => 4,
            ],
            [
                'url' => 'https://www.facebook.com/reel/1316537320310810',
                'title_en' => 'Performance & Recovery',
                'title_ar' => 'الأداء والتعافي',
                'sub_en' => 'SMAI Wellness',
                'sub_ar' => 'SMAI Wellness',
                'order' => 5,
            ],
            [
                'url' => 'https://www.facebook.com/reel/1572436324320382',
                'title_en' => 'A Smarter Approach',
                'title_ar' => 'نهج أكثر ذكاءً',
                'sub_en' => 'SMAI Wellness',
                'sub_ar' => 'SMAI Wellness',
                'order' => 6,
            ],
        ];

        foreach ($reels as $index => $item) {
            $item['cover_gradient'] = $covers[$index % count($covers)];
            MediaReel::updateOrCreate(['url' => $item['url']], $item);
        }
    }
}
