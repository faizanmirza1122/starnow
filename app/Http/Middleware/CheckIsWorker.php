<?php

namespace App\Http\Middleware;

use App\Utils\UserType;
use Closure;
use Illuminate\Http\Request;

class CheckIsWorker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->type == UserType::WORKER) {
            return $next($request);
        }else{
            return redirect()->back();
        }
    }
}
