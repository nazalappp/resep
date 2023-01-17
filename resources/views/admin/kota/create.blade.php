@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Provinsi Jawa Barat</h4>
        <form action="{{ route('kota.store') }}" method="POST">
            @csrf
          <div class="form-group">
            <label>Nama Kota</label>
            <input type="text" class="form-control" name="nama_kota" placeholder="Nama Kota">
          </div>
          <div class="form-check form-check-flat form-check-primary">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection