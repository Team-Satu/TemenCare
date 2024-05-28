@extends('layouts.app')

@section('title', 'Daftar Psikolog')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Komunitas</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin.create-community') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Komunitas</label>
                        <input type="text" class="form-control" placeholder="Nama Komunitas" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Singkat</label>
                        <input type="text" class="form-control" placeholder="Masukan deskripsi singkat komunitas Anda"
                            name="short_description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Masukan deskripsi komunitas Anda"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar Komunitas</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Buat Komunitas</button>
                </form>
            </div>
        </div>
    </div>
@endsection
