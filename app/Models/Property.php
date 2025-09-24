<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'advertisement_price',
        'advertisement_no_of_days',
        'top_advertisement_price',
        'top_advertisement_no_of_days',
        'top_list',
        'wifi',
        'pool',
        'furnished',
        'parking',
        'fitness',
        'sea_view',
        'maid_room',
        'category_id',
        'sub_category_id',
        'property_plan_id',
        'rooms',
        'floor',
        'purpose_type',
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
        'user_id',
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

    public function favoriteBy()
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(PropertyCategory::class, 'category_id');
    }

    // Relation with Plan
    public function plan()
    {
        return $this->belongsTo(PropertyPlan::class, 'property_plan_id');
    }




}
