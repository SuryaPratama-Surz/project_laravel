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
                <div class="card-header fw-bold">Edit Data Order</div>
                <div class="card-body">
                    <form action="{{ route('order.update' , $order->id) }}" 
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      

                        <div class="mb-3">
                          <label for="nama" class="form-label">ID Product</label><br>
                          <select name="id_product" id="" class="form-select">
                              @foreach ($products as $data)
                              <option value="{{ $data->id }}" {{ $data->id == $order->id_product ? 'selected' : '' }}>{{ $data->nama_product }}</option>
                              @endforeach
                          </select>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="nama" name="quantity" placeholder="Masukan Quantity" value="{{ $order->quantity }}" required>
                        </div>
                        
                          <div class="mb-3">
                            <label for="nama" class="form-label">Order Date</label>
                            <input type="date" class="form-control" id="" name="order_date" placeholder="Masukan Order Date" value="{{ $order->order_date }}" required>
                          </div>
                        
                          <div class="mb-3">
                            <label for="nama" class="form-label">ID Customer</label><br>
                            <select name="id_customer" id="" class="form-select">
                                @foreach ($customer as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $order->id_customer ? 'selected' : '' }}>{{ $data->nama_customer }}</option>
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