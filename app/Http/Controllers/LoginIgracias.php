<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RequestIgracias;

class LoginIgracias extends Controller
{
    //
    public function loginIgracias(Request $request)
    {
        // Get only username, password, and _token payload
        $credentials = $request->only('username', 'password', '_token');

        $username = $credentials['username'];
        $password = $credentials['password'];

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

        error_log($fullName);

    }
}
