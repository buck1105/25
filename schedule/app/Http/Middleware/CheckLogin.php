<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        dd(Auth::guard('admin')->check());
        if (!Auth::guard('web')->check()) {
            return redirect()->route('login');
        }
//        if (session()->has('name')) {
//            return redirect()->route('admin.dashboard');
//        }
        return $next($request);
    }
}
