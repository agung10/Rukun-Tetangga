<?php

namespace App\Http\Middleware;

use Closure;

class AdministratorAuth
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
        if(\Auth::check()){
            if(\Auth::user()->level == "Administrator"){
                return $next($request);
            }
            else{
                \Auth::logout();
                return redirect('/login')->with("alertUser", "....");
            }
        }
        else{
            \Auth::logout();
            return redirect('/login')->with("alertUser", "....");
        }
    }
}
