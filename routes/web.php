<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PpdbsController;
use App\Http\Controllers\TelephonesController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form/{name}/{umur}', function ($name, $umur) {
    return 'Selamat datang '. $name . 
            '<br> Anda berusia ' . $umur . ' tahun';
});

Route::get('/about/{name}/{tlahir}/{jk}/{agama}/{alamat}', function ($name,$tlahir,$jk,$agama,$alamat) {
    return 'NAMA : ' . $name . '<br>'.
           'TANGGAL LAHIR : ' . $tlahir .'<br>'.
           'JENIS KELAMIN : ' . $jk .'<br>'. 
           'AGAMA : ' . $agama .'<br>'. 
           'ALAMAT : ' . $alamat .'<br>';
});

Route::get('/hitung/{a}/{b}', function ($bil1,$bil2) {
    $hasil = $bil1 + $bil2;
    return 'Penjumlahan<br>
            BILANGAN 1 = ' . $bil1 . 
          '<br> BILANGAN 2 = ' . $bil2 . 
          '<br>HASILNYA = ' . $hasil ;
});

Route::get('/struck/{a}/{b}/{c}/{d}/{e}/{f}', function ($nama,$tlp,$barang,$namabarang,$jumlah,$pembayaran) {
    
    if ($barang == "Handphone") {

     if ($namabarang == "Poco") {
        $harga = 3000000;
    } elseif ($namabarang == "Samsung") {
        $harga = 5000000;
    } elseif ($namabarang == "Iphone") {
        $harga = 15000000;
    } 
   }
    
    elseif ($barang == "Laptop") {

     if ($namabarang == "Acer") {
        $harga = 8000000;
    } elseif ($namabarang == "Macbook") {
       $harga = 20000000;
    } elseif ($namabarang == "Lenovo") {
        $harga = 4000000;
    }  
  }
      
     elseif ($barang == "Tv") {  
    
    if ($namabarang == "Tohshiba") {
        $harga = 5000000;
    } elseif ($namabarang == "Samsung") {
        $harga = 8000000;
    } elseif ($namabarang == "LG") {
        $harga = 10000000;
    } 
    }

  $total = $harga * $jumlah ;

    if ($total > 10000000) {
        $cashback = 500000;
    } else {
        $cashback = 0;
    }


    if ($pembayaran = "Transfer") {
        $potongan = 500000;
    } else {
        $potongan = 0;
    }

   
   
    $totalpembayaran = $total - $cashback - $potongan;
    
    return 'Nama Pembeli : '.  $nama .  '<br>' .
           'Telepon : ' . $tlp . '<br>' . 
           '<hr>'.
           'Jenis Barang : ' . $barang . '<br>' . 
           'Nama Barang : ' . $namabarang . '<br>'.
           'Harga : Rp. ' . number_format($harga) . '<br>' . 
           'Jumlah  : ' . $jumlah . '<br><hr>' . 
           'Total : Rp. ' . number_format($total) . '<br> ' . 
           'Cashback Rp. : ' . number_format($cashback) . '<br>' . 
           'Pembayaran : '. $pembayaran . '<br>'. 
           'Potongan : Rp. ' . number_format($potongan) . '<br><hr>' . 
           'Total Pembayaran : Rp. ' . number_format($totalpembayaran) . '<br>';
        

});


Route::get('/siswa', function () {
    $datasiswa = ['Agus','Tenki','Muhduk','Saprudin'];
   return view('tampil', compact('datasiswa'));
});


//routing dengan controller
Route::get('/post', [PostController::class, 'menampilkan_post']);

//routeing dengan model



Route::get('/barang',[PostController::class, 'menampilkan_barang']);
   
    //visi(kata yang dicari)
    // $barangs = barang::where('nama_barang','LIKE','%visi%')->get();
    // $barangs = barang::where('id',2)->get();
    // $barangs = barang::all();
    // return view ('tampil_barang' , compact('barangs'));

    //crud
Route::resource('siswa', SiswasController::class);
Route::resource('/ppdb', PpdbsController::class);
Route::resource('/pengguna', PenggunaController::class);
Route::resource('/telephone', TelephonesController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
