<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    // Display dashboard user
    public function dashboard()
    {
        $userId = request()->attributes->get('user_id');
        $user = User::where('id', $userId)->first();
        error_log($user);
        $account = Accounts::where('email', $user->email)->first();
        error_log($account);

        return view('mobile.dashboard', ["name" => $account->name]);
    }

    // Display user profile
    public function profile()
    {
        $userId = request()->attributes->get('user_id');
        $user = User::where('id', $userId)->first();
        $account = Accounts::where('email', $user->email)->first();
        return view('mobile-profile', ["name" => $account->name, "email" => $account->email, "image_url" => $account->image_url]);
    }

    // User logout
    public function logout()
    {
        // Redirect and remove cookie
        return redirect(route("user.login"))->withCookie(Cookie::forget('temen_cookie'));
    }
}
