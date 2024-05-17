<script src="/resources/js/temen-care.js"></script>

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

                    {{-- <button type="submit" class="btn btn-primary">Tambah Expertise</button> --}}
                    <button id="add-query-button" onclick="a()" type="button">Add Query Parameter</button>
                    <button id="fetch-query-button" onclick="b()" type="button">Fetch Query Parameter</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

// Fungsi untuk menambahkan query parameter ke URL
function addQueryParameter(key, value) {
    let url = new URL(window.location.href);
    url.searchParams.set(key, value);
    window.history.pushState({ path: url.href }, "", url.href);
}

// Fungsi untuk mengambil query parameter dari URL
function getQueryParameter(key) {
    let url = new URL(window.location.href);
    return url.searchParams.get(key);
}

// Event handler untuk tombol "Add Query Parameter"
function a() {
    console.log("hsopalam");
    addQueryParameter("example", "123");
    alert("Query parameter added: " + window.location.href);
}

// Event handler untuk tombol "Fetch Query Parameter"
function b() {
    console.log("hsopalamaskjnaskjn");
    const value = getQueryParameter("example");
    alert("Query parameter value: " + value);
}

</script>