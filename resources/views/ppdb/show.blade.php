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
                <div class="card-header fw-bold">DATA PESERTA DIDIK</div>
                <div class="card-body">
                    <form action="{{ route('ppdb.index' , $ppdb->id) }}" 
                        method="get" enctype="multipart/form-data">
                        @csrf
                        @method('get')

                        <div class="mb-3">
                          <label for="nis" class="form-label">Nama</label>
                          <input type="text" class="form-control" value="{{ $ppdb->nama_lengkap }}" disabled>
                        </div> 

                        <div class="mb-3">
                          <label for="nama" class="form-label">Jenis Kelamin</label>
                          <input type="text" class="form-control" value="{{ $ppdb->jenis_kelamin }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Agama</label>
                            <input type="text" class="form-control" value="{{ $ppdb->agama }}" disabled>
                             </input>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Alamat</label>
                            <input type="text" class="form-control" value="{{ $ppdb->alamat }}" disabled></input>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Telepon</label>
                            <input type="text" class="form-control" value="{{ $ppdb->telepon }}" disabled></input>
                        </div>
                          
                        <div class="mb-3">
                            <label for="nama" class="form-label">Asal Sekolah</label>
                            <input type="text" class="form-control" value="{{ $ppdb->asal_sekolah }}" disabled></input>
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