<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloModerador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) { 
        switch(auth::user()->tipo){ 
            case ('1'): 
                return redirect('home');
            case ('2'): 
                return redirect('users');
            case ('3'): 
                return $next($request);
            } 
        }
}
