<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function signup()
    {
        return view('frontend.signup');
    }
    public function findTalent()
    {
        return view('frontend.find-talent');
    }
    public function findWork()
    {
        return view('frontend.find-work');
    }
}
