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
    <div class="max-w-md bg-white mx-auto relative">
        <!-- Content -->
        <main class="bg-white h-screen flex flex-col">
            {{-- Main --}}
            <div class="w-full h-screen bg-green-300 relative">
                {{-- Main component --}}
                <div class="my-6 pb-10">
                    <h1
                        class="text-neutral-600 text-center text-base poppins-semibold capitalize leading-normal tracking-wide">
                        Halaman lapor</h1>
                    <div class="overflow-x-auto flex flex-1 flex-col mt-2">
                        <div class="grid grid-cols-2 w-full">
                            <button class="col-span-1 text-center py-2">
                                <h1 class="text-[#666666] text-xs poppins-medium leading-normal tracking-tight">Semua
                                    Laporan</h1>
                            </button>
                            <button class="col-span-1 text-center py-2 border-[#2196F3] border-b-2" id="semua-laporan">
                                <h1 class="text-xs poppins-medium leading-normal tracking-tight text-[#2196F3]">Laporan
                                </h1>
                            </button>
                        </div>
                        <div class="flex flex-1 flex-col py-8 px-6">
                            <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                                {{-- Three dots/ellipsis menu --}}
                                <div class="w-full grid justify-items-end">
                                    <div
                                        class="w-6 h-4 justify-center items-center flex relative bg-neutral-100 rounded-sm">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                {{-- Profile --}}
                                <div class="flex w-full mt-[2px] items-center space-x-2">
                                    {{-- Profile Image --}}
                                    <div
                                        class="w-9 h-9 bg-blue-300 rounded-full flex-col justify-center items-center inline-flex">
                                    </div>
                                    {{-- Name --}}
                                    <div>
                                        <h2 class="text-black text-xs poppins-normal">H***</h2>
                                        <p class="text-neutral-600 text-[10px] poppins-normal">Baru saja</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="flex justify-between items-center bg-blue-500 w-full py-2">
                            <div class="flex flex-col items-center">
                                <button class="focus:outline-none"
                                    onclick="toggleActive('semua-laporan'); navigateTo('semua-laporan');">
                                    <div id="semua-laporan"
                                        class="text-sky-500 text-xs font-medium leading-normal tracking-tight">
                                        Semua Laporan
                                    </div>
                                </button>
                                <div id="underline-semua-laporan" class="w-[160px] h-[2px] bg-sky-500"></div>
                            </div>
                            <div class="flex flex-col items-center">
                                <button class="focus:outline-none"
                                    onclick="toggleActive('laporan-kamu'); navigateTo('laporan-kamu');">
                                    <div id="laporan-kamu"
                                        class="text-neutral-600 text-xs font-medium capitalize leading-normal tracking-tight">
                                        Laporan Kamu
                                    </div>
                                </button>
                                <div id="underline-laporan-kamu" class="w-[160px] h-0 bg-sky-500"></div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="w-9 h-9 bg-blue-300 rounded-full absolute right-6 bottom-6">
                </div>
              </div>
        </main>
    </div>
</body>

<script>
    function toggleActive(buttonId) {
        var activeButton = document.getElementById(buttonId);
        var activeUnderline = document.getElementById('underline-' + buttonId);
        var allButtons = document.querySelectorAll('.flex-col button div');
        var allUnderlines = document.querySelectorAll('.flex-col div:nth-child(2)');
        allButtons.forEach(function(btn) {
            btn.classList.remove('text-sky-500');
            btn.classList.add('text-black', 'text-opacity-60');
        });
        allUnderlines.forEach(function(underline) {
            underline.style.height = '0px';
        });
        activeButton.classList.add('text-sky-500');
        activeButton.classList.remove('text-black', 'text-opacity-60');
        activeUnderline.style.height = '2px';
    }

    function navigateTo(reportType) {
        if (reportType === 'semua-laporan') {
            window.location.href = '/Showlapor';
        } else if (reportType === 'laporan-kamu') {
            window.location.href = '/Showlaporankamu';
        }
    }

    function togglePopup(displayStatus) {
        document.getElementById('popup').style.display = displayStatus;
    }

    document.getElementById('openPopupBtn').onclick = function() {
        togglePopup('block');
    }

    document.getElementById('closePopupBtn').onclick = function() {
        togglePopup('none');
    }

    function hapusLaporan() {
        // Fungsi untuk menghapus laporan
    }

    function ubahLaporan() {
        // Fungsi untuk mengubah laporan
    }

    // Fungsi untuk menampilkan pop-up menu
    function togglePopupMenu() {
        var popupMenu = document.getElementById('popupMenu');
        popupMenu.style.display = popupMenu.style.display === 'none' ? 'block' : 'none';
    }

    function togglePopupConfirm() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popupConfirm').style.display = 'block';
    }

    function closePopup() {
        // Sembunyikan pop-up dan overlay tanpa menghapus laporan
        document.getElementById('popupConfirm').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
</script>

</html>


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile View Layout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto h-screen">
        <header class="text-neutral-600 py-4 flex justify-between items-center px-5">
            <img src="icon/maki_arrow.png" alt="back icon" class="w-[15px] h-[15px]">
            <h1 class="text-xl font-bold">Halaman Lapor</h1>
            <div class="w-[15px] h-[15px]"></div>
        </header>

        <div class="flex justify-between items-center mt-0 px-4">
            <div class="flex flex-col items-center">
                <button class="focus:outline-none"
                    onclick="toggleActive('semua-laporan'); navigateTo('semua-laporan');">
                    <div id="semua-laporan" class="text-sky-500 text-xs font-medium leading-normal tracking-tight">
                        Semua Laporan
                    </div>
                </button>
                <div id="underline-semua-laporan" class="w-[160px] h-[2px] bg-sky-500"></div>
            </div>
            <div class="flex flex-col items-center">
                <button class="focus:outline-none" onclick="toggleActive('laporan-kamu'); navigateTo('laporan-kamu');">
                    <div id="laporan-kamu"
                        class="text-neutral-600 text-xs font-medium capitalize leading-normal tracking-tight">
                        Laporan Kamu
                    </div>
                </button>
                <div id="underline-laporan-kamu" class="w-[160px] h-0 bg-sky-500"></div>
            </div>
        </div>
        <main class="mt-8">

            <div class="profile-container"
                style="display: flex; flex-direction: column; align-items: flex-start; background: white; border-radius: 26px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: 344px; height: auto; margin-bottom:20px; position: relative;">
                <div class="profile-header"
                    style="display: flex; align-items: center; width: 100%; margin-bottom: 10px;">
                    <img class="profile-image"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="holy" style="width: 48px; height: 48px; border-radius: 50%; margin-right: 16px;">
                    <div class="profile-text">
                        <p class="name" style="font-size: 14px; font-weight: medium; text-neutral-600; text-xs">H****
                        </p>
                        <div style="position: absolute; top: 20px; right: 20px;">
                            <button>
                                <img class="three-dot" src=icon/3dot.svg onclick="togglePopupMenu('block')">
                            </button>
                        </div>
                        <p class="mt-1 truncate text-xs leading-5 text-neutral-500">Baru Saja</p>
                    </div>
                </div>
                <div class="content-text">
                    <p style="font-size: 14px; text-neutral-600;">Hati-hati di daerah Telkom depan gate 4, gua abis
                        kena catcall </p>
                </div>
            </div>

            <div class="profile-container"
                style="display: flex; flex-direction: column; align-items: flex-start; 
        background: white; border-radius: 26px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: 344px; height: auto; mt-20; margin-bottom: 20px;">
                <div class="profile-header"
                    style="display: flex; align-items: center; width: 100%; margin-bottom: 10px;">
                    <img class="profile-image"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Leslie Alexander"
                        style="width: 48px; height: 48px; border-radius: 50%; margin-right: 16px;">
                    <div class="profile-text">
                        <p class="name" style="font-size: 14px; font-weight: medium; text-neutral-600; text-xs">
                            H****</p>
                        <p class="mt-1 truncate text-xs leading-5 text-neutral-500">Baru Saja</p>
                    </div>
                </div>
                <div class="content-text">
                    <p style="font-size: 14px; text-neutral-600;">Hati-hati di daerah Telkom depan gate 4, gua abis
                        kena catcall </p>
                </div>
            </div>

            <div class="profile-container"
                style="display: flex; flex-direction: column; align-items: flex-start; 
        background: white; border-radius: 26px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: 344px; height: auto; mt-20; margin-bottom: 20px;">
                <div class="profile-header"
                    style="display: flex; align-items: center; width: 100%; margin-bottom: 10px;">
                    <img class="profile-image"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Leslie Alexander"
                        style="width: 48px; height: 48px; border-radius: 50%; margin-right: 16px;">
                    <div class="profile-text">
                        <p class="name" style="font-size: 14px; font-weight: medium; text-neutral-600; text-xs">
                            H****</p>
                        <p class="mt-1 truncate text-xs leading-5 text-neutral-500">Baru Saja</p>
                    </div>
                </div>
                <div class="content-text">
                    <p style="font-size: 14px; text-neutral-600;">Hati-hati di daerah Telkom depan gate 4, gua abis
                        kena catcall </p>
                </div>
            </div>

            <div class="profile-container"
                style="display: flex; flex-direction: column; align-items: flex-start; 
        background: white; border-radius: 26px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: 344px; height: auto; mt-20; margin-bottom: 20px;">
                <div class="profile-header"
                    style="display: flex; align-items: center; width: 100%; margin-bottom: 10px;">
                    <img class="profile-image"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Leslie Alexander"
                        style="width: 48px; height: 48px; border-radius: 50%; margin-right: 16px;">
                    <div class="profile-text">
                        <p class="name" style="font-size: 14px; font-weight: medium; text-neutral-600; text-xs">
                            H****</p>
                        <p class="mt-1 truncate text-xs leading-5 text-neutral-500">Baru Saja</p>
                    </div>
                </div>
                <div class="content-text">
                    <p style="font-size: 14px; text-neutral-600;">Hati-hati di daerah Telkom depan gate 4, gua abis
                        kena catcall </p>
                </div>
            </div>


            <div style="position: fixed; bottom: 10px; right: 10px;">
                <button class="w-14 h-14 bg-blue-300 rounded-full shadow fixed"
                    style="bottom: 20px; right: 20px; margin-right: 500px"onclick="togglePopup('block')">
                    <img src="icon/addfilled.png" alt="add icon" class="w-6 h-6" style="margin-left: 15px;">
                </button>
            </div>

            <div id="popup" class="popup"
                style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
                <div class="popup-content"
                    style="background-color: white; padding: 20px; position: relative; width: 30%;border-radius: 10px; margin: auto; margin-top: 15%;">
                    <span id="closePopupBtn" class="close-btn"
                        style="cursor: pointer; position: absolute; right: 20px; top: 10px; font-size: 24px;"
                        onclick="togglePopup('none')">&times;</span>
                    <p
                        style="font-size: 18px;  position: absolute; left: 140px; top: 20px; font-weight: bold; text-neutral-600;">
                        Tuliskan Laporanmu</p>
                    <textarea placeholder="Tuliskan pengalamanmu di sini" style="width: 100%; padding: 10px; margin-top: 60px;"></textarea>
                    <button
                        style="background: #7EBAEB; border: none; color: white; padding: 10px 20px; 
            font-size: 16px; border-radius: 20px; cursor: pointer; display: block; margin: 20px auto; font-weight: medium;">Kirim</button>
                </div>
            </div>
        </main>
    </div>

    <div id="popupMenu" class="popup-menu"
        style="display: none; position: absolute; top: 150px; right: 600px; background: white; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); padding: 10px; z-index: 100; width: 150px;">
        <button
            style="background: none; border: none; color: red; padding: 10px; text-align: left; 
      width: 100%; cursor: pointer; border-radius: 5px; margin-bottom: 5px; font-size: 14px; "
            onclick="togglePopupConfirm('block')">Hapus Laporan
        </button>
        <button
            style="background: none; border: none; color: black; padding: 10px; text-align: left; 
      width: 100%; cursor: pointer; border-radius: 5px; font-size: 14px;"
            onclick="togglePopup('block')">Ubah Laporan
        </button>
    </div>


    <div id="overlay"
        style="position: fixed; top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.5); z-index: 999; display: none;">
    </div>

    <div id="popupConfirm" class="popup-menu"
        style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white;
      border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); padding: 20px; z-index: 1000; width: 300px;">
        <p style="margin: 0; font-size: 18px; font-weight: bold; text-align: center;">Yakin ingin hapus laporanmu?</p>
        <p style="margin: 10px 0 20px; text-align: center; ">Setelah dihapus laporan hilang permanen loh..</p>
        <button
            style="background: skyblue; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin-right: 10px; cursor: pointer; display: inline-block;">Yakin</button>
        <button
            style="background: grey; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; display: inline-block; margin: 10px 5px; "onclick="closePopup()">Kembali</button>
    </div>

    <script>
        function toggleActive(buttonId) {
            var activeButton = document.getElementById(buttonId);
            var activeUnderline = document.getElementById('underline-' + buttonId);
            var allButtons = document.querySelectorAll('.flex-col button div');
            var allUnderlines = document.querySelectorAll('.flex-col div:nth-child(2)');
            allButtons.forEach(function(btn) {
                btn.classList.remove('text-sky-500');
                btn.classList.add('text-black', 'text-opacity-60');
            });
            allUnderlines.forEach(function(underline) {
                underline.style.height = '0px';
            });
            activeButton.classList.add('text-sky-500');
            activeButton.classList.remove('text-black', 'text-opacity-60');
            activeUnderline.style.height = '2px';
        }

        function navigateTo(reportType) {
            if (reportType === 'semua-laporan') {
                window.location.href = '/Showlapor';
            } else if (reportType === 'laporan-kamu') {
                window.location.href = '/Showlaporankamu';
            }
        }

        function togglePopup(displayStatus) {
            document.getElementById('popup').style.display = displayStatus;
        }

        document.getElementById('openPopupBtn').onclick = function() {
            togglePopup('block');
        }

        document.getElementById('closePopupBtn').onclick = function() {
            togglePopup('none');
        }

        function hapusLaporan() {
            // Fungsi untuk menghapus laporan
        }

        function ubahLaporan() {
            // Fungsi untuk mengubah laporan
        }

        // Fungsi untuk menampilkan pop-up menu
        function togglePopupMenu() {
            var popupMenu = document.getElementById('popupMenu');
            popupMenu.style.display = popupMenu.style.display === 'none' ? 'block' : 'none';
        }

        function togglePopupConfirm() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('popupConfirm').style.display = 'block';
        }

        function closePopup() {
            // Sembunyikan pop-up dan overlay tanpa menghapus laporan
            document.getElementById('popupConfirm').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>


    <footer class="text-center text-gray-500 text-sm mt-4">
        <p>&copy; 2024 Mobile View Footer</p>
    </footer>
    <x-bottom-menu></x-bottom-menu>
</body>

</html> --}}
