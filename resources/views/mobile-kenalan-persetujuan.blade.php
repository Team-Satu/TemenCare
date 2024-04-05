
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
              <div class="w-[393px] h-[567px] absolute left-[660px] bottom-[150px] bg-white rounded-3xl shadow-2xl">
                <div class="w-[148px] h-[34px] px-4 py-4 left-[213px] top-[500px] absolute bg-blue-300 rounded-[26px] shadow flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                    <div class="text-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">Setuju</div>
                    </div>
                </div>
                <div class="w-[148px] h-[34px] px-4 py-1.5 left-[34px] top-[500px] absolute bg-red-400 rounded-[26px] shadow flex-col justify-center items-center inline-flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                    <div class="text-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">Kembali</div>
                    </div>
                </div>
                <div class="flex mt-4 justify-center items-center">
                <img class="flex w-[152.72px] h-[152.42px] justify-center items-center" src="https://images.unsplash.com/photo-1712332918345-de25364b5d51?q=80&w=2237&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="w-[302px] h-[78px] left-[34px] top-[204px] absolute text-gray-950 text-2xl font-semibold leading-normal tracking-tight">Apakah kamu Setuju untuk menyebarkan informasi kamu?</div>
                <div class="w-[327px] left-[34px] top-[330px] absolute text-justify text-black text-sm font-semilight leading-normal tracking-tight">Hai! Sebelum melanjutkan, kami ingin memberitahu bahwa dengan bergabung di fitur Kenalan, profil kamu akan ditambahkan ke database kami dan akan terlihat oleh pengguna lain yang menggunakan fitur ini. Pastikan kamu setuju dan masukkan nomor telepon kamu untuk melanjutkan. Selamat berkenalan!</div>
                <div class="w-[152.72px] h-[152.42px] left-[121px] top-[21px] absolute">
                    <div class="w-[130.35px] h-[73.16px] left-[19.78px] top-[7.85px] absolute">
                    <div class="w-[24.86px] h-[26.70px] left-[95.85px] top-[0.07px] absolute">
                    </div>
                    </div>
                    <div class="w-[64.86px] h-[123.89px] left-[43.96px] top-[23.48px] absolute">
                    </div>
                    <div class="w-[152.72px] h-[88.81px] left-0 top-[37.62px] absolute">
                    </div>
                    <div class="w-[37.06px] h-[31.46px] left-[101.96px] top-[81.13px] absolute">
                    </div>
                    <div class="w-[31.20px] h-[32.95px] left-[101.51px] top-[26.40px] absolute">
                    </div>
                    <div class="w-[34.02px] h-[36.30px] left-[59.28px] top-[64.86px] absolute">
                    </div>
                    <div class="w-[37.98px] h-[31.46px] left-[15.39px] top-[96.85px] absolute">
                    </div>
                    <div class="w-[38.50px] h-[34.73px] left-[17.14px] top-[37.85px] absolute">
                    </div>
                    <div class="w-[140.50px] h-11 left-[6.19px] top-[61.30px] absolute">
                    </div>
                </div>
                </div>
        </div>
        </main>
    </div>
</body>

</html>
