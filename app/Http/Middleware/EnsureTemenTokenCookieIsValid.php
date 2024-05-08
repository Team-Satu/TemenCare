<?php

namespace App\Http\Middleware;

use App\Models\Accounts;
use App\Models\User;
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
                $user = User::where("id", $userToken->tokenable_id)->first();

                if ($user) {
                    $countUser = Accounts::where("email", $user->email)->count();

                    if ($countUser) {
                        // Jika token ditemukan, dapatkan pengguna yang memiliki token tersebut
                        $request->attributes->add(['temen_user' => $userToken]);
                        $request->attributes->add(['user_id' => $userToken->tokenable_id]);

                        return $next($request);
                    } else {
                        return redirect('/');
                    }
                } else {
                    return redirect('/');
                }
            } else {
                // Jika token tidak ditemukan
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
}
