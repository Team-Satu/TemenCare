@extends('layouts.app')

@section('title', 'Edit Jadwal')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Jadwal Konsultasi Psikolog</h1>
</div>

<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <form class="card-body" action="{{ route('admin.update-schedule', $schedule->schedule_id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-control" placeholder="Hari" name="date" value="{{$schedule->date}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dari Jam</label>
                    <input type="time" class="form-control" placeholder="Dari Jam" name="start_hour" value={{$schedule->start_hour}}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Sampai Jam</label>
                    <input type="time" class="form-control" placeholder="Sampai Jam" name="end_hour" value={{$schedule->end_hour}}>
                </div>
                {{--
                    <div class="mb-3">
                        <label class="form-label">Lokasi (Onsite/Online)</label>
                        <input type="location" class="form-control" placeholder="Lokasi (Onsite/Online)" name="location">
                    </div>
                --}}

                <div class="input-group mb-3">
                    <label class="form-label">Lokasi</label>
                    <select class="form-select form-control rounded" style="width: 100%" id="inputGroupSelect01" name="location">
                        <option selected value="0">Pilih Lokasi</option>
                        <option value="Onsite"{{$schedule->location == "Onsite" ? "selected" : ""}}>Onsite</option>
                        <option value="Online"{{$schedule->location == "Online" ? "selected" : ""}}>Online</option>
                    </select>
                    </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
