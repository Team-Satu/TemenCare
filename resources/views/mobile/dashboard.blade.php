@extends('layouts.mobile')

@section('title', 'Dashboard')

@section('content')
    <main class="bg-white h-screen flex flex-col">
        <section class="w-full bg-gradient-to-r from-blue-400 to-blue-200 pt-14 pb-10 px-6 space-y-[6px]">
            <h1 class="poppins-semibold text-white text-xl">Halo {{ $name }}!</h1>
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

                <div class="overflow-x-auto flex">
                    @foreach ($psychologs as $psycholog)
                        <div class="w-48 border border-gray-200 rounded-2xl mt-6 flex-none mr-6">
                            <div
                                class="rounded-t-2xl h-36 w-full bg-[url(https://images.unsplash.com/photo-1651008376811-b90baee60c1f?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-center bg-cover">
                            </div>
                            <div class="bg-white w-full rounded-b-2xl py-2">
                                <h1
                                    class="text-center text-sky-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide px-2">
                                    {{ $psycholog->full_name }}</h1>
                                <div
                                    class="text-center text-neutral-600 text-[10px] px-2 font-normal font-['Poppins'] capitalize tracking-wide my-2">
                                    Psikolog Industri & Organisasi <br />Spesialis Karir</div>

                                <div class="px-2 my-1">
                                    <div
                                        class="px-[4px] py-[1px] bg-slate-50 rounded-3xl border border-sky-600 border-opacity-50 flex-col justify-center items-center inline-flex text-sky-600 text-[10px] font-medium font-['Poppins'] capitalize leading-normal tracking-wide">
                                        Pekerjaan
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection

@section('bottom-menu')
    @include('partials.bottom-menu')
@endsection
