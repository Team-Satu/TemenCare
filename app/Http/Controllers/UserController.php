<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Consultant;
use App\Models\Expertise;
use App\Models\Psychologs;
use App\Models\PsychologSchedule;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $userId = request()->attributes->get('user_id');
        $user = User::where('id', $userId)->first();
        $account = Accounts::where('email', $user->email)->first();
        $psychologAll = Psychologs::all();
        $psychologs = collect();
        foreach ($psychologAll as $key => $psycholog) {
            $user = User::where('email', $psycholog->email)->first();
            $expertise = Expertise::where('psycholog_id', $user->id)->get();
            if ($expertise) {
                $psychologs->push(compact('expertise', 'psycholog'));
            }
        }
        return view('mobile.dashboard', compact('account', 'psychologs'));
    }

    public function historyConsultant(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $historyAll = Consultant::where('user_id', $userId)->get();
            $history = collect();
            foreach ($historyAll as $key => $hist) {
                $psycholog = Psychologs::where('id', $hist->psycholog_id)->first();
                $schedule = PsychologSchedule::where('schedule_id', $hist->schedule_id)->first();
                if ($psycholog) {
                    $history->push(compact('psycholog', 'hist', 'schedule'));
                }
            }
            return view('mobile.history', compact('history'));
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
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
