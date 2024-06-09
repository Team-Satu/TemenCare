@extends('layouts.mobile')

@section('title', 'Dashboard')

@section('content')
    <main class="bg-white h-screen flex flex-col">
        <section class="w-full bg-gradient-to-r from-blue-400 to-blue-200 pt-14 pb-10 px-6 space-y-[6px]">
            <h1 class="poppins-semibold text-white text-xl">Halo {{ $account->name }}!</h1>
            <h1 class="poppins-medium tracking-wide text-white text-lg">Bagaimana Kondisimu Hari ini?</h1>
        </section>

        <div class="bg-white rounded-t-3xl w-full h-full -mt-6">
            <x-temen-care-feature-board />
            <div class="my-6 pb-10">
                <h2 class="text-gray-800 text-base poppins-medium leading-normal tracking-wide px-6">Psikolog kami
                    akan setia membantu</h2>
                <p class="text-gray-500 text-xs poppins-reguler leading-normal tracking-wide px-6">Bagi mereka yang
                    butuh
                    pertolongan dengan segera.</p>

                <div class="overflow-x-auto flex px-4 pb-4">
                    @foreach ($psychologs as $psycholog)
                        <a href="{{ route('user.psycholog-detail', ['psycholog_id' => $psycholog['psycholog']['id']]) }}"
                            class="w-48 border border-gray-200 rounded-2xl mt-6 flex-none mr-6 hover:cursor-pointer hover:border hover:shadow">
                            <img src="./images/{{ $psycholog['psycholog']['image_url'] }}" alt="Image description"
                                class="bg-center bg-cover object-cover rounded-t-2xl h-36 w-full bg-gray-200">
                            <div class="bg-white w-full rounded-b-2xl py-2">
                                <h1
                                    class="text-center text-sky-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide px-4">
                                    {{ $psycholog['psycholog']['full_name'] }}</h1>
                                <div
                                    class="text-center text-neutral-600 text-[10px] px-2 font-normal font-['Poppins'] capitalize tracking-wide my-2">
                                    {{ $psycholog['psycholog']['description'] ?: '-' }}</div>

                                <div class="px-2 my-1 items-center justify-center flex flex-1 space-x-1 max-w-48 flex-wrap">
                                    @foreach ($psycholog['expertise'] as $expert)
                                        <div
                                            class="px-[4px] py-[1px] bg-slate-50 rounded-3xl border border-sky-600 border-opacity-50 flex-col justify-center items-center text-sky-600 text-[10px] font-medium font-['Poppins'] capitalize leading-normal tracking-wide flex my-1">
                                            {{ $expert['expertise'] }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection

@section('bottom-menu')
    @include('partials.bottom-menu')
@endsection
