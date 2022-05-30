<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\AppConst;
use App\Models\JobCategory;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobCategories = JobCategory::paginate(AppConst::PAGE_SIZE);
        return view('admin.job-categories.index', compact('jobCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job-categories.create');
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
            'name' => 'required|unique:job_categories',
        ]);

        JobCategory::create($data);
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Job Category Created Successfully');
        return redirect()->route('job-categories.index');
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
    public function edit($id)
    {
        $jobCategory = JobCategory::findOrFail($id);
        return view('admin.job-categories.edit', compact('jobCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:job_categories,name,'.$id,
        ]);

        JobCategory::findOrFail($id)->update($data);
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Job Category Updated Successfully');
        return redirect()->route('job-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobCategory::findOrFail($id)->delete();
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Job Category Deleted Successfully');
        return redirect()->route('job-categories.index');
    }
}
