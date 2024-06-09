@extends('layouts.app')

@section('title', 'Buat Expertise')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Expertise</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin.create-expertise') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Bidang Keahlian (Expertise)</label>
                        <input type="text" class="form-control" name="expertise" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Expertise</button>
                </form>
            </div>
        </div>
    </div>
@endsection
