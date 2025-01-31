<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use App\Models\Genre;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.create', compact('penerbit','genre'));
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
                'nama_buku' => 'required|string|max:255',
                'harga' => 'required|numeric|min:0',
                'stok' => 'required|integer|min:0',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'id_penerbit' => 'required',
                'id_genre' => 'required',
            ]);
    
            $buku = new buku;
    
            //kiri harus sama dengan field di database, kanan dari name di form
            $buku->nama_buku        = $request->nama_buku;
            $buku->harga            = $request->harga;
            $buku->stok             = $request->stok;
            $buku->image            = $request->image;
            $buku->id_penerbit      = $request->id_penerbit;
            $buku->tahun_terbit     = $request->tahun_terbit;
            $buku->id_genre         = $request->id_genre;
    
            //upload image
            if ($request->hasFile('image')) {
                $img = $request->file('image');
                $name = rand(1000, 9999) . $img->getClientOriginalName(); // Menggabungkan angka acak dengan nama file
                $img->move('images/buku', $name); // Memindahkan file ke folder yang dituju
                $buku->image = $name; // Menyimpan nama file ke properti image
            }
    
            $buku->save();
            return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $buku = Buku::FindOrFail($id);
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.show', compact('buku', 'penerbit', 'genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.edit', compact('buku', 'penerbit', 'genre'));   
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
        // Validasi 
        $request->validate([
            'nama_buku' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'id_penerbit' => 'required',
            'id_genre' => 'required',
            'tahun_terbit' => 'required|date',
        ]);
    
        $buku = Buku::findOrFail($id);

        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->id_genre = $request->id_genre;

        // Upload image jika ada
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName(); // Menggabungkan angka acak dengan nama file
            $img->move('images/buku', $name); // Memindahkan file ke folder yang dituju
            $buku->image = $name; // Menyimpan nama file ke properti image
        }

        $buku->save();

        return redirect('buku')->with('success', 'Data Berhasil Ditambahkan!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $buku = Buku::FindOrFail($id);
            $buku->delete();
            return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }
}
