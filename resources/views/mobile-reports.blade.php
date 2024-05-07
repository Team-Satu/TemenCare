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
    <div class="max-w-md bg-white mx-auto relative">
        <main class="bg-white h-screen flex flex-col w-full relative">
            <div>
                <x-header-component title="Lapor!"></x-header-component>
                <div class="grid grid-cols-2 w-full text-xs poppins-medium leading-normal tracking-tight">
                    <a href="#" class="col-span-1 text-center py-2 border-[#2196F3] border-b-2"id="semua-laporan">
                        <h1 class="text-[#2196F3]">Semua
                            Laporan</h1>
                    </a>
                    <a href ="/your reports" class="col-span-1 text-center py-2" id="laporan-kamu">
                        <h1 class="text-[#666666]">Laporan
                            kamu</h1>
                    </a>
                </div>
                <div class="overflow-y-auto flex flex-1 flex-col h-full">
                    <div class="flex flex-1 flex-col px-4 py-4 space-y-4">
                        @foreach ($reports as $report)
                            <div class="w-full bg-white shadow-md border rounded-3xl py-2 px-4">
                                <button class="w-full grid justify-items-end" onclick="showOption('block')">
                                    <div class="w-6 h-4 justify-center items-center flex bg-neutral-100 rounded-sm">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </button>
                                <div class="flex w-full mt-[2px] items-center space-x-2">
                                    <div class="w-9 h-9 bg-blue-300 rounded-full">
                                    </div>
                                    <div class="">
                                        <h2 class="text-black text-xs poppins-medium">{{ $report->user->name}}</h2>
                                        <p class="text-neutral-600 text-[10px]">{{ $report->created_at}}</p>
                                    </div>
                                </div>
                                <p class="text-neutral-600 text-[12px] poppins-medium py-2">{{ $report->report }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Tambah Laporan --}}
                <div class="max-w-md w-full fixed bottom-0 flex flex-1 px-4 mb-4">
                    <div class="flex-auto"></div>
                    <button onclick="showDialog('block')">
                        <div
                            class="w-[56px] h-[56px] bg-blue-300 rounded-full flex items-center justify-center shadow-md text-white self-end">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </button>
                </div>
                <div id="option" class="hidden w-[125px] h-[92px] bg-white shadow-md border rounded-xl right-[30px] top-[140px] absolute ">
                {{--Delete Report Button--}}
                    <div class="w-[125px] h-[46px] flex justify-center items-center">
                    <button class="w-full" onclick="showConfirm('block')">
                        <p class="text-center py-3 border-b-2 border-gray-400 text-xs text-red-400 w-full">Hapus Laporan</p>
                    </button>
                    </div>
                {{--Change Report Button--}}
                    <div class="w-[125px] h-[46px] flex justify-center items-center">
                    <button class="" onclick="showChange('block')">
                        <p class="text-center py-3 text-xs">Ubah Laporan</p>
                    </button>
                    </div>
                </div>
                <div id="dialog"
                    class="bg-black bg-opacity-50 w-screen h-screen z-50 bottom-0 left-0 fixed hidden flex-1 flex-col">
                    <div class="flex-auto" onclick="showDialog('none')"></div>
                    <div
                        class="w-full max-w-md m-auto bg-white rounded-tr-3xl rounded-tl-3xl shadow-2xl flex flex-col p-4 max-h-80">
                        <div class="w-full flex justify-end">
                            <button onclick="showDialog('none')">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <form class="card-body w-full" action="{{ route('user.post-report') }}" method="POST">
                            @csrf
                            <h2
                                class="text-neutral-600 text-xs poppins-semibold capitalize leading-normal tracking-wide text-center mt-2 mb-4">
                                Tuliskan laporanmu</h2>
                            <div class="w-full mb-4">
                                <textarea rows="8" placeholder="Tuliskan laporanmu di sini"
                                    class="poppins-medium text-xs rounded-lg border border-gray-300 w-full p-2.5 outline-none" name="report"></textarea>
                            </div>
                            <div class="w-full px-6">
                                <button type="submit"
                                    class="bg-blue-300 rounded-3xl shadow text-center text-white text-xs poppins-medium capitalize leading-normal tracking-wide w-full py-2">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="change"
                    class="bg-black bg-opacity-50 w-screen h-screen z-50 bottom-0 left-0 hidden fixed flex-1 flex-col">
                    <div class="flex-auto" onclick="showChange('none')"></div>
                    <div
                        class="w-full max-w-md mt-[426px] ml-[536px] bg-white rounded-tr-3xl rounded-tl-3xl shadow-2xl flex flex-col p-4 max-h-80">
                        <div class="w-full flex justify-end">
                            <button onclick="showChange('none')">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <form class="card-body w-full" action="" method="POST">
                            @csrf
                            <h2
                                class="text-neutral-600 text-xs poppins-semibold capitalize leading-normal tracking-wide text-center mt-2 mb-4">
                                Silahkan Ubah laporanmu</h2>
                            <div class="w-full mb-4">
                                <textarea rows="8" placeholder="Ubah laporanmu di sini"
                                    class="poppins-medium text-xs rounded-lg border border-gray-300 w-full p-2.5 outline-none" name="report"></textarea>
                            </div>
                            <div class="w-full px-6">
                                <button type="submit"
                                    class="bg-blue-300 rounded-3xl shadow text-center text-white text-xs poppins-medium capitalize leading-normal tracking-wide w-full py-2">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
                    <div id= "confirm" class="hidden fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen z-20">
                        <div class="w-96 h-80 relative m-auto mt-[220px] bg-white rounded-3xl shadow-2xl">
                            <i class="fa-solid fa-triangle-exclamation text-8xl justify-center items-center flex relative py-14"
                                style="color: #f36464;"></i>
                            <div class="left-[62px] top-[178px] absolute">
                                <h2
                                    class="text-center text-neutral-600 text-base poppins-medium leading-tight tracking-tight py-2">
                                    Yakin ingin hapus laporanmu?</h2>
                                <p
                                    class="text-center text-neutral-600 text-xs poppins-light leading-none tracking-tight">
                                    Setelah
                                    dihapus laporan hilang permanen loh..</p>
                            </div>
                        @foreach ($reports as $report)
                        <form class="my-2 mx-1" action="{{ route('user.delete-report', $report->report_id )}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button
                                    class="w-32 h-8 left-[48px] top-[248px] absolute rounded-3xl border border-blue-300 flex-col justify-center items-center 
                                    inline-flex" type="submit" id="delete-{{$report->report_id}}">
                                    <div class="justify-center items-center gap-2 inline-flex">
                                        <div
                                            class="text-center text-blue-300 text-xs poppins-medium capitalize leading-normal tracking-wide">
                                            Yakin</div>
                                    </div>
                                </button>
                        </form>
                        @endforeach
                            <a href="/reports"
                                class="w-32 h-8 left-[216px] top-[248px] absolute bg-blue-300 rounded-3xl flex-col justify-center items-center inline-flex">
                                <div class="justify-center items-center gap-2 inline-flex">
                                    <div
                                        class="text-center text-white text-xs poppins-medium capitalize leading-normal tracking-wide">
                                        Kembali</div>
                                </div>
                            </a>
                            </button>
                        </div>
                    </div>
            </div>
        </main>
    </div>
    <script>
        // Add Report
        function showDialog() {
            var dialog = document.getElementById("dialog");
            dialog.style.display = dialog.style.display === 'none' ? 'flex' : 'none';
        }
        // Options
        function showOption() {
            var option = document.getElementById("option");
            option.style.display = option.style.display === 'none' ? 'block' : 'none';
        }
        //Delete Report
        function showConfirm() {
            var confirm = document.getElementById("confirm");
            confirm.style.display = confirm.style.display === 'none' ? 'block' : 'none';
        }
        //Change Report
        function showChange() {
            var change = document.getElementById("change");
            change.style.display = change.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
