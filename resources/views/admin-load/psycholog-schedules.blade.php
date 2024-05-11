<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jadwal Konsultasi Anda</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('adminload.register-psycholog') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Hari</label>
                        <input type="date" class="form-control" placeholder="Hari" name="day">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam</label>
                        <input type="time" class="form-control" placeholder="Jam" name="time">
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label">Lokasi (Onsite/Online)</label>
                        <input type="location" class="form-control" placeholder="Lokasi (Onsite/Online)" name="location">
                    </div>
                    </div> --}}

                    <div class="input-group mb-3">
                        <label class="form-label">Lokasi</label>
                        <select class="form-select form-control rounded" style="width: 100%" id="inputGroupSelect01">
                          <option selected>Pilih Lokasi</option>
                          <option value="1">Onsite</option>
                          <option value="2">Online</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
