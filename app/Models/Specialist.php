<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'quals_en' => 'array',
        'quals_ar' => 'array',
        'branches_en' => 'array',
        'branches_ar' => 'array',
        'is_active' => 'boolean',
    ];

    public function getNameAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->name_ar)) ? $this->name_ar : $this->name_en;
    }

    public function getRoleAttribute(): string
    {
        $locale = app()->getLocale();
        return ($locale === 'ar' && !empty($this->role_ar)) ? $this->role_ar : $this->role_en;
    }

    public function getQualsAttribute(): array
    {
        $locale = app()->getLocale();
        $list = ($locale === 'ar' && !empty($this->quals_ar)) ? $this->quals_ar : $this->quals_en;
        return is_array($list) ? $list : [];
    }

    public function getBranchesAttribute(): array
    {
        $locale = app()->getLocale();
        $list = ($locale === 'ar' && !empty($this->branches_ar)) ? $this->branches_ar : $this->branches_en;
        return is_array($list) ? $list : [];
    }

    public function getImageUrlAttribute(): string
    {
        return asset('assets/images/specialists-exact/' . $this->img . '.jpg');
    }
}
