<?php

namespace App\Http\Controllers;

use App\Models\Psychologs;
use App\Models\User;
use Illuminate\Http\Request;

class PsychologyController extends Controller
{
    public function psychologDetail(string $psycholog_id)
    {
        $psycholog = Psychologs::where('id', $psycholog_id)->first();
        return view('mobile.psycholog-profile', compact('psycholog')); // Pastikan path ke view benar
    }
}