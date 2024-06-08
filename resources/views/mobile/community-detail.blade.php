@extends('layouts.mobile')

@section('title', 'Dashboard')

@section('content')
    @php
        $communityName = substr($community['name'], 0, 14);
    @endphp
    <x-header-component title="Komunitas: {{ $communityName }}..."></x-header-component>
    <main class="bg-white h-screen flex flex-col w-full leading-normal tracking-wide py-2 px-6">
        <div class="flex items-center my-2">
            <img class="w-32 h-24 mr-4 flex-shrink-0 bg-zinc-300 rounded" src="/images/{{ $community['image_url'] }}"
                alt="{{ $community['name'] }}">
            <div class="flex-grow">
                <h2 class="w-full text-neutral-600 text-base font-medium font-['Poppins'] leading-normal tracking-wide">
                    {{ $community['name'] }}</h2>
                <p
                    class="text-justify text-neutral-600 text-xs font-normal font-['Poppins'] capitalize leading-normal tracking-wide">
                    {{ $community['short_description'] }}</p>
                <div class="flex w-full mt-[2px] items-center space-x-2 ">
                    <div class="flex-col justify-center items-center inline-flex mt-2 ">
                        <img class="w-8 h-8 rounded-full bg-gray-200" src="/images/{{ $communityOwner['image_url'] }}"
                            alt="{{ $communityOwner['full_name'] }}">
                    </div>
                    <p
                        class="text-neutral-600 text-xs font-semibold font-['Poppins'] capitalize leading-normal tracking-wide mt-2">
                        {{ $communityOwner['full_name'] }}</p>
                </div>
            </div>
        </div>
        <div class="flex-col justify-normal items-center inline-flex mby-2">
            <h2 class= "text-gray-800 text-xs font-light font-['Poppins'] tracking-wide">{{ $community['description'] }}
            </h2>
        </div>
        <h2
            class= "text-neutral-600 text-base font-medium font-['Poppins'] leading-normal tracking-wide mb-2 text-left mt-4">
            Postingan</h2>
        <div class="flex-col space-y-4">
            @foreach ($communityPost as $post)
                <div class="w-full bg-white shadow-md border rounded-3xl py-6 px-4 mb-8">
                    <div class="flex w-full mt-[2px] items-center space-x-2 ">
                        <img class="w-8 h-8 rounded-full bg-gray-200" src="/images/{{ $communityOwner['image_url'] }}"
                            alt="{{ $communityOwner['full_name'] }}">
                        <div>
                            <h2 class="text-black text-xs poppins-normal">{{ $communityOwner['full_name'] }}</h2>
                            <p class="text-neutral-600 text-[10px] poppins-normal">
                                {{ date('Y-m-d H:i:s', strtotime($post['created_at']) + 7 * 3600) }}
                            </p>
                        </div>
                    </div>
                    <p class=" mt-4 text-black text-xs font-normal font-['Poppins']">{{ $post['post'] }}</p>
                </div>
            @endforeach
        </div>
    </main>
@endsection
