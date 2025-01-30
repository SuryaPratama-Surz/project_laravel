<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambahkan Pembeli</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fw-bold">Tambah Data Pembeli</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" id="nama" name="nama_pembeli" placeholder="Masukkan Nama Pembeli">
                            @error('nama_pembeli')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label><br>
                            <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"> Perempuan
                            @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon">
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success mt-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
</body>
</html>
