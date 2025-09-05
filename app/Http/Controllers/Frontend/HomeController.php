<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $heroSections = HeroSection::all();
        return view('frontend.pages.home.index',compact('heroSections'));
    }
}
