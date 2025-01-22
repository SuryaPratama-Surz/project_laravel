<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATA</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header fw-bold">Edit Data Kategori</div>
                <div class="card-body">
                    <form action="{{ route('kategori.update' , $kategori->id) }}" 
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Kategori</label>
                          <input type="text" class="form-control" id="nama" name="nama_kategori" placeholder="Masukkan Nama Kategori"  value="{{ $kategori->nama_kategori }}" required>
                        </div> 
                        <div>
                        <input type="submit" name="simpan" value="Edit" class="btn btn-success mt-3">
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>