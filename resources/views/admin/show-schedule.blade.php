@extends('layouts.app')

@section('title', 'Lihat Jadwal')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jadwal Konsultasi Psikolog</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $schedule->date }}</td>
                                <td>{{ join(' - ', [$schedule->start_hour, $schedule->end_hour]) }}</td>
                                <td>{{ $schedule->location }}</td>
                                <td>{{ $schedule->status > 0 ? 'Terisi' : '-' }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        @if ($schedule->status < 1)
                                            <button type="button" onclick="deleteSchedule({{ $schedule->schedule_id }})"
                                                class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        @endif
                                        @if ($schedule->status > 0)
                                            <a href="{{ route('admin.show-spicifc-schedule', ['schedule_id' => $schedule->schedule_id]) }}"
                                                class="btn btn-primary"><i class="fas fa-book"></i></a>
                                            <form method="POST"
                                                action="{{ route('admin.consultant-finish', ['schedule_id' => $schedule->schedule_id]) }}">
                                                @csrf
                                                <button class="btn btn-success"><i class="fas fa-check"></i></button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function deleteSchedule(scheduleID) {
            const csrfToken = '{{ csrf_token() }}'; // Mendapatkan token CSRF dari Laravel

            return fetch(`/admin/schedules/${scheduleID}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken // Mengirimkan token CSRF
                    },
                }).then(data => {
                    window.location.href = '/admin/dashboard';
                })
                .catch(error => {
                    window.location.href = '/admin/dashboard';
                });
        }
    </script>
@endsection
