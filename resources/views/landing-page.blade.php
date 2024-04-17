<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temen Care</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto h-screen">
        <!-- Header -->
        <header class="flex justify-between py-4 pl-6 pr-5 bg-white w-full sticky top-0 z-50">
            <img src="./img/temencare-logo.svg" alt="temencare" class="w-48 h-6">

            <img src="./img/menu.svg" >
        </header>

        <!-- Content -->
        <main>
            <section class="relative bg-gradient-to-br from-[#7FB4EC] to-[#C3DCEF] h-[428px] overflow-hidden">
                <div class="text-white pt-14 pl-6">
                    <h2 class="poppins-bold text-lg">Sahabat Setia di Setiap Langkah <br> Menuju Mental Sehat</h2>
                    <p class="mt-3 text-xs mb-5">Butuh teman cerita? Psikolog berpengalaman,<br> siap dengarkan  dan ringankan bebanmu</p>
                    <button class="bg-[#F36464] rounded-3xl px-7 h-7 poppins-medium text-xs">Mulai Konseling</button>
                </div>

                <div class="absolute bottom-0 right-0">
                    <div class="relative">
                        <img src="./img/doctorimage-mobile.svg" alt="doctor-image">
                        <p class="absolute -right-3 bottom-0 bg-white rounded-xl text-[8px] text-[#0288D1] p-3.5 poppins-semibold mb-7">Holy Alin, M. Psi. Psikologi Hewan</p>
                    </div>
                </div>
            </section>

            <section class="my-6">
                <h3 class="poppins-bold text-[#7EBAEB] mb-1 text-center text-sm">Langkah Awal Menuju Bahagia</h3>
                <p class="text-xs poppins-light mb-2 text-center text-[#4A4E50]">Akses layanan <span class="poppins-bold text-[#7EBAEB]">Temen</span> <span class="poppins-bold text-[#F36464]">Care</span>, buka pintu solusi<br>untuk setiap tanya hatimu. #WaktunyaBahagia<br>dan tingkatkan kualitas hidupmu!</p>
                <img src="./img/cuate.svg" alt="cuate" class="mx-auto mb-6">

                <div class="px-6">
                    <div class="">
                        <div class="flex items-center">
                            <img src="./img/pencil.svg" alt="pencil">
                            <p class="poppins-medium text-[#4A4E50] text-xs ml-2.5">Belum Tahu Kondisi Mentalmu?</p>
                        </div>

                        <p class="poppins-light text-xs text-[#4A4E50] mt-2 mb-4">Pelajari kondisi mentalmu dan pahami apa yang<br> dibutuhkan untuk mencapai mental sehat dengan<br> mengikuti tes yang disiapkan oleh <span class="poppins-bold text-[#7EBAEB]">Temen</span> <span class="poppins-bold text-[#F36464]">Care</span>.</p>
                        <button class="poppins-medium text-[#2196F3] text-[8px] px-6 rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3] mb-8" >Mulai Tes</button>
                    </div>
                </div>
                <hr class="mx-auto w-[416px] border-b border-gray-200">
            </section>

            <section class="my-6">
                <img src="./img/cuate-2.svg" alt="cuate-2" class="mx-auto mb-5">
                <div class="px-6">
                    <div class="">
                        <div class="flex items-center">
                            <img src="./img/note.svg" alt="note">
                            <p class="poppins-medium text-[#4A4E50] text-xs ml-2.5">Cari Komunitas Terkait <i>Mental Health</i>?</p>
                        </div>

                        <p class="poppins-light text-xs text-[#4A4E50] mt-2 mb-4">Komunitas yang disediakan oleh Psikolog dari <span class="poppins-bold text-[#7EBAEB]">Temen</span> <br> <span class="poppins-bold text-[#F36464]">Care </span>untuk <i>sharing</i> dan mendapat <i>insight</i> baru mengenai <br> kesehatan mental</p>
                        <button class="poppins-medium text-[#2196F3] text-[8px] px-6 rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3] mb-8" >Mulai Cari</button>
                    </div>
                </div>
                <hr class="mx-auto w-[416px] border-b border-gray-200">
            </section>

            <section class="my-6">
                <h3 class="poppins-bold text-[#7EBAEB] mb-1 text-center text-sm">Pilih Ruang Konseling Sesuai Kebutuhanmu</h3>
                <p class="text-xs poppins-light mb-2 text-center text-[#4A4E50] mb-8"><span class="poppins-bold text-[#7EBAEB]">Temen</span> <span class="poppins-bold text-[#F36464]">Care</span> menyediakan beragam pilihan ruang <br> aman untuk ceritakan masalahmu, pilih yang paling <br> nyaman menurut kamu:</p>

                <div class="w-full overflow-hidden">
                    <div class="flex">
                        <div class="pl-24 pb-5 ">
                            <div class="h-56 w-52 shadow-md rounded-3xl">
                                <h4 class="poppins-semibold text-xs text-center text-[#4A4E50] pt-6">Online</h4>
                                <img src="./img/cuate-3.svg" alt="cuate-3" class="mx-auto mt-1.5 mb-3">
                                <p class="text-[10px] poppins-light pl-4">Sesi konseling menggunakan <br> <span class="poppins-medium">metode call</span> dengan Psikolog</p>
                            </div>
                        </div>

                        <div class="pl-10 pb-5">
                            <div class="h-56 w-52 shadow-md rounded-3xl">
                                <h4 class="poppins-semibold text-xs text-center text-[#4A4E50] pt-6 pb-1">Onsite</h4>
                                <img src="./img/cuate-4.svg" alt="cuate-4" class="mx-auto mb-5">
                                <p class="text-[10px] poppins-light pl-4">Sesi konseling <br> <span class="poppins-medium">tatap muka</span> dengan Psikolog</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <img src="./img/dot-active.svg" alt="active" class="pr-1">
                    <img src="./img/dot-inactive.svg" alt="inactive">
                </div>
                <hr class="mx-auto w-[416px] border-b border-gray-200 mt-7 mb-6">
            </section>

            <section>
                <h3 class="poppins-medium text-[#4A4E50] text-center text-3.5">Profil Psikolog <span class="poppins-bold text-[#7EBAEB]">Temen</span> <span class="poppins-bold text-[#F36464]">Care</span></h3>
                <p class="poppins-light text-[#4A4E50] text-xs text-center mb-5">Semua Psikolog dan Konselor terbaik siap <br> mendengarkan dan mengatasi setiap masalah <br> seputar:</p>

                <div class="grid grid-cols-3 gap-3 w-[262px] mx-auto mb-8 poppins-medium text-[#0288D1] text-[10px] rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]">
                    <button>Pendidikan</button>
                    <button>Kesepian</button>
                    <button>Hubungan</button>
                    <button>Keluarga</button>
                    <button>Pekerjaan</button>
                    <button>Lainnya</button>
                </div>

                <div class="w-full overflow-hidden">
                    <div class="flex">
                        <div class="pl-24 pb-5 ">
                            <div class="h-56 w-52 shadow-md rounded-3xl bg-[#72A8D4] bg-opacity-50">
                                <img src="./img/doctorimage-template.svg" alt="doctor-image" class="mx-auto mt-1.2">
                                <div class="bg-white text-center pb-3 rounded-b-3xl shadow-md">
                                    <p class="poppins-semibold text-xs text-[#0288D1] mb-2 pt-4">Insan Daud, M. Psi.</p>
                                    <p class="poppins-regular text-[10px] text-[#4A4E50]">Psikolog Industri & Organisasi <br>Spesialis Karir</p>
                                </div>
                            </div>
                        </div>

                        <div class="pl-10 pb-5">
                            <div class="h-56 w-52 shadow-md rounded-3xl bg-[#72A8D4] bg-opacity-50">
                                <img src="./img/doctorimage-template2.svg" alt="doctor-image" class="mx-auto mt-1.2">
                                <div class="bg-white text-center pb-3 rounded-b-3xl shadow-md">
                                    <p class="poppins-semibold text-xs text-[#0288D1] mb-2 pt-4">Bulan Sabit, M. Psi. </p>
                                    <p class="poppins-regular text-[10px] text-[#4A4E50]">Konselor <br>Spesialis Hubungan Sosial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <img src="./img/dot-active.svg" alt="active" >
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
