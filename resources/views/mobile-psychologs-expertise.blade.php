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
    
    <div class="max-w-md bg-white p-4 mx-auto relative">
        <main class="bg-white-200 h-full flex flex-col w-full relative">
            <div>
                <x-header-component title="Psikolog Insan"></x-header-component>
            </div>
            <div class= "mt-[20px]">
                <div class="w-48 h-48 ml-[118px] mb-4 bg-gray-200 rounded-3xl shadow">
                    <img src="./img/Doctorfullbody.svg" alt="doctor-image" class="mx-auto mt-1.2 ml-[-2px]">
                </div>
                <div class="left-[66px] top-[236px] text-center text-neutral-600 text-xs font-normal font-['Poppins'] capitalize tracking-wide">Psikolog Industri & Organisasi </div>
                <div class="left-[100px] top-[215px] text-center text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide">Insan Daud, M. Psi. </div>
            </div>
            <div class="grid grid-cols-3 gap-3 mt-4 mb-4">
                <button class="w-20 h-5 rounded-3xl ml-[60px] border border-blue-400 flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Pekerjaan</div>
                    </div>
                </button>
                <button class="w-36 h-5 rounded-3xl border ml-[5px] border-blue-400 flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Pengembangan Diri</div>
                    </div>
                </button>
                <button class="w-14 h-5 rounded-3xl ml-[15px] border border-blue-400 flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Depresi</div>
                    </div>
                </button>
                <button class="w-20 h-5 rounded-3xl ml-[170px] border border-blue-400 flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            +3 Lainnya</div>
                    </div>
                </button>                
            </div>
            <div class="grid grid-cols-2 w-full mt-[0px]">
                    <a href="" class="col-span-1 text-center py-2 border-[#2196F3] border-b-2" id="Profil Psikolog">
                        <h1 class=" text-xs poppins-medium leading-normal tracking-tight text-[#2196F3]">Profil Psikolog</h1>
                    </a>
                    <a href ="" class="col-span-1 text-center py-2" id="Jadwal">
                        <h1 class="text-xs poppins-medium leading-normal tracking-tight text-[#666666]">Jadwal</h1>
                    </a>
                </div>
                <div class="grid grid-cols-2 w-full py-6 ml-[-50px]">
                    <i class="fa-solid fa-graduation-cap text-5xl py-3 ml-20" style="color: #7ebaeb;"></i>
                        <div class="grid grid-cols-1 mt-4">
                            <h1 class="poppins-medium">Alumnus</h1>
                            <p class="text-xs">Universitas Bojongsoang Bandung, 2014 </p>
                        </div>
                </div>
                <div class="grid grid-cols-2 w-full py-6 ml-[-50px]">
                <i class="fa-solid fa-suitcase text-5xl py-3 ml-20" style="color: #7ebaeb;"></i>
                        <div class="grid grid-cols-1 mt-4">
                            <h1 class="poppins-medium">Pengalaman Kerja</h1>
                            <p class="text-xs">4 Tahun </p>
                        </div>
                </div>
                <div class="grid grid-cols-2 w-full py-6 ml-[-50px]">
                    <i class="fa-solid fa-hospital text-5xl py-3 ml-20" style="color: #7ebaeb;"></i>
                        <div class="grid grid-cols-1 mt-4">
                            <h1 class="poppins-medium">Tempat Praktek</h1>
                            <p class="text-xs">Rumah Sakit Halmahera Siaga </p>
                        </div>
                </div>
                <div class="grid grid-cols-2 w-full py-6 ml-[-50px]">
                    <i class="fa-solid fa-building-columns text-5xl py-3 ml-20" style="color: #7ebaeb;"></i>
                        <div class="grid grid-cols-1 mt-4">
                            <h1 class="poppins-medium">Nomor STR</h1>
                            <p class="text-xs">11 58 6 4 2 17-5488756 </p>
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
