<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogusers;
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

    public function store (request $request) {
        //dd($request->all());

        $user=new blogusers;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return redirect()->route('post-details');
    }


    public function blog () {
        return view('blog');
    }

    public function details () {
        $data=blogusers::all();
        return view('post-details', compact('data'));
    }
}
