<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkerRole;
use Illuminate\Http\Request;
use App\Utils\AppConst;

class WorkerRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workerRoles = WorkerRole::paginate(AppConst::PAGE_SIZE);
        return view('admin.worker-roles.index', compact('workerRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.worker-roles.create');
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
            'name' => 'required|unique:worker_roles',
        ]);

        WorkerRole::create($data);
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Worker Role Created Successfully');
        return redirect()->route('worker-roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkerRole  $workerRole
     * @return \Illuminate\Http\Response
     */
    public function show(WorkerRole $workerRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkerRole  $workerRole
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkerRole $workerRole)
    {
        return view('admin.worker-roles.edit', compact('workerRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkerRole  $workerRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkerRole $workerRole)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:worker_roles,name,' . $workerRole->id,
        ]);

        $workerRole->update($data);
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Worker Role Updated Successfully');
        return redirect()->route('worker-roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkerRole  $workerRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkerRole $workerRole)
    {
        $workerRole->delete();
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Worker Role Deleted Successfully');
        return redirect()->route('worker-roles.index');
    }
}
