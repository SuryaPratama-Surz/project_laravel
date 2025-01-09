<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa;

        //kiri harus sama dengan field di database, kanan dari name di form

        $siswa->nis              = $request->nis;
        $siswa->nama             = $request->nama;
        $siswa->jenis_kelamin    = $request->jenis_kelamin;
        $siswa->kelas            = $request->kelas;

        $siswa->save();

        return redirect('siswa')->with('success', 'Data Siswa Berhasil Ditambahkan!');


    }

    /**
     * Display the specified resource
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::FindOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::FindOrFail($id);
        return view('siswa.edit', compact('siswa'));
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
        $siswa = Siswa::FindOrFail($id);

        $siswa->nis              = $request->nis;
        $siswa->nama             = $request->nama;
        $siswa->jenis_kelamin    = $request->jenis_kelamin;
        $siswa->kelas            = $request->kelas;

        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Data Siswa Berhasil Diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::FindOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data Siswa Berhasil Diupdate!');
    }
}
