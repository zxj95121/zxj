<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Request;

class CheckAdmin
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
        if($request->session()->get('zxjId')){
            if (Request::is('zxj/login')) {
                return redirect('zxj/dashboard');
            }
            $request->session()->put('zxjUrl', Request::path());
            return $next($request);
        }
        else if (Request::is('zxj/login')) {
            return $next($request);
        } else {
            return redirect('zxj/login');
        }
    }
}
