<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'image',
    ];

    protected $casts = [
        'content' => 'string',
            'image' => 'array',
    ];

}
