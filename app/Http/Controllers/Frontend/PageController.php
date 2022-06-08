<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils\AppConst;
use App\Utils\UserType;
use Illuminate\Http\Request;

class PageController extends Controller
{
  
    public function signUpAs()
    {
        return view('frontend.signup-as');
    }
    
    public function talentDirectory()
    {
        $users = User::where('type', UserType::WORKER)->paginate(1);
        return view('frontend.talent', compact('users'));
    }


    public function index()
    {
        return view('home');
    }

    public function jobs()
    {
        return view('frontend.jobs');
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
