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
                            <h1 class="text-[22px] text-[#4A4E50] font-semibold text-center my-6">
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
                            <div class="relative mb-5 px-3 py-4 w-full border rounded border-black border-opacity-25">
                                <!-- Display field -->
                                <div class="text-black text-opacity-86 text-xs font-normal">Winter</div>
                                <!-- Floating label -->
                                <label class="absolute -top-3 left-3 bg-white px-1 text-xs font-normal leading-4 tracking-tight">Nama</label>
                            </div>
                            <!-- Nompr Telepon -->
                            <div class="relative mb-[304px] px-3 py-4 w-full border rounded border-black border-opacity-25">
                                <!-- Display field -->
                                <div class="text-black text-opacity-86 text-xs font-normal">081395096058</div>
                                <!-- Floating label -->
                                <label class="absolute -top-3 left-3 bg-white px-1 text-xs font-normal leading-4 tracking-tight">Nomor Telepon</label>
                            </div>
                            <!-- "Keluar" Button -->
                            <div class="w-full px-6 flex justify-center mb-10">
                                <button type="button" class="w-36 h-8 bg-[#F36464] rounded-full shadow flex items-center justify-center text-white text-xs font-medium tracking-wide">
                                Keluar
                                </button>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="px-6 py-4">
            <p class="text-center text-gray-500 text-sm">
            </p>
        </footer>
    </div>
</body>

</html>




<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Anda</title>
</head> -->

<!-- <body class="bg-gray-100">
    <div class="max-w-md mx-auto h-screen"> -->
        <!-- Header -->
        <!-- <header class="bg-white shadow-md py-8 flex justify-between items-center">
            <a href="#" class="text-blue-500">Back Icon</a> 
            <h1 class="text-xl font-bold">Profil Anda</h1>
            <div class="opacity-0">Placeholder</div>
        </header> -->

        <!-- Content -->
        <!-- <main class="mt-0">
            <div class="bg-white shadow-md rounded-md p-4"> -->
                <!-- Profil picture -->
                <!-- <div class="flex justify-center items-center py-4">
                    <img class="rounded-full h-24 w-24 object-cover" src="/img/winter.jpg.png" alt="profile image">
                </div> -->
                <!-- Nama -->
                <!-- <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama</label>
                    <div class="p-3 bg-gray-200 rounded-md">
                        <p class="text-md font-semibold">Winter</p>
                    </div>
                </div> -->
                <!-- Nomor Telepon -->
                <!-- <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon</label>
                    <div class="p-3 bg-gray-200 rounded-md">
                        <p class="text-md font-semibold">081385096058</p>
                    </div>
                </div> -->
                <!-- Tombol Keluar -->
                <!-- <button class="mt-20 w-full bg-red-500 text-white rounded-lg p-2 text-md font-semibold">Keluar</button>
            </div>
        </main> -->

        <!-- Footer -->
        <!-- <footer class="text-center text-gray-500 text-sm mt-4">
            <div class="flex justify-around p-4"> -->
                <!-- Placeholder untuk ikon-ikon -->
                <!-- <a href="#" class="text-center text-gray-400">
                    <div>Home Icon</div>
                    <div class="text-xs">Home</div>
                </a>
                <a href="#" class="text-center text-gray-400">
                    <div>History Icon</div>
                    <div class="text-xs">History</div>
                </a>
                <a href="#" class="text-center text-blue-500">
                    <div>Profile Icon</div>
                    <div class="text-xs">Profile</div>
                </a>
            </div>    
            <p>&copy; 2024 Mobile View Footer</p>
        </footer>
    </div>
</body>

</html> -->
