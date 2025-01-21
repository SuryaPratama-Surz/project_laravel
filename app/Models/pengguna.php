<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Telephone;

class pengguna extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama'];
    public $timestamp = true;

    // relasi ke tabel telephones
    
    public function telephones(){
        return $this->hasOne(Telephone::class);
    

}
}