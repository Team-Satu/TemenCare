<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Temen Care</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="items-center justify-center flex flex-col h-screen bg-blue-200">
    <h1 class="text-3xl font-bold text-gray-800">
        Saya Absen:
    </h1>
    <ul>
        <li class="text-green-950 text-xl">Holy Absen</li>
        <li class="text-green-950 text-xl">Alfian Absen</li>
        <li class="text-green-950 text-xl">Insan Absen</li>
        <li class="text-green-950 text-xl">Windy Absen</li>
        {{-- Absen masing-masing --}}
    </ul>
</body>

</html>
