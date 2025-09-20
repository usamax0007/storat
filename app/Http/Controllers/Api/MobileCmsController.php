<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutUsResource;
use App\Http\Resources\PrivacyPolicyResource;
use App\Http\Resources\SupportResource;
use App\Http\Resources\TermsConditionResource;
use App\Models\MobileCms;
use Illuminate\Http\Request;

class MobileCmsController extends Controller
{
    public function privacy()
    {
        $privacy = MobileCms::select('privacy_policy')->first();

        return new PrivacyPolicyResource($privacy);
    }
    public function terms()
    {
        $terms = MobileCms::select('terms_conditions')->first();

        return new TermsConditionResource($terms);

    }
    public function about()
    {
        $about = MobileCms::select('about_us')->first();

        return new AboutUsResource($about);

    }
    public function support()
    {
        $support = MobileCms::select(
            'support_email',
            'support_whatsapp',
            'support_website',
            'support_instagram',
            'support_facebook',
            'support_twitter',
            'support_threads',
            'support_linkedin'
        )->first();
        return new SupportResource($support);
    }
}
