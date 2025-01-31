<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Pembeli;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = buku::all();
        $pembeli = pembeli::all();
        return view('transaksi.create', compact('buku','pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // Validasi input
          $request->validate([
            'jumlah' => 'required|integer|min:0',
            'tanggal_transaksi' => 'required',
            'id_pembeli' => 'required',
            'id_buku' => 'required',
        ]);

        $transaksi = new transaksi;

        //kiri harus sama dengan field di database, kanan dari name di form
        $transaksi->jumlah                = $request->jumlah;
        $transaksi->id_pembeli            = $request->id_pembeli;
        $transaksi->tanggal_transaksi     = $request->tanggal_transaksi;
        $transaksi->id_buku               = $request->id_buku;

        //upload image

        $transaksi->save();
        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = transaksi::FindOrFail($id);
        $buku = buku::all();
        $pembeli = pembeli::all();
        return view('transaksi.show', compact('transaksi', 'buku', 'pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $buku = buku::all();
        $pembeli = pembeli::all();
        return view('transaksi.edit', compact('transaksi', 'buku', 'pembeli'));   
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
         // Validasi input
         $request->validate([
            'jumlah' => 'required|integer|min:0',
            'tanggal_transaksi' => 'required',
            'id_pembeli' => 'required',
            'id_buku' => 'required',
        ]);

        $transaksi = transaksi::findOrFail($id);

        //kiri harus sama dengan field di database, kanan dari name di form
        $transaksi->jumlah                = $request->jumlah;
        $transaksi->id_pembeli            = $request->id_pembeli;
        $transaksi->tanggal_transaksi     = $request->tanggal_transaksi;
        $transaksi->id_buku               = $request->id_buku;

        //upload image

        $transaksi->save();

        return redirect('transaksi')->with('success', 'Data Berhasil Ditambahkan!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::FindOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data berhasil dihapus!');
    }
}
