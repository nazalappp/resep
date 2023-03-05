@extends('layouts.admin')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ZanashCook</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/vendors/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('assets/images/faces/face28.jpg')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <i class="ti-power-off text-dark"></i>
                Logout
              </a>
              <form action="{{route('logout')}}" class="d-none" id="logout-form" method="post" >
                @csrf
              </form>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">{{Auth()->user()->name}}</li>
        </ul>
        {{-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button> --}}
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Resep</h4>
            <form action="{{ route('share.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label>Kota</label>
                <select name="kota_id"
                  class="form-control @error('kota_id') is-invalid @enderror">
                  @foreach ($kotas as $kota)
                    <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select name="kategori_id"
                  class="form-control @error('kategori_id') is-invalid @enderror">
                  @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul Masakan">
              </div>
              <div class="form-group">
                <label>Gambar Makanan</label>
                <input type="file" class="form-control" name="gambar_resep" placeholder="Gambar">
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" cols="30" rows="7"
                  class="form-control mb-2  @error('deskripsi') is-invalid @enderror" placeholder="deskripsi"
                ></textarea>
              </div>
              <div class="form-group">
                <label>Bahan-Bahan</label>
                <textarea name="bahan_bahan" cols="30" rows="7"
                  class="form-control mb-2  @error('bahan_bahan') is-invalid @enderror" placeholder="Bahan-Bahan"
                ></textarea>
              </div>
              <div class="form-group">
                <label>Langkah-Langkah</label>
                <textarea name="langkah_langkah" cols="30" rows="7"
                  class="form-control mb-2  @error('langkah_langkah') is-invalid @enderror" placeholder="Langkah-Langkah"
                ></textarea>
              </div>
              <div class="form-check form-check-flat form-check-primary">
              </div>
              <button type="submit" class="btn btn-dark mr-2">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendors/select2/select2.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/js/template.js')}}"></script>
  <script src="{{asset('assets/js/settings.js')}}"></script>
  <script src="{{asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/file-upload.js')}}"></script>
  <script src="{{asset('assets/js/typeahead.js')}}"></script>
  <script src="{{asset('assets/js/select2.js')}}"></script>
  <!-- End custom js for this page-->

  @include('sweetalert::alert')
</body>

</html>

@endsection