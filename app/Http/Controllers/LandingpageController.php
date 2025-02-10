<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Story;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $story = Story::first();
        return view('landingpage.home', compact('banners', 'story'));
    }

    public function menu()
    {
        return view('landingpage.menu');
    }

    public function service()
    {
        return view('landingpage.service');
    }

    public function about()
    {
        return view('landingpage.about');
    }

    public function blog()
    {
        return view('landingpage.blog');
    }

    public function contact()
    {
        return view('landingpage.contact');
    }
}
