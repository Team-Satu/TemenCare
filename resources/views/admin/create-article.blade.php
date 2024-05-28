@extends('layouts.app')

@section('title', 'Buat Artikel')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Artikel</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin.create-article') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Gambar Artikel</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" placeholder="Judul Artikel" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori Artikel</label>
                        <select class="form-control" aria-label="Default select example" name="category">
                            <option value="mental">Mental</option>
                            <option value="remaja">Remaja</option>
                            <option value="pendidikan">Pendidikan</option>
                            <option value="pekerjaan">Pekerjaan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link Artikel</label>
                        <input class="form-control" name="url" placeholder="Masukan url artikel" type="text"></input>
                    </div>

                    <button type="submit" class="btn btn-primary">Buat Artikel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
