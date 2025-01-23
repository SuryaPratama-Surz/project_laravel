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
                    <form action="{{ route('product.update' , $products->id) }}" 
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                          <label for="nis" class="form-label">Nama Product</label>
                          <input type="text" class="form-control" id="nomor" name="nama_product" placeholder="Masukan Product"  value="{{ $products->nama_product }}">
                          @error('nama_product')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div> 

                        <div class="mb-3">
                          <label for="nis" class="form-label">Merk</label>
                          <input type="text" class="form-control" id="nomor" name="merk" placeholder="Masukan merk"  value="{{ $products->merk }}">
                          @error('merk')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                        </div>  

                        <div class="mb-3">
                          <label for="nis" class="form-label">Price</label>
                          <input type="number" class="form-control" id="nomor" name="price" placeholder="Masukan price"  value="{{ $products->price }}">
                          @error('price')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                        </div>
                        
                        <div class="mb-3">
                          <label for="nis" class="form-label">Stock</label>
                          <input type="number" class="form-control" id="nomor" name="stock" placeholder="Masukan Stock"  value="{{ $products->stock }}">
                          @error('stock')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label mb-3 ">Cover</label>
                            <img src="{{ asset('/images/product/' . $products->cover) }}" width="80" alt="">
                            <input type="file" class=" mt-2 form-control" id="Cover" name="cover" placeholder="Masukkan Cover" required>
                            @error('cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                       
                           

                        <input type="submit" name="simpan" value="Edit" class="btn btn-success mt-3">
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>