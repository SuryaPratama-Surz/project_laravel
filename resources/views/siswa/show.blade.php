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
                <div class="card-header fw-bold">{{  $siswa->nama }}</div>
                <div class="card-body">
                    <form action="{{ route('siswa.index' , $siswa->id) }}" 
                        method="get" enctype="multipart/form-data">
                        @csrf
                        @method('get')

                        <div class="mb-3">
                          <label for="nis" class="form-label">NIS</label>
                          <input type="number" class="form-control" value="{{ $siswa->nis }}" disabled>
                        </div> 

                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" value="{{ $siswa->nama }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" value="{{ $siswa->jenis_kelamin }}" disabled>
                             </input>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Kelas</label>
                            <input type="text" class="form-control" value="{{ $siswa->kelas }}" disabled></input>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Cover</label>
                            <img src="{{ asset('/images/siswa/' . $siswa->cover) }}" width="100" alt="">
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