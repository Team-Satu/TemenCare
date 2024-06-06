<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div class="bottom-0 fixed w-full max-w-md bg-white grid grid-cols-3 py-2 border-t">
    <a href="/dashboard"
        class="col-span-1 justify-center items-center text-center space-y-0 {{ request()->is('dashboard') ? 'text-[#89CAFF]' : 'text-[#A7A9B7]' }}">
        <i class="fa-solid fa-house fa-lg"></i>
        <h1 class="poppins-medium text-[12px]">Home</h1>
    </a>
    <a href="/history"
        class="col-span-1 justify-center items-center text-center space-y-0 {{ request()->is('history') ? 'text-[#89CAFF]' : 'text-[#A7A9B7]' }}">
        <i class="fa-solid fa-receipt fa-lg"></i>
        <h1 class="poppins-medium text-[12px]">History</h1>
    </a>
    <a href="/profile"
        class="col-span-1 justify-center items-center text-center space-y-0 {{ request()->is('profile') ? 'text-[#89CAFF]' : 'text-[#A7A9B7]' }}">
        <i class="fa-solid fa-user fa-lg"></i>
        <h1 class="poppins-medium text-[12px]">Profile</h1>
    </a>
</div>
