<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header fw-bold">Edit Data Produk</div>
                <div class="card-body">
                    <form action="{{ route('produk.update' , $produk->id) }}" 
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                          <label for="nis" class="form-label">Nama Produk</label>
                          <input type="text" class="form-control" id="nomor" name="nama_produk" placeholder="Masukan Nomor"  value="{{ $produk->nama_produk }}" required>
                        </div> 

                        <div class="mb-3">
                          <label for="nis" class="form-label">Harga</label>
                          <input type="text" class="form-control" id="nomor" name="harga" placeholder="Masukan Nomor"  value="{{ $produk->harga }}" required>
                        </div>  

                        <div class="mb-3">
                          <label for="nis" class="form-label">Stock</label>
                          <input type="number" class="form-control" id="nomor" name="stok" placeholder="Masukan Nomor"  value="{{ $produk->stok }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Kategori</label><br>
                            <select name="id_kategori" id="" class="form-select">
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                          </div>

                        <input type="submit" name="simpan" value="Edit" class="btn btn-success mt-3">
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>