<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Specialists (Doctors)
        Schema::create('specialists', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('slug')->unique();
            $table->string('img');
            $table->string('role_en');
            $table->string('role_ar');
            $table->json('quals_en')->nullable();
            $table->json('quals_ar')->nullable();
            $table->json('branches_en')->nullable();
            $table->json('branches_ar')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. Locations (Clinics)
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // e.g. nasr, gezira, zayed
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('tag_en');
            $table->string('tag_ar');
            $table->string('area_en');
            $table->string('area_ar');
            $table->string('meta_en');
            $table->string('meta_ar');
            $table->string('video_path')->nullable();
            $table->string('video_title_en')->nullable();
            $table->string('video_title_ar')->nullable();
            $table->string('map_query')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->text('address_en')->nullable();
            $table->text('address_ar')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 3. News & Media Reels
        Schema::create('media_reels', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('sub_en')->default('SMAI Wellness');
            $table->string('sub_ar')->default('SMAI Wellness');
            $table->string('url');
            $table->string('embed_url')->nullable();
            $table->string('cover_gradient')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 4. Services
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('badge_en')->nullable();
            $table->string('badge_ar')->nullable();
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('hero_subtitle_en')->nullable();
            $table->string('hero_subtitle_ar')->nullable();
            $table->text('short_desc_en')->nullable();
            $table->text('short_desc_ar')->nullable();
            $table->longText('full_desc_en')->nullable();
            $table->longText('full_desc_ar')->nullable();
            $table->json('items_json')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 5. FAQs
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('category_slug')->default('general');
            $table->string('category_en');
            $table->string('category_ar');
            $table->text('question_en');
            $table->text('question_ar');
            $table->longText('answer_en');
            $table->longText('answer_ar');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 6. Inquiries / Appointments
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('service')->nullable();
            $table->string('branch')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->default('new'); // new, contacted, booked, cancelled
            $table->timestamps();
        });

        // 7. Site Settings
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('inquiries');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('services');
        Schema::dropIfExists('media_reels');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('specialists');
    }
};
