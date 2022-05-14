<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
  
    public function signUpAs()
    {
        return view('frontend.signup-as');
    }

    public function index()
    {
        return view('home');
    }

    public function jobs()
    {
        return view('frontend.jobs');
    }

    public function talentDirectory()
    {
        return view('frontend.talent');
    }

    public function discover()
    {
        return view('frontend.discover');
    }

    public function placeListing()
    {
        return view('frontend.placelisting');
    }

    
    
    
}
