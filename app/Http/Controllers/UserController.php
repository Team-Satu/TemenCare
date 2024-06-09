<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Psychologs;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function dashboard()
    {
        $userId = request()->attributes->get('user_id');
        $user = User::where('id', $userId)->first();
        $account = Accounts::where('email', $user->email)->first();
        $psychologs = Psychologs::all();
        return view('mobile.dashboard', ["name" => $account->name, "psychologs" => $psychologs]);
    }

    public function profile()
    {
        $userId = request()->attributes->get('user_id');
        $user = User::where('id', $userId)->first();
        $account = Accounts::where('email', $user->email)->first();
        return view('mobile.profile', ["name" => $account->name, "email" => $account->email, "image_url" => $account->image_url]);
    }

    public function logout()
    {
        return redirect(route("user.login"))->withCookie(Cookie::forget('temen_cookie'));
    }
}
