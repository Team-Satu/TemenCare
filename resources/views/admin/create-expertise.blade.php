@extends('layouts.app')

@section('title', 'Buat Expertise')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Profile</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin.create-profile') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe</label>
                        <select class="form-control" id="type" name="type">
                            <option value="EDUCATION">Alumnus</option>
                            <option value="JOB">Pengalaman Kerja</option>
                            <option value="BUILDING">Tempat Praktek</option>
                            <option value="LEGAL">Nomor STR</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection
