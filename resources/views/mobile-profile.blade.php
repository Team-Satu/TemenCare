<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temen Care</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md bg-white mx-auto relative">
        <!-- Content -->
        <main class="h-screen flex flex-1 flex-col w-full px-6">
            <!-- Arrow Icon -->
            <div class="flex items-center justify-center">
                <h1 class="text-[24px] text-[#4A4E50] font-semibold text-center my-6">
                    Profil Anda
                </h1>
            </div>
            <!-- Profil picture -->
            <div class="flex justify-center mb-10">
                <img class="rounded-full h-28 w-28 object-cover" src="{{ $image_url }}" alt="profile image">
            </div>
            <!-- Field -->
            <form class="flex flex-col flex-1 justify-between pb-20" action="/logout" method="GET">
                <div class="flex flex-1 flex-col">
                    <div class="relative mb-6 px-3 py-4 w-full border rounded border-black border-opacity-25">
                        <div class="text-black text-opacity-86 text-xs font-normal">{{ $name }}</div>
                        <label
                            class="absolute -top-2 left-3 bg-white px-1 text-xs font-normal leading-4 tracking-tight text-[#666666]">Nama</label>
                    </div>
                    <div class="relative px-3 py-4 w-full border rounded border-black border-opacity-25">
                        <div class="text-black text-opacity-86 text-xs font-normal">{{ $email }}</div>
                        <label
                            class="absolute -top-2 left-3 bg-white px-1 text-xs font-normal leading-4 tracking-tight text-[#666666]">Email</label>
                    </div>
                </div>
                <!-- "Keluar" Button -->
                <button type="submit"
                    class="w-full py-2 bg-[#F36464] rounded-full shadow flex items-center justify-center text-white text-lg font-medium tracking-wide">
                    Keluar
                </button>
            </form>
        </main>
        <x-bottom-menu></x-bottom-menu>
    </div>
</body>

</html>

</html>
