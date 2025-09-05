<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'title_en',
        'title_ar',
        'subtitle_en',
        'subtitle_ar',
        'description_en',
        'description_ar',
        'image',
    ];

}
