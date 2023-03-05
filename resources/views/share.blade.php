@extends('layouts.admin')

@section('content')
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <h3><b><i>ZanashCook</i></b></h3>
        {{-- <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="{{asset('assets/images/logo.svg')}}" class="mr-2" alt="logo"/></a> --}}
        {{-- <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo"/></a> --}}
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('assets/images/faces/face28.jpg')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              {{-- <a href="{{ url('/profile')}}">
                <i class="ni ni-user-run">
                  <span>Profile</span>
                </i>
              </a> --}}
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
@endsection
