<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WorkerRole;
use App\Utils\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * show registration form for worker
     */
    public function findWork()
    {
        $workerRoles = WorkerRole::all();
        return view('frontend.find-work', compact('workerRoles'));
    }

    /**
     * process registration form for worker
     */
    public function postFindWork(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|unique:users',
            'gender' => 'required',
            'dob' => 'required|date',
            'country' => 'required',
            'worker_roles' => 'required',
        ]);

        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'country' => $request->country,
            'type' => UserType::WORKER,
        ]);

        $worker = $user->worker()->create([
            'roles' => $request->worker_roles,
        ]);

        if ($user && $worker) {
            request()->session()->flash('alert-class', 'alert-success');
            request()->session()->flash('message', 'You have successfully registered. Please login to continue.');
            return redirect()->back();
        }
    }


    /**
     * show login form for worker
     */
    public function loginFindWork()
    {
        return view('frontend.worker-login');
    }

    /**
     * process login form for worker
     */
    public function postLoginFindWork(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            auth()->login($user);
            return redirect()->route('home');
        }

        request()->session()->flash('alert-class', 'alert-danger');
        request()->session()->flash('message', 'Invalid email or password.');
        return redirect()->back();
    }

    /**
     *  Logout worker
     */
    public function logout()
    {
        Session::flush();
        auth()->logout();
        return redirect()->route("worker.login");
    }
}
