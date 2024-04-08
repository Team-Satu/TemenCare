<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Admin;
use App\Models\Psychologs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-login');
    }

    // Admin logout
    public function logout()
    {
        // Redirect and remove cookie
        return redirect(route("admin.login"))->withCookie(Cookie::forget('temen_cookie'));
    }

    public function login(Request $request)
    {
        try {
            /**
             * Karena berbeda role, maka akan dilakukan pengecekan
             * di kedua tabel. Yakni tabel psychologs dan admin.
             */

            // Admin
            $credential = $request->only('email', 'password', '_token');

            $email = $credential['email'];
            $password = $credential['password'];

            if (empty($email) || empty($password)) {
                Alert::error('Harap Isi!', 'Email atau password harus diisi!');
                return redirect()->back();
            }

            // Admin/psycholog login
            $user = Auth::attempt(['email' => $email, 'password' => $password]);

            if ($user) {
                $admin = Admin::where('email', $email)->count();

                if (!$admin) {
                    // Admin tidak ditemukan
                    $countPsycholog = Psychologs::where('email', $email)->count();

                    if (!$countPsycholog) {
                        Alert::error('Gagal', 'Akun tidak ditemukan!');
                        return redirect()->back();
                    }
                }
            } else {
                Alert::error('Gagal', 'Email/kata sandi Anda salah!');
                return redirect()->back();
            }

            // Membuat token
            $user = Auth::user();
            $token = $user->createToken("temen_token");

            $plainTextToken = $token->plainTextToken;
            $cookie = cookie('temen_cookie', $plainTextToken, 60 * 24 * 30);

            return redirect(route("admin.dashboard"))->cookie($cookie);
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah dengan akun Anda!');
            return redirect()->back();
        }
    }

    public function dashboard()
    {
        $userId = request()->attributes->get('user_id');
        $user = User::where('id', $userId)->first();
        $emailAdmin = env('ADMIN_EMAIL');

        $role = "psycholog";
        $user;

        if ($user->email === $emailAdmin) {
            $role = "admin";

            $user = Admin::where("email", $user->email)->first();
        } else {
            $user = Psychologs::where("email", $user->email)->first();
        }

        return view("admin", ["role" => $role, "user" => $user]);
    }

    public function loadDashboard()
    {
        // Total akun
        $accountTotal = User::count();
        // Total Pengguna
        $userTotal = Accounts::count();
        // Total Psikolog
        $psychologTotal = Psychologs::count();

        return view("admin-load.dashboard", ["account_total" => $accountTotal, "user_total" => $userTotal, "psycholog_total" => $psychologTotal]);
    }

    public function showRegisterPsycholog(Request $request)
    {
        return view("admin-load.register-psycholog");
    }

    public function registerPsycholog(Request $request)
    {
        try {
            $credential = $request->only('email', 'password', 'full_name', 'phone_number');

            $countPsycholog = Psychologs::where("email", $credential['email'])->count();

            if ($countPsycholog) {
                Alert::error('Gagal', 'Email sudah digunakan');
                return redirect()->back();
            } else {
                // Membuat akun
                User::create([
                    'name' => $credential['full_name'],
                    'email' => $credential['email'],
                    'password' => $credential['password'],
                ]);

                Psychologs::create([
                    "full_name" => $credential['full_name'],
                    "email" => $credential['email'],
                    "phone_number" => $credential['phone_number'],
                    "status" => "success",
                    "gender" => "-",
                    "image_url" => ""
                ]);

                Alert::success('Berhasil', 'Akun psikolog berhasil dibuat!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
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
