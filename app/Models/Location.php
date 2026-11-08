<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getNameAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->name_ar)) ? $this->name_ar : $this->name_en;
    }

    public function getTagAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->tag_ar)) ? $this->tag_ar : $this->tag_en;
    }

    public function getAreaAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->area_ar)) ? $this->area_ar : $this->area_en;
    }

    public function getMetaAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->meta_ar)) ? $this->meta_ar : $this->meta_en;
    }

    public function getVideoTitleAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->video_title_ar)) ? $this->video_title_ar : ($this->video_title_en ?? $this->name_en);
    }

    public function getAddressAttribute(): ?string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->address_ar)) ? $this->address_ar : $this->address_en;
    }
}
