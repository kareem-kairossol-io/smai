<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'items_json' => 'array',
        'is_active' => 'boolean',
    ];

    public function getTitleAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->title_ar)) ? $this->title_ar : $this->title_en;
    }

    public function getBadgeAttribute(): ?string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->badge_ar)) ? $this->badge_ar : $this->badge_en;
    }

    public function getHeroSubtitleAttribute(): ?string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->hero_subtitle_ar)) ? $this->hero_subtitle_ar : $this->hero_subtitle_en;
    }

    public function getShortDescAttribute(): ?string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->short_desc_ar)) ? $this->short_desc_ar : $this->short_desc_en;
    }

    public function getFullDescAttribute(): ?string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->full_desc_ar)) ? $this->full_desc_ar : $this->full_desc_en;
    }

    public function getItemsAttribute(): array
    {
        return is_array($this->items_json) ? $this->items_json : [];
    }
}
