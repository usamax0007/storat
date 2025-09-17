<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'images',
        'name',
        'title',
        'price',
        'beds',
        'bathrooms',
        'surface',
        'terrace',
        'lift',
        'location',
        'latitude',
        'longitude',
        'video',
        'description',
        'floor_plans',
        'notes',
        'call',
        'whatsapp',
        'email',
    ];

    protected $casts = [
        'images' => 'array',
        'floor_plans' => 'array',
        'terrace' => 'boolean',
        'lift' => 'boolean',
        'price' => 'decimal:2',
        'latitude' => 'decimal:7',
        'longitude' => 'decimal:7',
    ];
}
