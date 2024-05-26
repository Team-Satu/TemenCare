@extends('layouts.app')

@section('title', 'Daftar Psikolog')

@section('content')
    @php
        $i = 1;
    @endphp

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Akun Psikolog</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($psychologs as $psycholog)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $psycholog->full_name }}</td>
                                <td>{{ $psycholog->email }}</td>
                                <td>{{ $psycholog->phone_number }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" onclick="deleteAccount({{ $psycholog->id }})"
                                            class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        <a type="button" class="btn btn-warning" id="changePasswordPsycholog"
                                            href="change-password-psycholog/{{ $psycholog->id }}"><i
                                                class="fas fa-key"></i></a>
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
