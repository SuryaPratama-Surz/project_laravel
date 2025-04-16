<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_produk');
            $table->string('harga');
            $table->integer('stok');
            $table->unsignedBigInteger('id_kategori');
            $table->string('gambar');
            $table->text('deskripsi');

             //menyambungkan foreign key ke
             $table->foreign('id_kategori')->references('id')->on('Kategoris')->onDelete('cascade');
             $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Produks');
    }
};
