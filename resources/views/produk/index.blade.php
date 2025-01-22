    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAFTAR PRODUK</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <div class="card">
                <div class="card-header">Data Produk</div>
    
                <div class="card-body">

                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     {{ session('success') }}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Kategori</th>
                            <th scope="col" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($produk as $data)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->nama_produk }}</td>
                            <td>Rp. {{ number_format($data->harga) }}</td>
                            <td>{{ $data->stok }}</td>
                            <td>{{ $data->kategori->nama_kategori}}</td>
                            <td class="text-center col-3">
                              <form action="{{ route('produk.destroy' , $data->id) }}" method="post">
                                <a href="{{ route('produk.edit' , $data->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('produk.show' , $data->id)}}" class="btn btn-sm btn-warning">Show</a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <a href="{{ route('produk.create') }}" class="btn btn-sm btn-success">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
</body>
</html>
</body>
</html>