@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    @php
        $i = 1;
    @endphp

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Artikel</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Url</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->category }}</td>
                                <td>{{ $article->url }}</td>
                                <td>
                                    <img src="/images/{{ $article->image_url }}" alt="{{ $article->title }}"
                                        class="img-thumbnail" width="50" height="50">
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" onclick="deleteCommunity({{ $article->article_id }})"
                                            class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        <a type="button" class="btn btn-info"
                                            href="{{ route('admin.show-edit-article', ['article_id' => $article->article_id]) }}"><i
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
        function deleteCommunity(communityId) {
            const csrfToken = '{{ csrf_token() }}';

            return fetch(`/admin/delete-community/${communityId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                })
                .then(data => {
                    window.location.href = '/admin/list-community';
                })
                .catch(error => {
                    window.location.href = '/admin/list-community';
                });
        }
    </script>
@endsection
