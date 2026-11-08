@extends('admin.layout')

@section('title', 'Site Settings')
@section('page_title', 'Global Clinic & Site Settings')

@section('content')
<div style="max-width: 900px;">
    <p style="color: var(--text-muted); margin-bottom: 24px;">Configure clinic branding, direct phone lines, WhatsApp routing, social links, and working hours.</p>

    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf

        <!-- Contact Information -->
        <div class="admin-card" style="margin-bottom: 24px;">
            <div class="admin-card-header">
                <h3>Contact & Direct Hotlines</h3>
            </div>
            <div class="admin-card-body">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Hotline (for tel: link)</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ $settings['phone'] ?? '012 22772729' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone_display">Phone Hotline (Display Format)</label>
                        <input type="text" id="phone_display" name="phone_display" class="form-control" value="{{ $settings['phone_display'] ?? '012 22772729' }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="whatsapp">WhatsApp Direct Number (digits with country code)</label>
                        <input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ $settings['whatsapp'] ?? '201222772729' }}" placeholder="201222772729">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Official Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $settings['email'] ?? 'info@smai.com.eg' }}">
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media Profiles -->
        <div class="admin-card" style="margin-bottom: 24px;">
            <div class="admin-card-header">
                <h3>Social Media Links</h3>
            </div>
            <div class="admin-card-body">
                <div class="form-group">
                    <label class="form-label" for="facebook_url">Facebook Page URL</label>
                    <input type="url" id="facebook_url" name="facebook_url" class="form-control" value="{{ $settings['facebook_url'] ?? '' }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="instagram_url">Instagram Profile URL</label>
                    <input type="url" id="instagram_url" name="instagram_url" class="form-control" value="{{ $settings['instagram_url'] ?? '' }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="tiktok_url">TikTok Profile URL</label>
                    <input type="url" id="tiktok_url" name="tiktok_url" class="form-control" value="{{ $settings['tiktok_url'] ?? '' }}">
                </div>
            </div>
        </div>

        <!-- Clinic Branding & Partnerships -->
        <div class="admin-card" style="margin-bottom: 24px;">
            <div class="admin-card-header">
                <h3>Branding & Partner Badges</h3>
            </div>
            <div class="admin-card-body">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="clinic_name_en">Clinic Name (English)</label>
                        <input type="text" id="clinic_name_en" name="clinic_name_en" class="form-control" value="{{ $settings['clinic_name_en'] ?? 'SMAI Wellness Clinics' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="clinic_name_ar">Clinic Name (Arabic)</label>
                        <input type="text" id="clinic_name_ar" name="clinic_name_ar" class="form-control" dir="rtl" value="{{ $settings['clinic_name_ar'] ?? 'عيادات SMAI Wellness' }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="tagline_en">Tagline (English)</label>
                        <input type="text" id="tagline_en" name="tagline_en" class="form-control" value="{{ $settings['tagline_en'] ?? 'Where Wellness Becomes Art' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tagline_ar">Tagline (Arabic)</label>
                        <input type="text" id="tagline_ar" name="tagline_ar" class="form-control" dir="rtl" value="{{ $settings['tagline_ar'] ?? 'نرتقي بالعافية لتصبح فناً' }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="partner_title_en">Partnership Title (English)</label>
                        <input type="text" id="partner_title_en" name="partner_title_en" class="form-control" value="{{ $settings['partner_title_en'] ?? 'Medical Partner of Al Ahly Club' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="partner_title_ar">Partnership Title (Arabic)</label>
                        <input type="text" id="partner_title_ar" name="partner_title_ar" class="form-control" dir="rtl" value="{{ $settings['partner_title_ar'] ?? 'الشريك الطبي للنادي الأهلي' }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="working_hours_en">Working Hours (English)</label>
                        <input type="text" id="working_hours_en" name="working_hours_en" class="form-control" value="{{ $settings['working_hours_en'] ?? 'Saturday – Thursday: 10:00 AM – 10:00 PM' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="working_hours_ar">Working Hours (Arabic)</label>
                        <input type="text" id="working_hours_ar" name="working_hours_ar" class="form-control" dir="rtl" value="{{ $settings['working_hours_ar'] ?? 'السبت – الخميس: 10:00 صباحاً – 10:00 مساءً' }}">
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 40px;">
            <button type="submit" class="btn-admin btn-primary" style="padding: 12px 28px; font-size: 15px;">
                Save Settings
            </button>
        </div>
    </form>
</div>
@endsection
