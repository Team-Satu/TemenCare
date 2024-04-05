<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temen Care</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md bg-white mx-auto relative">
        <!-- Content -->
        <main class="bg-white h-screen flex flex-col">
            {{-- Main --}}
            <div class="w-full h-screen bg-white relative">
                <!-- Back Arrow and Title -->
                    <div class="flex items-center mt-4">
                        <button type="button" class="fa-solid fa-arrow-left-long text-gray-600 text-xl absolute left-6 top-6"></button>
                        <h1 class="w-80 h-14 text-neutral-600 text-2xl font-semibold font-['Poppins'] leading-normal tracking-wide pt-14 pb-10 px-6 space-y-[6px] mb-7">Temukan Komunitas Baru</h1>
                    </div>

                    <!-- Community Cards -->
                    <div class="mt-4">
                        <div class="bg-white">
                            <a href="{{ url('/communities-detail') }}">
                                <div class="flex items-center px-2">
                                    <div class="flex items-start p-4">
                                        <img class="w-32 h-24 mr-4 flex-shrink-0 bg-zinc-300 rounded" src="/img/meditasi.png" alt="Komunitas Meditasi">
                                        <div class="flex-grow">
                                            <h2 class="w-44 h-6 text-neutral-600 text-base font-medium font-['Poppins'] leading-normal tracking-wide">Komunitas Meditasi</h2>
                                            <p class="text-justify text-neutral-600 text-xs font-normal font-['Poppins'] capitalize leading-normal tracking-wide">Rajin meditasi pikiran damai</p></a>
                                                <div class="flex w-full mt-[2px] items-center space-x-2 ">
                                                    {{-- Profile Image --}}
                                                    <div class="flex-col justify-center items-center inline-flex mt-2 ">
                                                        <img class="w-8 h-8 rounded-full" src="/img/psikolog_insan.png" alt="Psikolog Insan">
                                                    </div>
                                                    {{-- Name --}}
                                                    <div>
                                                        <p class="text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide mt-2">Insan Daud, M. Psi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="flex items-center px-2">
                                    <div class="flex items-start p-4">
                                        <img class="w-32 h-24 mr-4 flex-shrink-0 bg-zinc-300 rounded" src="/img/olahraga.png" alt="Komunitas Olahraga">
                                        <div class="flex-grow">
                                            <h2 class="w-44 h-6 text-neutral-600 text-base font-medium font-['Poppins'] leading-normal tracking-wide">Komunitas Olahraga</h2>
                                            <p class="text-justify text-neutral-600 text-xs font-normal font-['Poppins'] capitalize leading-normal tracking-wide">Olahraga Biar Sehat</p>
                                                <div class="flex w-full mt-[2px] items-center space-x-2 ">
                                                    {{-- Profile Image --}}
                                                    <div class="flex-col justify-center items-center inline-flex mt-2 ">
                                                        <img class="w-8 h-8 rounded-full" src="/img/psikolog_insan.png" alt="Psikolog Insan">
                                                    </div>
                                                    {{-- Name --}}
                                                    <div>
                                                        <p class="text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide mt-2">Insan Daud, M. Psi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center px-2">
                                    <div class="flex items-start p-4">
                                        <img class="w-32 h-24 mr-4 flex-shrink-0 bg-zinc-300 rounded" src="/img/seni.png" alt="Komunitas Seni">
                                        <div class="flex-grow">
                                            <h2 class="w-44 h-6 text-neutral-600 text-base font-medium font-['Poppins'] leading-normal tracking-wide">Komunitas Seni</h2>
                                            <p class="text-justify text-neutral-600 text-xs font-normal font-['Poppins'] capitalize leading-normal tracking-wide">Curahkan Isi Hati Lewat Seni</p>
                                                <div class="flex w-full mt-[2px] items-center space-x-2 ">
                                                    {{-- Profile Image --}}
                                                    <div class="flex-col justify-center items-center inline-flex mt-2 ">
                                                        <img class="w-8 h-8 rounded-full" src="/img/psikolog_insan.png" alt="Psikolog Insan">   
                                                    </div>
                                                    {{-- Name --}}
                                                    <div>
                                                        <p class="text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide mt-2">Insan Daud, M. Psi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div> 
        </main>
        <x-bottom-menu></x-bottom-menu>
    </div>
</body>
