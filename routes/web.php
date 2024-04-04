<?php

use App\Http\Controllers\LoginIgracias;
use App\Http\Controllers\UserController;
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

// Route::get('/dashboard', function () {
//     return view('mobile-dashboard', ["name" => "Howly"]);
// });

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

Route::get("/home", function () {
    $userName = request()->cookie('temen_cookie');
    return "User Name: $userName";
});

Route::get("/is-valid", function () {
    // $temenUser = request()->attributes->get('temen_user');
    $userId = request()->attributes->get('user_id');

    return "Berhasil masuk $userId";
})->middleware(EnsureTemenTokenCookieIsValid::class);

// Show user profile
Route::get('/user-profile', function () {
    return view('mobile-profile');
});

// Show lapor all
Route::get('/reports', function () {
    return view('mobile-reports');
});
// Show your lapor
Route::get('/your reports', function () {
    return view('mobile-your-reports');
});

Route::get('/articles', function () {
    return view('articles');
});
// Show lapor all
Route::get('/Showlaporankamu', function () {
    return view('mobile-show-laporankamu');
});

// Show articles
Route::get('/articles', function () {
    return view('mobile-articles');
});

// Show communities
Route::get('/communities', function () {
    return view('mobile-communities');
});

Route::post('/Showlaporankamu', [Showlapor::class, 'mobile-show-laporankamu']);

// User Routing - UnAuthenticated
Route::get('/login', [LoginIgracias::class, 'login'])->name("user.login");
Route::post('/login', [LoginIgracias::class, 'loginIgracias']);

// User Routing - Authenticated
Route::middleware(EnsureTemenTokenCookieIsValid::class)->group(function () {
    Route::get("/dashboard", [UserController::class, 'dashboard'])->name("user.dashboard");
    Route::get("/profile", [UserController::class, 'profile'])->name("user.profile");
    Route::get("/logout", [UserController::class, 'logout'])->name("user.logout");
    // Route::get("/is-home", [TemenController::class, 'isHome']);
}); 