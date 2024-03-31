
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
        <div class="absolute left-[74px] top-[86px] text-center text-neutral-600 text-2xl font-semibold font-['Poppins'] capitalize tracking-wide">Hai, Salam Kenal!</div>
        <div class="absolute left-0 right-0 top-[327px] inline-flex items-start justify-start flex-col">
        <div class="flex self-stretch items-start justify-start h-[52px] px-3 ml-1 rounded border border-black border-opacity-25 flex-col">
                <div class="inline-flex self-stretch py-4 items-center justify-start">
                    <div class="text-black text-opacity-90 text-xs font-normal font-['Roboto'] leading-tight tracking-wide">081385096058</div>
                </div>
            </div>
            <div class="absolute left-0 bottom-14">
                <div class="inline-flex items-center justify-start gap-2.5 h-0.5 px-1 bg-white">
                    <div class="text-black text-opacity-60 text-xs font-normal font-['Roboto'] leading-3 tracking-tight">Nomor Telepon</div>
                </div>
            </div>
        </div>
        <div class="absolute left-[41px] top-[71px] w-[15px] h-[15px] px-[0.50px] py-0.5 origin-top-left rotate-180 inline-flex items-center justify-center"></div>
        <div class="absolute left-[131px] top-[133px] w-[130px] h-[130px]">
            <div class="absolute left-0 top-0 w-[130px] h-[130px] rounded-full bg-zinc-300"></div>
            <img class="absolute left-[-37px] top-0 w-[181px] h-[154px]" src="https://images.unsplash.com/photo-1711887035871-36bcc533c19c?q=80&w=2237&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
        <button>
            <div class="absolute left-[212px] top-[426px] w-[148px] h-[34px] bg-blue-300 rounded-[26px] shadow inline-flex items-center justify-center flex-col">
                <div class="inline-flex items-center justify-center gap-2">
                <div class="text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide text-center">Kirim</div>
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
