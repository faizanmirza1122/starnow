<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Height;
use App\Models\User;
use App\Models\WorkerRole;
use App\Utils\UserType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Str;
class AuthController extends Controller
{
    /**
     * show registration form for worker
     */
    public function findWork()
    {
        $workerRoles = WorkerRole::all();
        $countries = Country::all();
        $heights = Height::all();
        return view('frontend.find-work', compact('workerRoles', 'countries', 'heights'));
    }

    /**
     * process registration form for worker
     */
    public function postFindWork(Request $request)
    {
        $data = $request->validate([
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
            'height' => 'required'
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
            'user_id' => $user->id,
            'height_id' => $request->height,
            'age' =>  Carbon::parse($request->dob)->age,
        ]);

        $worker_roles = $data['worker_roles'];
       
        foreach ($worker_roles as $worker_role) {
            $worker->workerRoles()->attach($worker_role);
        }

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

        $user = User::where('email', $request->email)->where('type', UserType::WORKER)->first();

        if ($user && Hash::check($request->password, $user->password )) {
            auth()->login($user);
            return redirect()->route('home');
        }

        request()->session()->flash('alert-class', 'alert-danger');
        request()->session()->flash('message', 'Invalid email or password.');
        return redirect()->back();
    }

    /**
     * show profile page
     */
    public function profile()
    {
        $user = auth()->user();
        $countries = Country::all();
        $heights = Height::all();
        return view('worker.auth.profile', compact('user', 'countries', 'heights'));
    }

    /**
     * update worker profile
     */

    public function updateProfile(Request $request)
    {
        $data =  $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,username,' . auth()->user()->id,
            'gender' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'phone' => 'required|unique:users,phone,' . auth()->user()->id,
        ]);

        $request->validate([
            'height' => 'required',
        ]);
        auth()->user()->worker()->update([
            'height_id' => $request->height,
        ]);

        // update user profile photo
        if ($request->hasFile('profile_photo')) {
            $photo = $request->file('profile_photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();

            // delete previous profile photo
            if (auth()->user()->profile_photo) {
                Storage::delete('/public/profiles'.'/' . auth()->user()->profile_photo);
            }
            Storage::putFileAs('/public/profiles'.'/',$photo,$filename);

            $user = auth()->user();
            $user->profile_photo = $filename;
            $user->save();
        }


        auth()->user()->update($data);
        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Profile updated successfully.');
        return redirect()->back();
    }


    /**
     * change worker password
     */

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);
        $user = auth()->user();

        if (Hash::check($request->old_password, $user->password)) {
            if ($request->new_password == $request->confirm_password) {
                $user->password = Hash::make($request->new_password);
                $user->save();
                request()->session()->flash('alert-class', 'alert-success');
                request()->session()->flash('message', 'Password changed successfully');
                return redirect()->back();
            } else {
                request()->session()->flash('alert-class', 'alert-danger');
                request()->session()->flash('message', 'New password and confirm password does not match.');
                return redirect()->back();
            }
        } else {
            request()->session()->flash('alert-class', 'alert-danger');
            request()->session()->flash('message', 'Old password does not match.');
            return redirect()->back();
        }
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
