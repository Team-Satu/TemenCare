<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\LoginIgracias;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureAdminTemenTokenCookieIsValid;
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

// Daftar Fitur Kenalan
Route::get('/persetujuan-kenalan', function () {
    return view('mobile-kenalan-persetujuan');
});

Route::get('/daftar-kenalan', function () {
    return view('mobile-daftar-fitur-kenalan');
});

// Halaman Kenalan
Route::get('/halaman-kenalan', function () {
    return view('mobile-halaman-kenalan');
});

Route::get('/ubah-profile-kenalan', function () {
    return view('mobile-halaman-kenalan-ubahprofile');
});

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

Route::get('/communities', function () {
    return view('mobile-communities');
});

Route::get('/communities-detail', function () {
    return view('mobile-communities-detail');
});


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

    // Admin/Psycholog -> logout
    Route::get("/logout", [AdminController::class, 'logout'])->name("admin.logout");

    // Admin -> Psycholog -> List Psycholog
    Route::get("/list-psycholog", [AdminController::class, 'showListPsycholog'])->name("admin.show-list-psycholog");

    // Admin -> Psycholog -> Change Psycholog Password
    Route::post("/change-password-psycholog", [AdminController::class, 'changePsychologPassword'])->name("admin.post-change-password-psycholog");
    Route::get("/change-password-psycholog/{psycholog_id}", [AdminController::class, 'getPsychologData'])->name("adminload.show-change-password-psycholog");

    // Admin -> Psycholog -> Delete Psycholog
    Route::delete("/delete-psycholog/{psycholog_id}", [AdminController::class, 'deletePsycholog'])->name("adminload.delete-psycholog");

    // Admin -> Psycholog -> Create Psycholog
    Route::get("/create-psycholog", [AdminController::class, 'showRegisterPsycholog'])->name("admin.show-register-psycholog");
    Route::post("/create-psycholog", [AdminController::class, 'registerPsycholog'])->name("admin.register-psycholog");

    // Psycholog -> Community -> List Community
    Route::get("/list-community", [AdminController::class, 'showListCommunity'])->name("admin.show-list-community");

    // Psycholog -> Community -> Create Community
    Route::get("/create-community", [AdminController::class, 'showCreateCommunity'])->name('admin.show-create-community');
    Route::post("/create-community", [AdminController::class, 'createCommunity'])->name('admin.create-community');

    // Psycholog -> Community -> Edit Community
    Route::get("/edit-community/{community_id}", [AdminController::class, 'getCommunityData'])->name("admin.show-edit-community");
    Route::post("/edit-community", [AdminController::class, 'editCommunityData'])->name("admin.edit-community");

    // Psycholog -> Community -> Delete Community
    Route::delete("/delete-community/{community_id}", [AdminController::class, 'deleteCommunity'])->name("admin.delete-community");

    // Psycholog -> Community -> Community Post -> List Post
    Route::get("/community-post/{community_id}", [AdminController::class, 'showCommunityPost'])->name("admin.show-list-community-post");

    // Psycholog -> Community -> Community Post -> Create Post
    Route::get("/community-post/{community_id}/create-post", [AdminController::class, 'showCreateCommunityPost'])->name("admin.create-community-post");
    Route::post("/community-post/{community_id}/create-post", [AdminController::class, 'createPostCommunity'])->name("admin.post-create-community-post");

    // Psycholog -> Community -> Community Post -> Delete Post
    Route::delete("/community-post/{post_id}", [AdminController::class, 'deleteCommunityPost'])->name("admin.delete-community-post");

    // Psycholog -> Community -> Community Post -> Change Post
    Route::get("/community-post/{community_id}/post/{post_id}", [AdminController::class, 'showChangeCommunityPost'])->name("admin.show-change-community-post");
    Route::post("/community-post/{community_id}/post/{post_id}", [AdminController::class, 'changeCommunityPost'])->name("admin.change-community-post");

    // Psycholog -> Articles -> Create Article
    Route::get("/create-article", [AdminController::class, 'showCreateArticle'])->name("admin.show-create-article");
    Route::post("/create-article", [AdminController::class, 'createArticle'])->name("admin.create-article");

    // Psycholog -> Articles -> Show List Article
    Route::get("/articles", [AdminController::class, 'showListArticle'])->name("admin.show-list-article");

    // Psycholog -> Articles -> Edit Article
    Route::get("/edit/article/{article_id}", [AdminController::class, 'showEditArticle'])->name("admin.show-edit-article");
    Route::post("/edit/article/{article_id}", [AdminController::class, 'updateArticle'])->name("admin.edit-article");

    // Psycholog -> Articles -> Delete Article
    Route::delete("/delete-article/{article_id}", [AdminController::class, 'deleteArticle'])->name("admin.delete-article");

    // Psycholog -> Schedule -> Create Schedule
    Route::get("/create-schedule", [AdminController::class, 'viewSchedules'])->name('admin.show-schedule');
    Route::post("/create-schedule", [AdminController::class, 'createSchedule'])->name('admin.create-schedule');
});

// Only admin load purpose - Authenticated
Route::middleware(EnsureAdminTemenTokenCookieIsValid::class)->prefix("admin")->group(function () {





    // Membuat akun psikolog


    // Membuat komunitas


    // Tambah expertise
    Route::get("/create-expertise", [AdminController::class, 'createExpertise'])->name('admin-load.show-create-expertise');
    Route::post("/create-expertise", [AdminController::class, 'createExpertise'])->name('admin-load.create-expertise');

    // // List psycholog
    // Route::get("/list-psycholog", [AdminController::class, 'showListPsycholog'])->name("adminload.show-list-psycholog");

    // List community

    // List expertise
    Route::get("/list-expertise", [AdminController::class, 'showListExpertise'])->name("admin-load.show-list-expertise");

    // Delete psycholog

    // Delete expertise
    Route::delete("/delete-expertise/{expertise_id}", [AdminController::class, 'deleteExpertise'])->name("adminload.delete-expertise");

    Route::group(['prefix' => 'schedules'], function () {
        Route::get("/", [AdminController::class, 'viewSchedules'])->name("adminload.view-schedules");
        Route::get("/add", [AdminController::class, 'addSchedule'])->name("adminload.add-schedule");
        Route::get("/edit/{id}", [AdminController::class, 'editSchedule'])->name("adminload.edit-schedule");

        Route::post('/', [AdminController::class, 'createSchedule'])->name('adminload.create-schedule');
        Route::put('/{id}', [AdminController::class, 'updateSchedule'])->name('adminload.update-schedule');
        Route::delete('/{id}', [AdminController::class, 'deleteSchedule'])->name('adminload.delete-schedule');

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
    // Route::post('/psycholog-communities/{community_id}', [AdminController::class, 'createCommunityPost'])->name('adminload.psycholog-communities.store');
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

    Route::get("/community", [CommunityController::class, 'index'])->name("user.community");
    Route::get("/article", [ArticleController::class, 'index'])->name("user.article");

    Route::get("/report", [ReportsController::class, 'index'])->name("user.report");
    Route::post("/report", [ReportsController::class, 'addReport'])->name("user.post-report");

    // // Reports
    // Route::get("/reports", [ReportsController::class, 'reports'])->name("user.reports");
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
