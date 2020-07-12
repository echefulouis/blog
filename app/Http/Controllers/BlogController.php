<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home () {
        return view('home');
    }

    public function about () { 
        return view('about');
    }

    public function contact () {
        return view('contact');
    }

    public function blog () {
        return view('blog');
    }

    public function details () {
        return view('post-details');
    }
}
