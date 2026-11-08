<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'clinic_name_en', 'value' => 'SMAI Wellness Clinics', 'group' => 'branding'],
            ['key' => 'clinic_name_ar', 'value' => 'عيادات SMAI Wellness', 'group' => 'branding'],
            ['key' => 'tagline_en', 'value' => 'Where Wellness Becomes Art', 'group' => 'branding'],
            ['key' => 'tagline_ar', 'value' => 'نرتقي بالعافية لتصبح فناً', 'group' => 'branding'],
            ['key' => 'phone', 'value' => '012 22772729', 'group' => 'contact'],
            ['key' => 'phone_display', 'value' => '012 22772729', 'group' => 'contact'],
            ['key' => 'whatsapp', 'value' => '201222772729', 'group' => 'contact'],
            ['key' => 'email', 'value' => 'info@smai.com.eg', 'group' => 'contact'],
            ['key' => 'facebook_url', 'value' => 'https://www.facebook.com/smaiwellnessclinics/', 'group' => 'social'],
            ['key' => 'instagram_url', 'value' => 'https://www.instagram.com/smaiwellnessclinics/', 'group' => 'social'],
            ['key' => 'tiktok_url', 'value' => 'https://www.tiktok.com/@smaiwellnessclinics', 'group' => 'social'],
            ['key' => 'partner_title_en', 'value' => 'Medical Partner of Al Ahly Club', 'group' => 'partner'],
            ['key' => 'partner_title_ar', 'value' => 'الشريك الطبي للنادي الأهلي', 'group' => 'partner'],
            ['key' => 'working_hours_en', 'value' => 'Saturday – Thursday: 10:00 AM – 10:00 PM', 'group' => 'info'],
            ['key' => 'working_hours_ar', 'value' => 'السبت – الخميس: 10:00 صباحاً – 10:00 مساءً', 'group' => 'info'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
