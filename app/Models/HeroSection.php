<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'subtitle_en',
        'subtitle_ar',
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'image',
        'button_text_en',
        'button_text_ar',
        'button_link',
        'is_active',
    ];
}
