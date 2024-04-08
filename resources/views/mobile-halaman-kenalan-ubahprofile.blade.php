
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
    <div class="max-w-md mx-auto bg-green-50">
        <!-- Content -->
        <main class="bg-white h-screen flex flex-col">
        <div class="w-[393px] h-[852px] relative bg-white mx-auto">
        <x-back-button></x-back-button>
        <div class="absolute left-[74px] top-[86px] text-center text-neutral-600 text-2xl font-semibold font-['Poppins'] capitalize tracking-wide">Ubah Profile Kenalan</div>
        <div class="absolute left-0 right-0 top-[327px] inline-flex items-start justify-start flex-col">
        <div class="flex self-stretch items-start justify-start h-[52px] ml-1 flex-col">
        <div class="space-y-2 absolute left-1 bottom-[0px]">
                        <p1
                            class="text-gray-400 text-sm poppins-regular capitalize leading-normal tracking-wide text-left px-2 bg-white absolute left-[15px] top-[-3px]">
                            Nomor Telepon</p1>
                        <input class="rounded border border-[#C4C4C4] w-[389px] py-4 px-4 poppins-regular"
                            placeholder="Masukkan nomor telepon anda" type="text" name="username" />
                    </div>
            </div>
        </div>
        <div class="absolute left-[41px] top-[71px] w-[15px] h-[15px] px-[0.50px] py-0.5 origin-top-left rotate-180 inline-flex items-center justify-center"></div>
        <div class="absolute left-[131px] top-[133px] w-[130px] h-[130px]">
            <div class="absolute left-0 top-0 w-[130px] h-[130px] rounded-full bg-zinc-300"></div>
            <img class="absolute left-0 top-0 w-[130px] h-[130px] rounded-full" src="https://images.unsplash.com/photo-1711887035871-36bcc533c19c?q=80&w=2237&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
        <button>
            <div class="absolute left-[212px] top-[426px] w-[148px] h-[34px] bg-blue-300 rounded-[26px] shadow inline-flex items-center justify-center flex-col">
                <div class="inline-flex items-center justify-center gap-2">
                <div class="text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide text-center">Simpan</div>
                </div>
            </div>
        <button>
            <div class="absolute left-[33px] top-[426px] w-[148px] h-[34px] bg-red-400 rounded-[26px] shadow inline-flex items-center justify-center flex-col">
                <div class="inline-flex items-center justify-center gap-2">
                <div class="text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide text-center">Keluar</div>
                </div>
            </div>
        </button>
        </div>
        <x-bottom-menu></x-bottom-menu>
        </main>
    </div>
</body>

</html>
