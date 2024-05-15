<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Your CSS styles here */
        .col-md-4 {
            width: 410px;
        }

        /* Customizing color */
        .btn-secondary {
            background-color: #f00; /* Red background color */
            color: #fff; /* White text color */
        }

        /* Customizing size */
        .btn-secondary {
            font-size: 15px; /* Font size */
            padding-top: 0px;
            padding-left: 5px; /* Padding */
        }
        
    </style>
    <script src="https://kit.fontawesome.com/95631151da.js" crossorigin="anonymous"></script>
</head>

<div class="container-fluid">
    <p class="text-start">Komunitas</p>
    <p class="h1">{{ $community->name }}</p>
    <div class="d-grid gap-4">
        <div>
            <div style="width: 530px; height: 271px; position: relative">
                <img style="width: 758.02px; height: 348.55px; left: -104.77px; top: -24.11px" src="https://via.placeholder.com/758x349" />
            </div>
        </div>
        <div style="padding-top: 60px; width: 550px;">{{ $community->description }}</div>
        <div class="pt-1"><h1>Postingan</h1>
        @foreach ($posts as $post)
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Postingan
        </button></div>
        <div class="container ms-0">
        <div class="row row-cols-2">
            <div class="col-md-4 mb-4 ">
            <div class="card" style="width: 24rem;">
            <div class="card-body d-flex">
                <div>
                    <h5 class="card-title">Card title   </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                <div class="dropdown">
                <i class="fa-solid fa-ellipsis" data-toggle="dropdown" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"></i>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
                        <li><button class="dropdown-item" type="button">Hapus Postingan</button></li>
                        <li><button class="dropdown-item" type="button">Edit Postingan</button></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Postingan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form action="{{ route('community-posts.store') }}" method="POST">
          @csrf

          <div class="form-group">
              <label for="post">Post:</label>
              <textarea class="form-control" id="post" name="post" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary mt-4">Create Post</button>
        </form>
        <!-- End of Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>