<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth('admin')->user();
        if ($user) {
            return $next($request);
        }
        return abort(403);
    }
}
