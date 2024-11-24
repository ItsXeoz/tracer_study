<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string|null  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ?string $role = null): Response
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return response()->json([
                'message' => 'Anda harus login untuk mengakses halaman ini.',
            ], 401);
        }

        // Check if the user's role matches the required role
        if ($role && auth()->user()->role !== $role) {
            return response()->json([
                'message' => 'Anda tidak memiliki izin untuk mengakses halaman ini.',
            ], 403);
        }

        // Proceed with the request
        return $next($request);
    }
}
