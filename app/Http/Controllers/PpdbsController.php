<?php

namespace App\Http\Controllers;
use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdb = Ppdb::all();
        return view('ppdb.index', compact('ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppdb = new Ppdb;

        //kiri harus sama dengan field di database, kanan dari name di form

        $ppdb->nama_lengkap              = $request->nama_lengkap;
        $ppdb->jenis_kelamin             = $request->jenis_kelamin;
        $ppdb->agama                     = $request->agama;
        $ppdb->alamat                    = $request->alamat;
        $ppdb->telepon                   = $request->telepon;
        $ppdb->asal_sekolah              = $request->asal_sekolah;

        $ppdb->save();

        return redirect('ppdb')->with('success', ' Data Berhasil Terdaftar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb = Ppdb::FindOrFail($id);
        return view('ppdb.show', compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdb = Ppdb::FindOrFail($id);
        return view('ppdb.edit', compact('ppdb'));
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
        $ppdb = Ppdb::FindOrFail($id);

        //kiri harus sama dengan field di database, kanan dari name di form

        $ppdb->nama_lengkap              = $request->nama_lengkap;
        $ppdb->jenis_kelamin             = $request->jenis_kelamin;
        $ppdb->agama                     = $request->agama;
        $ppdb->alamat                    = $request->alamat;
        $ppdb->telepon                   = $request->telepon;
        $ppdb->asal_sekolah              = $request->asal_sekolah;

        $ppdb->save();

        return redirect('ppdb')->with('success', ' Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppdb = Ppdb::FindOrFail($id);
        $ppdb->delete();
        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil DiHapus!');
    }
}
