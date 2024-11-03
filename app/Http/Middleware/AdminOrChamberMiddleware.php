<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminOrChamberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated as either an admin or a chamber
        if (Auth::guard('admin')->check() || Auth::guard('chamber')->check()) {
            return $next($request);
        }

        // Redirect to the homepage if not authenticated as either admin or chamber
        return redirect()->route('index');
    }
}
