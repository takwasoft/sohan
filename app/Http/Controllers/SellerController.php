<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function home(){
        return view('seller.home.home');
    } 
}
