<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class FrontController extends Controller
{
   public function index()
   {
       $produk = produk::all();
       return view('welcome', compact('produk'));
   }
   public function show($id)
   {
       $produk = produk::FindOrFail($id);
       return view('front.show', compact('produk'));
   }
   
   public function show2()
   {
       $produk = produk::all();
       return view('front.show', compact('produk'));
   }

}
