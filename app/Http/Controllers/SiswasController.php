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
     
    public function __construct()
    {
        $this->middleware('auth');
    } 


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

        //validasi

        $request->validate([
            'nis'              => 'required|numeric',
            'nama'             => 'required|string|max:255',
            'jenis_kelamin'    => 'required',
            'kelas'            => 'required',
            'cover'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'nis.required' => 'NIS wajib diisi.',
            'nis.numeric' => 'NIS harus berupa angka.',
            'nama.required' => 'Nama wajib diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
            'kelas.required' => 'Kelas wajib dipilih.',
        ]);
        
        $siswa = new Siswa;

        //kiri harus sama dengan field di database, kanan dari name di form

        $siswa->nis              = $request->nis;
        $siswa->nama             = $request->nama;
        $siswa->jenis_kelamin    = $request->jenis_kelamin;
        $siswa->kelas            = $request->kelas;

       
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName(); // Menggabungkan angka acak dengan nama file
            $img->move('images/siswa', $name); // Memindahkan file ke folder yang dituju
            $siswa->cover = $name; // Menyimpan nama file ke properti cover
        }
        


        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Data Siswa Berhasil Ditambahkan!');

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

        $siswa ->nis              = $request->nis;
        $siswa ->nama             = $request->nama;
        $siswa ->jenis_kelamin    = $request->jenis_kelamin;
        $siswa ->kelas            = $request->kelas;
        


        if ($request->hasFile('cover')) {
            $siswa->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName(); // Menggabungkan angka acak dengan nama file
            $img->move('images/siswa', $name); // Memindahkan file ke folder yang dituju
            $siswa->cover = $name; // Menyimpan nama file ke properti cover
        }

        $siswa->save();

        session()->flash('success', 'Data Siswa Berhasil Diupdate!');

        return redirect()->route('siswa.index');

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
        return redirect()->route('siswa.index')->with('success', 'Data Siswa Berhasil DiHapus!');
    }
}
