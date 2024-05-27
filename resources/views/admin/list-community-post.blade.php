@extends('layouts.app')

@section('title', 'Daftar Postingan Komunitas')

@section('content')
    @php
        $i = 1;
    @endphp

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Postingan Komunitas [{{ $community->name }}]</h1>
        <a class="btn btn-primary"
            href="{{ route('admin.create-community-post', ['community_id' => $community->community_id]) }}"
            role="button">Buat Post</a>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi Post</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->post }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" onclick="deletePost({{ $post->post_id }})"
                                            class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        <a type="button" class="btn btn-warning" id="changePasswordPsycholog"
                                            href="change-password-psycholog/{{ $post->post_id }}"><i
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
        function deletePost(postId) {
            const csrfToken = '{{ csrf_token() }}';

            return fetch(`/admin/community-post/${postId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                })
                .then(data => {
                    window.location.reload();
                })
                .catch(error => {
                    window.location.reload();
                });
        }
    </script>
@endsection
