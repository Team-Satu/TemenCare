<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Temen Care: Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <form method="POST" action="/login" class="items-center justify-center flex flex-col h-screen bg-white space-y-2">
        @csrf

        <input type="text" name="username" placeholder="Masukkan username Igracias Anda" class="border" />
        <input type="password" name="password" placeholder="Masukkan password Igracias Anda" class="border" />

        <button>Masuk</button>
        <!-- Equivalent to... -->
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
    </form>
</body>

</html>
