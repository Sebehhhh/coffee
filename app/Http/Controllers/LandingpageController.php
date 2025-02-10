<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
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
        $galleries = Gallery::latest()->take(4)->get();
        $menus = Menu::all();
        $best_sellers = $menus->where('best_seller', true)->take(4);
        $samples = $menus->where('sampel', true)->take(4);

        $blogs = Blog::latest()->take(3)->get();

        return view('landingpage.home', compact(
            'banners',
            'story',
            'best_sellers',
            'samples',
            'categories',
            'blogs',
            'galleries'
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
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6)->withQueryString();
        return view('landingpage.blog', compact('blogs'));
    }


    public function blogPage($id)
    {
        $blog = Blog::find($id);
        return view('landingpage.blog_page', compact('blog'));
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12)->withQueryString();
        return view('landingpage.gallery', compact('galleries'));
    }
}
