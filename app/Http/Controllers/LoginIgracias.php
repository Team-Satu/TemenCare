<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestIgracias;
use RealRashid\SweetAlert\Facades\Alert;

class LoginIgracias extends Controller
{
    public function login()
    {
        return view('login-igracias');
    }

    public function loginIgracias(Request $request)
    {
        try {
            // Get only username, password, and _token payload
            $credentials = $request->only('username', 'password', '_token');

            $username = $credentials['username'];
            $password = $credentials['password'];

            if (empty($username) || empty($password)) {
                Alert::error('Ishh!', 'Username/passwordnya diisi dong!');
                return redirect()->back();
            }

            // Igracias Controller
            $requestIgracias = new RequestIgracias();

            // Get first cookies
            $getCookies = $requestIgracias->request("/", "GET", "", "");
            preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $getCookies, $matches);

            $cookies = array();

            // Cookies string
            $cookiesString = "";

            // Cookies builder
            foreach ($matches[1] as $item) {
                parse_str($item, $cookie);
                $cookies = array_merge($cookies, $cookie);
            }

            // Append cookies
            $cookiesString = implode(
                '; ',
                array_map(
                    function ($key, $value) {
                        return $key . '=' . $value;
                    },
                    array_keys($cookies),
                    $cookies
                )
            );

            $requestIgracias->request("/", "POST", $cookiesString, "textUsername=$username&textPassword=$password&submit=Login");
            $response = $requestIgracias->request("/index.php", "GET", $cookiesString, null);
            $pageId = trim(explode("'", explode("pageid=", $response)[1])[0]);
            $user = $requestIgracias->request("/index.php?pageid=" . $pageId, "GET", $cookiesString, null);

            $nim = trim(explode("<title>", explode('| Telkom University</title>', $user)[0])[1]);
            $fullName = trim(explode('</h5>', explode('<h5 class="centered" style="margin-bottom:5px !important;">', $user)[1])[0]);
            $email = trim(explode('>', explode('</span>', explode('Email Anda</b></span>', $user)[1])[0])[1]);
            $class = trim(explode('<', explode('Kelas :', $user)[1])[0]);
            $major = trim(explode('<span class="label-text">', explode('<br></span></li>', $user)[0])[3]);
            $lecture = trim(explode('<', explode('Dosen Wali : <br>', $user)[1])[0]);
            $type = trim(explode('<', explode('Grup Pengguna : ', $user)[1])[0]);
            $pageId = trim($pageId);
            $imageUrl = trim(explode('"', explode('<img class="" src="', $user)[1])[0]);

            // Successfully login
            if ($pageId && $nim) {
                $countUser = User::where("email", $email)->count();

                // Account existing
                if ($countUser) {
                    // Update account
                    Accounts::where("email", $email)->update([
                        "name" => $fullName,
                        "email" => $email,
                        "nim" => $nim,
                        "username" => $username,
                        "class" => $class,
                        "major" => $major,
                        "lecture" => $lecture,
                        "type" => $type,
                        "page_id" => $pageId,
                        "image_url" => $imageUrl,
                    ]);

                    // Update Users
                    User::where("email", $email)->update([
                        'name' => $fullName,
                        'email' => $email,
                    ]);
                } else {
                    // Create user data
                    $user = User::create([
                        'name' => $fullName,
                        'email' => $email,
                        'password' => $username,
                        'role' => 'user',
                    ]);

                    // Create account data
                    Accounts::create([
                        "name" => $fullName,
                        "email" => $email,
                        "nim" => $nim,
                        "username" => $username,
                        "class" => $class,
                        "major" => $major,
                        "lecture" => $lecture,
                        "type" => $type,
                        "page_id" => $pageId,
                        "image_url" => $imageUrl,
                    ]);
                }

                $user = User::where("email", $email)->first();

                $token = $user->createToken("temen_token");
                $plainTextToken = $token->plainTextToken;
                $cookie = cookie('temen_cookie', $plainTextToken, 60 * 24 * 30);

                return redirect(route("user.dashboard"))->cookie($cookie);
            } else {
                Alert::error('Yah', 'Anda gagal masuk');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Yah', 'Akun Anda tidak ditemukan!');
            return redirect()->back();
        }
    }
}
