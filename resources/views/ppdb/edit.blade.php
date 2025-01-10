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
                <div class="card-header fw-bold">Edit Data Siswa</div>
                <div class="card-body">
                    <form action="{{ route('ppdb.update' , $ppdb->id) }}" 
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukkan Nama"  value="{{ $ppdb->nama_lengkap }}" required>
                        </div> 
                        <div class="mb-2">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin : </label>
                           <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki">
                           Laki-laki
                          </input>
                           <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">
                              Perempuan
                          </input>   
                          </div>
                            <div>
                                <select name="agama" id="" class="form-select" required>
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>

                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Masukan Alamat" id="floatingTextarea2" style="height: 100px" name="alamat" value="" >{{ $ppdb->alamat }}</textarea>
                                <label for="floatingTextarea2">Alamat Peserta Didik</label>
                            </div>
    
                            <div class="mb-3 mt-2">
                                <label for="telepon" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukan Nomor Telepon" value="{{ $ppdb->telepon }}" required>
                            </div> 
    
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Masukan Asal Sekolah" id="floatingTextarea2" style="height: 100px" name="asal_sekolah">{{ $ppdb->asal_sekolah }}</textarea>
                                <label for="floatingTextarea2">Asal Sekolah Peserta Didik</label>
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