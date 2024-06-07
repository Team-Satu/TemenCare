@extends('layouts.mobile')

@section('title', 'Komunitas')

@section('content')
    <x-header-component title="Komunitas"></x-header-component>
    <main class="flex flex-1 flex-col h-screen w-full p-4 pt-6 bg-white space-y-4">
        @foreach ($communities as $community)
            <a href="#" class="h-24 flex items-start hover:cursor-pointer hover:shadow shadow-sm border rounded">
                <img class="w-32 h-full mr-4 flex-shrink-0 bg-zinc-300 rounded" src="/images/{{ $community->image_url }}"
                    alt="{{ $community->name }}">
                <div class="flex-grow py-2">
                    @php
                        $communityName = substr($community->name, 0, 25) . '...';
                    @endphp
                    <h2
                        class="text-neutral-600 text-base font-medium font-['Poppins'] leading-normal tracking-wide truncate">
                        {{ $communityName }}</h2>
                    <p
                        class="text-justify text-neutral-600 text-xs font-normal font-['Poppins'] capitalize leading-normal tracking-wide mr-2 truncate">
                        {{ $community->short_description }}</p>
                    <div class="flex w-full mt-[2px] items-center space-x-2 ">
                        <div class="flex-col justify-center items-center inline-flex mt-2 ">
                            <img class="w-8 h-8 rounded-full" src="/img/psikolog_insan.png" alt="Psikolog Insan">
                        </div>
                        <div>
                            <p
                                class="text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide mt-2">
                                {{ $community->account->name }}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </main>
@endsection
