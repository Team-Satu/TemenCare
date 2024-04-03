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
        $temen_token = $request->cookie('temen_cookie');
        $token = explode("|", $temen_token)[0];

        if ($temen_token) {
            $personalAccessToken = PersonalAccessToken::class;

            error_log($temen_token);
            error_log($token);
            error_log(hash('sha256', $temen_token));
            error_log(hash('sha256', $token));

            // // Create a personal access token instance
            // $accessToken = $personalAccessToken::where('token', hash('sha256', $temen_token))->first();
            // // $accessToken = $personalAccessToken->findToken($temen_token);

            // error_log("temen_Token");
            // error_log($accessToken);
            // error_log($accessToken['name']);
            // error_log("temen_Token1");

            $accessToken = PersonalAccessToken::findToken($temen_token);

            error_log($accessToken);

            if ($accessToken) {
                // Jika token ditemukan, dapatkan pengguna yang memiliki token tersebut
                // $user = User::find($accessToken->tokenable_id);

                // if ($user) {
                //     // Jika pengguna ditemukan, lakukan sesuatu
                //     echo "User with ID $user->id has the token.";
                // } else {
                //     // Jika pengguna tidak ditemukan
                //     echo "User not found for this token.";
                // }
                error_log("Token found.");
            } else {
                // Jika token tidak ditemukan
                error_log("Token not found.");
            }

            // return redirect('home');
        }

        return $next($request);
    }
}
