<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambahkan Data Transaksi</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header fw-bold">Tambah Data Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label for="jumlah" class="form-label">Jumlah</label>
                          <input type="number" class="form-control  @error('jumlah') is-invalid @enderror" id="nama" name="jumlah" placeholder="Masukan Jumlah">
                          @error('jumlah')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div> 

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" id="tanggal_transaksi" name="tanggal_transaksi" placeholder="Masukan Tanggal">
                            @error('tanggal_transaksi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        <div>

                       <div class="mb-3">
                        <label for="nama" class="form-label">ID Buku</label><br>
                        <select name="id_buku" id="" class="form-select">
                            @foreach ($buku as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_buku}}</option>
                            @endforeach
                        </select>
                      </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">ID Pembeli</label><br>
                        <select name="id_pembeli" id="" class="form-select">
                            @foreach ($pembeli as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_pembeli}}</option>
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