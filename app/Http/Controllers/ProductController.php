<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            'nama_product' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',

            
        ]);



        $products = new Products;

        // kiri harus sama dengan field di database, kanan dari name di form
        $products->nama_product = $request->nama_product;
        $products->merk = $request->merk;
        $products->price = $request->price;
        $products->stock = $request->stock;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName(); // Menggabungkan angka acak dengan nama file
            $img->move('images/product', $name); // Memindahkan file ke folder yang dituju
            $products->cover = $name; // Menyimpan nama file ke properti cover
        }

        $products->save();

        return redirect('product')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::FindOrFail($id);
        return view('product.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::FindOrFail($id);
        return view('product.edit', compact('products'));
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
            'nama_product' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $products = Products::FindOrFail($id);

        $products->nama_product = $request->nama_product;
        $products->merk = $request->merk;
        $products->price = $request->price;
        $products->stock = $request->stock;


        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName(); // Menggabungkan angka acak dengan nama file
            $img->move('images/product', $name); // Memindahkan file ke folder yang dituju
            $products->cover = $name; // Menyimpan nama file ke properti cover
        }

        $products->save();

        return redirect('product')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::FindOrFail($id);
        $products->delete();
        return redirect('product')->with('success', 'Data Berhasil Dihapus!');
    }
}
