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
                          <input type="text" class="form-control" id="nomor" name="nama_product" placeholder="Masukan Nomor"  value="{{ $products->nama_product }}" required>
                        </div> 

                        <div class="mb-3">
                          <label for="nis" class="form-label">Merk</label>
                          <input type="text" class="form-control" id="nomor" name="merk" placeholder="Masukan merk"  value="{{ $products->merk }}" required>
                        </div>  

                        <div class="mb-3">
                          <label for="nis" class="form-label">Price</label>
                          <input type="number" class="form-control" id="nomor" name="price" placeholder="Masukan price"  value="{{ $products->price }}" required>
                        </div>
                        
                        <div class="mb-3">
                          <label for="nis" class="form-label">Stock</label>
                          <input type="number" class="form-control" id="nomor" name="stock" placeholder="Masukan Stock"  value="{{ $products->stock }}" required>
                        </div>
                       
                           

                        <input type="submit" name="simpan" value="Edit" class="btn btn-success mt-3">
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>