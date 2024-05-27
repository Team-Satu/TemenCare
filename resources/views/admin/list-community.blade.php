@extends('layouts.app')

@section('title', 'Daftar Komunitas')

@section('content')
    @php
        $i = 1;
    @endphp

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Komunitas</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi Singkat</th>
                            <th scope="col">Deskripsi Lengkap</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($communities as $community)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td><a class="collapse-item"
                                        onclick="changePage('psycholog-communities/{{ $community->community_id }}')">{{ $community->name }}</a>
                                </td>
                                <td>{{ $community->short_description }}</td>
                                <td>{{ $community->description }}</td>
                                <td>
                                    <img src="/images/{{ $community->image_url }}" alt="{{ $community->name }}"
                                        class="img-thumbnail" width="50" height="50">
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" onclick="deleteCommunity({{ $community->community_id }})"
                                            class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        <a type="button" class="btn btn-info"
                                            href="./edit-community/{{ $community->community_id }}"><i
                                                class="fas fa-edit"></i></a>
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
        function deleteAccount(psychologId) {
            const csrfToken = '{{ csrf_token() }}';

            return fetch(`/admin/delete-psycholog/${psychologId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                })
                .then(data => {
                    window.location.href = '/admin/list-psycholog';
                })
                .catch(error => {
                    window.location.href = '/admin/list-psycholog';
                });
        }
    </script>
@endsection
