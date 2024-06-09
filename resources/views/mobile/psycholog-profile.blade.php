@extends('layouts.mobile')

@section('title', 'Profile Psikolog')

@section('content')
    <x-header-component title="Psikolog: {{ $psycholog->full_name }}"></x-header-component>
    <main class="bg-white h-screen flex flex-col">
        <div class="w-full bg-[#D1E6F8] h-52">
            <div class="justify-center flex flex-1 flex-col items-center mt-20 w-full">
                <div class="relative items-center flex flex-col">
                    <img class ="flex w-[180px] h-[180px] rounded-2xl bg-gray-200 object-cover"
                        src="/images/{{ $psycholog->image_url }}" />
                    <div class="inline-flex bg-white py-1 px-2 space-x-1 rounded-full -mt-2 shadow">
                        <img src="/img/ph_star-fill.svg" />
                        <h1 class="text-black text-xs font-bold font-['Poppins'] tracking-wide">5.0</h1>
                    </div>
                </div>
                <div class="px-4 text-center space-y-1 w-full">
                    <h1
                        class="text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide mt-2">
                        {{ $psycholog->full_name }}</h1>
                    <p class="text-center text-neutral-600 text-xs font-normal font-['Poppins'] capitalize tracking-wide">
                        {{ $psycholog->description }}</p>
                    <div class="px-2 my-1 items-center justify-center flex flex-1 space-x-2 flex-wrap">
                        @foreach ($expertise as $expert)
                            <div
                                class="px-[4px] py-[1px] bg-slate-50 rounded-3xl border border-sky-600 border-opacity-50 flex-col justify-center items-center text-sky-600 text-[10px] font-medium font-['Poppins'] capitalize leading-normal tracking-wide flex my-1">
                                {{ $expert->expertise }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div x-data="{ tab: 'profil' }" class="w-full mt-2">
                    <div class="grid grid-cols-2 w-full text-xs poppins-medium leading-normal tracking-tight">
                        <button @click="tab = 'profil'"
                            :class="{ 'border-[#2196F3] border-b-2 text-[#2196F3]': tab === 'profil', 'text-[#666666]': tab !== 'profil' }"
                            class="col-span-1 text-center py-2">
                            Profil Psikolog
                        </button>
                        <button @click="tab = 'schedule'"
                            :class="{ 'border-[#2196F3] border-b-2 text-[#2196F3]': tab === 'schedule', 'text-[#666666]': tab !== 'schedule' }"
                            class="col-span-1 text-center py-2">
                            Jadwal
                        </button>
                    </div>
                    <div class="flex flex-1 flex-col py-4 bg-white">
                        <div x-show="tab === 'profil'" class="px-4">
                            <div class="w-full flex px-4 space-x-4 py-4">
                                <img src="/img/nimbus_university.svg" class="h-10" />
                                <div>
                                    <h1 class="text-neutral-600 text-xs font-semibold font-['Poppins'] tracking-wide">
                                        Alumnus</h1>
                                    <div>
                                        @foreach ($alumnus as $alumni)
                                            <p class="text-neutral-600 text-xs font-normal font-['Poppins'] tracking-wide">
                                                {{ $alumni->title }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex px-4 space-x-4 py-4">
                                <img src="/img/material-symbols_work-outline.svg" class="h-10" />
                                <div>
                                    <h1 class="text-neutral-600 text-xs font-semibold font-['Poppins'] tracking-wide">
                                        Pengalaman Kerja</h1>
                                    <div>
                                        @foreach ($job as $kerja)
                                            <p class="text-neutral-600 text-xs font-normal font-['Poppins'] tracking-wide">
                                                {{ $kerja->title }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex px-4 space-x-4 py-4">
                                <img src="/img/mingcute_hospital-line.svg" class="h-10" />
                                <div>
                                    <h1 class="text-neutral-600 text-xs font-semibold font-['Poppins'] tracking-wide">
                                        Tempat Praktek</h1>
                                    <div>
                                        @foreach ($building as $lokasi)
                                            <p class="text-neutral-600 text-xs font-normal font-['Poppins'] tracking-wide">
                                                {{ $lokasi->title }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex px-4 space-x-4 py-4">
                                <img src="/img/la_university.svg" class="h-10" />
                                <div>
                                    <h1 class="text-neutral-600 text-xs font-semibold font-['Poppins'] tracking-wide">
                                        Nomor STR</h1>
                                    <div>
                                        @foreach ($legal as $legal)
                                            <p class="text-neutral-600 text-xs font-normal font-['Poppins'] tracking-wide">
                                                {{ $legal->title }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="tab === 'my-kenalan'" class="px-4 space-y-4">
                            {{-- @foreach ($myKenalan as $kenalan)
                            <div class="w-full flex flex-row bg-white shadow-md border rounded-2xl py-6 px-4">
                                <div class="flex flex-1 space-x-2">
                                    <img class ="flex w-[56px] h-[56px] rounded-full bg-gray-200 object-cover"
                                        src="{{ $kenalan['account']['image_url'] }}" />
                                    <div class="flex flex-col">
                                        <h1 class="text-black text-[12px] font-semibold font-['Poppins']">
                                            {{ $kenalan['user']['name'] }}
                                        </h1>
                                        <pc class="text-neutral-600 text-[10px] font-normal font-['Poppins']">
                                            {{ $kenalan['kenalanProfile']['poke_total'] }} Kenalan</pc>
                                    </div>
                                </div>
                                <div class="flex flex-1 items-center justify-center">
                                    <a href="{{ route('user.kenalan-target', ['user_id' => $kenalan['user']['id']]) }}"
                                        class="w-max px-6 py-2 bg-[#4CA64E] rounded-full shadow flex justify-center text-white text-sm font-medium tracking-wide">
                                        <img src="/img/logos_whatsapp-icon.svg" class="mr-2" />
                                        Kenalan
                                    </a>
                                </div>
                            </div>
                        @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
