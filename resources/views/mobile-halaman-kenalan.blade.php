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
    <div class="max-w-md mx-auto bg-white">
        <!-- Content -->
        <main class="bg-white h-full flex flex-col">
        <div class="w-[393px] h-[852px] relative left-6 bg-white">
        <x-back-button></x-back-button>
            <div class="w-[344px] h-[118px] left-[669px] top-[101px] fixed bg-white rounded-[26px] shadow"></div>
            <div class="w-[344px] h-[118px] left-[25px] top-[303px] absolute">
              <div class="w-[344px] h-[118px] left-0 top-0 absolute bg-white rounded-[26px] shadow"></div>
              <div class="left-[71px] top-[45px] absolute text-black text-xs font-normal font-['Poppins']">Sabitha Sabit</div>
              <div class="left-[71px] top-[61px] absolute text-neutral-600 text-[8px] font-normal font-['Poppins']">35 Kenalan</div>
              <div class="w-9 h-9 left-[27.50px] top-[40px] absolute bg-blue-300 rounded-[100px] flex-col justify-center items-center inline-flex">
                <i class="fa-solid fa-user text-white text-xl mt-5"></i>
                <div class="justify-start items-start inline-flex">
                  <div class="w-6 h-6 p-1 justify-center items-center flex"></div>
                </div>
                <div class="w-10 h-10 relative origin-top-left -rotate-90"></div>
              </div>
              <div class="w-[110px] h-[34px] px-4 py-1.5 left-[208px] top-[44px] absolute bg-green-600 rounded-[26px] shadow flex-col justify-center items-end inline-flex">
                <div class="justify-center items-center gap-2 inline-flex">
                  <div class="text-center flex items-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                  <i class="fab fa-whatsapp text-xl mr-2"></i>Kenalan
                  </div>
                </div>
              </div>
            </div>
            <div class="w-[345px] h-[118px] left-[24px] top-[451px] absolute">
              <div class="w-[345px] h-[118px] left-0 top-0 absolute bg-white rounded-[26px] shadow"></div>
              <div class="w-[80.23px] left-[71.21px] top-[45px] absolute text-black text-xs font-normal font-['Poppins']">Windy Angin</div>
              <div class="left-[71.21px] top-[61px] absolute text-neutral-600 text-[8px] font-normal font-['Poppins']">27 Kenalan</div>
              <div class="w-9 h-9 left-[27.50px] top-[40px] absolute bg-blue-300 rounded-[100px] flex-col justify-center items-center inline-flex">
                <i class="fa-solid fa-user text-white text-xl mt-5"></i>
                <div class="justify-start items-start inline-flex">
                  <div class="w-6 h-6 p-1 justify-center items-center flex"></div>
                </div>
                <div class="w-10 h-10 relative origin-top-left -rotate-90"></div>
              </div>
              <div class="w-[110px] h-[34px] px-4 py-1.5 left-[209px] top-[42px] absolute bg-green-600 rounded-[26px] shadow flex-col justify-center items-end inline-flex">
              <div class="text-center flex items-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                  <i class="fab fa-whatsapp text-xl mr-2"></i>Kenalan
                  </div>
              </div>
              <div class="w-5 h-[20.16px] left-[220px] top-[48px] absolute"></div>
            </div>
            <div class="w-[345px] h-[118px] left-[24px] top-[599px] absolute">
              <div class="w-[345px] h-[118px] left-0 top-0 absolute bg-white rounded-[26px] shadow"></div>
              <div class="w-[80.23px] left-[71.21px] top-[45px] absolute text-black text-xs font-normal font-['Poppins']">Insan Daud</div>
              <div class="left-[71.21px] top-[61px] absolute text-neutral-600 text-[8px] font-normal font-['Poppins']">20 Kenalan</div>
              <div class="w-9 h-9 left-[27.50px] top-[40px] absolute bg-blue-300 rounded-[100px] flex-col justify-center items-center inline-flex">
                <i class="fa-solid fa-user text-white text-xl mt-5"></i>
                <div class="justify-start items-start inline-flex">
                  <div class="w-6 h-6 p-1 justify-center items-center flex"></div>
                </div>
                <div class="w-10 h-10 relative origin-top-left -rotate-90"></div>
              </div>
              <div class="w-[110px] h-[34px] px-4 py-1.5 left-[209px] top-[44px] absolute bg-green-600 rounded-[26px] shadow flex-col justify-center items-end inline-flex">
              <div class="text-center flex items-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                  <i class="fab fa-whatsapp text-xl mr-2"></i>Kenalan
                  </div>
              </div>
              <div class="w-5 h-[20.16px] left-[220px] top-[50px] absolute"></div>
            </div>
            <div class="w-[345px] h-[118px] left-[24px] top-[747px] absolute">
              <div class="w-[345px] h-[118px] left-0 top-0 absolute bg-white rounded-[26px] shadow"></div>
              <div class="w-[80.23px] left-[71.21px] top-[45px] absolute text-black text-xs font-normal font-['Poppins']">Risas Taufik</div>
              <div class="left-[71.21px] top-[61px] absolute text-neutral-600 text-[8px] font-normal font-['Poppins']">100 Kenalan</div>
              <div class="w-9 h-9 left-[27.50px] top-[40px] absolute bg-blue-300 rounded-[100px] flex-col justify-center items-center inline-flex">
                <i class="fa-solid fa-user text-white text-xl mt-5"></i>
                <div class="justify-start items-start inline-flex">
                  <div class="w-6 h-6 p-1 justify-center items-center flex"></div>
                </div>
                <div class="w-10 h-10 relative origin-top-left -rotate-90"></div>
              </div>
              <div class="w-[110.32px] h-[34px] px-4 py-1.5 left-[216.63px] top-[44px] absolute bg-blue-300 rounded-[26px] shadow flex-col justify-center items-center inline-flex">
                <div class="justify-center items-center gap-2 inline-flex">
                  <div class="text-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">Kenalan</div>
                </div>
              </div>
            </div>
            <div class="fixed top-0 w-[400px] h-[118px] bg-blue-500">
              <div class="left-[120px] top-[52px] absolute text-neutral-600 text-base font-semibold font-['Poppins'] capitalize leading-normal tracking-wide">Halaman Kenalan</div>
              <div class="w-[102px] h-14 left-[53px] top-[130px] absolute">
                <div class="left-[62px] top-[13px] absolute text-black text-xs font-semibold font-['Poppins']">Holy
                </div>
                <div class="left-[62px] top-[33px] absolute text-neutral-600 text-[8px] font-normal font-['Poppins']">0 Kenalan</div>
                <div class="w-14 h-14 left-0 top-0 absolute">
                  <div class="w-14 h-14 left-0 top-0 absolute bg-zinc-300 rounded-full"></div>
                  <img class="w-14 h-14 left-0 top-0 absolute rounded-full" src="https://images.unsplash.com/photo-1711887035871-36bcc533c19c?q=80&w=2237&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>
              </div>
              <div class="w-[110px] h-[34px] px-4 py-1.5 fixed left-[233px] top-[141px] absolute bg-blue-300 rounded-[26px] shadow flex-col justify-center items-center inline-flex">
                <div class="justify-center items-center gap-2 inline-flex">
                  <div class="text-center text-white text-xs font-medium font-['Poppins'] leading-normal tracking-wide">Ubah Profil</div>
                </div>
              </div>
              <div class="w-[394px] h-[54px] left-[-1px] top-[226px] absolute justify-center items-center inline-flex">
                <div class="w-[390px] flex-col justify-start items-start inline-flex">
                  <div class="self-stretch justify-start items-start inline-flex">
                    <div class="grow shrink basis-0 flex-col justify-center items-center inline-flex">
                    <a href="daftar-kenalan" id="daftarkenalan">
                      <div class="px-4 py-[9px] justify-center items-center gap-2 inline-flex">
                        <div class="text-sky-500 text-xs font-medium leading-normal tracking-tight">Semua Kenalan</div>
                      </div>
                    </a>
                      <div class="w-[195px] h-[0px] border-2 border-sky-500"></div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-center items-center inline-flex">
                    <a href="/kenalan-kamu" id="kenalankamu">
                      <div class="px-4 py-[9px] justify-center items-center gap-2 inline-flex">
                        <div class="text-black text-opacity-60 text-xs font-medium capitalize leading-normal tracking-tight">Kenalan Kamu</div>
                      </div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-5 h-[20.16px] left-[244px] top-[353px] absolute"></div>
          </div>
          <x-bottom-menu></x-bottom-menu>
        </main>
    </div>
</body>

</html>
