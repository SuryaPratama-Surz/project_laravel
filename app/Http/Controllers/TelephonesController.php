<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telephone;
use App\Models\Pengguna;

class TelephonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       
    public function index()
    {
        $telephone = Telephone::all();
        return view('telephone.index', compact('telephone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = Pengguna::all();
        return view('telephone.create', compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telephone = new Telephone;

        //kiri harus sama dengan field di database, kanan dari name di form


        $telephone->nomor             = $request->nomor;
        $telephone->id_pengguna       = $request->id_pengguna;

        $telephone->save();

        return redirect('telephone')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telephone = Telephone::FindOrFail($id);
        return view('telephone.show', compact('telephone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telephone = Telephone::FindOrFail($id);
        $pengguna = Pengguna::all();
        return view('telephone.edit', compact('telephone', 'pengguna'));
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
        $telephone = Telephone::FindOrFail($id);
       

        $telephone ->nomor               = $request->nomor;
        $telephone ->id_pengguna        = $request->id_pengguna;

        $telephone->save();

        return redirect()->route('telephone.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telephone = Telephone::FindOrFail($id);
        $telephone->delete();
        return redirect()->route('telephone.index')->with('success', 'Data Berhasil DiHapus!');
    }
}
