<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desktop View Temencare Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="flex justify-between py-8 pl-16 pr-7 items-center">
        <img src="./img/temencare-logo.svg" alt="temencare" class="w-72 h-9">
        <nav>
            <a href="" class="poppins-medium text-[#263238] text-2xl">Masuk</a>
        </nav>
    </header>

    <main>
        <section class="relative bg-gradient-to-br from-[#7FB4EC] to-[#C3DCEF] h-[679px] overflow-hidden">
            <div class="text-white pt-40 pl-20">
                <h2 class="poppins-bold text-5xl leading-tight">Sahabat Setia di Setiap <br> Langkah Menuju Mental Sehat</h2>
                <p class="poppins-medium text-2xl mt-2.5 mb-16">Butuh teman cerita? Psikolog berpengalaman,<br> siap dengarkan  dan ringankan bebanmu</p>
                <button class="bg-[#F36464] rounded-3xl px-8 w-48 h-12 poppins-medium text-base">Mulai Konseling</button>
            </div>

            <div class="absolute bottom-0 right-0">
                <div class="relative">
                    <img src="./img/doctorimage-desktop.svg" alt="doctor-image" class="w-[678px] h-[678px]">
                    <p class="absolute -right-3 bottom-0 bg-white rounded-xl text-[22px] text-[#0288D1] p-6 poppins-semibold mb-16">Holy Alin, M. Psi. Psikologi Hewan</p>
                </div>
            </div>
        </section>

        <section class="mt-28">
            <h3 class="poppins-bold text-[#7EBAEB] mb-1 text-center text-5xl">Langkah Awal Menuju Bahagia</h3>
            <p class="text-2xl poppins-light mb-36 mt-6 text-center text-[#4A4E50]">Akses layanan <span class="poppins-bold text-[#7EBAEB]">Temen</span> <span class="poppins-bold text-[#F36464]">Care</span>, buka pintu solusi untuk setiap tanya <br> hatimu. #WaktunyaBahagia dan tingkatkan kualitas hidupmu!</p>


            <div class="flex justify-between px-24 items-center mb-20">
                <div class="">
                    <div class="flex items-center">
                        <img src="./img/pencil.svg" alt="pencil" class="size-14">
                        <p class="poppins-medium text-[#4A4E50] text-3xl ml-2.5">Belum Tahu Kondisi Mentalmu?</p>
                    </div>

                    <p class="poppins-light text-2xl text-[#4A4E50] my-5 ">Pelajari kondisi mentalmu dan pahami apa yang dibutuhkan <br> untuk mencapai mental sehat dengan mengikuti tes yang <br> disiapkan oleh <span class="poppins-bold text-[#7EBAEB]">Temen</span> <span class="poppins-bold text-[#F36464]">Care</span>.</p>
                    <button class="poppins-medium text-[#2196F3] text-base px-10 rounded-3xl py-3 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]" >Mulai Tes</button>
                </div>

                <img src="./img/cuate.svg" alt="cuate" class="w-[378px] h-[405px]">
            </div>
            <hr class="mx-auto w-[1320px] border-b border-gray-200">
        </section>

        <section class="mt-16">
            <div class="flex mb-24 px-24 justify-between">
                <img src="./img/cuate-2.svg" alt="cuate-2" class="w-[395px] h-96">
                <div class="">
                    <div class="flex items-center">
                        <img src="./img/note.svg" alt="note" class="size-14">
                        <p class="poppins-medium text-[#4A4E50] text-3xl ml-2.5">Cari Komunitas Terkait <i>Mental Health</i>?</p>
                    </div>

                    <p class="poppins-light text-2xl text-[#4A4E50] mt-6 mb-4">Komunitas yang disediakan oleh Psikolog dari <br><span class="poppins-bold text-[#7EBAEB]">Temen</span><span class="poppins-bold text-[#F36464]">Care </span>untuk <i>sharing</i> dan mendapat <i>insight</i> baru<br> mengenai kesehatan mental</p>
                    <button class="poppins-medium text-[#2196F3] text-base px-10 rounded-3xl py-3 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]" >Mulai Cari</button>
                </div>
            </div>
            <hr class="mx-auto w-[1320px] border-b border-gray-200">
        </section>

        <section class="mt-28">
            <h3 class="poppins-bold text-[#7EBAEB] mb-8 text-center text-5xl">Pilih Ruang Konseling Sesuai Kebutuhanmu</h3>
            <p class="text-2xl poppins-light text-center text-[#4A4E50] mb-20"><span class="poppins-bold text-[#7EBAEB]">Temen</span> <span class="poppins-bold text-[#F36464]">Care</span> menyediakan beragam pilihan ruang aman untuk ceritakan <br> masalahmu, pilih yang paling nyaman menurut kamu:</p>

            <div class="w-full mb-28">
                <div class="flex justify-center">
                    <div class="pr-16">
                        <div class="w-[360px] h-[406px] shadow-2xl rounded-3xl text-center">
                            <h4 class="poppins-semibold text-2xl text-[#4A4E50] pt-10">Online</h4>
                            <img src="./img/cuate-3.svg" alt="cuate-3" class="size-[184px] mx-auto mt-7 mb-6">
                            <p class="text-xl poppins-light">Sesi konseling menggunakan <br> <span class="poppins-medium">metode call</span> dengan Psikolog</p>
                        </div>
                    </div>

                    <div class="">
                        <div class="w-[360px] h-[406px] shadow-2xl rounded-3xl ">
                            <h4 class="poppins-semibold text-2xl text-[#4A4E50] pt-10 text-center">Onsite</h4>
                            <img src="./img/cuate-4.svg" alt="cuate-4" class="size-48 mx-auto mt-6 mb-5">
                            <p class="text-xl poppins-light pl-12">Sesi konseling <span class="poppins-medium">tatap muka</span> <br>dengan Psikolog</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mx-auto w-[1320px] border-b border-gray-200">
        </section>

        <section class="mt-36">
            <div class="flex pl-28 mb-28">
                <div class="profil-psikolog mt-8">
                    <h3 class="poppins-medium text-[#4A4E50] text-4xl mb-6">Profil Psikolog <br> <span class="poppins-bold text-[#7EBAEB]">Temen</span> <span class="poppins-bold text-[#F36464]">Care</span></h3>
                    <p class="poppins-light text-[#4A4E50] text-xl mb-7">Semua Psikolog dan Konselor <br> terbaik siap mendengarkan dan mengatasi setiap masalah seputar:</p>

                    <div class="grid grid-cols-3 gap-4 w-[331px] mb-10">
                        <button class="poppins-medium text-[#0288D1] text-[10px] rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]" >Pendidikan</button>
                        <button class="poppins-medium text-[#0288D1] text-[10px] rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]" >Kesepian</button>
                        <button class="poppins-medium text-[#0288D1] text-[10px] rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]" >Hubungan</button>
                        <button class="poppins-medium text-[#0288D1] text-[10px] rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]" >Keluarga</button>
                        <button class="poppins-medium text-[#0288D1] text-[10px] rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]" >Pekerjaan</button>
                        <button class="poppins-medium text-[#0288D1] text-[10px] rounded-3xl py-2.5 bg-[#2196F3] bg-opacity-5 border border-[#2196F3]" >Lainnya</button>
                    </div>
                    <button class="bg-[#F36464] rounded-3xl px-8 w-48 h-12 poppins-medium text-base text-white">Mulai Konseling</button>
                </div>

                <div class="doctor-card pl-16 pr-28 relative">
                    <button>
                        <img src="./img/previous-button.svg" alt="previous-button" class="absolute inset-y-52 left-10">
                    </button>

                    <button>
                        <img src="./img/next-button.svg" alt="next-button" class="absolute inset-y-52 right-[90px]">
                    </button>

                    <div class="flex mb-16 ">
                        <div class="">
                            <div class="w-[360px] h-[497px] shadow-md rounded-3xl bg-[#72A8D4] bg-opacity-50">
                                <img src="./img/doctorimage-template.svg" alt="doctor-image" class="mx-auto pt-8 w-64 h-72">
                                <div class="bg-white text-center pb-16 rounded-b-3xl shadow-md">
                                    <p class="poppins-semibold text-xl text-[#0288D1] mb-2 pt-14">Insan Daud, M. Psi.</p>
                                    <p class="poppins-regular text-xl text-[#4A4E50]">Psikolog Industri & Organisasi <br>Spesialis Karir</p>
                                </div>
                            </div>

                        </div>

                        <div class="ml-12">
                            <div class="w-[360px] h-[497px] shadow-md rounded-3xl bg-[#72A8D4] bg-opacity-50">
                                <img src="./img/doctorimage-template.svg" alt="doctor-image" class="mx-auto pt-8 w-64 h-72">
                                <div class="bg-white text-center pb-16 rounded-b-3xl shadow-md">
                                    <p class="poppins-semibold text-xl text-[#0288D1] mb-2 pt-14">Bulan Sabit, M. Psi.</p>
                                    <p class="poppins-regular text-xl text-[#4A4E50]">Konselor<br>Spesialis Hubungan Sosial</p>
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
                </div>
            </div>
            <hr class="mx-auto w-[1320px] border-b border-gray-200">
        </section>

        <footer class="px-24 pb-12 my-32 flex">
            <img src="./img/temencare-logo.svg" alt="temencare-logo" class="w-72 h-9">
            <div class="grid grid-cols-3 gap-6 ml-14">
                <h2 class="poppins-bold text-2xl text-[#7EBAEB]">Layanan Kami</h2>
                <h2 class="poppins-bold text-2xl text-[#7EBAEB]">Lainnya</h2>
                <h2 class="poppins-bold text-2xl text-[#7EBAEB]">Tentang Kami</h2>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">Psikotes</a>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">Syarat dan Ketentuan</a>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">Blog</a>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">Forum Diskusi</a>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">Kebijakan Privasi</a>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">Kontak Kami</a>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">Konseling</a>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">FAQ</a>
                <a href="" class="poppins-regular text-2xl text-[#4A4E50]">Gabung Sebagai Konselor</a>
            </div>
        </footer>
    </main>
</body>

</html>
