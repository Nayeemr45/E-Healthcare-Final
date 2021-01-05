<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('type') == 'patient'){
            return $next($request);
         }else{
             $request->session()->flash('msg', 'patient only');
             return redirect('/home');
         }
    }
}
