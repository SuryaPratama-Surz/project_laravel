<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambahkan Buku</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header fw-bold">Tambah Data Buku</div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Buku</label>
                          <input type="text" class="form-control  @error('nama_buku') is-invalid @enderror" id="nama" name="nama_buku" placeholder="Masukan Nama Buku">
                          @error('nama_buku')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div> 

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukan harga">
                            @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        <div>

                        <div class="mb-3">
                            <label for="stok" class="form-label">Stock</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="Masukan stok">
                            @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Image</label>
                            <input type="file" class="form-control  @error('image') is-invalid @enderror" id="image" name="image" placeholder="Masukkan image" required>
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                       </div>

                       <div class="mb-3">
                        <label for="nama" class="form-label">ID Penerbit</label><br>
                        <select name="id_penerbit" id="" class="form-select">
                            @foreach ($penerbit as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_penerbit}}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="nama" class="form-label">Tahun Terbit</label><br>
                        <input type="date" class="form-control  @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" required>
                        @error('tahun_terbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>


                    <div class="mb-3">
                        <label for="nama" class="form-label">ID Genre</label><br>
                        <select name="id_genre" id="" class="form-select">
                            @foreach ($genre as $data)
                            <option value="{{ $data->id }}">{{ $data->genre}}</option>
                            @endforeach
                        </select>
                      </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success mt-3">
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>