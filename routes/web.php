<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginIgracias;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\CommunityController;
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
Route::get('/persetujuan-kenalan', function () {
    return view('mobile-kenalan-persetujuan');
});
Route::post('/persetujuan-kenalan', [persetujuankenalan::class, 'mobile-kenalan-persetujuan']);

Route::get('/daftar-kenalan', function () {
    return view('mobile-daftar-fitur-kenalan');
});
Route::post('/daftar-kenalan', [daftarkenalan::class, 'mobile-daftar-fitur-kenalan']);

// Halaman Kenalan
Route::get('/halaman-kenalan', function () {
    return view('mobile-halaman-kenalan');
});

Route::get('/ubah-profile-kenalan', function () {
    return view('mobile-halaman-kenalan-ubahprofile');
});
Route::post('/ubah-profile-kenalan', [daftarkenalan::class, 'mobile-halaman-kenalan-ubahprofile']);

Route::get('/kenalan-kamu', function () {
    return view('mobile-halaman-kenalankamu');
});

Route::get('/berhenti-kenalan', function () {
    return view('mobile-kenalan-berhentikenalan');
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
// Route::get('/communities', [CommunityController::class, 'index'])
//      ->name('communities.index');
Route::get('/communities', function () {
    return view('mobile-communities');
});

// Show communities detail
// Route::get('/communities/{community}', [CommunityController::class, 'show'])
//      ->name('communities.show');
Route::get('/communities-detail', function () {
    return view('mobile-communities-detail');
});

Route::post('/Showlaporankamu', [Showlapor::class, 'mobile-show-laporankamu']);

// Admin & Psycholog Routing - UnAuthenticated
Route::get('/admin', [AdminController::class, 'index'])->name("admin.login");
Route::post('/admin', [AdminController::class, 'login'])->name("admin.login");

Route::get('/register-psycholog', function () {
    return view("admin-register-psycholog");
})->name("admin.register-psycholog");

// Admin & Psycholog Routing - Authenticated
Route::middleware(EnsureTemenTokenCookieIsValid::class)->prefix("admin")->group(function () {
    Route::get("/dashboard", [AdminController::class, 'dashboard'])->name("admin.dashboard");
    Route::get("/logout", [AdminController::class, 'logout'])->name("admin.logout");
});

// Only admin load purpose - Authenticated
Route::middleware(EnsureTemenTokenCookieIsValid::class)->prefix("admin/load")->group(function () {
    // Membuat akun psikolog
    Route::get("/create-psycholog", [AdminController::class, 'showRegisterPsycholog'])->name("adminload.show-register-psycholog");
    Route::post("/create-psycholog", [AdminController::class, 'registerPsycholog'])->name("adminload.register-psycholog");
    
    // List psycholog
    Route::get("/list-psycholog", [AdminController::class, 'showListPsycholog'])->name("adminload.show-list-psycholog");
    
    // Delete psycholog
    Route::delete("/delete-psycholog/{psycholog_id}", [AdminController::class, 'deletePsycholog'])->name("adminload.delete-psycholog");

    Route::get("/dashboard", [AdminController::class, 'loadDashboard'])->name("adminload.dashboard");
});

// User Routing - UnAuthenticated
Route::get('/login', [LoginIgracias::class, 'login'])->name("user.login");
Route::post('/login', [LoginIgracias::class, 'loginIgracias']);

// User Routing - Authenticated
Route::middleware(EnsureTemenTokenCookieIsValid::class)->group(function () {
    Route::get("/dashboard", [UserController::class, 'dashboard'])->name("user.dashboard");
    Route::get("/profile", [UserController::class, 'profile'])->name("user.profile");
    Route::get("/logout", [UserController::class, 'logout'])->name("user.logout");
});

// show rating and feedback
Route::get('/rating', function () {
    return view('mobile-show-rating');
});
Route::get('/your rating', function () {
    return view('mobile-your-rating');
});