<?php

namespace App\Http\Middleware;

use App\Models\Accounts;
use App\Models\Admin;
use App\Models\Psychologs;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdminTemenTokenCookieIsValid
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
                    $countPsycholog = Psychologs::where("email", $user->email)->count();
                    $countAdmin = Admin::where("email", $user->email)->count();

                    $user = User::where('id', $userToken->tokenable_id)->first();
                    $emailAdmin = env('ADMIN_EMAIL');

                    $role = "psycholog";
                    if ($user->email === $emailAdmin) {
                        $role = "admin";
                    }

                    if ($countAdmin || $countPsycholog) {
                        // Jika token ditemukan, dapatkan pengguna yang memiliki token tersebut
                        $request->attributes->add(['temen_user' => $userToken]);
                        $request->attributes->add(['user_id' => $userToken->tokenable_id]);
                        $request->attributes->add(['role' => $role]);
                        $request->attributes->add(['user' => $user]);

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
