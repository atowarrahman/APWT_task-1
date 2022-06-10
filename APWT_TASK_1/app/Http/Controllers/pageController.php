<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function product()
    {
        $product=[
            "name"=>"Book-1",
            "price"=>"200TK",
        ];
        return view('pages.product')
        ->with('data',$product);
    }
    public function team()
    {
        return view('pages.team');
    }
    public function aboutus()
    {
        return view('pages.aboutus');
    }
    public function contactus()
    {
        return view('pages.contactus');
    }
    
    
}