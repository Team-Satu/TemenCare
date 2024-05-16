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
            <a href="/login" class="bg-[#7EBAEB] py-2 px-4 text-sm text-white poppins-medium rounded-md">Masuk</a>
        </header>

        <!-- Content -->
        <main class="bg-white">
            <section class="bg-gradient-to-br from-[#7FB4EC] to-[#C3DCEF] pt-8">
                <div class="text-white pt-14 px-4">
                    <h2 class="poppins-bold text-lg">Sahabat Setia di Setiap Langkah <br> Menuju Mental Sehat</h2>
                    <p class="my-4 text-xs">Butuh teman cerita? Psikolog berpengalaman,<br> siap dengarkan dan
                        ringankan bebanmu</p>
                    <a href="/login" class="bg-[#F36464] rounded-3xl py-2 px-6 poppins-medium text-xs hover:shadow">Mulai
                        Konseling</a>
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

                <div class="overflow-x-auto flex space-x-8 relative py-4 px-12 no-scrollbar">
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
                <div class="grid grid-rows-2 px-12 gap-2 my-4">
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

                <div class="overflow-x-auto flex space-x-8 relative py-4 px-20 no-scrollbar">
                    <div
                        class="flex-none space-y-2 w-52 bg-white text-center items-center rounded-3xl shadow border border-gray-100 hover:shadow-lg">
                        <div class="bg-[#72A8D4] bg-opacity-50 w-full rounded-t-3xl pt-2">
                            <img src="./img/doctorimage-template.svg" alt="doctor-image" class="mx-auto">
                        </div>
                        <div class="space-y-1 pt-1 pb-3 px-2">
                            <h1 class="text-sky-600 text-xs poppins-semibold capitalize leading-normal tracking-wide">
                                Insan Daud, M. Psi. </h1>
                            <p class="text-center text-neutral-600 text-xs poppins-regular capitalize tracking-wide">
                                Psikolog Industri & Organisasi <br />Spesialis Karir</p>
                        </div>
                    </div>
                    <div
                        class="flex-none space-y-2 w-52 bg-white text-center items-center rounded-3xl shadow border border-gray-100 hover:shadow-lg">
                        <div class="bg-[#72A8D4] bg-opacity-50 w-full rounded-t-3xl pt-2">
                            <img src="./img/doctorimage-template.svg" alt="doctor-image" class="mx-auto">
                        </div>
                        <div class="space-y-1 pt-1 pb-3 px-2">
                            <h1 class="text-sky-600 text-xs poppins-semibold capitalize leading-normal tracking-wide">
                                Insan Daud, M. Psi. </h1>
                            <p class="text-center text-neutral-600 text-xs poppins-regular capitalize tracking-wide">
                                Psikolog Industri & Organisasi <br />Spesialis Karir</p>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="mx-4 border-b border-gray-200">
        </main>

        <footer class="bg-white px-6 pt-4 pb-6">
            <img src="./img/temencare-logo.svg" alt="temencare-logo" class="mb-6 w-24 h-5">
            <div class="grid grid-flow-col">
                <div class="grid grid-flow-row gap-2">
                    <h2 class="text-blue-300 text-xs poppins-bold leading-normal tracking-wide">Layanan Kami</h2>
                    <div
                        class="space-y-1 flex-col flex text-neutral-600 text-xs poppins-reguler leading-normal tracking-wide">
                        <a href="#" class="hover:underline">Psikotes</a>
                        <a href="#" class="hover:underline">Forum Diskusi</a>
                        <a href="#" class="hover:underline">Konseling</a>
                    </div>
                </div>
                <div class="grid grid-flow-row gap-2">
                    <h2 class="text-blue-300 text-xs poppins-bold leading-normal tracking-wide">Tentang Kami</h2>
                    <div
                        class="space-y-1 flex-col flex text-neutral-600 text-xs poppins-reguler leading-normal tracking-wide">
                        <a href="#" class="hover:underline">Blog</a>
                        <a href="#" class="hover:underline">Kontak Kami</a>
                        <a href="#" class="hover:underline">Gabung Sebagai<br />Psikolog</a>
                    </div>
                </div>
                <div class="grid grid-flow-row gap-2">
                    <h2 class="text-blue-300 text-xs poppins-bold leading-normal tracking-wide">Lainnya</h2>
                    <div
                        class="space-y-1 flex-col flex text-neutral-600 text-xs poppins-reguler leading-normal tracking-wide">
                        <a href="#" class="hover:underline">Syarat dan Ketentuan</a>
                        <a href="#" class="hover:underline">Kebijakan Privasi</a>
                        <a href="#" class="hover:underline">FAQ</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
