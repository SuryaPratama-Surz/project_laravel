<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengguna</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header fw-bold">Number Pengguna</div>
                <div class="card-body">
                    <form action="{{ route('telephone.index' , $telephone->id) }}" 
                        method="get" enctype="multipart/form-data">
                        @csrf
                        @method('get')

                        <div class="mb-3">
                          <label for="nis" class="form-label">Nomor Telephone</label>
                       <input type="number" class="form-control" value="{{ $telephone->nomor }}" disabled>
                        </div> 

                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Pengguna</label>
                          <input type="text" class="form-control" value="{{ $telephone->pengguna->nama }}" disabled>
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