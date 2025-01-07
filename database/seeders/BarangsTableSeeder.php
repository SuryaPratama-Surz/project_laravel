<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Handphone','merk'=>'Nokia','harga'=>'1000000'],
            ['nama_barang'=>'Laptop','merk'=>'Axxio','harga'=>'277000'],
            ['nama_barang'=>'Televisi','merk'=>'Sharp','harga'=>'12000'],
            ['nama_barang'=>'Sepatu','merk'=>'Nike','harga'=>'12000'],
            ['nama_barang'=>'Teflon','merk'=>'Mamamia','harga'=>'150']];

            DB::table('barangs')->insert($barangs);                                   
            
    }
}
