<div class="container-fluid">

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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($psychologs as $psycholog)
                            <tr>
                                <th scope="row">{{ $psycholog->id }}</th>
                                <td>{{ $psycholog->full_name }}</td>
                                <td>{{ $psycholog->email }}</td>
                                <td>{{ $psycholog->phone_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
