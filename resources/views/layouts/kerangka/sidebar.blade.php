<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sidebar</title>
</head>
<body>
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#" class="active"><i class="fa fa-home fa-fw"></i> Beranda</a>
            </li>
            <li>
                <a href="{{ route('siswa.index') }}"><i class="fa fa-user fa-fw"></i> Siswa</a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}"><i class="fa fa-paypal fa-fw"></i> Produk</a>
            </li>
            <li>
                <a href="{{ route('kategori.index') }}"><i class="fa fa-instagram fa-fw"></i> Kategori</a>
            </li>
         
            
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
</body>
</html>