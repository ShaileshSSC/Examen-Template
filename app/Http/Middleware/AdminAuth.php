<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuth
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
        if (!$request->session()->exists('user')) {
            return redirect('/error')->with('status', 'You do not have access to this page .');
        }
        if($request->session()->get('user')->get('is_admin') == false)
        {
            return redirect('/error')->with('status', 'You do not have access to this page .');
        }
        return $next($request);
    }
}
