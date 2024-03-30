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
            <section class="w-full bg-gradient-to-r from-blue-400 to-blue-200 pt-14 pb-10 px-6 space-y-[6px]">
                <h1 class="poppins-semibold text-white text-xl">Halo Holy!</h1>
                <h1 class="poppins-medium tracking-wide text-white text-lg">Bagaimana Kondisimu Hari ini?</h1>
            </section>

            {{-- Main --}}
            <div class="bg-white rounded-t-3xl w-full h-full -mt-6">
                <div class="rounded-3xl w-full bg-white shadow-md p-7 justify-center items-center">
                    <div class="text-center">
                        <span
                            class="text-neutral-600 text-lg font-semibold font-['Poppins'] capitalize leading-normal tracking-wide">Layanan
                        </span>
                        <span
                            class="text-blue-300 text-lg font-bold font-['Poppins'] capitalize leading-normal tracking-wide">Temen</span>
                        <span
                            class="text-red-400 text-lg font-bold font-['Poppins'] capitalize leading-normal tracking-wide">
                            Care</span>
                    </div>
                    <div class="mt-6 grid grid-cols-4 w-full gap-6">
                        <div class="col-span-1 space-y-1 flex-col items-center flex">
                            <div class="h-6 w-6 border border-black bg-yellow-200"></div>
                            <p class="poppins-medium text-black text-xs text-center">Asesmen</p>
                        </div>
                        <div class="col-span-1 space-y-1 flex-col items-center flex">
                            <div class="h-6 w-6 border border-black bg-yellow-200"></div>
                            <p class="poppins-medium text-black text-xs text-center">Asesmen</p>
                        </div>
                        <div class="col-span-1 space-y-1 flex-col items-center flex">
                            <div class="h-6 w-6 border border-black bg-yellow-200"></div>
                            <p class="poppins-medium text-black text-xs text-center">Asesmen</p>
                        </div>
                        <div class="col-span-1 space-y-1 flex-col items-center flex">
                            <div class="h-6 w-6 border border-black bg-yellow-200"></div>
                            <p class="poppins-medium text-black text-xs text-center">Asesmen</p>
                        </div>
                        <div class="col-span-1 space-y-1 flex-col items-center flex">
                            <div class="h-6 w-6 border border-black bg-yellow-200"></div>
                            <p class="poppins-medium text-black text-xs text-center">Asesmen</p>
                        </div>
                        <div class="col-span-1 space-y-1 flex-col items-center flex">
                            <div class="h-6 w-6 border border-black bg-yellow-200"></div>
                            <p class="poppins-medium text-black text-xs text-center">Asesmen</p>
                        </div>
                    </div>
                </div>

                {{-- Main component --}}
                <div class="px-6 my-6">
                    <h2 class="text-gray-800 text-base poppins-medium leading-normal tracking-wide">Psikolog kami
                        akan setia membantu</h2>
                    <p class="text-gray-500 text-xs poppins-reguler leading-normal tracking-wide">Bagi mereka yang butuh
                        pertolongan dengan segera.</p>

                    <div>
                        <div class="w-48 shadow-md rounded-2xl mt-6">
                            <div
                                class="rounded-t-2xl h-36 w-full bg-[url(https://images.unsplash.com/photo-1651008376811-b90baee60c1f?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-center bg-cover">
                            </div>
                            <div class="bg-white w-full rounded-b-2xl py-2">
                                <h1
                                    class="text-center text-sky-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide">
                                    Insan Daud, M. Psi. </h1>
                                <div
                                    class="text-center text-neutral-600 text-[10px] px-2 font-normal font-['Poppins'] capitalize tracking-wide my-2">
                                    Psikolog Industri & Organisasi <br />Spesialis Karir</div>

                                {{-- Loop --}}
                                <div class="px-2 my-1">
                                    {{-- Each Component --}}
                                    <div
                                        class="px-[4px] py-[1px] bg-slate-50 rounded-3xl border border-sky-600 border-opacity-50 flex-col justify-center items-center inline-flex text-sky-600 text-[10px] font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                                        Pekerjaan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
