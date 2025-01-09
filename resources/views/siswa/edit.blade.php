<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISWA TAMBAH </title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header fw-bold">Edit Data Siswa</div>
                <div class="card-body">
                    <form action="{{ route('siswa.update' , $siswa->id) }}" 
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="nis" class="form-label">NIS</label>
                          <input type="number" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS"  value="{{ $siswa->nis }}" required>
                        </div> 
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $siswa->nama }}" required>
                        </div>
                        <div class="mb-3">
                          <label for="jenis_kelamin" class="form-label">Jenis Kelamin : </label>
                         <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki">
                         Laki-laki
                        </input>
                         <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">
                            Perempuan
                        </input>   
                        </div>
                        <div>
                        <select name="kelas" id="" class="form-select" required>
                            <option value="">Pilih Kelas</option>
                            <option value="XI RPL 1">XI RPL 1</option>
                            <option value="XI RPL 2">XI RPL 2</option>
                            <option value="XI RPL 3">XI RPL 3</option>
                        </select>
                        </div>
                        <div>
                        <input type="submit" name="simpan" value="Edit" class="btn btn-success mt-3">
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>