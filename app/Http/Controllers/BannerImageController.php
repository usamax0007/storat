<?php

namespace App\Http\Controllers;

use App\Http\Resources\BannerResource;
use App\Models\BannerImage;
use Illuminate\Http\Request;

class BannerImageController extends Controller
{
    public function index()
    {
        $banner_image = BannerImage::first();

        return new BannerResource($banner_image);
    }
}
