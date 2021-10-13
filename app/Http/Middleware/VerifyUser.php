<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VerifyUser
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
            $request->session()->put('user', collect([
                'id' => rand(64,224),
                'name' => 'guest',
                'is_admin' => false,
            ]));
        }
        return $next($request);
    }
}
