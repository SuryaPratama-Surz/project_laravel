<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
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
            'nama_pembeli' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',

        ]);

        $pembeli = new Pembeli;

        //kiri harus sama dengan field di database, kanan dari name di form

        $pembeli->nama_pembeli             = $request->nama_pembeli;
        $pembeli->jenis_kelamin            = $request->jenis_kelamin;
        $pembeli->telepon                  = $request->telepon;

        $pembeli->save();

        return redirect('pembeli')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::find($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::find($id);
        return view('pembeli.edit', compact('pembeli'));
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

        $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'telepon' => 'required|string|max:255', 
        ]);

        $pembeli = Pembeli::find($id);

        $pembeli ->nama_pembeli            = $request->nama_pembeli;
        $pembeli ->jenis_kelamin           = $request->jenis_kelamin;
        $pembeli ->telepon                 = $request->telepon;        

        $pembeli->save();

        return redirect()->route('pembeli.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pembeli::destroy($id);
        return redirect('pembeli')->with('success', 'Data Berhasil Dihapus!');
    }
}
