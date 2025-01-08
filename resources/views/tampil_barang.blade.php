<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Barang</h1>
    <div class="row">
        @foreach ($barangs as $data)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ID: {{ $data->id }}</h5>
                    <p class="card-text">Nama Barang: {{ $data->nama_barang }}</p>
                    <p class="card-text">Merk: {{ $data->merk }}</p>
                    <p class="card-text">Harga: Rp. {{ number_format($data->harga) }}</p>
                </div>
            </div>
        </div>
       @endforeach    
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    