<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientRole;
use Illuminate\Http\Request;

class ClientRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientRoles = ClientRole::paginate(10);
        return view('admin.client-roles.index', compact('clientRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client-roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:client_roles',
        ]);

        ClientRole::create($data);
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Client Role Created Successfully');
        return redirect()->route('client-roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientRole $clientRole)
    {
        return view('admin.client-roles.edit', compact('clientRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientRole $clientRole)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:client_roles,name,' . $clientRole->id,
        ]);

        $clientRole->update($data);
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Client Role Updated Successfully');
        return redirect()->route('client-roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientRole $clientRole)
    {
        $clientRole->delete();
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Client Role Deleted Successfully');
        return redirect()->route('client-roles.index');
    }
}
