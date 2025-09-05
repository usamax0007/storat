<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.pages.services.show', compact('service'));
    }
}
