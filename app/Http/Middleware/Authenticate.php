<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {

            // if current url contains 'admin' then redirect to admin login page
            if (strpos($request->url(), 'admin')) {
                return route('admin.login');
            } else if (strpos($request->url(), 'client')) {
                return route('client.login');
            } else {
                return route('login');
            }
        }

    }
}
