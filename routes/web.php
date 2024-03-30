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

// Daftar Fitur Kenalan
Route::get('/DaftarKenalan', function () {
    return view('mobile-daftar-fitur-kenalan');
});
Route::post('/DaftarKenalan', [DaftarKenalan::class, 'mobile-daftar-fitur-kenalan']);

// Login user
Route::get('/login', function () {
    return view('login-igracias');
});
Route::post('/login', [LoginIgracias::class, 'loginIgracias']);