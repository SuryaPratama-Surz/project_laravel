<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambahkan produk</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header fw-bold">Tambah Produk</div>
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Produk</label>
                          <input type="text" class="form-control" id="nama" name="nama_produk" placeholder="Masukan Nama produk" required>
                        </div> 
                        <div class="mb-3">
                            <label for="nama" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="nama" name="harga" placeholder="Masukan Harga" required>
                          </div> 
                          <div class="mb-3">
                            <label for="nama" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="nama" name="stok" placeholder="Masukan Stock" required>
                          </div> 
                          <div class="mb-3">
                            <label for="nama" class="form-label">Kategori</label><br>
                            <select name="id_kategori" id="" class="form-select">
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kategori}}</option>
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