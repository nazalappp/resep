@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Data Kategori</h4>
        <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
            @csrf
            @method('put')
          <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
          </div>
          <div class="form-check form-check-flat form-check-dark">
          </div>
          <button type="submit" class="btn btn-dark mr-2">Edit</button>
          <a href="{{route('kategori.index')}}" class="btn btn-dark mr-2">
            Kembali
          </a>
        </form>
      </div>
    </div>
  </div>
@endsection