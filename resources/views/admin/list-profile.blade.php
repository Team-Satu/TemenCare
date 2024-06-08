@extends('layouts.app')

@section('title', 'Daftar Profile')

@section('content')
    @php
        $i = 1;
    @endphp

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Akun Profile</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $profile)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $profile->type }}</td>
                                <td>{{ $profile->title }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" onclick="deleteProfile({{ $profile->profile_id }})"
                                            class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
        function deleteProfile(profileId) {
            const csrfToken = '{{ csrf_token() }}';

            return fetch(`/admin/delete-profile/${profileId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                })
                .then(data => {
                    window.location.href = '/admin/list-profile';
                })
                .catch(error => {
                    window.location.href = '/admin/list-profile';
                });
        }
    </script>
@endsection
