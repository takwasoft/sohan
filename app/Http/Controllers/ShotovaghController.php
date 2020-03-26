<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShotovaghController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function error(){
        return view('front-end.error.error404');
    }

    public function about(){
        return view('front-end.home.about');
    }

    public function contact(){
        return view('front-end.home.contact');
    }

    public function faq(){
        return view('front-end.home.faq');
    }
}
