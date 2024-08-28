<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AuthAPI
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $kurir =  User::all()->where('api_token', $request->bearerToken())->first();

        if ($kurir) {
            return $next($request);
        }
        return response()->json("Unautenticated!", 403);
    }
}
