<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambahkan Genre</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header fw-bold">Tambah Data Genre</div>
                <div class="card-body">
                    <form action="{{ route('genre.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label for="nama" class="form-label">Jenis Genre</label>
                          <input type="text" class="form-control  @error('genre') is-invalid @enderror" id="nama" name="genre" placeholder="Masukan Jenis Genre">
                          @error('genre')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div> 
                     
                        <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success mt-3">
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>