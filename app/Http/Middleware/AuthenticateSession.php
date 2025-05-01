<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthenticateSession
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('isLoggedIn')) {
            return redirect()->route('login')
                ->withErrors(['loginError' => 'Harap login terlebih dahulu!']);
        }

        return $next($request);
    }
}
