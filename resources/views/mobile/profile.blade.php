@extends('layouts.mobile')

@section('title', 'Dashboard')

@section('content')
    <main class="bg-white h-screen flex flex-col">
        <div class="flex items-center justify-center">
            <h1 class="text-[24px] text-[#4A4E50] font-semibold text-center my-6">
                Profil Anda
            </h1>
        </div>

        <div class="flex justify-center mb-10">
            <img class="rounded-full h-28 w-28 object-cover" src="{{ $image_url }}" alt="profile image">
        </div>

        <form class="flex flex-col flex-1 justify-between pb-20 px-4" action="/logout" method="GET">
            <div class="flex flex-1 flex-col space-y-4">
                <div class="space-y-2">
                    <h1
                        class="text-neutral-600 text-base poppins-regular capitalize leading-normal tracking-wide text-left">
                        Nama</h1>
                    <input class="rounded border border-[#C4C4C4] w-full py-4 px-4 poppins-regular" type="text"
                        value={{ $name }} disabled />
                </div>
                <div class="space-y-2">
                    <h1
                        class="text-neutral-600 text-base poppins-regular capitalize leading-normal tracking-wide text-left">
                        Email</h1>
                    <input class="rounded border border-[#C4C4C4] w-full py-4 px-4 poppins-regular" type="text"
                        value={{ $email }} disabled />
                </div>
            </div>
            <button type="submit"
                class="w-full py-2 bg-[#F36464] rounded-full shadow flex items-center justify-center text-white text-lg font-medium tracking-wide">
                Keluar
            </button>
        </form>
    </main>
@endsection

@section('bottom-menu')
    @include('partials.bottom-menu')
@endsection
