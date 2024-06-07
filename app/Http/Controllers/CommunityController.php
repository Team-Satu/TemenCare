<?php

namespace App\Http\Controllers;

use App\Models\Communities;


class CommunityController extends Controller
{
    public function index()
    {
        $communities = Communities::all();
        error_log($communities);
        return view('mobile.community', compact('communities'));
    }
}
