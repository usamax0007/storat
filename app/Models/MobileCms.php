<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MobileCms extends Model
{
    protected $table = 'mobile_cms';

    protected $fillable = [
        'privacy_policy',
        'terms_conditions',
        'about_us',
        'support_email',
        'support_whatsapp',
        'support_website',
        'support_instagram',
        'support_facebook',
        'support_twitter',
        'support_threads',
        'support_linkedin',
    ];

    protected $casts = [
        'privacy_policy' => 'array',
        'terms_conditions' => 'array',
        'about_us' => 'array',
    ];
}
