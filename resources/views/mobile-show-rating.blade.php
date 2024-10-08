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
    <div class="max-w-md bg-white mx-auto relative">
        <!--Content-->
    <main class="bg-white h-screen flex flex-col w-full relative">
        {{--Main--}}
        <div class="w-full h-screen flex flex-col">
            {{--Main Component--}}
                <div class="my-6  bg-white">
                    <h1 class="text-neutral-600 text-left ml-14 mt-[1.5px] text-base poppins-semibold capitalize leading-normal tracking-wide">Ulasan dan Rating</h1>
                    <a href="/dashboard" class="flex items-center left-[20px] top-[30px] absolute ">
                    <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </div>
                <div class="flex flex-1 flex-col px-6 space-y-4 bg-white">
                    <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                        {{-- Profile --}}
                        <div class="flex w-full mb-[4px] items-center space-x-2 ">
                            {{-- Profile Image --}}
                            <div
                                class="w-16 h-16 bg-blue-300 rounded-2xl flex-col justify-center items-center inline-flex ">
                                <img src="./img/winter.jpg.png" alt="doctor-image" class="w-16 h-16 rounded-2xl">
                            </div>
                            {{-- rate --}}
                            <div>
                                <h2 class="text-neutral-600 text-md poppins-bold">5.0</h2>
                                <p class="text-neutral-600 text-[12px] poppins-normal">100+ rating</p>
                            </div>
                            {{-- star --}}
                            <div class="px-8">
                                <i class="fa-solid fa-star text-2xl" style="color: #7ebaeb;"></i>
                                <i class="fa-solid fa-star text-2xl" style="color: #7ebaeb;"></i>
                                <i class="fa-solid fa-star text-2xl" style="color: #7ebaeb;"></i>
                                <i class="fa-solid fa-star text-2xl" style="color: #7ebaeb;"></i>
                                <i class="fa-solid fa-star text-2xl" style="color: #7ebaeb;"></i>
                            </div>    
                        </div>
                    </div>
                    <div class="overflow-x-auto flex flex-col mt-2 bg-white">
                        <div class="grid grid-cols-2 w-full">
                            <a href="" class="col-span-1 text-center py-2 border-[#2196F3] border-b-2" id="semua-ulasan">
                                <h1 class=" text-xs poppins-medium leading-normal tracking-tight text-[#2196F3]">Semua Ulasan</h1>
                            </a>
                            <a href ="/your rating" class="col-span-1 text-center py-2" id="laporan-kamu">
                                <h1 class="text-xs poppins-medium leading-normal tracking-tight text-[#666666]">Ulasan Kamu</h1>
                            </a>
                        </div>
                    </div>
                <div class="flex flex-1 flex-col py-4 px-6 ">
                    <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                        {{--rating and Three dots menu --}}
                            <div class="w-full grid justify-items-end py-2 bg-white">
                                <div class="grid grid-cols-2 justify-items-end bg-white">
                                    <div class="w-[50px] h-4 flex items-center space-x-1 bg-white rounded-lg shadow ">
                                        <i class="fa-solid fa-star text-[12px] ml-[6px]" style="color: #7ebaeb;"></i>
                                        <p class="poppins-bold text-[12px] mt-[2px]">5.0</p>
                                    </div>
                                    <button class="w-6 h-4 justify-center items-center flex relative bg-neutral-100 rounded-sm" onclick="showOption('block')">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                </div>
                        {{-- Profile --}}
                        <div class="flex w-full mt-[2px] items-center space-x-2 ">
                            {{-- Profile Image --}}
                            <div
                                class="w-9 h-9 bg-blue-300 rounded-full flex-col justify-center items-center inline-flex ">
                            </div>
                            {{-- Name --}}
                            <div>
                                <h2 class="text-neutral-600 text-xs poppins-bold">Holy</h2>
                                <p class="text-neutral-600 text-[10px] poppins-normal">Pengguna</p>
                            </div>
                        </div>
                        <p class="text-neutral-600 text-[12px] poppins-medium py-2">Psikolognya pengertian terus sarannya membantu, cuma kalau online sinyalnya suka ilang-ilangan jadi sedikit terganggu, tapi overall oke banget, makaci psikolog insan <3</p>
                    </div>
                </div>
                <div class="flex flex-1 flex-col py-4 px-">
                    <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                        {{--rating and Three dots menu --}}
                            <div class="w-full grid justify-items-end py-2 bg-white">
                                <div class="grid grid-cols-2 items-center space-x-1 bg-white">
                                    <div class="w-6 h-4 justify-center items-center flex relative bg-neutral-100 rounded-sm">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                        {{-- Profile --}}
                        <div class="flex w-full mt-[2px] items-center space-x-2 ">
                            {{-- Profile Image --}}
                            <div
                                class="w-9 h-9 bg-blue-300 rounded-full flex-col justify-center items-center inline-flex ">
                            </div>
                            {{-- Name --}}
                            <div>
                                <h2 class="text-neutral-600 text-xs poppins-bold">Wina</h2>
                                <p class="text-neutral-600 text-[10px] poppins-normal">Pengguna</p>
                            </div>
                        </div>
                        <p class="text-neutral-600 text-[12px] poppins-medium py-2">Bagus Psikolog nya bisa mengerti masalah yang saya alami dan membantu memberikan solusi</p>
                    </div>
                </div>
            </div>
            <div class="hidden flex flex-1 flex-col px-4 py-4 space-y-4">
            <div id="option" class=" w-[125px] h-[92px] bg-white shadow-md border rounded-xl right-[50px] top-[300px] absolute ">
            {{--Delete Report Button--}}
                <div class="w-[125px] h-[46px] flex justify-center items-center">
                <button class="w-full" onclick="showConfirm('block')">
                    <p class="text-center py-3 border-b-2 border-gray-400 text-xs text-red-400 w-full">Hapus Ulasan</p>
                </button>
                </div>
            {{--Change Report Button--}}
                <div class="w-[125px] h-[46px] flex justify-center items-center">
                <button class="" onclick="showChange('block')">
                    <p class="text-center py-3 text-xs">Ubah Ulasan</p>
                </button>
                </div>
            </div>
            <div id= "confirm" class="hidden fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen z-20">
                <div class="w-96 h-80 relative m-auto mt-[220px] bg-white rounded-3xl shadow-2xl">
                    <i class="fa-solid fa-triangle-exclamation text-8xl justify-center items-center flex relative py-14"
                        style="color: #f36464;"></i>
                    <div class="mt-[-30px]">
                        <h2
                            class="text-center text-neutral-600 text-base poppins-medium leading-tight tracking-tight py-2">
                            Yakin ingin hapus Ulasanmu?</h2>
                        <p
                            class="text-center text-neutral-600 text-xs poppins-light leading-none tracking-tight">
                            Setelah
                            dihapus ulasan hilang permanen loh..</p>
                    </div>
                    <button
                        class="w-32 h-8 mt-6 ml-10 rounded-3xl border border-blue-300 flex-col justify-center items-center inline-flex">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <div
                                class="text-center text-blue-300 text-xs poppins-medium capitalize leading-normal tracking-wide">
                                Yakin</div>
                        </div>
                    </button>
                    <a href="/rating"
                        class="w-32 h-8 ml-12 bg-blue-300 rounded-3xl flex-col justify-center items-center inline-flex">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <div
                                class="text-center text-white text-xs poppins-medium capitalize leading-normal tracking-wide">
                                Kembali</div>
                        </div>
                    </a>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Options
        function showOption() {
            var option = document.getElementById("option");
            option.style.display = option.style.display === 'none' ? 'block' : 'none';
        }
         //Delete Report
         function showConfirm() {
            var confirm = document.getElementById("confirm");
            confirm.style.display = confirm.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>