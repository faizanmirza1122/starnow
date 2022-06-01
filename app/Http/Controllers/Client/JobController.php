<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\SalaryRange;
use App\Models\ExpreienceDuration;
use App\Models\ExpreienceLevel;
use App\Models\Country;
use App\Models\Tag;
use App\Models\WorkerRole;
use App\Utils\AppConst;
use Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = auth()->user()->jobs()->paginate(AppConst::PAGE_SIZE);
        return view('client.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobCategories = JobCategory::all();
        $salaryRanges = SalaryRange::all();
        $expreienceDurations = ExpreienceDuration::all();
        $expreienceLevels = ExpreienceLevel::all();
        $countries = Country::all();
        $workerRoles = WorkerRole::all();
        $tags = Tag::all();
        return view('client.jobs.create', [
            'jobCategories' => $jobCategories,
            'salaryRanges' => $salaryRanges,
            'expreienceDurations' => $expreienceDurations,
            'expreienceLevels' => $expreienceLevels,
            'countries' => $countries,
            'workerRoles' => $workerRoles,
            'tags' => $tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:jobs',
            'description' => 'required',
            'job_category_id' => 'required',
            'salary_range_id' => 'required',
            'experience_duration_id' => 'required',
            'experience_level_id' => 'required',
            'country_id' => 'required',
            'worker_roles' => 'required',
            'tags' => 'required',
        ]);

        $job = Job::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            // 'expire_in' => now()->addDays(rand(1, 30)),
            'status' => AppConst::INACTIVE,
            'user_id' => auth()->user()->id,
            'job_category_id' => $request->job_category_id,
            'salary_range_id' => $request->salary_range_id,
            'experience_duration_id' => $request->experience_duration_id,
            'experience_level_id' => $request->experience_level_id,
            'country_id' => $request->country_id,
        ]);

        $tags = $request->tags;
        foreach ($tags as $tag) {
            $job->tags()->attach($tag);
        }

        $worker_roles = $request->worker_roles;
        foreach ($worker_roles as $worker_role) {
            $job->workerRoles()->attach($worker_role);
        }
     
        
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Job Created Successfully');
        return redirect()->route('client-jobs.index');
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
        $job = Job::findOrFail($id);
        $jobCategories = JobCategory::all();
        $salaryRanges = SalaryRange::all();
        $expreienceDurations = ExpreienceDuration::all();
        $expreienceLevels = ExpreienceLevel::all();
        $countries = Country::all();
        $workerRoles = WorkerRole::all();
        $tags = Tag::all();
        return view('client.jobs.edit', [
            'job' => $job,
            'jobCategories' => $jobCategories,
            'salaryRanges' => $salaryRanges,
            'expreienceDurations' => $expreienceDurations,
            'expreienceLevels' => $expreienceLevels,
            'countries' => $countries,
            'workerRoles' => $workerRoles,
            'tags' => $tags
        ]);
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
        $request->validate([
            'title' => 'required|unique:jobs,title,'.$id,
            'description' => 'required',
            'job_category_id' => 'required',
            'salary_range_id' => 'required',
            'experience_duration_id' => 'required',
            'experience_level_id' => 'required',
            'country_id' => 'required',
            'worker_roles' => 'required',
            'tags' => 'required',
        ]);

        $job = Job::find($id);
        $job->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'user_id' => auth()->user()->id,
            'job_category_id' => $request->job_category_id,
            'salary_range_id' => $request->salary_range_id,
            'experience_duration_id' => $request->experience_duration_id,
            'experience_level_id' => $request->experience_level_id,
            'country_id' => $request->country_id,
        ]);

        // detach all tags and roles
        $job->workerRoles()->detach();
        $job->tags()->detach();

        $tags = $request->tags;
        foreach ($tags as $tag) {
            $job->tags()->attach($tag);
        }

        $worker_roles = $request->worker_roles;
        foreach ($worker_roles as $worker_role) {
            $job->workerRoles()->attach($worker_role);
        }

        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Job Updated Successfully');
        return redirect()->route('client-jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        $job->workerRoles()->detach();
        $job->tags()->detach();

        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Job Deleted Successfully');
        return redirect()->route('client-jobs.index');
    }
}
