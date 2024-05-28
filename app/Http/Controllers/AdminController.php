<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Admin;
use App\Models\Articles;
use App\Models\Communities;
use App\Models\Expertise;
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

    public function showCreateExpertise()
    {
        return view("admin-load.create-expertise");
    }

    public function createExpertise(Request $request)
    {
        try {
            $request->validate([
                'expertise' => 'required|string',
            ]);
            $expertise = trim($request['expertise']);
            $userId = $request->attributes->get('user_id');

            if ($expertise) {
                $expertiseData = Expertise::where("expertise", $expertise)->count();
                if (!$expertiseData) {
                    Expertise::create([
                        "psycholog_id" => $userId,
                        "expertise" => $expertise
                    ]);

                    Alert::success('Berhasil', 'Expertise ' . $expertise . ' berhasil dibuat!');
                    return redirect()->back();
                } else {
                    Alert::error('Gagal', 'Expertise ' . $expertise . ' sudah ada!');
                    return redirect()->back();
                }
            } else {
                Alert::error('Gagal', 'Expertise ' . $expertise . ' gagal dibuat!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
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
    public function deleteCommunityPost(string $post_id)
    {
        try {
            CommunityPost::where('post_id', $post_id)->delete();
            Alert::success('Berhasil', 'Postingan berhasil dihapus!');
            return;
        } catch (\Throwable $th) {
            Alert::error($th->getMessage());
            return;
        }
    }


    public function showCommunitiesDetail(Request $request, string $community_id)
    {
        try {
            $community = Communities::where("community_id", $community_id)->first();
            $community_posts = CommunityPost::where('community_id', $community_id)->get();
            if (!$community) {
                // Log error message
                \Log::error("Community not found with ID: $community_id");
                // Return a response indicating failure
                return response()->json(['error' => 'Community not found'], 404);
            }

            return view("admin-load.psycholog-communities", ["community" => $community, 'community_posts' => $community_posts, 'community_id' => $community_id]);
        } catch (\Throwable $th) {
            // Log detailed exception message
            \Log::error("Exception occurred: " . $th->getMessage());
            // Return a response indicating failure
            return response()->json(['error' => 'Internal server error'], 500);
        }
    }


    public function showCommunitiesDetailnoID()
    {
        return view("admin-load.psycholog-communities");
    }


    // public function createCommunityPost(Request $request, string $community_id)
    // {
    //     try {
    //         // Validate data
    //         $validator = Validator::make($request->all(), [
    //             'post' => 'required|string',
    //         ]);

    //         // Check if validation fails
    //         if ($validator->fails()) {
    //             return response()->json(['errors' => $validator->errors()], 400);
    //         }

    //         // Create community post
    //         $communityPost = CommunityPost::create([
    //             'post' => $request->post,
    //             'community_id' => $community_id
    //         ]);

    //         // Return success response
    //         Alert::success('Berhasil', 'Post berhasil dibuat!');
    //         return redirect()->back();
    //     } catch (\Throwable $th) {
    //         // Set error flash message
    //         Alert::error('Gagal', 'Post gagal dibuat!');
    //         return redirect()->back();
    //     }
    // }


    public function viewSchedules()
    {
        $schedules = PsychologSchedule::all();
        return view("admin-load.schedules.view-schedules")->with('schedules', $schedules);
    }

    public function addSchedule()
    {
        return view("admin-load.schedules.add-schedules");
    }

    public function editSchedule($id)
    {
        $schedule = PsychologSchedule::where("psycholog_id", $id)->first();
        return view("admin-load.schedules.edit-schedules")->with('schedule', $schedule);
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

    public function showListExpertise(Request $request)
    {
        $userId = $request->attributes->get("user_id");
        $expertiseList = Expertise::where("psycholog_id", $userId)->get();

        return view("admin-load.list-expertise", ["expertises" => $expertiseList]);
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

    public function deleteExpertise(Request $request, string $expertise_id)
    {
        try {
            Expertise::where("expertise_id", $expertise_id)->delete();

            Alert::success('Berhasil', 'Expertise berhasil dihapus!');
            return;
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah dengan akun Anda!');
            return;
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

    public function createSchedule(Request $req)
    {
        try {
            $cred = $req->only('psycholog_id', 'date', 'start_hour', 'end_hour', 'location');
            // dd($cred);
            PsychologSchedule::create($cred);
            Alert::success('Berhasil', 'Jadwal psikolog berhasil dibuat!');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
