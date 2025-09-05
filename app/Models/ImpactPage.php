<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImpactPage extends Model
{
    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'image',
    ];
}
