<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Temen Care</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto bg-green-50 relative">
        <!-- Content -->
        <main class="bg-white h-screen flex">
            <form method="POST" action="/login" class="items-center justify-center flex flex-col flex-1 px-6">
                @csrf
                <div class="space-y-4">
                    <h1 class="text-neutral-600 text-3xl poppins-semibold text-center">Selamat Datang!</h1>
                    <p class="text-center text-neutral-600 text-sm poppins-medium">Senang bertemu kembali!</p>
                </div>

                <div class="space-y-4 mb-8 mt-16">
                    <input class="rounded border border-[#C4C4C4] w-full h-10 px-4 poppins-regular"
                        placeholder="Masukkan Username Igracias Anda" type="text" name="username" />
                    <input class="rounded border border-[#C4C4C4] w-full h-10 px-4 poppins-regular"
                        placeholder="Masukkan Password Igracias Anda" type="password" name="password" />
                </div>

                <button class="bg-[#7EBAEB] h-10 w-full text-white poppins-semibold rounded">Masuk</button>
            </form>
        </main>
    </div>
</body>

</html>
