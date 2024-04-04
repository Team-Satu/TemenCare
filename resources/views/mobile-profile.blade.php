<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temen Care</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md bg-white mx-auto relative">
        <!-- Content -->
        <main class="bg-white h-screen flex flex-col">
            {{-- Main --}}
            <div class="w-full h-screen bg-white relative">
                {{-- Main component --}}
                <div class="my-6 pb-10">
                    <main class="bg-white flex-1 p-6">
                        <!-- Arrow Icon -->
                        <div class="flex items-center justify-center">
                            <button type="button" class="fa-solid fa-arrow-left-long text-gray-600 text-xl absolute left-6 top-6"></button>
                            <h1 class="text-[24px] text-[#4A4E50] font-semibold text-center my-6">
                                Profil Anda
                            </h1>
                        </div>
                        <!-- Profil picture -->
                        <div class="flex justify-center mb-10">
                            <img class="rounded-full h-28 w-28 object-cover" src="/img/winter.jpg.png" alt="profile image">
                        </div>
                        <!-- Field -->
                        <div class="mb-5">
                            <!-- Nama -->
                            <div class="relative mb-6 px-3 py-4 w-full border rounded border-black border-opacity-25">
                                <!-- Display field -->
                                <div class="text-black text-opacity-86 text-xs font-normal">Winter</div>
                                <!-- Floating label -->
                                <label class="absolute -top-2 left-3 bg-white px-1 text-xs font-normal leading-4 tracking-tight text-[#666666]">Nama</label>
                            </div>
                            <!-- Nomor Telepon -->
                            <div class="relative mb-[364px] px-3 py-4 w-full border rounded border-black border-opacity-25">
                                <!-- Display field -->
                                <div class="text-black text-opacity-86 text-xs font-normal">081395096058</div>
                                <!-- Floating label -->
                                <label class="absolute -top-2 left-3 bg-white px-1 text-xs font-normal leading-4 tracking-tight text-[#666666]">Nomor Telepon</label>
                            </div>
                            <!-- "Keluar" Button -->
                            <div class="w-full px-6 flex justify-center mb-10">
                                <button type="button" class="w-72 h-12 bg-[#F36464] rounded-full shadow flex items-center justify-center text-white text-[16px] font-medium tracking-wide">
                                Keluar
                                </button>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </main>
        <x-bottom-menu></x-bottom-menu>
    </div>  
</body>

</html>
</html>