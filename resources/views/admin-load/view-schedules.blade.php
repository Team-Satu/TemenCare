<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jadwal Konsultasi Psikolog</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Senin</td>
                            <td>08.00-10.00</td>
                            <td>Online</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" onclick="deleteAccount(1)" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    <button type="button" class="btn btn-warning" id="changePasswordPsycholog" onclick="changePage('change-schedules/1')"><i class="fas fa-pencil-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteAccount(psychologId) {
        const csrfToken = '{{ csrf_token() }}'; // Mendapatkan token CSRF dari Laravel

        return fetch(`/admin/load/delete-psycholog/${psychologId}`, {
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
