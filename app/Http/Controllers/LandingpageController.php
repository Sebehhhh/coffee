<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Story;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $story = Story::first();
        $categories = Category::all();
        
        $menus = Menu::all();
        $best_sellers = $menus->where('best_seller', true)->take(4);
        $samples = $menus->where('sampel', true)->take(4);
        
        return view('landingpage.home', compact(
            'banners',
            'story',
            'best_sellers',
            'samples',
            'categories',
        ));
    }

    public function menu()
    {
        $menus = Menu::with('category')->get();
        $categories = Category::all();
        
        return view('landingpage.menu', compact('menus', 'categories'));
    }

    public function about()
    {
        $story = Story::first();
        return view('landingpage.about', compact('story'));
    }

    public function blog()
    {
        $blogs = Blog::paginate(6);
        return view('landingpage.blog', compact('blogs'));
    }

    public function blogPage($id)
    {
        $blog = Blog::find($id);
        return view('landingpage.blog_page', compact('blog'));
    }
}
