<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATA</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header fw-bold">Edit Data Pembeli</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                 
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control" id="nama" name="nama_pembeli" placeholder="Masukkan Nama" value="{{ $pembeli->nama_pembeli }}" required>
                        </div> 

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label><br>
                            <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" {{ $pembeli->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                            Laki-laki
                            <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                            Perempuan
                        </div>

                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" value="{{ $pembeli->telepon }}" required>
                        </div>

                        
                        <input type="submit" name="simpan" value="Edit" class="btn btn-success mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>
