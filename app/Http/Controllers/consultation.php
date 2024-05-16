<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PsychologController extends Controller
{
    public function cancelConsultation(Request $request)
    {
        // Lakukan logika pembatalan konseling di sini
        // Contoh: update status konseling di database
    
        // Redirect ke dashboard setelah pembatalan konseling
        return Redirect::route('user.dashboard')->with('success', 'Konseling telah dibatalkan.');
    }
}
