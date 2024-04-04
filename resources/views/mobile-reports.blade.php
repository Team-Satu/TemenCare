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
            <div class="w-full h-screen bg-white relative">
                {{-- Main component --}}
                <div class="my-6 pb-10">
                    <h1
                        class="text-neutral-600 text-center text-base poppins-semibold capitalize leading-normal tracking-wide">
                        Halaman lapor</h1>
                    <div class="overflow-x-auto flex flex-1 flex-col mt-2">
                        <div class="grid grid-cols-2 w-full">
                              <div class="col-span-1 text-center py-2 border-[#2196F3] border-b-2" id="semua-laporan">
                                <h1 class=" text-xs poppins-medium leading-normal tracking-tight text-[#2196F3]">Semua
                                    Laporan</h1>
                              </div>
                              <a href ="/yourreports" class="col-span-1 text-center py-2" id="laporan-kamu">
                                <h1 class="text-xs poppins-medium leading-normal tracking-tight text-[#666666]">Laporan kamu</h1>
                              </a>
                        </div>
                        <div class="flex flex-1 flex-col py-4 px-6">
                            <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                                {{-- Three dots/ellipsis menu --}}
                                <button class="w-full grid justify-items-end" onclick="showConfirm('block')">
                                    <div
                                        class="w-6 h-4 justify-center items-center flex relative bg-neutral-100 rounded-sm">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </button>
                                {{-- Profile --}}
                                <div class="flex w-full mt-[2px] items-center space-x-2 ">
                                    {{-- Profile Image --}}
                                    <div
                                        class="w-9 h-9 bg-blue-300 rounded-full flex-col justify-center items-center inline-flex ">
                                    </div>
                                    {{-- Name --}}
                                    <div>
                                        <h2 class="text-black text-xs poppins-normal">H***</h2>
                                        <p class="text-neutral-600 text-[10px] poppins-normal">Baru saja</p>
                                    </div>
                                </div>
                                <p class="text-neutral-600 text-[12px] poppins-medium py-2">Hati-hati di daerah Telkom depan gate 4, gua abis kena catcall</p>
                            </div>
                        </div>
                        <div class="flex flex-1 flex-col py-4 px-6 ">
                            <div class="w-full bg-white shadow-md border rounded-3xl py-3 px-4">
                                {{-- Profile --}}
                                <div class="flex w-full mt-[2px] items-center space-x-2 ">
                                    {{-- Profile Image --}}
                                    <div
                                        class="w-9 h-9 bg-blue-300 rounded-full flex-col justify-center items-center inline-flex ">
                                    </div>
                                    {{-- Name --}}
                                    <div>
                                        <h2 class="text-black text-xs poppins-normal">H***</h2>
                                        <p class="text-neutral-600 text-[10px] poppins-normal">Baru saja</p>
                                    </div>
                                </div>
                                <p class="text-neutral-600 text-[12px] poppins-medium py-2">Hati-hati di daerah Telkom depan gate 4, gua abis kena catcall</p>
                            </div>
                        </div>
                    </div>
                    <div id="confirm" class="hidden w-[125px] h-[92px] bg-white shadow-md border rounded-xl right-[30px] top-[140px] absolute ">
                    <div class="w-[125px] h-[46px] flex justify-center items-center">
                      <button class="w-full">
                      <p class="text-center py-3 border-b-2 border-gray-400 text-xs text-red-400 w-full">Hapus Laporan</p>
                      </button>
                    </div>
                    <div class="w-[125px] h-[46px] flex justify-center items-center">
                      <button class="w-full">
                      <p class="text-center py-3 text-xs">Ubah Laporan</p>
                      </button>
                    </div>
                  </div>
                </div>
                <button onclick="showDialog('block')">
                    <div class="w-[56px] h-[56px] bg-blue-300 rounded-full absolute right-6 bottom-6 shadow-md">
                        <i class="fa-solid fa-plus absolute right-[21px] bottom-[20px]" style="color:#ffffff"></i>
                    </div>
                <button>
                </div>
              </div>
            <div id= "dialog" class="hidden fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen">
              <div class="w-96 h-80 absolute left-[580px] bottom-[50px] bg-white rounded-3xl shadow-2xl">
              <div class="w-full grid justify-items-end ">
                  <button class="right-[20px] top-[16px] absolute" onclick="showDialog('none')">
                      <i class="fa-solid fa-xmark"></i>
                  </button>
                <div class="w-80 h-44 left-[27px] top-[60px] absolute justify-start items-start inline-flex">
                  <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start inline-flex">
                      <textarea placeholder="Tuliskan pengalamanmu di sini" class="self-stretch grow shrink basis-0 py-4 justify-start items-center inline-flex poppins-medium text-xs rounded-lg  border border-gray-300 w-full p-2.5" ></textarea>
                  </div>
                </div>
                <div class="left-[120px] top-[20px] absolute text-neutral-600 text-xs poppins-semibold capitalize leading-normal tracking-wide">Tuliskan laporanmu</div>
                <button class="w-52 h-8 px-4 py-1.5 left-[85px] top-[260px] absolute bg-blue-300 rounded-3xl shadow flex-col justify-center items-center inline-flex">
                  <div class="justify-center items-center gap-2 inline-flex">
                    <div class="text-center text-white text-xs poppins-medium capitalize leading-normal tracking-wide">Kirim</div>
                  </div>
                </button>
              </div>
            </div>
        </main>
    </div>
    <script>
      function showDialog(){
        var dialog = document.getElementById("dialog");
        dialog.style.display = dialog.style.display === 'none' ? 'block' : 'none';
      }
      function showConfirm(){
        var confirm = document.getElementById("confirm");
        confirm.style.display = confirm.style.display === 'none' ? 'block' : 'none';
      }
    </script>
</body>


