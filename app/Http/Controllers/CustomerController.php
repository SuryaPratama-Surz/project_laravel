<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customers::all();
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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

        $customer = new Customers;

        //kiri harus sama dengan field di database, kanan dari name di form

        $customer->nama_customer               = $request->nama_customer;
        $customer->gender                      = $request->gender;
        $customer->contact                     = $request->contact;
       

        $customer->save();

        return redirect('customer')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customers::find($id);
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('customer.edit', compact('customer'));
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

        $customer = Customers::find($id);

        //kiri harus sama dengan field di database, kanan dari name di form

        $customer->nama_customer               = $request->nama_customer;
        $customer->gender                      = $request->gender;
        $customer->contact                     = $request->contact;
       

        $customer->save();

        return redirect('customer')->with('success', 'Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customers::FindOrFail($id);
        $customer->delete();
        return redirect('customer')->with('success', 'Data Berhasil Dihapus!');
    }
}
