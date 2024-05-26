<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginIgracias;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureAdminTemenTokenCookieIsValid;
use App\Http\Middleware\EnsureTemenTokenCookieIsValid;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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
    return view("admin-load.register-psycholog");
})->name("admin.register-psycholog");

// Psycholog Schedules
Route::get('/psycholog_schedules', function () {
    return view('admin-load.psycholog-schedules');
})->name("admin-load.psycholog-schedules");

// Admin & Psycholog Routing - Authenticated
Route::middleware(EnsureAdminTemenTokenCookieIsValid::class)->prefix("admin")->group(function () {
    Route::get("/dashboard", [AdminController::class, 'dashboard'])->name("admin.dashboard");
    Route::get("/list-psycholog", [AdminController::class, 'showListPsycholog'])->name("admin.show-list-psycholog");
    Route::get("/change-password-psycholog", [AdminController::class, 'showListPsycholog'])->name("admin.show-list-psycholog");

    Route::delete("/delete-psycholog/{psycholog_id}", [AdminController::class, 'deletePsycholog'])->name("adminload.delete-psycholog");

    Route::get("/logout", [AdminController::class, 'logout'])->name("admin.logout");
});

// Only admin load purpose - Authenticated
Route::middleware(EnsureAdminTemenTokenCookieIsValid::class)->prefix("admin")->group(function () {





    // Membuat akun psikolog
    Route::get("/create-psycholog", [AdminController::class, 'showRegisterPsycholog'])->name("adminload.show-register-psycholog");
    Route::post("/create-psycholog", [AdminController::class, 'registerPsycholog'])->name("adminload.register-psycholog");

    // Membuat komunitas
    Route::get("/create-community", [AdminController::class, 'showCreateCommunity'])->name('admin-load.show-create-community');
    Route::post("/create-community", [AdminController::class, 'createCommunity'])->name('admin-load.create-community');
    
    // Tambah expertise
    Route::get("/create-expertise", [AdminController::class, 'showCreateExpertise'])->name('admin-load.show-create-expertise');
    Route::post("/create-expertise", [AdminController::class, 'createExpertise'])->name('admin-load.create-expertise');

    // // List psycholog
    // Route::get("/list-psycholog", [AdminController::class, 'showListPsycholog'])->name("adminload.show-list-psycholog");

    // List community
    Route::get("/list-community", [AdminController::class, 'showListCommunity'])->name("adminload.show-list-community");

    // List expertise
    Route::get("/list-expertise", [AdminController::class, 'showListExpertise'])->name("adminload.show-list-expertise");

    // Delete psycholog

    // Delete expertise
    Route::delete("/delete-expertise/{expertise_id}", [AdminController::class, 'deleteExpertise'])->name("adminload.delete-expertise");

    // Delete community
    Route::delete("/delete-community/{community_id}", [AdminController::class, 'deleteCommunity'])->name("adminload.delete-community");

    // Change psycholog password
    Route::get("/change-password-psycholog/{psycholog_id}", [AdminController::class, 'getPsychologData'])->name("adminload.show-change-password-psycholog");
    Route::post("/change-password-psycholog", [AdminController::class, 'changePsychologPassword'])->name("adminload.post-change-password-psycholog");
    
    // Edit community detail
    Route::get("/edit-community/{community_id}", [AdminController::class, 'getCommunityData'])->name("admin-load.show-edit-community");
    Route::post("/edit-community", [AdminController::class, 'editCommunityData'])->name("admin-load.edit-community");

    Route::group(['prefix' => 'schedules'], function(){
        Route::get("/", [AdminController::class, 'viewSchedules'])->name("adminload.view-schedules");
        Route::get("/add", [AdminController::class, 'addSchedule'])->name("adminload.add-schedule");
        Route::get("/edit/{id}", [AdminController::class, 'editSchedule'])->name("adminload.edit-schedule");

        Route::post('/', [AdminController::class, 'createSchedule'])->name('adminload.create-schedule');
        Route::put('/{id}', [AdminController::class, 'updateSchedule'])->name('adminload.update-schedule');
        Route::delete('/{id}', [AdminController::class ,'deleteSchedule'])->name('adminload.delete-schedule');

    });

    Route::get('/psycholog-schedules', [AdminController::class, 'index'])->name('psycholog-schedules.index');
    Route::get('/psycholog-schedules/create', [AdminController::class, 'create'])->name('psycholog-schedules.create');
    Route::post('/psycholog-schedules', [AdminController::class, 'store'])->name('psycholog-schedules.store');
    Route::get('/psycholog-schedules/{id}/edit', [AdminController::class, 'edit'])->name('psycholog-schedules.edit');
    Route::put('/psycholog-schedules/{id}', [AdminController::class, 'update'])->name('psycholog-schedules.update');
    Route::delete('/psycholog-schedules/{id}', [AdminController::class, 'destroy'])->name('psycholog-schedules.destroy');


    // Route::get("/dashboard", [AdminController::class, 'loadDashboard'])->name("adminload.dashboard");
    Route::get("/add-psycholog-profile", [AdminController::class, 'showAddProfile'])->name("adminload.add-psycholog-profile");
    Route::get('/psycholog-communities/{community_id}', [AdminController::class, 'showCommunitiesDetail'])->name("adminload.psycholog-communities");
    Route::post('/psycholog-communities/{community_id}', [AdminController::class, 'createCommunityPost'])->name('adminload.psycholog-communities.store');
    Route::put('/psycholog-communities/{post_id}', [AdminController::class, 'updateCommunityPost'])->name('adminload.psycholog-communities.update');
    Route::delete('/psycholog-communities/{post_id}', [AdminController::class, 'deleteCommunityPost'])->name('adminload.psycholog-communities.delete');
    Route::get("/change-psycholog-profile", [AdminController::class, 'changeProfile'])->name("adminload.change-psycholog-profile");
    Route::get("/desktop-communities", [AdminController::class, 'showCommunities'])->name("adminload.desktop-communities");
});

// User Routing - UnAuthenticated
Route::get('/', [PublicController::class, 'index'])->name("public.landing");
Route::get('/login', [LoginIgracias::class, 'login'])->name("user.login");
Route::post('/login', [LoginIgracias::class, 'loginIgracias'])->name("user.login-igracias");

// User Routing - Authenticated
Route::middleware(EnsureTemenTokenCookieIsValid::class)->group(function () {
    Route::get("/dashboard", [UserController::class, 'dashboard'])->name("user.dashboard");
    Route::get("/profile", [UserController::class, 'profile'])->name("user.profile");
    Route::get("/logout", [UserController::class, 'logout'])->name("user.logout");

    // Reports
    Route::get("/reports", [ReportsController::class, 'reports'])->name("user.reports");
    Route::post("/reports", [ReportsController::class, 'addReport'])->name("user.post-report");
});

// Show Landing Page Mobile
Route::get('/lpmobile', function () {
    return view('mobile-landing-page');
});
Route::get("/reports", [UserController::class, 'reports'])->name("user.reports");


// Reports
Route::get("/reports", [ReportsController::class, 'reports'])->name("user.reports");
Route::post("/reports", [ReportsController::class, 'addReport'])->name("user.post-report");
// Route::post("/reports", [ReportsController::class, 'changeReport'])->name("user.change-report");
Route::delete("/reports", [ReportsController::class, 'deleteReports'])->name("user.delete-report");


// Reports
Route::get("/reports", [ReportsController::class, 'reports'])->name("user.reports");
Route::get("/your reports", [ReportsController::class, 'yourReports'])->name("user.reports");
Route::post("/reports", [ReportsController::class, 'addReport'])->name("user.post-report");
// Route::post("/reports", [ReportsController::class, 'changeReport'])->name("user.change-report");
// Route::post("/reports", [ReportsController::class, 'deleteReport'])->name("user.delete-report");


// show rating and feedback
Route::get('/rating', function () {
    return view('mobile-show-rating');
});
Route::get('/your rating', function () {
    return view('mobile-your-rating');
});
Route::get('/add rating', function () {
    return view('mobile-add-rating');
});
// Show Landing Page Desktop
Route::get('/lpdesktop', function () {
    return view('desktop-landing-page');
});


//Show Psycholog Profile
Route::get('/psycholog-profile', function () {
    return view('mobile-psychologs-expertise');
});

//Show Psycholog Profile
Route::get('/consultation-detail', function () {
    return view('mobile-consultation-detail');
});

// Show Communities Desktop
Route::get('/psycholog-communities', function () {
    return view('psycholog-communities');
});

Route::post('/cancel-consultation', [PsychologController::class, 'cancelConsultation'])->name('consultation.cancel');
use App\Http\Controllers\PsychologController;



