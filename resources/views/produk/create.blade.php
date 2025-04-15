<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ruang Kerja Admin</title>

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
                            <h1 class="page-header">Menambahkan Data </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Menambahkan Data Produk
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">@csrf

                                                <div class="form-group">
                                                    <label></i>Nama Produk</label>
                                                    <input  type="text" class="form-control" name="nama_produk" placeholder="Masukkan Nama Produk" required>
                                                </div>

                                                <div class="form-group">
                                                     <label></i>Harga</label>
                                                    <input  type="number" class="form-control" name="harga" placeholder="Masukkan Harga" required>
                                                </div>

                                                <div class="form-group">
                                                    <label></i>Stok</label>
                                                   <input  type="number" class="form-control" name="stok" placeholder="Masukkan Stok" required>
                                               </div>

                            
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">ID Kategori</label><br>
                                                <select name="id_kategori" id="" class="form-control">
                                                    @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_kategori}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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