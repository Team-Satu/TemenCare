@extends('layouts.app')

@section('title', 'Ubah Profile')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin.edit-profile') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Anda</label>
                        <input type="text" class="form-control" placeholder="Nama Anda" name="full_name"
                            value="{{ $psycholog->full_name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" placeholder="Nomor Telepon Anda" name="phone_number"
                            value="{{ $psycholog->phone_number }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Singkat</label>
                        <input type="text" class="form-control" placeholder="Deskripsi Singkat Anda" name="description"
                            value="{{ $psycholog->description }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto Profile</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Ubah Profile Anda</button>
                </form>
            </div>
        </div>
    </div>
@endsection
