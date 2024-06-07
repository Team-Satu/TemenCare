@extends('layouts.mobile')

@section('title', 'Lapor!')

@section('content')
    <x-header-component title="Lapor!" />
    <main class="bg-white flex flex-1 flex-col h-screen w-full">
        <div class="overflow-y-auto flex flex-1 flex-col h-screen bg-white" x-data="{ tab: 'reports' }">
            <div class="grid grid-cols-2 w-full text-xs poppins-medium leading-normal tracking-tight">
                <button @click="tab = 'reports'"
                    :class="{ 'border-[#2196F3] border-b-2 text-[#2196F3]': tab === 'reports', 'text-[#666666]': tab !== 'reports' }"
                    class="col-span-1 text-center py-2">
                    Semua Laporan
                </button>
                <button @click="tab = 'my-reports'"
                    :class="{ 'border-[#2196F3] border-b-2 text-[#2196F3]': tab === 'my-reports', 'text-[#666666]': tab !== 'my-reports' }"
                    class="col-span-1 text-center py-2">
                    Laporan kamu
                </button>
            </div>
            <div class="flex flex-1 flex-col px-4 py-4 space-y-4 bg-white">
                <div x-show="tab === 'reports'">
                    <div class="w-full bg-white shadow-md border rounded-3xl py-2 px-4">
                        <button class="w-full grid justify-items-end">
                            <div class="w-6 h-4 justify-center items-center flex bg-neutral-100 rounded-sm">
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>
                        </button>
                        <div class="flex w-full mt-[2px] items-center space-x-2">
                            <div class="w-9 h-9 bg-blue-300 rounded-full">
                            </div>
                            <div class="">
                                <h2 class="text-black text-xs poppins-medium">
                                    aass
                                </h2>
                                <p class="text-neutral-600 text-[10px]">
                                    123
                                </p>
                            </div>
                        </div>
                        <p class="text-neutral-600 text-[12px] poppins-medium py-2">
                            oke
                        </p>
                    </div>
                </div>
                <div x-show="tab === 'my-reports'" style="display: none; margin-top: -4px">
                    <div class="w-full bg-white shadow-md border rounded-3xl py-2 px-4">
                        <button class="w-full grid justify-items-end">
                            <div class="w-6 h-4 justify-center items-center flex bg-neutral-100 rounded-sm">
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>
                        </button>
                        <div class="flex w-full mt-[2px] items-center space-x-2">
                            <div class="w-9 h-9 bg-blue-300 rounded-full">
                            </div>
                            <div class="">
                                <h2 class="text-black text-xs poppins-medium">
                                    aas
                                </h2>
                                <p class="text-neutral-600 text-[10px]">
                                    123ssss s
                                </p>
                            </div>
                        </div>
                        <p class="text-neutral-600 text-[12px] poppins-medium py-2">
                            oke
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    {{-- <div class="container mx-auto p-4" x-data="{ tab: 'home' }">
        <div class="flex space-x-4">
            <button @click="tab = 'home'" :class="{ 'bg-blue-500 text-white': tab === 'home' }"
                class="px-4 py-2 border rounded">Home</button>
            <button @click="tab = 'about'" :class="{ 'bg-blue-500 text-white': tab === 'about' }"
                class="px-4 py-2 border rounded">About</button>
            <button @click="tab = 'contact'" :class="{ 'bg-blue-500 text-white': tab === 'contact' }"
                class="px-4 py-2 border rounded">Contact</button>
        </div>

        <div class="mt-4">
            <div x-show="tab === 'home'">
                <h1 class="text-2xl font-bold">Home</h1>
                <p>Welcome to the home page.</p>
            </div>
            <div x-show="tab === 'about'" style="display: none;">
                <h1 class="text-2xl font-bold">About</h1>
                <p>Learn more about us here.</p>
            </div>
            <div x-show="tab === 'contact'" style="display: none;">
                <h1 class="text-2xl font-bold">Contact</h1>
                <p>Get in touch with us.</p>
            </div>
        </div>
    </div> --}}
@endsection
