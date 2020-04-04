<?php

namespace App\Http\Controllers;
use App\model\Product;

use Illuminate\Http\Request;
use DB;
use Image;

class ShotovaghController extends Controller
{
    public function index(){
         $newProducts=Product::all()->take(8);
        return view('front-end.home.home',['newProducts'=> $newProducts]);
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
