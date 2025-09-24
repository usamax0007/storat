<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(): SettingResource
    {
        $pricing = Setting::first();

        return new SettingResource($pricing);
    }
}
