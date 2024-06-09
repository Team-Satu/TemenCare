<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use App\Models\Profile;
use App\Models\Psychologs;
use App\Models\User;
use Illuminate\Http\Request;

class PsychologyController extends Controller
{
    public function psychologDetail(string $psycholog_id)
    {
        $psycholog = Psychologs::where('id', $psycholog_id)->first();
        $user = User::where('email', $psycholog->email)->first();
        $expertise = Expertise::where('psycholog_id', $user->id)->get();
        $alumnus = Profile::where(['type' => 'EDUCATION', 'psycholog_id' => $user->id])->get();
        $job = Profile::where(['type' => 'JOB', 'psycholog_id' => $user->id])->get();
        $building = Profile::where(['type' => 'BUILDING', 'psycholog_id' => $user->id])->get();
        $legal = Profile::where(['type' => 'LEGAL', 'psycholog_id' => $user->id])->get();
        return view('mobile.psycholog-profile', compact('psycholog', 'expertise', 'alumnus', 'job', 'building', 'legal'));
    }
}