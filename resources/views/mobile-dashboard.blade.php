<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @googlefonts
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Temen Care</title>
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto bg-green-50">
        <!-- Content -->
        <main class="bg-white h-screen">
            <section class="w-full bg-gradient-to-r from-blue-400 to-blue-200 pt-16 px-6">
                <h1 class="font-semibold text-white text-xl">Halo Holy!</h1>
                <h1 class="font-medium text-white text-lg">Bagaimana Kondisimu Hari ini ?</h1>
            </section>

            <div class="bg-gradient-to-r from-green-100 to-green-900 bg-white shadow-lg rounded-lg p-6 w-44 h-44">
            </div>
            <!-- <section class="bg-white shadow-md rounded-md p-4">
                <h2 class="text-lg font-semibold mb-2">Content Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur felis sit amet lorem
                    consequat, id dictum mi interdum.</p>
            </section> -->
        </main>
    </div>
</body>

</html>
