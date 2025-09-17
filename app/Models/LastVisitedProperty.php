<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastVisitedProperty extends Model
{
    protected $fillable = ['user_id', 'property_id'];
}
