<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- @googlefonts('poppins') --}}
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Temen Care</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto bg-green-50">
        <!-- Content -->
        <main class="bg-white h-screen flex flex-col">
            <section class="w-full bg-gradient-to-r from-blue-400 to-blue-200 pt-16 pb-7 px-6 space-y-[6px]">
                <h1 class="poppins-semibold text-white text-xl">Halo Holy!</h1>
                <h1 class="poppins-medium tracking-wide text-white text-lg">Bagaimana Kondisimu Hari ini?</h1>
            </section>

            <div class="bg-white rounded-t-xl w-full h-full -mt-2">
                
            </div>
        </main>
    </div>
</body>

</html>
