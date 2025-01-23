<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambahkan Produk</title>
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
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="nama_product" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control @error('nama_product') is-invalid @enderror" id="nama_product" name="nama_product" value="" placeholder="Masukan Nama Produk">
                                @error('nama_product')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" value="" placeholder="Masukan Merk">
                                @error('merk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="" placeholder="Masukan Harga">
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="" placeholder="Masukan Stock">
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Cover</label>
                                <input type="file" class="form-control  @error('cover') is-invalid @enderror" id="Cover" name="cover" placeholder="Masukkan Cover" required>
                                @error('cover')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                           </div>

                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success mt-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>
</html>
