<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temen Care</title>
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto h-full">
        <!-- Header -->
        <header class="flex justify-between p-4 bg-white w-full sticky top-0 z-50 items-center shadow">
            <a href="/">
                <img src="./img/temencare-logo.svg" alt="temencare" class="w-48 h-6">
            </a>
            <button class="bg-[#7EBAEB] py-2 px-4 text-sm text-white poppins-medium rounded-md">Masuk</button>
        </header>

        <!-- Content -->
        <main class="bg-white">
            <section class="bg-gradient-to-br from-[#7FB4EC] to-[#C3DCEF] pt-8">
                <div class="text-white pt-14 px-4">
                    <h2 class="poppins-bold text-lg">Sahabat Setia di Setiap Langkah <br> Menuju Mental Sehat</h2>
                    <p class="my-4 text-xs">Butuh teman cerita? Psikolog berpengalaman,<br> siap dengarkan dan
                        ringankan bebanmu</p>
                    <button class="bg-[#F36464] rounded-3xl py-2 px-6 poppins-medium text-xs">Mulai Konseling</button>
                </div>

                <div class="w-full">
                    <div class="relative flex justify-end">
                        <img src="./img/doctorimage-mobile.svg" alt="doctor-image" class="w-full">
                        <p
                            class="bg-white rounded-tl-xl rounded-bl-xl text-[10px] text-[#0288D1] min-[320px]:p-3.5 min-[320px]:text-xs p-2 poppins-semibold absolute right-0 bottom-8">
                            Holy Alin, M. Psi. Psikologi Hewan</p>
                    </div>
                </div>
            </section>

            <section class="py-6">
                <div class="text-center space-y-2">
                    <h1 class="text-blue-300 text-sm poppins-bold leading-normal tracking-wide">Langkah Awal
                        Menuju Bahagia</h1>
                    <div class="px-12 leading-none"><span class="text-neutral-600 text-xs poppins-light">Akses layanan
                        </span><span class="text-blue-300 text-xs poppins-bold">Temen</span><span
                            class="text-red-400 text-xs poppins-bold"> Care</span><span
                            class="text-neutral-600 text-xs poppins-light">, buka pintu solusi untuk
                            setiap tanya hatimu. #WaktunyaBahagia dan tingkatkan kualitas hidupmu!</span></div>
                </div>
                <img src="./img/cuate.svg" alt="image" class="mx-auto my-4">
                <div class="px-4">
                    <div class="inline-flex w-full space-x-2">
                        <img src="./img/pencil.svg" alt="Pencil Icon" class="h-4 relative">
                        <p class="text-neutral-600 text-xs poppins-medium leading-normal tracking-wide">Belum Tahu
                            Kondisi Mentalmu?</p>
                    </div>
                    <div class="text-xs poppins-light leading-relaxed">
                        <span class="text-neutral-600">Pelajari kondisi mentalmu dan
                            pahami apa yang dibutuhkan untuk mencapai mental sehat dengan mengikuti tes yang disiapkan
                            oleh </span><span class="text-blue-300">Temen</span><span class="text-neutral-600">
                        </span><span class="text-red-400">Care</span>
                    </div>
                </div>
                <div class="px-4 mt-3">
                    <button
                        class="px-4 py-1.5 bg-sky-500/opacity-5 rounded-3xl border border-sky-500/opacity-50 flex-col justify-center items-center inline-flex hover:shadow">
                        <h1 class="text-sky-500 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Mulai Tes</h1>
                    </button>
                </div>
            </section>
            <hr class="mx-4 border-b border-gray-200">

            <section class="py-6">
                <img src="./img/cuate-2.svg" alt="image" class="mx-auto my-4">
                <div class="px-4">
                    <div class="inline-flex w-full space-x-2">
                        <img src="./img/note.svg" alt="Note Icon" class="h-4 relative">
                        <p class="text-neutral-600 text-xs poppins-medium leading-normal tracking-wide">Cari Komunitas
                            Terkait <i>Mental Health</i>?</p>
                    </div>
                    <div class="text-xs poppins-light leading-relaxed">
                        <span class="text-neutral-600">Komunitas yang disediakan oleh Psikolog dari </span><span
                            class="text-blue-300">Temen</span><span class="text-red-400"> Care</span><span
                            class="text-neutral-600"> untuk sharing dan mendapat insight baru mengenai kesehatan
                            mental</span>
                    </div>
                </div>
                <div class="px-4 mt-3">
                    <button
                        class="px-4 py-1.5 bg-sky-500/opacity-5 rounded-3xl border border-sky-500/opacity-50 flex-col justify-center items-center inline-flex hover:shadow">
                        <h1 class="text-sky-500 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Mulai Tes</h1>
                    </button>
                </div>
            </section>
            <hr class="mx-4 border-b border-gray-200">

            <section class="py-5 space-y-2">
                <h1 class="text-center px-4 text-blue-300 text-sm poppins-bold leading-normal tracking-wide">Pilih Ruang
                    Konseling Sesuai Kebutuhanmu</h1>
                <div class="text-center px-12 leading-none"><span class="text-blue-300 text-xs poppins-bold">Temen
                    </span><span class="text-red-400 text-xs poppins-bold">Care</span><span
                        class="text-neutral-600 text-xs poppins-light"> menyediakan beragam pilihan ruang aman untuk
                        ceritakan masalahmu, pilih yang paling nyaman menurut kamu:</span></div>

                <div class="overflow-x-auto flex space-x-8 relative py-4 px-12">
                    <div
                        class="flex-none py-8 px-2 space-y-2 max-w-60 bg-white text-center items-center rounded-3xl shadow border border-gray-100 hover:shadow-lg">
                        <h3 class="text-neutral-600 text-xs poppins-semibold leading-normal tracking-wide">Online</h3>
                        <img src="./img/cuate-3.svg" alt="cuate-3" class="mx-auto">
                        <div><span class="text-neutral-600 text-xs poppins-light">Sesi
                                konseling menggunakan </span><span
                                class="text-neutral-600 text-xs poppins-medium">metode
                                call</span><span class="text-neutral-600 text-xs poppins-light"> dengan Psikolog</span>
                        </div>
                    </div>
                    <div
                        class="flex-none py-8 px-2 space-y-2 max-w-60 bg-white text-center items-center rounded-3xl shadow border border-gray-100 hover:shadow-lg">
                        <h3 class="text-neutral-600 text-xs poppins-semibold leading-normal tracking-wide">Online</h3>
                        <img src="./img/cuate-3.svg" alt="cuate-3" class="mx-auto">
                        <div><span class="text-neutral-600 text-xs poppins-light">Sesi
                                konseling menggunakan </span><span
                                class="text-neutral-600 text-xs poppins-medium">metode
                                call</span><span class="text-neutral-600 text-xs poppins-light"> dengan Psikolog</span>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="mx-4 border-b border-gray-200">

            <section class="py-6">
                <div class="text-center">
                    <span class="text-neutral-600 text-sm poppins-medium tracking-wide">Profil Psikolog </span><span
                        class="text-blue-400 text-sm poppins-bold tracking-wide">Temen </span><span
                        class="text-red-400 text-sm poppins-bold tracking-wide">Care</span>
                </div>
                <div class="px-12 mt-2 text-center text-neutral-600 text-xs poppins-light leading-normal">Semua
                    Psikolog dan Konselor terbaik siap mendengarkan dan mengatasi setiap masalah seputar:</div>
                <div class="grid grid-rows-2 px-12 gap-2">
                    <div class="grid grid-flow-col gap-4">
                        <p
                            class="text-sky-600 text-xs poppins-medium capitalize leading-normal tracking-wide shrink py-1 px-1 rounded-3xl border border-sky-600 justify-center items-center text-center">
                            Pendidikan</p>
                        <p
                            class="text-sky-600 text-xs poppins-medium capitalize leading-normal tracking-wide shrink py-1 px-1 rounded-3xl border border-sky-600 justify-center items-center text-center">
                            Kesepian</p>
                        <p
                            class="text-sky-600 text-xs poppins-medium capitalize leading-normal tracking-wide shrink py-1 px-1 rounded-3xl border border-sky-600 justify-center items-center text-center">
                            Hubungan</p>
                    </div>
                    <div class="grid grid-flow-col gap-4">
                        <p
                            class="text-sky-600 text-xs poppins-medium capitalize leading-normal tracking-wide shrink py-1 px-1 rounded-3xl border border-sky-600 justify-center items-center text-center">
                            Keluarga</p>
                        <p
                            class="text-sky-600 text-xs poppins-medium capitalize leading-normal tracking-wide shrink py-1 px-1 rounded-3xl border border-sky-600 justify-center items-center text-center">
                            Pekerjaan</p>
                        <p
                            class="text-sky-600 text-xs poppins-medium capitalize leading-normal tracking-wide shrink py-1 px-1 rounded-3xl border border-sky-600 justify-center items-center text-center">
                            Lainnya</p>
                    </div>
                </div>
            </section>

            <section>

                <div class="w-full overflow-hidden">
                    <div class="flex">
                        <div class="pl-24 pb-5 ">
                            <div class="h-56 w-52 shadow-md rounded-3xl bg-[#72A8D4] bg-opacity-50">
                                <img src="./img/doctorimage-template.svg" alt="doctor-image" class="mx-auto mt-1.2">
                                <div class="bg-white text-center pb-3 rounded-b-3xl shadow-md">
                                    <p class="poppins-semibold text-xs text-[#0288D1] mb-2 pt-4">Insan Daud, M. Psi.
                                    </p>
                                    <p class="poppins-regular text-[10px] text-[#4A4E50]">Psikolog Industri &
                                        Organisasi <br>Spesialis Karir</p>
                                </div>
                            </div>
                        </div>

                        <div class="pl-10 pb-5">
                            <div class="h-56 w-52 shadow-md rounded-3xl bg-[#72A8D4] bg-opacity-50">
                                <img src="./img/doctorimage-template2.svg" alt="doctor-image" class="mx-auto mt-1.2">
                                <div class="bg-white text-center pb-3 rounded-b-3xl shadow-md">
                                    <p class="poppins-semibold text-xs text-[#0288D1] mb-2 pt-4">Bulan Sabit, M. Psi.
                                    </p>
                                    <p class="poppins-regular text-[10px] text-[#4A4E50]">Konselor <br>Spesialis
                                        Hubungan Sosial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <img src="./img/dot-active.svg" alt="active">
                    <img src="./img/dot-inactive.svg" alt="inactive" class="px-1">
                    <img src="./img/dot-inactive.svg" alt="inactive" class="pr-1">
                    <img src="./img/dot-inactive.svg" alt="inactive">
                </div>
                <hr class="mx-auto w-[416px] border-b border-gray-200 mt-7 mb-4">
            </section>
        </main>

        <!-- Footer -->
        <footer class="pl-7 pb-12">
            <img src="./img/temencare-logo.svg" alt="temencare-logo" class="mb-6 w-24 h-5">
            <div class="grid grid-cols-3 gap-1 pr-7 mb-8">
                <h2 class="poppins-bold text-sm text-[#7EBAEB]">Layanan Kami</h2>
                <h2 class="poppins-bold text-sm text-[#7EBAEB]">Lainnya</h2>
                <h2 class="poppins-bold text-sm text-[#7EBAEB]">Tentang Kami</h2>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">Psikotes</a>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">Syarat dan Ketentuan</a>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">Blog</a>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">Forum Diskusi</a>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">Kebijakan Privasi</a>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">Kontak Kami</a>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">Konseling</a>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">FAQ</a>
                <a href="" class="poppins-regular text-[10px] text-[#4A4E50]">Gabung Sebagai Konselor</a>
            </div>
        </footer>
    </div>
</body>

</html>
