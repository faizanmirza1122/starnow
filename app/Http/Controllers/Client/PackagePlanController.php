<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ClientPackage;
use App\Utils\AppConst;
use Illuminate\Http\Request;

class PackagePlanController extends Controller
{
    public function index(){
        $packagePlans = ClientPackage::where('is_active', AppConst::ACTIVE)->get();

        return view('client.package-plans.index', compact('packagePlans'));
    }
}
