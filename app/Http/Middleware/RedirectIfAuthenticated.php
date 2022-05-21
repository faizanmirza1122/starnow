<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use App\Utils\UserType;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::check()) {
            if (auth()->user()->type == UserType::ADMIN) {
                return redirect()->route('admin.dashboard');
            } else if (auth()->user()->type == UserType::CLIENT) {
                return redirect()->route('client.dashboard');
            } else {
                return redirect()->route('home');
            }
        }
        return $next($request);
    }
}
