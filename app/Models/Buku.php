<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_buku','harga','stok','image','id_penerbit','tahun_terbit','id_genre'];
    public $timestamp = true;

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class , 'id_penerbit');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class , 'id_genre');
    }
}
