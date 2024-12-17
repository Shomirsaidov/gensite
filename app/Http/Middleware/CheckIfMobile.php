<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfMobile
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
        // Check if the user agent contains mobile-related keywords
        if ($request->header('User-Agent') && preg_match('/mobile|android|iphone|ipad|ipod/i', $request->header('User-Agent'))) {
            return response()->view('ai-mobile'); // Return mobile view if matched
        }

        return $next($request); // Continue to the next middleware if not mobile
    }
}
