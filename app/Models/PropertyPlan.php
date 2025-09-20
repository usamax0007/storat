<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyPlan extends Model
{
    protected $fillable = ['name_en', 'name_ar', 'price', 'description'];

    protected $casts = [
        'description' => 'array',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class, 'property_plan_id');
    }


}
