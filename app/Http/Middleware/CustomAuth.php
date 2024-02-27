<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(($request->path()=='login' || $request->path()=='register') && Session::get('user')){
            return redirect('/');
        }
        else if($request->path()!='login' && !Session::get('user') && $request->path()!='register' && !Session::get('user')){
            return  redirect('login');
        }
        return $next($request);
    }
}
