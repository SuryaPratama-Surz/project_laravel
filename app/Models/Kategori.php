<?php
namespace App\Models;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Kategori extends Model
{

    use HasFactory;
    protected $fillable = ['id','nama_kategori'];
    public $timestamp = true;

    // relasi ke tabel produk
    
        public function produks(){
        return $this->hasMany(Produk::class);
}
}
