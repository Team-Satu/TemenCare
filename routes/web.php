<?php

use App\Http\Controllers\LoginIgracias;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template-mobile-view');
});

Route::get('/dashboard', function () {
    return view('mobile-dashboard', ["name" => "Howly"]);
});

// Login user
Route::get('/login', function () {
    return view('login-igracias');
});
Route::post('/login', [LoginIgracias::class, 'loginIgracias']);

// Show lapor all
Route::get('/reports', function () {
    return view('mobile-reports');
});
Route::post('/Showlapor', [Showlapor::class, 'mobile-show-lapor-all']);

// Show lapor all
Route::get('/Showlaporankamu', function () {
    return view('mobile-show-laporankamu');
});
Route::post('/Showlaporankamu', [Showlapor::class, 'mobile-show-laporankamu']);