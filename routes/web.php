<?php

use App\Http\Controllers\LoginIgracias;
use App\Http\Middleware\EnsureTemenTokenCookieIsValid;
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

Route::get("/home", function () {
    $userName = request()->cookie('temen_cookie');
    return "User Name: $userName";
});

Route::get("/is-valid", function () {
    return "Berhasil masuk";
})->middleware(EnsureTemenTokenCookieIsValid::class);

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