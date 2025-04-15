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
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              {{ session('success') }} <a href="#" class="alert-link"></a>
                            @endif
                            <h1 class="page-header">Data Produk</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Produk</h3>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Nama Produk</th>
                                              <th scope="col">Harga</th>
                                              <th scope="col">Stok</th>
                                              <th scope="col">Id_Kategori</th>
                                              <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        @php $no = 1; @endphp
                                        @foreach ($produk as $data)
                                        <tbody>
                                          <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $data->nama_produk }}</td>
                                            <td>{{ $data->harga }}</td>
                                            <td>{{ $data->stok }}</td>
                                            <td>{{ $data->kategori->nama_kategori}}</td>
                                            <td class="text-center">
                                                <form action="{{ route('produk.destroy', $data->id) }}" method="POST">@csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('produk.show', $data->id) }}" class="btn btn-sm btn-info">Show</a>
                                                    <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a href="{{ route('produk.create') }}" class="btn btn-sm btn-success">Add</a>
                                </div>
                                <!-- /.table-responsive -->
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