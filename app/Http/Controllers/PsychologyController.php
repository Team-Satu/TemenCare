<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsychologyController extends Controller
{
    public function add()
    {
        return view('admin-load\create-expertise'); // Pastikan path ke view benar
    }
}