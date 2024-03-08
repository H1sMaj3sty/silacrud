<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login_form');
        }
        $user = Auth::user();

        foreach ($roles as $role) {
            if ($user->status == $role) {
                return $next($request);
            }
        }
        abort(403, 'Unauthorized action');
    }
}
