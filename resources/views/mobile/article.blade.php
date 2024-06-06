@extends('layouts.mobile')

@section('title', 'Artikel')

@section('content')
    <main class="bg-white flex flex-1 flex-col h-screen">
        <x-header-component title="Artikel" />
        <section
            class="w-full bg-gradient-to-r from-blue-400 to-blue-200 py-8 space-y-2 poppins-semibold text-white text-xl px-6">
            <h1>Temukan Informasi</h1>
            <h1>Terkini dan Terlengkap</h1>
        </section>
        <div class="py-4 px-6 space-y-4 h-screen max-h-screen overflow-y-auto bg-white">
            @foreach ($articles as $article)
                <a href="{{ $article->url }}" class="w-full bg-white shadow-md border rounded-3xl py-3 px-4 grid grid-cols-2">
                    <h2 class="text-blue-300 text-[16px] font-small font-poppins capitalize">{{ $article->category }}
                    </h2>
                    <h2 class="text-gray-400 text-xs font-poppins text-right">{{ $article->created_at }}</h2>
                    <div class="w-full col-span-2 flex flex-row mt-2">
                        <p class="text-[#000000] text-[16px] font-medium py-2 font-poppins flex flex-1">
                            {{ $article->title }}
                        </p>
                        <div class="flex justify-center items-center">
                            <img class ="flex w-32 h-20 rounded" src="/images/{{ $article->image_url }}" />
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </main>
@endsection
