<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting'; // since migration made "setting"

    protected $fillable = [
        'price',
        'advertisement_price',
        'top_ten_advertisement_price',
    ];
}
