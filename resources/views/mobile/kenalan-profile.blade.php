@extends('layouts.mobile')

@section('title', 'Kenalan')

@section('content')
    <x-header-component title="Profil Kenalan Anda"></x-header-component>
    <main class="bg-white h-screen flex flex-col">
        <div class="flex justify-center my-6">
            <img class="rounded-full h-28 w-28 object-cover bg-gray-200" src="{{ $account->image_url }}" alt="Profile Image">
        </div>

        <div class="flex flex-col flex-1 px-6">
            <div class="flex flex-1 flex-col space-y-4">
                <form action="{{ route('user.save-kenalan') }}" method="POST">
                    <div class="space-y-2">
                        <h1
                            class="text-neutral-600 text-base poppins-regular capitalize leading-normal tracking-wide text-left">
                            Nomor WA Anda</h1>
                        <input class="rounded border border-[#C4C4C4] w-full py-4 px-4 poppins-regular" type="text"
                            value="{{ $nomorTelepon }}" name="whatsapp_number" />
                    </div>
                    <p class="text-justify mb-6 mt-2"><span
                            class="text-gray-800 text-xs font-light font-['Poppins'] capitalize leading-normal tracking-wide">Hai</span><span
                            class="text-gray-800 text-xs font-light font-['Poppins'] lowercase leading-normal tracking-wide">!
                            Sebelum melanjutkan, kami ingin memberitahu bahwa dengan bergabung di fitur Kenalan, profil kamu
                            akan ditambahkan ke database kami dan akan terlihat oleh pengguna lain yang menggunakan fitur
                            ini.
                            Pastikan kamu setuju dan masukkan nomor telepon kamu untuk melanjutkan. Selamat
                            berkenalan!</span>
                    </p>

                    @csrf
                    @if ($countKenalan > 0)
                        <button type="submit"
                            class="w-full py-2 bg-[#7EBAEB] rounded-full shadow flex items-center justify-center text-white text-lg font-medium tracking-wide">
                            Simpan & Mulai Kenalan
                        </button>
                    @else
                        <button type="submit"
                            class="w-full py-2 bg-[#60D669] rounded-full shadow flex items-center justify-center text-white text-lg font-medium tracking-wide">
                            Simpan & Setuju
                        </button>
                    @endif
                </form>
                <form action="{{ route('user.delete-kenalan') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="w-full py-2 bg-[#F36464] rounded-full shadow flex items-center justify-center text-white text-lg font-medium tracking-wide">
                        Keluar dari Kenalan
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection
