<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsSetting extends Model
{
    protected $fillable = [
        'phone1',
        'phone2',
        'phone3',
        'email1',
        'email2',
        'address',
        'instagram',
        'linkedin',
        'facebook',
        'twitter',
    ];
}
