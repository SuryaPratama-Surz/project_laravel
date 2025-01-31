<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Transaksi</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header fw-bold">Edit Data Transkasi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" placeholder="Masukka jumlah" value="{{ $transaksi->jumlah }}" required>
                            @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        
                        <div class="mb-3">
                            <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label><br>
                            <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" id="tanggal_transaksi" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" required>
                            @error('tanggal_transaksi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="id_buku" class="form-label">ID Buku</label><br>
                            <select name="id_buku" id="id_buku" class="form-select">
                                @foreach ($buku as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_buku ? 'selected' : '' }}>{{ $data->nama_buku }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="id_pembeli" class="form-label">ID Pembeli</label><br>
                            <select name="id_pembeli" id="id_pembeli" class="form-select">
                                @foreach ($pembeli as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_pembeli ? 'selected' : '' }}>{{ $data->nama_pembeli }}</option>
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
