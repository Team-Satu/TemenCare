<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Acquaintances;
use App\Models\AcquaintancesLog;
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

    public function addKenalan(Request $request, string $user_id)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $user = User::where('id', $userId)->first();
            $account = Accounts::where('email', $user->email)->first();
            $kenalan = Acquaintances::where('user_id', $userId)->first();

            $targetUser = User::where('id', $user_id)->first();
            $targetAccount = Accounts::where('email', $targetUser->email)->first();
            $targetKenalan = Acquaintances::where('user_id', $user_id)->first();

            $searchHistory = AcquaintancesLog::where(["from_user" => $userId, "to_user" => $user_id])->count();
            if ($searchHistory < 1) {
                Acquaintances::where('user_id', $user_id)->update([
                    "poke_total" => $targetKenalan->poke_total + 1,
                ]);
                AcquaintancesLog::create(['from_user' => $userId, "to_user" => $user_id, "from_whatsapp_number" => $kenalan->whatsapp_number, 'to_whatsapp_number' => $targetKenalan->whatsapp_number]);
            }

            return redirect("https://api.whatsapp.com/send/?phone=" . $targetKenalan->whatsapp_number . "&text=" . urlencode('Hai ' . $targetAccount['name'] . ', saya ' . $account['name'] . ', pengen kenalan dong!') . "&type=phone_number&app_absent=0");
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function allKenalan(string $userId)
    {
        $allKenalan = Acquaintances::where('user_id', '!=', $userId)->get();
        $kenalanCollect = collect();
        foreach ($allKenalan as $key => $kenalan) {
            $user = User::where('id', $kenalan->user_id)->first();
            $account = Accounts::where('email', $user->email)->first();
            if ($user) {
                $kenalanCollect->push(compact('user', 'kenalan', 'account'));
            }
        }
        return $kenalanCollect;
    }

    public function myKenalan(string $userId)
    {
        $allKenalan = AcquaintancesLog::where('to_user', $userId)->get();
        $kenalanCollect = collect();
        foreach ($allKenalan as $key => $kenalan) {
            $kenalanProfile = Acquaintances::where('user_id', $kenalan->from_user)->first();
            $user = User::where('id', $kenalan->from_user)->first();
            $account = Accounts::where('email', $user->email)->first();
            if ($user) {
                $kenalanCollect->push(compact('user', 'kenalan', 'account', 'kenalanProfile'));
            }
        }
        return $kenalanCollect;
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
                $allKenalan = $this->allKenalan($userId);
                $myKenalan = $this->myKenalan($userId);
                $countMyKenalan = AcquaintancesLog::where("to_user", $userId)->count();
                return view('mobile.kenalan-dashboard', compact('account', 'user', 'allKenalan', 'myKenalan', 'countMyKenalan'));
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
