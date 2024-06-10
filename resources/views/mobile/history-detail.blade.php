@extends('layouts.mobile')

@section('title', 'Detail Riwayat')

@section('content')
    <x-header-component title="Psikolog: {{ $psycholog->full_name }}"></x-header-component>
    <main class="bg-white h-screen flex flex-col">
        <div class="w-full bg-[#D1E6F8] h-52">
            <div class="justify-center flex flex-1 flex-col items-center mt-20 w-full">
                <div class="relative items-center flex flex-col">
                    <img class ="flex w-[180px] h-[180px] rounded-2xl bg-gray-200 object-cover"
                        src="/images/{{ $psycholog->image_url }}" />
                    {{-- <div class="inline-flex bg-white py-1 px-2 space-x-1 rounded-full -mt-2 shadow">
                        <img src="/img/ph_star-fill.svg" />
                        <h1 class="text-black text-xs font-bold font-['Poppins'] tracking-wide">5.0</h1>
                    </div> --}}
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
                <div class="w-full mt-4 flex flex-1 px-6 flex-col space-y-4">
                    <hr>
                    <div class="space-y-1">
                        <h2 class="text-gray-800 text-xs font-semibold font-['Poppins'] leading-normal tracking-wide">
                            Status</h2>
                        @if ($consultant->status > 0)
                            <h2 class="text-green-600 text-xs font-semibold font-['Poppins'] leading-normal tracking-wide">
                                Selesai</h2>
                        @else
                            <h2 class="text-sky-500 text-xs font-semibold font-['Poppins'] leading-normal tracking-wide">
                                Sedang Berlangsung</h2>
                        @endif
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-gray-800 text-xs font-semibold font-['Poppins'] leading-normal tracking-wide">
                            Jadwal</h2>
                        <h2 class="text-gray-800 text-xs font-normal font-['Poppins'] leading-normal tracking-wide">
                            {{ $schedule->date }},
                            {{ $schedule->start_hour }}-{{ $schedule->end_hour }} ({{ $schedule->location }})</h2>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-gray-800 text-xs font-semibold font-['Poppins'] leading-normal tracking-wide">
                            Lokasi</h2>
                        @if ($schedule->location === 'Online')
                            <a href="{{ $consultant->url }}"
                                class="px-4 py-1.5 bg-[#0288D1] rounded-3xl border border-[#0288D1] flex-col justify-center items-center inline-flex gap-2">
                                <h1
                                    class="text-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                                    Google Meet</h1>
                            </a>
                        @else
                            <h1 class="text-gray-800 text-xs font-normal font-['Poppins'] leading-normal tracking-wide">
                                {{ $consultant->url }}</h1>
                        @endif
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-gray-800 text-xs font-semibold font-['Poppins'] leading-normal tracking-wide">
                            Keluhan</h2>
                        <h1 class="text-gray-800 text-xs font-normal font-['Poppins'] leading-normal tracking-wide">
                            {{ $consultant->complaint }}</h1>
                    </div>
                    <hr />
                    <div class="space-y-1">
                        <h2 class="text-gray-800 text-xs font-semibold font-['Poppins'] leading-normal tracking-wide">
                            Diagnosa</h2>
                        <h1 class="text-gray-800 text-xs font-normal font-['Poppins'] leading-normal tracking-wide">
                            {{ $consultant->diagnose ?: "-" }}</h1>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-gray-800 text-xs font-semibold font-['Poppins'] leading-normal tracking-wide">
                            Saran</h2>
                        <h1 class="text-gray-800 text-xs font-normal font-['Poppins'] leading-normal tracking-wide">
                            {{ $consultant->advice ?: "-" }}</h1>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
