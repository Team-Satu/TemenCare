<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Profil Psikolog</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <!-- <div class="card shadow mb-4"> -->
               <!-- TemenCare/resources/views/admin-load/add-psycholog-profile.blade.php -->
            <form action="{{ route('expertise.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="Alumnus">Alumnus</option>
                        <option value="Pengalaman Kerja">Pengalaman Kerja</option>
                        <option value="Tempat Praktek">Tempat Praktek</option>
                        <option value="Nomor STR">Nomor STR</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>