<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Edit Data Siswa</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('admin/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('admin/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('admin/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('admin/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                {{-- Navbar --}}
                @include('layouts.kerangka.navbar')
                {{-- AkhirNav --}}
                <!-- /.navbar-top-links -->
            </nav>

            <aside class="sidebar navbar-default" role="navigation">
                {{-- SIDEBAR --}}
               @include('layouts.kerangka.sidebar')
                {{-- SIDEBAR AKHIR --}}
            </aside>
            <!-- /.sidebar -->

            
            <div id="page-wrapper">
                {{-- CONTENT --}}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Mengubah (Edit) Data Siswa </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Data
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">@csrf

                                                @method('PUT')
                                
                                                <div class="form-group">
                                                    <label>NIS</label>
                                                    <input type="number" class="form-control" name="nis" placeholder="Masukkan NIS" value="{{ $siswa->nis }}" required>
                                                </div>

                                                <div class="form-group">
                                                     <label>Nama Lengkap</label>
                                                    <input  type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="{{ $siswa->nama }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label><br>
                                                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                                                        Laki-laki
                                                    </input>
                                                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                                        Perempuan
                                                    </input>
                                             </div>

                                             <div class="form-group">
                                                <label>Kelas</label>
                                                <select name="kelas" id="" class="form-control" required>
                                                    <option value="">Pilih Kelas</option>
                                                    <option value="XI RPL 1" {{ $siswa->kelas == 'XI RPL 1' ? 'selected' : '' }}>XI RPL 1</option>
                                                    <option value="XI RPL 2" {{ $siswa->kelas == 'XI RPL 2' ? 'selected' : '' }}>XI RPL 2</option>
                                                    <option value="XI RPL 3" {{ $siswa->kelas == 'XI RPL 3' ? 'selected' : '' }}>XI RPL 3</option>
                                                </select>
                                             </div>

                                            <div class="form-group">
                                                <label>Cover : </label>
                                                <br>
                                                <img src="{{ asset('/images/siswa/' . $siswa->cover) }}" width="80" alt="">
                                                <br>
                                                <input type="file" class="" id="cover" name="cover" placeholder="Masukkan Cover">
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a href="{{ route('siswa.index') }}" class="btn btn-danger">Kembali</a>
                                            </div>             

                                           </form>
                                        </div>
                              
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                     </div>
                    <!-- /.row -->
                   
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                {{-- AKHIR CONTENT --}}
            </div>
            <!-- /#page-wrapper -->
        </div>
       
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('admin/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('admin/js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('admin/js/raphael.min.js')}}"></script>
        <script src="{{ asset('admin/js/morris.min.js')}}"></script>
        <script src="{{ asset('admin/js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/js/startmin.js"></script>

    </body>

</html>