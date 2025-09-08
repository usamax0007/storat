<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\HeroSection;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Vision;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $heroSections = HeroSection::all();
        $about = AboutSection::first();
        $services = Service::all();

        $partners = Partner::all();
        $visions = Vision::all();
        $projects = Project::select('image')->get();
        return view('frontend.pages.home.index',compact('heroSections','services', 'about', 'visions', 'projects', 'partners'));
    }
}
