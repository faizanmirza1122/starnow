<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils\UserType;
use Illuminate\Http\Request;
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


    public function logout(){
        Session::flush();
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
