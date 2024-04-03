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

// Daftar Fitur Kenalan
Route::get('/DaftarKenalan', function () {
    return view('mobile-daftar-fitur-kenalan');
});
Route::post('/DaftarKenalan', [DaftarKenalan::class, 'mobile-daftar-fitur-kenalan']);

// Halaman Kenalan
Route::get('/Halamankenalan', function () {
    return view('mobile-halaman-kenalan');
});

Route::get('/Kenalankamu', function () {
    return view('mobile-halaman-kenalankamu');
});

// Login user
Route::get('/login', function () {
    return view('login-igracias');
});
Route::post('/login', [LoginIgracias::class, 'loginIgracias']);

// Show user profile
Route::get('/user-profile', function () {
    return view('mobile-profile');
});

// Show lapor all
Route::get('/Showlapor', function () {
    return view('mobile-show-lapor-all');
});

// Show lapor all
Route::get('/Showlaporankamu', function () {
    return view('mobile-show-laporankamu');
});

// Show articles
Route::get('/articles', function () {
    return view('mobile-articles');
});

Route::post('/Showlaporankamu', [Showlapor::class, 'mobile-show-laporankamu']);