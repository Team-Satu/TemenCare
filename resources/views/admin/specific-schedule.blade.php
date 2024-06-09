@extends('layouts.app')

@section('title', 'Konsultasi')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Konsultasi</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin.update-spcifc-schedule', ["schedule_id" => $schedule->schedule_id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Pengguna</label>
                        <input type="text" class="form-control" value="{{ $account->name }}" disabled />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="text" class="form-control" value="{{ $schedule->date }}" disabled />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam</label>
                        <input type="text" class="form-control"
                            value="{{ $schedule->start_hour }}-{{ $schedule->end_hour }}" disabled />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" class="form-control" value="{{ $schedule->location }}" disabled />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keluhan</label>
                        <textarea class="form-control" disabled>{{ $consultant->complaint }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Url</label>
                        <input type="text" name="url" class="form-control" value="{{ $consultant->url }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diagnosa</label>
                        <textarea class="form-control" name="diagnose">{{ $consultant->diagnose }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Saran</label>
                        <textarea class="form-control" name="advice">{{ $consultant->advice }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-success">Tandai Selesai</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function setDone(scheduleId) {
            const csrfToken = '{{ csrf_token() }}'; // Mendapatkan token CSRF dari Laravel

            return fetch(`/admin/show_schedule/${scheduleId}/finish`, {
                    method: 'POST',
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
