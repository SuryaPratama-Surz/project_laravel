<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Buku</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header fw-bold">Edit Data Buku</div>
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Input Nama Buku -->
                        <div class="mb-3">
                            <label for="buku" class="form-label">Nama Buku</label>
                            <input type="text" class="form-control @error('buku') is-invalid @enderror" id="buku" name="buku" placeholder="Masukkan Nama Buku" value="{{ $buku->nama_buku }}" required>
                            @error('buku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Input Harga Buku -->
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukkan Harga Buku" value="{{ $buku->harga }}" required>
                            @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Input Stok Buku -->
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="Masukkan Stok Buku" value="{{ $buku->stok }}" required>
                            @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Input Image Buku -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Masukkan Image Buku">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Input ID Penerbit -->
                        <div class="mb-3">
                            <label for="id_penerbit" class="form-label">ID Penerbit</label><br>
                            <select name="id_penerbit" id="id_penerbit" class="form-select">
                                @foreach ($penerbit as $data)
                                <option value="{{ $data->id }}" {{ $buku->id_penerbit == $data->id ? 'selected' : '' }}>{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Input Tahun Terbit -->
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label><br>
                            <input type="date" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
                            @error('tahun_terbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Input ID Genre -->
                        <div class="mb-3">
                            <label for="id_genre" class="form-label">ID Genre</label><br>
                            <select name="id_genre" id="id_genre" class="form-select">
                                @foreach ($genre as $data)
                                <option value="{{ $data->id }}" {{ $buku->id_genre == $data->id ? 'selected' : '' }}>{{ $data->genre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="submit" name="simpan" value="Update" class="btn btn-success mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

</body>
</html>
