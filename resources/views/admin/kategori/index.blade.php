@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Data Kategori</h4>
        <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-dark" style="float: right">
            Tambah Data
        </a>
        <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoris as $kategori)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{$kategori->nama_kategori}}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('kategori.edit', $kategori->id) }}"
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