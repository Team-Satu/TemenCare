<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Anda</title>
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto h-screen">
        <!-- Header -->
        <header class="bg-white shadow-md py-8 flex justify-between items-center">
            <a href="#" class="text-blue-500">Back Icon</a> 
            <h1 class="text-xl font-bold">Profil Anda</h1>
            <div class="opacity-0">Placeholder</div>
        </header>

        <!-- Content -->
        <main class="mt-0">
            <div class="bg-white shadow-md rounded-md p-4">
                <!-- Profil picture -->
                <div class="flex justify-center items-center py-4">
                    <img class="rounded-full h-24 w-24 object-cover" src="/img/winter.jpg.png" alt="profile image">
                </div>
                <!-- Nama -->
                <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama</label>
                    <div class="p-3 bg-gray-200 rounded-md">
                        <p class="text-md font-semibold">Winter</p>
                    </div>
                </div>
                <!-- Nomor Telepon -->
                <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon</label>
                    <div class="p-3 bg-gray-200 rounded-md">
                        <p class="text-md font-semibold">081385096058</p>
                    </div>
                </div>
                <!-- Tombol Keluar -->
                <button class="mt-20 w-full bg-red-500 text-white rounded-lg p-2 text-md font-semibold">Keluar</button>
            </div>
        </main>

        <!-- Footer -->
        <footer class="text-center text-gray-500 text-sm mt-4">
            <div class="flex justify-around p-4">
                <!-- Placeholder untuk ikon-ikon -->
                <a href="#" class="text-center text-gray-400">
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

</html>
