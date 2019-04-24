<?php

namespace App\Http\Middleware;

use Closure;
use Request;

class ResumeVerify
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
        if($request->session()->get('resId')){
            if (Request::is('resume/login')) {
                return redirect('resume/home');
            }
            $request->session()->put('resUrl', Request::path());
            return $next($request);
        }
        else if (Request::is('resume/login')) {
            return $next($request);
        } else {
            return redirect('resume/login');
        }
        return $next($request);
    }
}
