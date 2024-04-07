<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Psychologs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-login');
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

            $countAdmin = Admin::where('email', $email)->count();

            // Check if admin exist
            if ($countAdmin) {
                $user = Admin::where("email", $email)->first();
            } else {
                // Admin doesnt exist
                $countPsycholog = Psychologs::where('email', $email)->count();

                if ($countPsycholog) {
                    $user = Psychologs::where('email', $email)->first();
                } else {
                    Alert::error('Gagal', 'Akun tidak ditemukan!');
                    return redirect()->back();
                }
            }

            // Create token
            $token = $user->createToken("temen_token");
            $plainTextToken = $token->plainTextToken;
            $cookie = cookie('temen_cookie', $plainTextToken, 60 * 24 * 30);

            return redirect(route("admin.dashboard"))->cookie($cookie);
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah dengan akun Anda!');
            return redirect()->back();
        }
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
