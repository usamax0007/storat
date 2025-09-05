<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'image',
        'button_text',
        'button_link',
        'is_active',
    ];
}
