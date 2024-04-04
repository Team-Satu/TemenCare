<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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
    <div class="max-w-md mx-auto bg-green-50 relative">
        <!-- Content -->
        <main class="bg-white h-screen flex flex-col">
            <section class="w-full bg-gradient-to-r from-blue-400 to-blue-200 pt-14 pb-10 px-6 space-y-[6px]">
                <h1 class="poppins-semibold text-white text-xl">Temukan Informasi</h1>
                <h1 class="poppins-semibold text-white text-xl">Terkini dan Terlengkap</h1>
                        <input type="text" placeholder="Cari artikel..." class="border-none bg-white rounded-2xl w-[340px] h-[36px] w-full p-2 text-sm font-normal"/>
                        <button type="submit" class="bg-transparent border-none">
                            {{-- <i class="fa-solid fa-magnifying-glass"></i> --}}
                        </button>
            </section>
            <!-- Main Component -->
            <div class="flex flex-1 flex-col py-4 px-6">
                <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                <div class="flex w-full items-center space-x-2">
                    <h2 class="text-blue-300 text-[14px] font-normal font-poppins">Gangguan Kecemasan</h2>
                <div>
                    <h2 class="text-gray-800 text-xs font-poppins">Senin 1 April 2024</h2>
                </div>
            </div>
            <div class ="w-24 h-16 relative">
                {{-- <div class ="w-24 h-16 left-0 top-0 absolute bg-zinc-300 rounded"></div> --}}
                <img class ="w-24 h-16 left-[250px] top-0 absolute bg-zinc-300 rounded" src="img/artikel1.png"/>
            </div>
                <p class="text-[#000000] text-[14px] font-medium py-2 poppins-bold">Kesehatan Mental (Mental Health): Penyebab & Cara Menjaganya</p>
            </div>
            </div>
            <!-- Main Component -->
            <div class="flex flex-1 flex-col py-4 px-6">
                <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                <div class="flex w-full items-center space-x-2">
                    <h2 class="text-blue-300 text-[14px] font-normal font-poppins">Gangguan Kecemasan</h2>
                <div>
                    <h2 class="text-gray-800 text-xs font-poppins">Senin 1 April 2024</h2>
                </div>
            </div>
            <div class ="w-24 h-16 relative">
                {{-- <div class ="w-24 h-16 left-0 top-0 absolute bg-zinc-300 rounded"></div> --}}
                <img class ="w-24 h-16 left-[250px] top-0 absolute bg-zinc-300 rounded" src="img/artikel1.png"/>
            </div>
                <p class="text-[#000000] text-[14px] font-medium py-2 poppins-bold">Kesehatan Mental (Mental Health): Penyebab & Cara Menjaganya</p>
            </div>
            </div>
            <!-- Main Component -->
            <div class="flex flex-1 flex-col py-4 px-6">
                <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                <div class="flex w-full items-center space-x-2">
                    <h2 class="text-blue-300 text-[14px] font-normal font-poppins">Gangguan Kecemasan</h2>
                <div>
                    <h2 class="text-gray-800 text-xs font-poppins">Senin 1 April 2024</h2>
                </div>
            </div>
            <div class ="w-24 h-16 relative">
                {{-- <div class ="w-24 h-16 left-0 top-0 absolute bg-zinc-300 rounded"></div> --}}
                <img class ="w-24 h-16 left-[250px] top-0 absolute bg-zinc-300 rounded" src="img/artikel1.png"/>
            </div>
                <p class="text-[#000000] text-[14px] font-medium py-2 poppins-bold">Kesehatan Mental (Mental Health): Penyebab & Cara Menjaganya</p>
            </div>
            </div>
             {{-- <div class="flex flex-1 flex-col py-4 px-6 ">
                <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4"> --}}
                    {{-- Profile --}}
                    {{-- <div class="flex w-full mt-[2px] items-center space-x-2 "> --}}
                        {{-- Profile Image --}}
                        {{-- <div class ="w-24 h-16 relative">
                            <div class ="w-24 h-16 left-0 top-0 absolute bg-zinc-300 rounded"></div>
                            <img class ="w-24 h-16 left-0 top-0 absolute bg-zinc-300 rounded" src="public/img/article1.png"/>
                        </div> --}}
                        {{-- Name --}}
                        {{-- <div>
                            <h2 class="text-black text-xs poppins-normal">H***</h2>
                            <p class="text-neutral-600 text-[10px] poppins-normal">Baru saja</p>
                        </div>
                    </div>
                    <p class="text-neutral-600 text-[12px] poppins-medium py-2">Hati-hati di daerah Telkom depan gate 4, gua abis kena catcall</p>
                </div>
            </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
