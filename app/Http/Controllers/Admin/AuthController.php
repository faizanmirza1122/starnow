<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('type', UserType::ADMIN)->first();

        if ($user) {
            if (\Hash::check($request->password, $user->password)) {
                auth()->login($user);
                return redirect()->route('admin.dashboard');
            } else {
                request()->session()->flash('alert-class', 'alert-danger');
                request()->session()->flash('message', 'Oops! invalid email or password');
                return redirect()->back();
            }
        } else {
            request()->session()->flash('alert-class', 'alert-danger');
            request()->session()->flash('message', 'Oops! invalid email or password');
            return redirect()->back();
        }
    }


    /**
     *  show profile form
     */
    public function profile()
    {
        $user = auth()->user();
        return view('admin.auth.profile', compact('user'));
    }


    /**
     *  change password
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
    

    public function logout(){
        Session::flush();
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
