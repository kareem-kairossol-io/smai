<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getCategoryAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->category_ar)) ? $this->category_ar : $this->category_en;
    }

    public function getQuestionAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->question_ar)) ? $this->question_ar : $this->question_en;
    }

    public function getAnswerAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->answer_ar)) ? $this->answer_ar : $this->answer_en;
    }
}
