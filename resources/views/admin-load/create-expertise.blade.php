<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Expertise</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin-load.create-expertise') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Expertise</label>
                        <input type="text" class="form-control" placeholder="Expertise Anda" name="expertise">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Expertise</button>
                </form>
            </div>
        </div>
    </div>
</div>
