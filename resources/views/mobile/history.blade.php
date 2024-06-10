@extends('layouts.mobile')

@section('title', 'Riwayat')

@section('content')
    <x-header-component title="Riwayat Konsultasi"></x-header-component>
    <main class="flex flex-1 flex-col h-screen w-full p-4 pt-6 bg-white space-y-4">
        @foreach ($history as $hist)
            <a class="bg-white border p-4 shadow hover:shadow-lg rounded-lg"
                href="{{ route('user.specific-history-consultant', ['consultant_id' => $hist['hist']['consultant_id']]) }}">
                <div class="w-full flex flex-1 items-center justify-between">
                    <p class="text-zinc-600 text-xs font-medium font-['Poppins'] leading-normal tracking-wide">Konsultasi
                        dengan
                    </p>
                    @if ($hist['hist']['status'] > 0)
                        <div
                            class="px-4 py-1.5 rounded-3xl border border-green-600 bg-green-600 flex-col justify-center items-center inline-flex">
                            <h1
                                class="text-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                                Selesai</h1>
                        </div>
                    @else
                        <div
                            class="px-4 py-1.5 rounded-3xl border border-sky-500 flex-col justify-center items-center inline-flex">
                            <h1
                                class="text-center text-sky-500 text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                                Sedang Berlangsung</h1>
                        </div>
                    @endif
                </div>
                <h1 class="text-gray-800 text-xs font-light font-['Poppins'] leading-normal tracking-wide">
                    {{ $hist['schedule']['date'] }},
                    {{ $hist['schedule']['start_hour'] }}-{{ $hist['schedule']['end_hour'] }}
                </h1>
                <div class="w-full flex flex-1 space-x-4 mt-2">
                    <img class="flex rounded-md h-16 w-16 object-cover object-center bg-gray-200"
                        src="/images/{{ $hist['psycholog']['image_url'] }}" alt="Profile Image">
                    <div class="flex flex-1 flex-col space-y-2 justify-center">
                        <h1
                            class="text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide">
                            {{ $hist['psycholog']['full_name'] }}
                        </h1>
                        <h2 class="text-neutral-600 text-xs font-normal font-['Poppins'] capitalize tracking-wide">
                            {{ $hist['psycholog']['description'] }}</h2>
                    </div>
                </div>
                <div class="justify-end flex flex-1">
                    <button
                        class="px-4 py-1.5 bg-blue-300 rounded-3xl shadow flex-col justify-center items-center inline-flex self-end">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <h1
                                class="text-center text-white text-xs font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                                Detail</h1>
                        </div>
                    </button>
                </div>
            </a>
        @endforeach
        </div>
    </main>
@endsection
