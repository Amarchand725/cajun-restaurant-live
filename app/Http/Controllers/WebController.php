<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Foodservice;
use App\Models\Menucategory;
use App\Models\Blog;
use App\Models\Aboutus;
use App\Models\Gallery;

class WebController extends Controller
{
    public function index()
    {
        $data = [];
        $data['sliders'] = Slider::orderby('id', 'desc')->where('status', 1)->get();
        $data['food_services'] = Foodservice::where('status', 1)->get();
        $data['menu_categories'] = Menucategory::where('status', 1)->take(2)->get();
        $data['blogs'] = Blog::where('status', 1)->get();
        return view('frontend.index', compact('data'));
    }

    public function about()
    {
        $about_us = Aboutus::orderby('id', 'desc')->where('status', 1)->first();
        return view('frontend.about', compact('about_us'));
    }
    public function discoverMenu()
    {
        $data['menu_categories'] = Menucategory::where('status', 1)->get();
        return view('frontend.discover-menu', compact('data'));
    }
    public function gallery()
    {
        $galleries = Gallery::where('status', 1)->take(20)->get();
        return view('frontend.gallery', compact('galleries'));
    }
    public function blog()
    {
        $blogs = Blog::orderby('id', 'desc')->where('status', 1)->get();
        return view('frontend.blog', compact('blogs'));
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function reservation()
    {
        return view('frontend.reservation');
    }
}
