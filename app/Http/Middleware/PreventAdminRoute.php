<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventAdminRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //use this middleware to prevent admin to vist admin page in dashboard
        //only the super admin can visit admin page
        $user = $request->user();

        // Check if the user is a superadmin

        if ($user->type != 'super_admin') {
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }
}
