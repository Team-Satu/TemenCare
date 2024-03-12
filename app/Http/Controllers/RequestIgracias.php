<?php

namespace App\Http\Controllers;

class RequestIgracias extends Controller
{
    public function request($endpoint = "/", $type = "GET", $cookies = "", $postData = "")
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://igracias.telkomuniversity.ac.id' . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);

        if ($type == "POST") {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        }

        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

        $headers = array();
        $headers[] = 'Host: igracias.telkomuniversity.ac.id';
        $headers[] = 'Sec-Ch-Ua: \"Not_A Brand\";v=\"8\", \"Chromium\";v=\"120\", \"Google Chrome\";v=\"120\"';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
        $headers[] = 'Upgrade-Insecure-Requests: 1';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36';
        $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7';
        $headers[] = 'Sec-Fetch-Site: none';
        $headers[] = 'Sec-Fetch-Mode: navigate';
        $headers[] = 'Sec-Fetch-User: ?1';
        $headers[] = 'Sec-Fetch-Dest: document';
        if (!empty($cookies)) {
            $headers[] = 'Cookie: ' . $cookies;
        }
        if ($type == "POST") {
            $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        }
        $headers[] = 'Accept-Language: id-ID,id;q=0.9';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}
