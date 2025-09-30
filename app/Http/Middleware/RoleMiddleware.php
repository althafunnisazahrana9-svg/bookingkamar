<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        // Kalau user tidak punya role atau role tidak sesuai
        if (! $user->role || (count($roles) > 0 && ! in_array($user->role, $roles))) {
            return redirect()->route('booking.index');
        }

        return $next($request);
    }
}
