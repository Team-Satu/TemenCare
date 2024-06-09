<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\KenalanController;
use App\Http\Controllers\LoginIgracias;
use App\Http\Controllers\PsychologController;
use App\Http\Controllers\PsychologyController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureAdminTemenTokenCookieIsValid;
use App\Http\Middleware\EnsureTemenTokenCookieIsValid;
use App\Models\Communities;
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

// Admin & Psycholog Routing - UnAuthenticated
Route::get('/admin', [AdminController::class, 'index'])->name("admin.login");
Route::post('/admin', [AdminController::class, 'login'])->name("admin.login");

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
    Route::get("/create-schedule", [AdminController::class, 'showCreateSchedule'])->name('admin.show-create-schedule');
    Route::post("/create-schedule", [AdminController::class, 'createSchedule'])->name('admin.create-schedule');

    // Show create profile
    Route::get("/create-profile", [AdminController::class, 'showCreateProfile'])->name('admin.show-create-profile');
    Route::post("/create-profile", [AdminController::class, 'createProfile'])->name('admin.create-profile');
    Route::get("/list-profile", [AdminController::class, 'showListProfile'])->name('admin.show-list-profile');
    Route::delete("/delete-profile/{profile_id}", [AdminController::class, 'deleteProfile'])->name('admin.delete-profile');

    // Show create expertise
    Route::get("/create-expertise", [AdminController::class, 'showCreateExpertise'])->name('admin.show-create-expertise');
    Route::post("/create-expertise", [AdminController::class, 'createExpertise'])->name('admin.create-expertise');
    Route::get("/list-expertise", [AdminController::class, 'showListExpertise'])->name('admin.list-expertise');
    Route::delete("/delete-expertise/{expertise_id}", [AdminController::class, 'deleteExpertise'])->name('admin.delete-expertise');

    // Psycholog -> Schedule -> Show List Schedule
    Route::get("/show-schedule", [AdminController::class, 'viewSchedules'])->name("admin.show-schedule");
    Route::get("/show-schedule/{schedule_id}", [AdminController::class, 'viewSpecificSchedules'])->name("admin.show-spicifc-schedule");
    Route::post("/show-schedule/{schedule_id}", [PsychologyController::class, 'updateConsultant'])->name("admin.update-spcifc-schedule");
    Route::post("/finish-schedule/{schedule_id}", [PsychologyController::class, 'consultantSetFinish'])->name("admin.consultant-finish");
    Route::delete("/show-schedule/{schedule_id}", [PsychologyController::class, 'deleteConsultant'])->name("admin.delete-spicifc-schedule");

    // Profile -> Edit Profile
    Route::get("/profile", [AdminController::class, 'showEditProfile'])->name("admin.show-edit-profile");
    Route::post("/profile", [AdminController::class, 'editProfile'])->name("admin.edit-profile");

    // Psycholog -> Schedule -> Edit Schedule
    Route::get("/edit-schedule/{schedule_id}", [AdminController::class, 'showUpdateSchedule'])->name("admin.show-edit-schedule");
    Route::post("/edit-schedule/{schedule_id}", [AdminController::class, 'updateSchedule'])->name("admin.edit-schedule");

    // Psycholog -> Schedule -> Delete Schedule
    Route::delete("/delete-schedule/{schedule_id}", [AdminController::class, 'deleteSchedule'])->name("admin.delete-schedule");
});

// Only admin purpose - Authenticated
Route::middleware(EnsureAdminTemenTokenCookieIsValid::class)->prefix("admin")->group(function () {
    Route::get('/psycholog-schedules', [AdminController::class, 'index'])->name('psycholog-schedules.index');
    Route::get('/psycholog-schedules/create', [AdminController::class, 'create'])->name('psycholog-schedules.create');
    Route::post('/psycholog-schedules', [AdminController::class, 'store'])->name('psycholog-schedules.store');
    Route::get('/psycholog-schedules/{id}/edit', [AdminController::class, 'edit'])->name('psycholog-schedules.edit');
    Route::put('/psycholog-schedules/{id}', [AdminController::class, 'update'])->name('psycholog-schedules.update');
    Route::delete('/psycholog-schedules/{id}', [AdminController::class, 'destroy'])->name('psycholog-schedules.destroy');
    Route::get("/add-psycholog-profile", [AdminController::class, 'showAddProfile'])->name("adminload.add-psycholog-profile");
    Route::get('/psycholog-communities/{community_id}', [AdminController::class, 'showCommunitiesDetail'])->name("adminload.psycholog-communities");
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
    Route::get("/community/{community_id}", [CommunityController::class, 'communityDetail'])->name("user.report");

    Route::get("/article", [ArticleController::class, 'index'])->name("user.article");

    Route::get("/report", [ReportsController::class, 'index'])->name("user.report");
    Route::post("/report", [ReportsController::class, 'addReport'])->name("user.post-report");

    Route::get("/kenalan", [KenalanController::class, 'index'])->name("user.kenalan");
    Route::get("/kenalan/profile", [KenalanController::class, 'profile'])->name("user.profile-kenalan");
    Route::get("/kenalan/{user_id}", [KenalanController::class, 'addKenalan'])->name("user.kenalan-target");
    Route::post("/kenalan", [KenalanController::class, 'upsertProfile'])->name("user.save-kenalan");
    Route::delete("/kenalan", [KenalanController::class, 'deleteProfile'])->name("user.delete-kenalan");

    Route::delete("/report/{report_id}", [ReportsController::class, 'deleteReports'])->name("user.delete-report");
    Route::get("/psycholog/{psycholog_id}", [PsychologyController::class, 'psychologDetail'])->name("user.psycholog-detail");
    Route::post("/psycholog", [PsychologyController::class, 'psychologClaim'])->name("user.psycholog-create");
});

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
