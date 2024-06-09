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
                    Laporan Kamu
                </button>
            </div>
            <div class="flex flex-1 flex-col py-4 bg-white">
                <div x-show="tab === 'reports'" class="px-4 space-y-4">
                    @foreach ($reports as $report)
                        @php
                            $name = $report->user->name;
                            $maskedName = "Pelapor: ".substr($name, 0, 2) . 'xxx';
                        @endphp
                        <div class="w-full bg-white shadow-md border rounded-3xl py-2 px-4">
                            <div class="flex w-full mt-[2px] items-center space-x-2">
                                <div class="">
                                    <h2 class="text-black text-xs poppins-medium">
                                        {{ $maskedName }}
                                    </h2>
                                    <p class="text-neutral-600 text-[10px]">
                                        {{ date('Y-m-d H:i:s', strtotime($report->created_at) + 7 * 3600) }}
                                    </p>
                                </div>
                            </div>
                            <hr class="mt-2" />
                            <p class="text-neutral-600 text-[12px] poppins-medium py-2">
                                {{ $report->report }}
                            </p>
                        </div>
                    @endforeach
                </div>
                <div x-show="tab === 'my-reports'" style="display: none; margin-top: -4px" class="px-4 space-y-4">
                    @foreach ($myReports as $myReport)
                        <div class="w-full bg-white shadow-md border rounded-3xl py-2 px-4">
                        <form method="POST" action="{{ route('user.delete-report', ['report_id' => $myReport->report_id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full grid justify-items-end">
                                <div class="w-6 h-4 justify-center items-center flex bg-neutral-100 rounded-sm">
                                    <i class="fa-solid fa-trash-can" style="color: #ff3d3d;"></i>
                                </div>
                            </button>
                        </form>
                            <div class="flex w-full mt-[2px] items-center space-x-2">
                                <div class="">
                                    <h2 class="text-black text-xs poppins-medium">
                                        {{ $myReport->user->name }}
                                    </h2>
                                    <p class="text-neutral-600 text-[10px]">
                                        {{ date('Y-m-d H:i:s', strtotime($myReport->created_at) + 7 * 3600) }}
                                    </p>
                                </div>
                            </div>
                            <hr class="mt-2" />
                            <p class="text-neutral-600 text-[12px] poppins-medium py-2">
                                {{ $myReport->report }}
                            </p>
                        </div>
                    @endforeach
                </div>
                <div class="max-w-md w-full flex-col fixed bottom-8 flex px-4">
                    <button
                        data-modal='{"title": "Hello!", "text": "This is the first SweetAlert popup.", "icon": "success"}'
                        class="w-[56px] h-[56px] bg-blue-300 rounded-full flex items-center justify-center shadow-md text-white self-end">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection
