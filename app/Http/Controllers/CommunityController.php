<?php

namespace App\Http\Controllers;

use App\Models\Communities;
use App\Models\CommunityPost;
use App\Models\Psychologs;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Communities::orderBy('created_at', 'desc')->get();
        $communitiesUser = collect();
        foreach ($communities as $key => $community) {
            $user = User::where('id', $community->user_id)->first();
            $psychologs = Psychologs::where('email', $user->email)->first();
            if ($psychologs) {
                $communitiesUser->push(compact('psychologs', 'community'));
            }
        }
        return view('mobile.community', compact('communitiesUser'));
    }

    public function communityDetail(Request $request, string $community_id)
    {
        try {
            $userId = $request->attributes->get('user_id');

            $countCommunity = Communities::where('community_id', $community_id)->count();

            if ($countCommunity < 1) {
                Alert::error('Gagal', 'Tidak ditemukan');
                return redirect()->back();
            }

            $community = Communities::where('community_id', $community_id)->first();
            $communityPost = CommunityPost::where('community_id', $community_id)->orderByDesc('created_at')->get();
            $communityUser = User::where('id', $community->user_id)->first();
            $communityOwner = Psychologs::where('email', $communityUser->email)->first();

            return view('mobile.community-detail', compact('community', 'communityPost', 'communityOwner'));
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }
}
