
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
        <div id= "dialog" class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen">
              <div class="w-[352px] h-[312px] absolute left-[675px] bottom-[330px] bg-white rounded-3xl shadow-2xl">
                <div class="w-[352px] flex h-[312px] relative justify-center">
                <img class="w-[107.48px] h-[115px] mt-[20px]" src="https://images.unsplash.com/photo-1712422246197-34608bb59a78?q=80&w=2168&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="w-[133px] h-[31px] px-4 py-1.5 left-[31px] top-[250px] absolute rounded-[26px] border border-blue-300 flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                    <div class="text-center text-blue-300 text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">Yakin</div>
                    </div>
                </div>
                <div class="w-[133px] h-[31px] px-4 py-1.5 left-[187px] top-[250px] absolute bg-blue-300 rounded-[26px] flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                    <div class="text-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">Kembali</div>
                    </div>
                </div>
                <div class="left-[55px] top-[172px] absolute text-center text-neutral-600 text-base font-medium font-['Poppins'] leading-tight tracking-tight">Yakin ingin berhenti kenalan?</div>
                <div class="left-[36px] top-[198px] absolute text-center text-neutral-600 text-xs font-light font-['Poppins'] leading-none tracking-tight">Semua riwayat kenalan kamu akan hilang loh..</div>
                <div class="w-[107.41px] h-[115px] left-[120.92px] top-[31px] absolute">
                    <div class="w-[102.08px] h-[114.62px] left-[4.26px] top-0 absolute">
                    </div>
                    <div class="w-[21.28px] h-[47.29px] left-[6.07px] top-[67.71px] absolute">
                    </div>
                    <div class="w-[14.25px] h-[15.95px] left-[86.48px] top-[3.64px] absolute">
                    </div>
                    <div class="w-[58.44px] h-[100.68px] left-[22.35px] top-[14.23px] absolute">
                    </div>
                    <div class="w-[27.07px] h-[106.25px] left-[68.48px] top-[8.49px] absolute">
                    </div>
                </div>
                </div>
        </main>
    </div>
</body>

</html>
