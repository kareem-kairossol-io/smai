<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaReel extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getTitleAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->title_ar)) ? $this->title_ar : $this->title_en;
    }

    public function getSubAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->sub_ar)) ? $this->sub_ar : $this->sub_en;
    }

    public function getFacebookEmbedUrlAttribute(): string
    {
        if ($this->embed_url) {
            return $this->embed_url;
        }
        return 'https://www.facebook.com/plugins/video.php?href=' . urlencode($this->url) . '&show_text=0&autoplay=1&mute=1&width=360&height=640';
    }
}
