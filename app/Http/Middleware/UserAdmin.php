<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Middleware;
use Illuminate\Support\Facades\Auth;

class UserAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if (Auth::check() && Auth::user()->type=='admin') {
            return $next($request);
        }
        
        return redirect()->route('index');
    }
}
