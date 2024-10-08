<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Admin;
use App\Models\Articles;
use App\Models\Communities;
use App\Models\Consultant;
use App\Models\Expertise;
use App\Models\Profile;
use App\Models\Psychologs;
use App\Models\CommunityPost;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\PsychologSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin-login');
    }

    // PASSED
    public function showCreateCommunity()
    {
        return view("admin.create-community");
    }

    // PASSED
    public function showCreateProfile()
    {
        return view("admin.create-profile");
    }

    // PASSED
    public function showCreateExpertise()
    {
        return view("admin.create-expertise");
    }

    public function viewSpecificSchedules(Request $request, string $schedule_id)
    {
        try {
            $schedule = PsychologSchedule::where('schedule_id', $schedule_id)->first();
            $consultant = Consultant::where('schedule_id', $schedule_id)->first();
            $user = User::where('id', $consultant->user_id)->first();
            $account = Accounts::where('email', $user->email)->first();
            return view('admin.specific-schedule', compact('schedule', 'consultant', 'account'));
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function createProfile(Request $request)
    {
        try {
            $type = $request['type'];
            $title = trim($request['title']);
            $userId = $request->attributes->get('user_id');
            if ($type && $title) {
                Profile::create([
                    "psycholog_id" => $userId,
                    "type" => $type,
                    "title" => $title,
                    "description" => ""
                ]);
                Alert::success('Berhasil', 'Profile ' . $title . ' berhasil dibuat!');
                return redirect()->back();
            } else {
                Alert::error('Gagal', 'Profile ' . $title . ' gagal dibuat!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function showListProfile(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $profiles = Profile::where('psycholog_id', $userId)->get();

            return view('admin.list-profile', ["profiles" => $profiles]);
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function showListExpertise(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $expertises = Expertise::where('psycholog_id', $userId)->get();

            return view('admin.list-expertise', ["expertises" => $expertises]);
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function createExpertise(Request $request)
    {
        try {
            $expertise = trim($request['expertise']);
            $userId = $request->attributes->get('user_id');

            if ($expertise) {
                Expertise::create([
                    "psycholog_id" => $userId,
                    "expertise" => $expertise
                ]);
                Alert::success('Berhasil', 'Expertise ' . $expertise . ' berhasil dibuat!');
                return redirect()->back();
            } else {
                Alert::error('Gagal', 'Expertise ' . $expertise . ' gagal dibuat!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function createCommunity(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'description' => 'required|string',
                'short_description' => 'required|string',
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi hanya untuk gambar
            ]);
            $userId = $request->attributes->get('user_id');

            $name = trim($request['name']);
            $shortDescription = trim($request['short_description']);
            $description = trim($request['description']);
            $imageName = time() . '.' . $request->file('image')->extension();

            $request->image->move(public_path('images'), $imageName);

            if ($name && $shortDescription && $description && $imageName) {
                $communityByName = Communities::where("name", $name)->count();
                if (!$communityByName) {
                    Communities::create([
                        "user_id" => $userId,
                        "name" => $name,
                        "short_description" => $shortDescription,
                        "description" => $description,
                        "image_url" => $imageName,
                    ]);
                    Alert::success('Berhasil', 'Komunitas ' . $name . ' berhasil dibuat!');
                    return redirect()->back();
                } else {
                    Alert::error('Gagal', 'Komunitas ' . $name . ' gagal dibuat!');
                    return redirect()->back();
                }
            } else {
                Alert::error('Gagal', 'harap isi semua!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function createPostCommunity(Request $request, string $community_id)
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
            ]);
            $title = trim($request['title']);
            $description = trim($request['description']);

            if ($title && $description) {
                CommunityPost::create([
                    "community_id" => $community_id,
                    "title" => $title,
                    "post" => $description,
                ]);
                Alert::success('Berhasil', 'Postingan baru berhasil dibuat!');
                return redirect()->route('admin.show-list-community-post', ["community_id" => $community_id]);
            } else {
                Alert::error('Gagal', 'harap isi semua!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // Admin logout
    public function logout()
    {
        // Redirect and remove cookie
        return redirect(route("admin.login"))->withCookie(Cookie::forget('temen_cookie'));
    }

    // PASSED
    public function getPsychologData(Request $request, string $psycholog_id)
    {
        try {
            $psycholog = Psychologs::where("id", $psycholog_id)->first();
            return view("admin.change-password-psycholog", ["psycholog" => $psycholog]);
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Akun tidak ditemukan');
            return redirect()->back();
        }
    }

    // PASSED
    public function editCommunityData(Request $request)
    {
        try {
            $request->validate([
                'community_id' => 'required|string',
                'name' => 'required|string',
                'description' => 'required|string',
                'short_description' => 'required|string',
            ]);
            $userId = $request->attributes->get('user_id');
            $communityId = trim($request['community_id']);
            $name = trim($request['name']);
            $shortDescription = trim($request['short_description']);
            $description = trim($request['description']);

            if ($name && $shortDescription && $description && $communityId) {
                $community = Communities::where("community_id", $communityId)->first();
                if ($community && $community['user_id'] == $userId) {
                    $community->name = $name;
                    $community->short_description = $shortDescription;
                    $community->description = $description;

                    if ($request->image) {
                        $imageName = time() . '.' . $request->file('image')->extension();
                        $request->image->move(public_path('images'), $imageName);

                        $community->image_url = $imageName;
                    }

                    $community->save();

                    Alert::success('Berhasil', 'Komunitas ' . $name . ' berhasil diperbarui!');
                    return redirect()->back();
                } else {
                    Alert::error('Gagal', 'Komunitas ' . $name . ' gagal diperbarui!');
                    return redirect()->back();
                }
            } else {
                Alert::error('Gagal', 'harap isi semua!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function getCommunityData(Request $request, string $community_id)
    {
        try {
            $community = Communities::where("community_id", $community_id)->first();
            return view("admin.edit-community", ["community" => $community]);
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Akun tidak ditemukan');
            return redirect()->back();
        }
    }

    // PASSED
    public function changePsychologPassword(Request $request)
    {
        try {
            if ($request->new_password == $request->password) {
                $user = User::where('email', $request->email)->first();

                $user->password = Hash::make($request->password);
                $user->save();

                Alert::success('Berhasil', 'Kata sandi berhasil diubah');
                return redirect()->back();
            } else {
                Alert::error('Gagal', 'Password tidak sama');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Akun tidak ditemukan');
            return redirect()->back();
        }
    }

    // PASSED
    public function changeCommunityPost(Request $request, string $community_id, string $post_id)
    {
        try {
            if ($post_id) {
                $communityPost = CommunityPost::where('post_id', $post_id)->first();

                $communityPost->title = $request->title;
                $communityPost->post = $request->description;
                $communityPost->save();

                Alert::success('Berhasil', 'Postingan berhasil diubah');
                return redirect()->back();
            } else {
                Alert::error('Gagal', 'Bermasalah');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Postingan tidak ditemukan');
            return redirect()->back();
        }
    }

    // PASSED
    public function login(Request $request)
    {
        try {
            /**
             * Karena berbeda role, maka akan dilakukan pengecekan
             * di kedua tabel. Yakni tabel psychologs dan admin.
             */

            // Admin
            $credential = $request->only('email', 'password');

            $email = $credential['email'];
            $password = $credential['password'];

            if (empty($email) || empty($password)) {
                Alert::error('Harap Isi!', 'Email atau password harus diisi!');
                return redirect()->back();
            }

            // Admin/psycholog login
            $user = Auth::attempt(['email' => $email, 'password' => $password]);

            if ($user) {
                $admin = Admin::where('email', $email)->count();

                if (!$admin) {
                    // Admin tidak ditemukan
                    $countPsycholog = Psychologs::where('email', $email)->count();

                    if (!$countPsycholog) {
                        Alert::error('Gagal', 'Akun tidak ditemukan!');
                        return redirect()->back();
                    }
                }
            } else {
                Alert::error('Gagal', 'Email/kata sandi Anda salah!');
                return redirect()->back();
            }

            // Membuat token
            $user = Auth::user();
            $token = $user->createToken("temen_token");

            $plainTextToken = $token->plainTextToken;
            $cookie = cookie('temen_cookie', $plainTextToken, 60 * 24 * 30);

            return redirect(route("admin.dashboard"))->cookie($cookie);
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah dengan akun Anda!');
            return redirect()->back();
        }
    }

    // PASSED
    public function dashboard(Request $request)
    {
        $userId = $request->attributes->get('user_id');
        $user = User::where('id', $userId)->first();
        $emailAdmin = env('ADMIN_EMAIL');

        $accountTotal = User::count();
        $userTotal = Accounts::count();
        $psychologTotal = Psychologs::count();

        $role = "psycholog";
        $user;

        if ($user->email === $emailAdmin) {
            $role = "admin";
            $user = Admin::where("email", $user->email)->first();
        } else {
            $user = Psychologs::where("email", $user->email)->first();
        }

        return view("admin.dashboard", ["role" => $role, "user" => $user, "account_total" => $accountTotal, "user_total" => $userTotal, "psycholog_total" => $psychologTotal]);
    }

    public function updateCommunityPost(Request $request, $post_id)
    {
        // dd($request);
        try {
            // Validasi data
            // $request->validate([
            //     'post' => 'required|string',
            // ]);

            // $post_id = Auth::id();  // Mendapatkan ID pengguna yang sedang login

            // dd($post_id);
            // Ambil data dari request
            $postContent = trim($request->input('update'));

            if ($postContent && $post_id) {
                // Cari postingan berdasarkan ID
                $community_post = CommunityPost::where("post_id", $post_id)->first();

                if ($community_post && $community_post->post_id == $post_id) {
                    // Update data
                    CommunityPost::where('post_id', $post_id)->update(['post' => $postContent]);
                    // $community_post->post = $postContent;
                    // $community_post->save();

                    Alert::success('Berhasil', 'Postingan berhasil diperbarui!');
                    return redirect()->back();
                } else {
                    Alert::error('Gagal', 'Postingan gagal diperbarui!');
                    return redirect()->back();
                }
            } else {
                Alert::error('Gagal', 'Harap isi semua!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            // Log error
            \Log::error($th);
            Alert::error($th->getMessage());
            return redirect()->back();
        }
    }

    // PASSED
    public function deleteProfile(Request $request)
    {
        try {
            Profile::where('profile_id', $request->profile_id)->delete();
            Alert::success('Berhasil', 'Profile berhasil dihapus!');
            return redirect()->back();
        } catch (\Throwable $th) {
            Alert::error($th->getMessage());
            return redirect()->back();
        }
    }

    // PASSED
    public function deleteCommunityPost(string $post_id)
    {
        try {
            CommunityPost::where('post_id', $post_id)->delete();
            Alert::success('Berhasil', 'Postingan berhasil dihapus!');
            return redirect()->back();
        } catch (\Throwable $th) {
            Alert::error($th->getMessage());
            return redirect()->back();
        }
    }

    public function showCommunitiesDetailnoID()
    {
        return view("admin-load.psycholog-communities");
    }

    // PASSED
    public function showRegisterPsycholog(Request $request)
    {
        return view("admin.create-psycholog");
    }

    // PASSED
    public function showCreateCommunityPost(Request $request, string $community_id)
    {
        $community = Communities::where('community_id', $community_id)->first();
        return view("admin.create-community-post", compact("community"));
    }

    // PASSED
    public function showCreateArticle(Request $request)
    {
        return view("admin.create-article");
    }

    // PASSED
    public function showListArticle(Request $request)
    {
        $userId = $request->attributes->get('user_id');
        $listArticle = Articles::where('user_id', $userId)->get();

        return view("admin.list-article", ['articles' => $listArticle]);
    }

    // PASSED
    public function updateArticle(Request $request, string $article_id)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $title = trim($request['title']);
            $category = trim($request['category']);
            $url = trim($request['url']);

            if ($title && $category && $url) {
                $article = Articles::where("article_id", $article_id)->first();
                if ($article && $article['user_id'] == $userId) {
                    $article->title = $title;
                    $article->category = $category;
                    $article->url = $url;

                    if ($request->image) {
                        $imageName = time() . '.' . $request->file('image')->extension();
                        $request->image->move(public_path('images'), $imageName);

                        $article->image_url = $imageName;
                    }

                    $article->save();
                    Alert::success('Berhasil', 'Artikel ' . $title . ' berhasil diperbarui!');
                    return redirect()->back();
                } else {
                    Alert::error('Error', 'Artikel ' . $title . ' gagal diperbarui!');
                    return redirect()->back();
                }
            } else {
                Alert::error('Gagal', 'Harap isi semua!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            error_log($th);
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function createArticle(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $title = trim($request['title']);
            $category = trim($request['category']);
            $url = trim($request['url']);
            $imageName = time() . '.' . $request->file('image')->extension();

            $request->image->move(public_path('images'), $imageName);

            if ($title && $category && $url && $imageName) {
                Articles::create([
                    "user_id" => $userId,
                    "title" => $title,
                    "url" => $url,
                    "category" => $category,
                    "image_url" => $imageName,
                ]);
                Alert::success('Berhasil', 'Artikel ' . $title . ' berhasil dibuat!');
                return redirect()->back();
            } else {
                Alert::error('Gagal', 'Harap isi semua!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah');
            return redirect()->back();
        }
    }

    // PASSED
    public function showEditArticle(Request $request, string $article_id)
    {
        $article = Articles::where('article_id', $article_id)->first();
        return view('admin.edit-article', compact('article'));
    }

    // PASSED
    public function showChangeCommunityPost(Request $request, string $community_id, string $post_id)
    {
        $communityPost = CommunityPost::where('post_id', $post_id)->first();
        return view("admin.change-community-post", ["post" => $communityPost, "post_id" => $post_id, "community_id" => $community_id]);
    }

    // PASSED
    public function showListPsycholog(Request $request)
    {
        $psychologList = Psychologs::get();
        $role = $request->attributes->get('role');
        $user = $request->attributes->get('user');
        return view("admin.list-psycholog", ["psychologs" => $psychologList, "role" => $role, "user" => $user]);
    }

    // PASSED
    public function showCommunityPost(Request $request, string $community_id)
    {
        $communityPostList = CommunityPost::where('community_id', $community_id)->get();
        $community = Communities::where('community_id', $community_id)->first();
        return view("admin.list-community-post", ["posts" => $communityPostList, 'community' => $community]);
    }

    // PASSED
    public function showListCommunity(Request $request)
    {
        $userId = $request->attributes->get("user_id");
        $communityList = Communities::where("user_id", $userId)->get();
        return view("admin.list-community", ["communities" => $communityList]);
    }

    public function showAddProfile()
    {
        return view("admin-load.add-psycholog-profile");
    }
    public function changeProfile()
    {
        return view("admin-load.change-psycholog-profile");
    }

    // PASSED
    public function deleteArticle(Request $request, string $article_id)
    {
        try {
            Articles::where("article_id", $article_id)->delete();
            Alert::success('Berhasil', 'Artikel berhasil dihapus!');
            return;
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah dengan akun Anda!');
            return;
        }
    }

    // PASSED
    public function deleteCommunity(Request $request, string $community_id)
    {
        try {
            Communities::where("community_id", $community_id)->delete();
            Alert::success('Berhasil', 'Komunitas berhasil dihapus!');
            return;
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah dengan akun Anda!');
            return;
        }
    }

    public function deleteExpertise(string $expertise_id)
    {
        try {
            Expertise::where("expertise_id", $expertise_id)->delete();
            Alert::success('Berhasil', 'Expertise berhasil dihapus!');
            return redirect()->back();
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah dengan akun Anda!');
            return redirect()->back();
        }
    }

    // PASSED
    public function deletePsycholog(Request $request, string $psycholog_id)
    {
        try {
            $psycholog = Psychologs::where("id", $psycholog_id)->first();
            Psychologs::where("id", $psycholog_id)->delete();
            User::where("email", $psycholog['email'])->delete();
            Alert::success('Berhasil', 'Akun psikolog berhasil dihapus!');
            return;
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah dengan akun Anda!');
            return;
        }
    }

    // PASSED
    public function registerPsycholog(Request $request)
    {
        try {
            $credential = $request->only('email', 'password', 'full_name', 'phone_number');
            $countPsycholog = Psychologs::where("email", $credential['email'])->count();

            if ($countPsycholog) {
                Alert::error('Gagal', 'Email sudah digunakan');
                return redirect()->back();
            } else {
                User::create([
                    'name' => $credential['full_name'],
                    'email' => $credential['email'],
                    'password' => $credential['password'],
                ]);

                Psychologs::create([
                    "full_name" => $credential['full_name'],
                    "email" => $credential['email'],
                    "phone_number" => $credential['phone_number'],
                    "status" => "success",
                    "gender" => "-",
                    "image_url" => ""
                ]);

                Alert::success('Berhasil', 'Akun psikolog berhasil dibuat!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function viewSchedules(Request $request)
    {
        $userId = $request->attributes->get('user_id');
        $schedules = PsychologSchedule::where('psycholog_id', $userId)->get();
        return view("admin.show-schedule")->with('schedules', $schedules);
    }

    public function showEditProfile(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $user = User::where('id', $userId)->first();
            $psycholog = Psychologs::where('email', $user->email)->first();
            return view("admin.edit-profile", compact('psycholog'));
        } catch (\Throwable $th) {
            Alert::error($th->getMessage());
            return redirect()->back();
        }
    }

    public function editProfile(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $user = User::where('id', $userId)->first();
            $phoneNumber = $request['phone_number'];
            $fullName = trim($request['full_name']);
            $description = trim($request['description']);

            $psycholog = Psychologs::where('email', $user->email)->first();
            $psycholog->full_name = $fullName;
            $psycholog->phone_number = $phoneNumber;
            $psycholog->description = $description;

            if ($request->image) {
                $imageName = time() . '.' . $request->file('image')->extension();
                $request->image->move(public_path('images'), $imageName);
                $psycholog->image_url = $imageName;
            }

            $psycholog->save();

            Alert::success('Berhasil memperbarui profile Anda!');
            return redirect(route('admin.show-edit-profile'));
        } catch (\Throwable $th) {
            Alert::error($th->getMessage());
            return redirect()->back();
        }
    }

    public function showCreateSchedule(Request $req)
    {
        return view("admin.create-schedule");
    }

    public function createSchedule(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');

            PsychologSchedule::create([
                "psycholog_id" => $userId,
                "date" => $request->date,
                "start_hour" => $request->start_hour,
                "end_hour" => $request->end_hour,
                "location" => $request->location,
            ]);
            Alert::success('Berhasil', 'Jadwal psikolog berhasil dibuat!');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function showUpdateSchedule(Request $req)
    {
        return view("admin.edit-schedule");
    }

    public function updateSchedule(Request $req, $id)
    {
        try {
            $schedule = PsychologSchedule::where('schedule_id', $id)->first();
            $schedule->date = $req->date;
            $schedule->start_hour = $req->start_hour;
            $schedule->end_hour = $req->end_hour;
            $schedule->location = $req->location;
            $schedule->save();
            Alert::success('Berhasil', 'Jadwal psikolog berhasil diubah!');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function deleteSchedule($id)
    {
        try {
            PsychologSchedule::where('schedule_id', $id)->delete();
            Alert::success('Berhasil', 'Jadwal psikolog berhasil dihapus!');
            return;
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return;
            // return redirect()->back();
        }
    }
}
