<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'stok' => 'required|min:0',
            'id_kategori' => 'required|min:0',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'deskripsi' => 'required|string|max:255',
       ]);




        $produk = new produk;

        //kiri harus sama dengan field di database, kanan dari name di form

        $produk->nama_produk              = $request->nama_produk;
        $produk->harga                    = $request->harga;
        $produk->stok                     = $request->stok;
        $produk->id_kategori              = $request->id_kategori;
       
        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName(); // Menggabungkan angka acak dengan nama file
            $img->move('images/produk', $name); // Memindahkan file ke folder yang dituju
            $produk->gambar = $name; // Menyimpan nama file ke properti cover
        }


        $produk->deskripsi                = $request->deskripsi;
      
      
        $produk->save();

        return redirect('produk')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = produk::FindOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = produk::FindOrFail($id);
        $kategori = Kategori::all();
        return view('produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = produk::FindOrFail($id);

        $produk ->nama_produk             = $request->nama_produk;
        $produk ->harga                   = $request->harga;
        $produk ->stok                    = $request->stok;
        $produk ->id_kategori             = $request->id_kategori;
        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName(); // Menggabungkan angka acak dengan nama file
            $img->move('images/produk', $name); // Memindahkan file ke folder yang dituju
            $produk->gambar = $name; // Menyimpan nama file ke properti cover
        }
        $produk->deskripsi                = $request->deskripsi;
      
        $produk->save();

        return redirect('produk')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produk::destroy($id);
        return redirect('produk')->with('success', 'Data Berhasil Dihapus!');
    }
}
