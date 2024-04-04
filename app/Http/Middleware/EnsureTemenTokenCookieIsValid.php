<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class EnsureTemenTokenCookieIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Fetch temen_token cookie value
        $temenToken = $request->cookie('temen_cookie');
        
        if (!empty($temenToken)) {
            $userToken = PersonalAccessToken::findToken($temenToken);
            
            if ($userToken) {
                // Jika token ditemukan, dapatkan pengguna yang memiliki token tersebut
                $request->attributes->add(['temen_user' => $userToken]);
                $request->attributes->add(['user_id' => $userToken->tokenable_id]);

                return $next($request);
            } else {
                // Jika token tidak ditemukan
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
        return $next($request);

    }
}
