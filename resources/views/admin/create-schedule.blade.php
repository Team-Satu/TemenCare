@extends('layouts.app')

@section('title', 'Daftar Psikolog')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Buat Jadwal Konsultasi Psikolog</h1>
</div>

<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <form class="card-body" action="{{ route('adminload.create-schedule') }}" method="POST">
                @csrf
                <input type="hidden" name="psycholog_id" value="1">
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-control" placeholder="Tanggal" name="date">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dari Jam</label>
                    <input type="time" class="form-control" placeholder="Dari Jam" name="start_hour">
                </div>
                <div class="mb-3">
                    <label class="form-label">Sampai Jam</label>
                    <input type="time" class="form-control" placeholder="Sampai Jam" name="end_hour">
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label">Lokasi (Onsite/Online)</label>
                    <input type="location" class="form-control" placeholder="Lokasi (Onsite/Online)" name="location">
                </div>
                </div> --}}

                <div class="input-group mb-3">
                    <label class="form-label">Lokasi</label>
                    <select class="form-select form-control rounded" style="width: 100%" id="inputGroupSelect01" name="location">
                        <option selected value="0">Pilih Lokasi</option>
                        <option value="Onsite">Onsite</option>
                        <option value="Online">Online</option>
                    </select>
                    </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
