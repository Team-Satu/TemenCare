<?php

namespace App\Http\Controllers;

use App\Models\Communities;


class CommunityController extends Controller
{
    public function index()
    {
        $communities = Communities::all();
        return view('mobile.community', compact('communities'));
    }

    // Method for displaying a single community
    // public function show(Communities $community)
    // {
    //     return view('mobile-communities-detail', compact('community'));
    // }
    
}
