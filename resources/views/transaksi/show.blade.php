<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SHOW DATA </title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fw-bold">DATA TRANSAKSI</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.index' , $transaksi->id) }}" 
                        method="get" enctype="multipart/form-data">
                        @csrf
                        @method('get')

                        <div class="mb-3">
                          <label for="nis" class="form-label">Jumlah</label>
                          <input type="number" class="form-control" value="{{ $transaksi->jumlah }}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control" value="{{ $transaksi->tanggal_transaksi }}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">ID Buku</label>
                            <input type="text" class="form-control" value="{{ $transaksi->buku->nama_buku }}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">ID Pembeli</label>
                            <input type="text" class="form-control" value="{{ $transaksi->pembeli->nama_pembeli}}" disabled>
                        </div> 

                        <div>
                        <input type="submit" name="simpan" value="Kembali" class="btn btn-success mt-3">
                       </div>
                    </form>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>