<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Acquaintances;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KenalanController extends Controller
{
    public function profile(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $user = User::where('id', $userId)->first();
            $account = Accounts::where('email', $user->email)->first();
            $nomorTelepon = "";
            $countKenalan = Acquaintances::where('user_id', $userId)->count();
            $kenalan = Acquaintances::where('user_id', $userId)->first();

            // Pastikan $kenalan tidak null sebelum mengakses properti
            if ($kenalan) {
                $nomorTelepon = $kenalan->whatsapp_number ?: '';
            }

            return view('mobile.kenalan-profile', compact('account', 'countKenalan', 'nomorTelepon'));
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function index(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $user = User::where('id', $userId)->first();
            $account = Accounts::where('email', $user->email)->first();
            $nomorTelepon = "";
            $countKenalan = Acquaintances::where('user_id', $userId)->count();

            if ($countKenalan) {
                return view('mobile.kenalan-dashboard');
            }

            $kenalan = Acquaintances::where('user_id', $userId)->first();

            // Pastikan $kenalan tidak null sebelum mengakses properti
            if ($kenalan) {
                $nomorTelepon = $kenalan->whatsapp_number ?: '';
            }

            return view('mobile.kenalan-profile', compact('account', 'countKenalan', 'nomorTelepon'));
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function deleteProfile(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            Acquaintances::where('user_id', $userId)->delete();
            return redirect(route('user.dashboard'));
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function upsertProfile(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');

            if (!$request->whatsapp_number || strlen($request->whatsapp_number) < 1) {
                Alert::error('Gagal', 'Harap isi nomor WhatsApp!');
                return redirect()->back();
            }

            $countKenalan = Acquaintances::where('user_id', $userId)->count();

            if ($countKenalan) {
                Acquaintances::where("user_id", $userId)->update([
                    "whatsapp_number" => $request->whatsapp_number
                ]);
            } else {
                Acquaintances::create(["user_id" => $userId, "whatsapp_number" => $request->whatsapp_number, "poke_total" => 0]);
            }

            return redirect(route('user.kenalan'));
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }
}
