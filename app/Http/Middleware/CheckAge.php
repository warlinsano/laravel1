<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        // if(auth()->user()->email == "warlinsano@gmail.com"){
        if($request->age >= 18){
           return $next($request);
        }
        else{
            return Redirect('NoAutorizado');
        }
        // return Redirect('/');
        // return $next($request);
    }
}
