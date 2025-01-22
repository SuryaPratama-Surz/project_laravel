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
                <div class="card-header fw-bold">Order</div>
                <div class="card-body">
                    <form action="{{ route('order.index' , $order->id) }}" 
                        method="get" enctype="multipart/form-data">
                        @csrf
                        @method('get')

                        <div class="mb-3">
                          <label for="nis" class="form-label">ID Product</label>
                          <input type="text" class="form-control" value="{{ $order->id_product}}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">Quantity</label>
                            <input type="text" class="form-control" value="{{ $order->quantity}}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">Order Date</label>
                            <input type="text" class="form-control" value="{{ $order->order_date}}" disabled>
                        </div> 

                        <div class="mb-3">
                            <label for="nis" class="form-label">ID Customer</label>
                            <input type="text" class="form-control" value="{{ $order->id_customer}}" disabled>
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