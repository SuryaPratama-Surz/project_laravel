<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambahkan Customer</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header fw-bold">Tambah Data Customer</div>
                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Customer</label>
                          <input type="text" class="form-control" id="nama" name="nama_customer" placeholder="Masukan Nama customer" required>
                        </div> 

                        <div class="mb-3">
                          <label for="gender" class="form-label">Gender : </label>
                         <input type="radio" id="gender" name="gender" value="Laki-laki">
                         Laki-laki
                        </input>
                         <input type="radio" id="gender" name="gender" value="Perempuan">
                            Perempuan
                        </input>   
                        </div>

                          <div class="mb-3">
                            <label for="nama" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="nama" name="contact" placeholder="Masukan Contact" required>
                          </div> 

                        

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success mt-3">
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>