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
                <div class="card-header fw-bold">Edit Data Pengguna</div>
                <div class="card-body">
                    <form action="{{ route('telephone.update' , $telephone->id) }}" 
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="nis" class="form-label">Telephone</label>
                          <input type="number" class="form-control" id="nomor" name="nomor" placeholder="Masukan Nomor"  value="{{ $telephone->nomor }}" required>
                        </div> 
                        <div class="mb-3">
                            <label for="nama" class="form-label">Pengguna</label><br>
                            <select name="id_pengguna" id="" class="form-select">
                                @foreach ($pengguna as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $telephone->id_pengguna ? 'selected' : '' }}>{{ $data->nama }}</option>
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