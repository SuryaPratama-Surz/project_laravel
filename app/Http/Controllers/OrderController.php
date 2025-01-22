<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customers;
use  App\Models\Products;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $order = Order::all();
       return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customers::all();
        $products = Products::all();
        return view('order.create', compact('customer','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new order;

        //kiri harus sama dengan field di database, kanan dari name di form


        $order->id_product        = $request->id_product;
        $order->quantity          = $request->quantity;
        $order->order_date        = $request->order_date;
        $order->id_customer       = $request->id_customer;

        $order->save();

        return redirect('order')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::FindOrFail($id);
        $customer = Customers::all();
        $products = Products::all();
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::FindOrFail($id);
        $customer = Customers::all();
        $products = Products::all();
        return view('order.edit', compact('order','customer','products'));
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
        $order = order::FindOrFail($id);

        $order->id_product        = $request->id_product;
        $order->quantity          = $request->quantity;
        $order->order_date        = $request->order_date;
        $order->id_customer       = $request->id_customer;
       
        $order->save();

        return redirect()->route('order.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Order::FindOrFail($id);
        $customer->delete();
        return redirect('order')->with('success', 'Data Berhasil Dihapus!');
    }
}
