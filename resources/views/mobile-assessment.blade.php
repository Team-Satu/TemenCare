<!DOCTYPE html>
<html lang="id">

<head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temen Care</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-md bg-white p-4 mx-auto relative">
        <main class="bg-white-200 h-full flex flex-col w-full relative">
            <div>
                <x-header-component title="Halaman Asesmen"></x-header-component>
            </div>
            <!-- Categories -->
            <div class="flex h-max bg-black">
                {{-- <div class="w-6 h-[60px] bg-white">

                </div> --}}
                {{-- <div class="w-[40px] h-[20px] border ml-[60px] border-blue-400 bg-black"> --}}
                    {{-- <button class="w-20 h-5 rounded-3xl ml-[15px] border border-blue-400 flex-col justify-center items-center inline-flex">
                        <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Pekerjaan
                        </div>
                    </button> --}}
                {{-- </div> --}}
                <div class="w-32 h-56 border border-blue-400">
                    <button class="w-20 h-5 rounded-3xl ml-[15px] border border-blue-400 flex-col justify-center items-center inline-flex">
                        <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Pekerjaan
                        </div>
                    </button>
                </div>
                {{-- <div class="w-32 h-56 border ml-[60px] border-blue-400">
                    <button class="w-20 h-5 rounded-3xl ml-[15px] border border-blue-400 flex-col justify-center items-center inline-flex">
                        <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Pekerjaan
                        </div>
                    </button>
                </div>
                <div class="w-32 h-56 border ml-[60px] border-blue-400">
                    <button class="w-20 h-5 rounded-3xl ml-[15px] border border-blue-400 flex-col justify-center items-center inline-flex">
                        <div class="text-center text-blue-400 text-xs poppins-medium capitalize leading-normal tracking-wide">
                            Pekerjaan
                        </div>
                    </button>
                </div> --}}
            </div>
            <!-- Schedule and Details -->
            <div class="p-5">
                <h3 class="text-md font-semibold mb-1">Status</h3>
                <p class="text-sm text-gray-800">Dijadwalkan</p>
                <h3 class="text-md font-semibold mt-4 mb-1">Jadwal</h3>
                <p class="text-sm text-gray-800">Senin, 12:00-14:00 (Onsite)</p>
                <h3 class="text-md font-semibold mt-4 mb-1">Lokasi</h3>
                <p class="text-sm text-gray-800">Gedung Ditmawa</p>
                <h3 class="text-md font-semibold mt-4 mb-1">Keluhan</h3>
                <p class="text-sm text-gray-800">Saya akhir-akhir ini gabisa tidur terus setiap hari ngerasa cape terus gamau berkegiatan apa-apa</p>
            </div>
            <!-- Cancel Button -->
            <div class="px-5 pb-5 text-center">
            <button class="cancel-button text-red-500 border border-red-500 text-sm rounded py-2 px-4 hover:bg-red-500 hover:text-white transition-colors">
    Batalkan Konseling
</button>

            </div>
        </main>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const cancelButton = document.querySelector('.cancel-button');

        cancelButton.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, batalkan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Dibatalkan!',
                        text: 'Sesi konseling Anda telah dibatalkan.',
                        icon: 'success',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        // Setelah pesan sukses ditutup, arahkan pengguna ke halaman home
                        window.location.href = "{{ route('user.dashboard') }}";
                    });
                }
            });
        });
    });
</script>

</body>

</html>
