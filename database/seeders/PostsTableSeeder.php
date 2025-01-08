<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data        
        $posts = [
        ['title'=>'Tips Cepat Pintar','content'=>'Belajar'],
        ['title'=>'Haruskah Menunda Belajar?','content'=>'Gak'],
        ['title'=>'Makanan Terenak','content'=>'Tahu Gejrot'],
        ['title'=>'Game Terbaik','content'=>'Epep'],
        ['title'=>'Membangun Visi Misi Kesuksesan','content'=>'Sholat']];
        
        
        //mengirim data ke db
        DB::table('posts')->insert($posts);

    }
}

