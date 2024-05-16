@php
    $i = 1;
@endphp

<style>
    .cover-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 40%;
    }
</style>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Expertise</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Expertise</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expertises as $expertise)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $expertise->expertise }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" onclick="deleteExpertise({{ $expertise->expertise_id }})"
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
</div>

<script>
    function deleteExpertise(expertiseId) {
        const csrfToken = '{{ csrf_token() }}'; // Mendapatkan token CSRF dari Laravel

        return fetch(`/admin/load/delete-expertise/${expertiseId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken // Mengirimkan token CSRF
                },
            }).then(data => {
                window.location.href = '/admin/dashboard';
            })
            .catch(error => {
                window.location.href = '/admin/dashboard';
            });
    }

    function changePage(targetLoad) {
        const loading = "<h2>Loading...</h2>";
        $("#load-page").html(loading);
        $("#load-page").load("/admin/load/" + targetLoad);
    }
</script>
