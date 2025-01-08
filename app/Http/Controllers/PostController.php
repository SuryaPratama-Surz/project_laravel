<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\barang;

class PostController extends Controller
{
   public function menampilkan_post(){

    $post = Post::all();
    return view('tampil_post' , compact('post'));
      
   }  
   
   public function menampilkan_barang(){

    $barangs = barang::all();
    return view ('tampil_barang' , compact('barangs'));
      
   } 
}
