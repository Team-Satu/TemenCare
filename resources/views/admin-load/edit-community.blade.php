<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Komunitas [{{ $community->name }}]</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('admin-load.edit-community') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="community_id" value="{{ $community->community_id }}">
                    <div class="mb-3">
                        <label class="form-label">Nama Komunitas</label>
                        <input type="text" class="form-control" placeholder="Nama Komunitas" name="name"
                            value="{{ $community->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Singkat</label>
                        <input type="text" class="form-control"
                            placeholder="Masukan deskripsi singkat komunitas Anda" name="short_description"
                            value="{{ $community->short_description }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Masukan deskripsi komunitas Anda">{{ $community->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar Komunitas</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</div>
