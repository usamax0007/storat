<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    protected $fillable =   ['name_en','name_ar'];

    public function properties()
    {
        return $this->hasMany(Property::class, 'category_id');
    }
}
