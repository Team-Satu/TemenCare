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
        <main class="bg-blue-200 h-screen flex flex-col w-full relative">
            <div>
                <x-header-component title="Detail Konsultasi"></x-header-component>
                <div class="bg-white w-[448px] h-[680px] left-0 top-[296px] absolute"></div>
                    <div class= "left-[120px] top-[365px] absolute">
                        <div class="left-[66px] top-[236px] text-center text-neutral-600 text-xs font-normal font-['Poppins'] capitalize tracking-wide">Psikolog Industri & Organisasi </div>
                        <div class="left-[100px] top-[215px] text-center text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide">Insan Daud, M. Psi. </div>
                    </div>
                    <div class="w-48 h-48 left-[120px] top-[160px] absolute">
                        <div class="w-48 h-48 left-0 top-0 absolute bg-gray-200 rounded-3xl shadow">
                        <img src="./img/Doctorfullbody.svg" alt="doctor-image" class="mx-auto mt-1.2 ml-[-2px]">
                    </div>
                <div class="grid grid-cols-3 gap-3 mt-64">
                    <button class="w-20 h-5 rounded-3xl ml-[-40px] border border-blue-400 flex-col justify-center items-center inline-flex">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                                Pekerjaan</div>
                        </div>
                    </button>
                    <button class="w-36 h-5 rounded-3xl border ml-[-20px] border-blue-400 flex-col justify-center items-center inline-flex">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                                Pengembangan Diri</div>
                        </div>
                    </button>
                    <button class="w-14 h-5 rounded-3xl ml-[64px] border border-blue-400 flex-col justify-center items-center inline-flex">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                                Depresi</div>
                        </div>
                    </button>
                    <button class="w-20 h-5 rounded-3xl ml-16 border border-blue-400 flex-col justify-center items-center inline-flex">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                                +3 Lainnya</div>
                        </div>
                    </button>
                </div>
                <div class="left-[-80px] top-[380px] absolute">
                    <p class="text-gray-800 text-s font-semibold font-['Poppins'] leading-normal tracking-wide mb-2">Status</p>
                    <p class="text-green-600 text-s font-semibold font-['Poppins'] leading-normal tracking-wide mb-2">Selesai</p>
                    <p class="text-gray-800 text-s font-semibold font-['Poppins'] leading-normal tracking-wide">Jadwal</p>
                    <p class="text-gray-800 text-s font-normal font-['Poppins'] leading-normal tracking-wide mb-2">Senin, 12.00-14.00 (Onsite)</p>
                    <p class="text-gray-800 text-s font-semibold font-['Poppins'] leading-normal tracking-wide">Lokasi</p>
                    <p class="text-gray-800 text-s font-normal font-['Poppins'] leading-normal tracking-wide mb-2">Gedung Ditmawa</p>
                    <p class="text-gray-800 text-s font-semibold font-['Poppins'] leading-normal tracking-wide">Keluhan</p>
                    <p class="text-neutral-700 text-s font-normal font-['Poppins'] leading-normal tracking-tight">Saya akhir-akhir ini gabisa tidur terus setiap hari ngerasa cape terus gamau berkegiatan apa-apa</p>
                </div>
            
            <div class="left-[-100px] top-[500px] absolute">
                <button class="w-40 h-8 left-[18px] top-[248px] absolute bg-sky-600 rounded-3xl border flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div
                            class="text-center text-white text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Catatan Psikolog</div>
                    </div>
                </button>
                <button class="w-40 h-8 left-[236px] top-[248px] absolute rounded-3xl border border-sky-600 flex-col justify-center items-center inline-flex" onclick="showDialog('block')">
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div
                            class="text-center text-sky-600 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Berikan Ulasan</div>
                    </div>  
                </button>
            </div>
                <div id="dialog" class="bg-black bg-opacity-50 w-screen h-screen z-50 bottom-0 left-0 fixed  flex-1 flex-col hidden">
                    <div class="flex-auto" onclick="showDialog('none')"></div>
                        <div class="w-full max-w-md m-auto bg-white rounded-tr-3xl rounded-tl-3xl shadow-2xl flex flex-col p-4 h-[480px] mt-64">
                            <div class="w-full flex justify-end">
                                <button onclick="showDialog('none')">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <h1 class="text-neutral-600 text-md poppins-semibold capitalize leading-normal tracking-wide text-center ">Rating Konsultasi</h1>
                            <div class="flex items-center ml-8 mt-4">
                                    <button class="fa-regular fa-star text-6xl" style="color: #FFB400;"></button>
                                    <button class="fa-regular fa-star text-6xl" style="color: #FFB400;"></button>
                                    <button class="fa-regular fa-star text-6xl" style="color: #FFB400;"></button>
                                    <button class="fa-regular fa-star text-6xl" style="color: #FFB400;"></button>
                                    <button class="fa-regular fa-star text-6xl" style="color: #FFB400;"></button>
                                </div>
                            <div class="py-8">
                                <h2
                                    class="text-neutral-600 text-s poppins-semibold capitalize leading-normal tracking-wide text-center mt-2 mb-4">
                                    Tuliskan Ulasanmu</h2>
                                <div class="w-full mb-4">
                                    <textarea rows="8" placeholder="Tuliskan ulasanmu di sini"
                                        class="poppins-medium text-xs rounded-lg border border-gray-300 w-full p-2.5 outline-none" name="report"></textarea>
                                </div>
                                <div class="w-full px-6">
                                    <button type="submit"
                                        class="bg-blue-300 rounded-3xl shadow text-center text-white text-xs poppins-medium capitalize leading-normal tracking-wide w-full py-2">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        // Add Report
        function showDialog() {
            var dialog = document.getElementById("dialog");
            dialog.style.display = dialog.style.display === 'none' ? 'block' : 'none';
        }
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
        //Change Report
        function showChange() {
            var change = document.getElementById("change");
            change.style.display = change.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
