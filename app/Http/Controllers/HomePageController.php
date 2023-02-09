<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function products()
    {
        return view('shop');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogShow()
    {
        return view('blogShow');
    }

    public function contact()
    {
        return view('contact');
    }
}
