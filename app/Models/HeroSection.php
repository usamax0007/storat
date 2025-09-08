<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'image',
        'button_text_en',
        'button_text_ar',
        'button_link',
        'rent_heading_en',
        'rent_sub_heading_ar',
        'rent_heading_ar',
        'rent_sub_heading_ar',
        'rent_icon',
        'properties_heading_en',
        'properties_sub_heading_en',
        'properties_heading_ar',
        'properties_sub_heading_ar',
        'properties_icon',
        'is_active',
    ];
}
