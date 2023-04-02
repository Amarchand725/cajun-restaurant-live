<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function discoverMenu()
    {
        return view('frontend.discover-menu');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function blog()
    {
        return view('frontend.blog');
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
