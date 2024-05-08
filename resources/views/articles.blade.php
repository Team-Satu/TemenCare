<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temukan Informasi Terkini dan Terlengkap</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white font-sans">
    <div class="px-4 py-6">
        <!-- Search Bar -->
        <div class="mb-6">
            <input type="search" placeholder="Cari artikel mengenai bipolar" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Articles List -->
        <div class="space-y-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('path/to/article-image.png') }}" alt="Article Image" class="flex-none w-12 h-12 rounded-md bg-gray-100">
                    <div class="min-w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900">
                            Gangguan Kecemasan
                        </p>
                        <p class="text-sm text-gray-500">
                            Kesehatan Mental (Mental Health): Penyebab & Cara Menjaganya
                        </p>
                        <p class="text-xs text-gray-400 mt-1">
                            Senin 1 April 2024
                        </p>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="fixed inset-x-0 bottom-0 bg-white border-t border-gray-200">
        <div class="flex justify-between items-center px-4 py-3">
            <button class="text-blue-500 focus:outline-none">
                <!-- Home Icon -->
                <svg class="w-6 h-6" ...></svg>
                <span class="block text-xs">Home</span>
            </button>
            <button class="text-gray-600 focus:outline-none">
                <!-- History Icon -->
                <svg class="w-6 h-6" ...></svg>
                <span class="block text-xs">History</span>
            </button>
            <button class="text-gray-600 focus:outline-none">
                <!-- Profile Icon -->
                <svg class="w-6 h-6" ...></svg>
                <span class="block text-xs">Profile</span>
            </button>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>