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
                <div class="card-header fw-bold">Produk</div>
                <div class="card-body">
                    <form action="{{ route('product.index' , $products->id) }}" 
                        method="get" enctype="multipart/form-data">
                        @csrf
                        @method('get')

                        <div class="mb-3">
                          <label for="nis" class="form-label">Nama</label>
                          <input type="text" class="form-control" value="{{ $products->nama_product}}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">Harga</label>
                            <input type="text" class="form-control" value="{{ $products->merk}}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">Stock</label>
                            <input type="text" class="form-control" value="{{ $products->price}}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">Stock</label>
                            <input type="text" class="form-control" value="{{ $products->stock}}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nama" class="form-label">Cover</label>
                            <br>
                            <img src="{{ asset('/images/product/' . $products->cover) }}" width="100" alt="">
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