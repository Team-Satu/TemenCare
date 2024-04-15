<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    // Display dashboard user
    public function dashboard()
    {
        $userId = request()->attributes->get('user_id');
        $user = Accounts::where('id', $userId)->first();
        return view('mobile-dashboard', ["name" => $user->name]);
    }

    // Display report
    public function reports()
    {
        // $userId = request()->attributes->get('user_id');
        // $user = Accounts::where('id', $userId)->first();
        return view('mobile-reports');
    }

    // Display user profile
    public function profile()
    {
        $userId = request()->attributes->get('user_id');
        $user = Accounts::where('id', $userId)->first();
        return view('mobile-profile', ["name" => $user->name, "email" => $user->email, "image_url" => $user->image_url]);
    }

    // User logout
    public function logout()
    {
        // Redirect and remove cookie
        return redirect(route("user.login"))->withCookie(Cookie::forget('temen_cookie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
