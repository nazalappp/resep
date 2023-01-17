@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Provinsi Jawa Barat</h4>
        <a href="{{ route('kota.create') }}" class="btn btn-sm btn-primary" style="float: right">
            Tambah Data
        </a>
        <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kota</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kotas as $kota)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{$kota->nama_kota}}</td>
                    <td>
                        <form action="{{ route('kota.destroy', $kota->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('kota.edit', $kota->id) }}"
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a>
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection