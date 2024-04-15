<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ganti Password Psikolog</h1>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <form class="card-body" action="{{ route('adminload.post-change-password-psycholog') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Email Psikolog" name="email"
                            value="{{ $psycholog->email }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password</label>
                        <input type="text" class="form-control" placeholder="Password Anda" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm New Password</label>
                        <input type="text" class="form-control" placeholder="Password Anda" name="new_password">
                    </div>

                    <button type="submit" class="btn btn-primary">Ganti Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
