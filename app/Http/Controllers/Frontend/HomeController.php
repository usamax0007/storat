<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\HeroSection;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $heroSections = HeroSection::all();
        $about = AboutSection::first();
        $services = Service::all();
        $partners = Partner::all();
        return view('frontend.pages.home.index',compact('heroSections','services', 'about','partners'));
    }
}
