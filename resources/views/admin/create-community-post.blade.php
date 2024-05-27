@extends('layouts.app')

@section('title', 'Postingan Baru')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Post Komunitas</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin.create-community') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Judul Post</label>
                        <input type="text" class="form-control" placeholder="Judul Postingan" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" placeholder="Deskripsi Postingan" name="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Buat Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
