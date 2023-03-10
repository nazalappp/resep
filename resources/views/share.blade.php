@extends('layouts.admin')

@section('content')
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
   
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