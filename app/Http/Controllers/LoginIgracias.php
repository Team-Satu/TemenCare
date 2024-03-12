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
        $cookiesString = implode('; ', array_map(
            function ($key, $value) {
                return $key . '=' . $value;
            },
            array_keys($cookies),
            $cookies
        )
        );

        // $request->validate([]);

        // $user = $request->user();
        // if ($user) {
        //     $user->password = bcrypt($request->password);
        //     $user->save();
        //     return redirect("home")->with("success", "");
        // } else {
        //     return redirect("home")->with("error", "");
        // }
    }
}
