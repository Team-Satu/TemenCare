@extends('layouts.mobile')

@section('title', 'Login')

@section('content')
    <main class="bg-white h-screen flex flex-col">
        <form method="POST" action="/login" class="items-center justify-center flex flex-col flex-1 px-6">
            @csrf
            <img src="/img/vector.png" height="59" width="51" />
            <div class="space-y-4 mt-3">
                <h1 class="text-neutral-600 text-3xl poppins-semibold text-center">Selamat Datang!</h1>
                <p class="text-center text-neutral-600 text-sm poppins-medium">Senang bertemu kembali!</p>
            </div>

            <div class="space-y-4 mb-8 mt-16 w-full">
                <div class="space-y-2">
                    <h1
                        class="text-neutral-600 text-base poppins-regular capitalize leading-normal tracking-wide text-left">
                        Username</h1>
                    <input class="rounded border border-[#C4C4C4] w-full py-4 px-4 poppins-regular"
                        placeholder="Masukkan Username Igracias Anda" type="text" name="username" />
                </div>
                <div class="space-y-2">
                    <h1
                        class="text-neutral-600 text-base poppins-regular capitalize leading-normal tracking-wide text-left">
                        Password</h1>
                    <input class="rounded border border-[#C4C4C4] w-full py-4 px-4 poppins-regular"
                        placeholder="Masukkan Password Igracias Anda" type="password" name="password" />
                </div>
            </div>

            <button class="bg-[#7EBAEB] py-4 w-full text-white poppins-semibold rounded hover:bg-[#65a7dd]">Masuk</button>
        </form>
    </main>
@endsection
