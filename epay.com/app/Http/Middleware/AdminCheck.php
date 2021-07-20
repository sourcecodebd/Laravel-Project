<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
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
        if($request->session()->get('type') == "Admin" )
        {
            return $next($request);
        }
        else
        {
            $request->session()->flash('msg','Invalid req ... You do not have privilege to be a Admin!');
            return redirect('/E-Pay/login/admin');
        }
    }
}
