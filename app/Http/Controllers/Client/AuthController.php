<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ClientRole;
use App\Models\Country;
use App\Models\User;
use App\Utils\UserType;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * show registration form for client
     */
    public function findTalent()
    {
        $clientRoles = ClientRole::all();
        $countries = Country::all();
        return view('frontend.find-talent', compact('clientRoles', 'countries'));
    }

    /**
     * process registration form for client
     */
    public function postFindTalent(Request $request)
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
            'role' => 'required',
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
            'type' => UserType::CLIENT,
        ]);

        $client = $user->client()->create([
            'company_name' => $request->company_name,
            'website' => $request->website,
            'role' => $request->role,
        ]);

        if ($user && $client) {
            request()->session()->flash('alert-class', 'alert-success');
            request()->session()->flash('message', 'You have successfully registered. Please login to continue.');
            return redirect()->back();
        }
    }

    /**
     * show login form for client
     */

    public function login()
    {
        return view('client.auth.login');
    }

    /** 
     *  process login form for client
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('type', UserType::CLIENT)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            auth()->login($user);
            return redirect()->route('client.dashboard');
        } else {
            request()->session()->flash('alert-class', 'alert-danger');
            request()->session()->flash('message', 'Oops! invalid email or password');
            return redirect()->back();
        }
    }


    /**
     * show profile page
     */
    public function profile()
    {
        $user = auth()->user();
        $countries = Country::all();
        $clientRoles = ClientRole::all();
        return view('client.auth.profile', compact('user', 'countries', 'clientRoles'));
    }

    /**
     * update worker profile
     */

    public function updateProfile(Request $request)
    {
        $user =  $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,username,' . auth()->user()->id,
            'gender' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'phone' => 'required|unique:users,phone,' . auth()->user()->id,

        ]);

        $client = $request->validate([
            'company_name' => 'required',
            'website' => 'required',
            'role' => 'required',
        ]);

        auth()->user()->update($user);
        auth()->user()->client()->update($client);

        request()->session()->flash('alert-class', 'alert-success');
        request()->session()->flash('message', 'Profile updated successfully.');
        return redirect()->back();
    }


    /**
     * change password
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
     *  Logout client
     */
    public function logout()
    {
        Session::flush();
        auth()->logout();
        return redirect()->route('client.login');
    }
}
