@extends('layouts.mobile')

@section('title', 'Kenalan')

@section('content')
    <x-header-component title="Kenalan"></x-header-component>
    <main class="bg-white h-screen flex flex-col">
        <div class="w-full">
            <div
                class="flex flex-row space-y-4 px-4 py-6 justify-center items-center flex-1 border rounded-2xl mx-4 shadow-lg my-4">
                <div class="flex flex-row items-center space-x-2 flex-1">
                    <img class ="flex w-[56px] h-[56px] rounded-full bg-gray-200 object-cover"
                        src="{{ $account->image_url }}" />
                    <div class="flex flex-col">
                        <h1 class="text-black text-xs font-semibold font-['Poppins']">{{ $account->name }}</h1>
                        <pc class="text-neutral-600 text-xs font-normal font-['Poppins']">{{ $countMyKenalan }} Kenalan</pc>
                    </div>
                </div>
                <div class="flex flex-1 items-center h-[56px]">
                    <a href="{{ route('user.profile-kenalan') }}"
                        class="w-full py-2 bg-[#7EBAEB] rounded-full shadow flex justify-center text-white text-sm font-medium tracking-wide">
                        Ubah Profile
                    </a>
                </div>
            </div>
        </div>

        <div x-data="{ tab: 'all-kenalan' }">
            <div class="grid grid-cols-2 w-full text-xs poppins-medium leading-normal tracking-tight">
                <button @click="tab = 'all-kenalan'"
                    :class="{ 'border-[#2196F3] border-b-2 text-[#2196F3]': tab === 'all-kenalan', 'text-[#666666]': tab !== 'all-kenalan' }"
                    class="col-span-1 text-center py-2">
                    Semua Kenalan
                </button>
                <button @click="tab = 'my-kenalan'"
                    :class="{ 'border-[#2196F3] border-b-2 text-[#2196F3]': tab === 'my-kenalan', 'text-[#666666]': tab !== 'my-kenalan' }"
                    class="col-span-1 text-center py-2">
                    Kenalan Kamu
                </button>
            </div>
            <div class="flex flex-1 flex-col py-4 bg-white">
                <div x-show="tab === 'all-kenalan'" class="px-4 space-y-4">
                    @foreach ($allKenalan as $kenalan)
                        <div class="w-full flex flex-row bg-white shadow-md border rounded-2xl py-6 px-4">
                            <div class="flex flex-1 space-x-2">
                                <img class ="flex w-[56px] h-[56px] rounded-full bg-gray-200 object-cover"
                                    src="{{ $kenalan['account']['image_url'] }}" />
                                <div class="flex flex-col">
                                    <h1 class="text-black text-[12px] font-semibold font-['Poppins']">
                                        {{ $kenalan['user']['name'] }}
                                    </h1>
                                    <pc class="text-neutral-600 text-[10px] font-normal font-['Poppins']">
                                        {{ $kenalan['kenalan']['poke_total'] }} Kenalan</pc>
                                </div>
                            </div>
                            <div class="flex flex-1 items-center justify-center">
                                <a href="{{ route('user.kenalan-target', ['user_id' => $kenalan['kenalan']['user_id']]) }}"
                                    class="w-max px-6 py-2 bg-[#4CA64E] rounded-full shadow flex justify-center text-white text-sm font-medium tracking-wide">
                                    <img src="/img/logos_whatsapp-icon.svg" class="mr-2" />
                                    Kenalan
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div x-show="tab === 'my-kenalan'" style="display: none; margin-top: -4px" class="px-4 space-y-4">
                    <div class="w-full bg-white shadow-md border rounded-3xl py-2 px-4">
                        <button class="w-full grid justify-items-end">
                            <div class="w-6 h-4 justify-center items-center flex bg-neutral-100 rounded-sm">
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>
                        </button>
                        <div class="flex w-full mt-[2px] items-center space-x-2">
                            <div class="">
                                <h2 class="text-black text-xs poppins-medium">
                                </h2>
                                <p class="text-neutral-600 text-[10px]">
                                </p>
                            </div>
                        </div>
                        <hr class="mt-2" />
                        <p class="text-neutral-600 text-[12px] poppins-medium py-2">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
