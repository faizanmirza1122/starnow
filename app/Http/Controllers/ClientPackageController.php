<?php

namespace App\Http\Controllers;

use App\Models\ClientPackage;
use App\Utils\AppConst;
use Illuminate\Http\Request;

class ClientPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientPackages = ClientPackage::paginate(AppConst::PAGE_SIZE);
        return view('admin.client-packages.index', compact('clientPackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:client_packages',
            'description' => 'required',
            'price' => 'required',
            'package_expire_duration_in_days' => 'required',
            'allowed_no_of_jobs_per_day' => 'required',
            'job_expire_duration_in_days' => 'required',
        ]);

        ClientPackage::create($data);

        
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Package Created Successfully');
        return redirect()->route('client-packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientPackage  $clientPackage
     * @return \Illuminate\Http\Response
     */
    public function show(ClientPackage $clientPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientPackage  $clientPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientPackage $clientPackage)
    {
        return view('admin.client-packages.edit', compact('clientPackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientPackage  $clientPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientPackage $clientPackage)
    {
        $data = $request->validate([
            'name' => 'required|unique:client_packages,name,'.$clientPackage->id,
            'description' => 'required',
            'price' => 'required',
            'package_expire_duration_in_days' => 'required',
            'allowed_no_of_jobs_per_day' => 'required',
            'job_expire_duration_in_days' => 'required',
        ]);

        $clientPackage->update($data);

        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Package Updated Successfully');
        return redirect()->route('client-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientPackage  $clientPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientPackage $clientPackage)
    {
        $clientPackage->delete();

        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Package Deleted Successfully');
        return redirect()->route('client-packages.index');
    }

    // activate or de activate client package
    public function updateStatus(ClientPackage $clientPackage)
    {
        $clientPackage->update([
            'is_active' => $clientPackage->is_active == AppConst::ACTIVE ? AppConst::INACTIVE : AppConst::ACTIVE
        ]);

        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Package Status Changed Successfully');
        return redirect()->route('client-packages.index');
    }
}
