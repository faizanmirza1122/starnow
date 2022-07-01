<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Height;
use App\Models\Job;
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
        $users = User::where('type', UserType::WORKER)->paginate(AppConst::PAGE_SIZE);
        return view('frontend.talent', compact('users'));
    }

    public function talentProfile($username)
    {
        $user = User::where('username', $username)->first();

        $height_id = $user->worker->height_id;
        $height = Height::find($height_id);
        return view('frontend.talent-profile', compact('user', 'height'));
    }


    public function index()
    {
        return view('home');
    }

    public function jobs()
    {
        $jobs = Job::latest()->get();
        return view('frontend.jobs', compact('jobs'));
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
