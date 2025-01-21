<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pengguna;

class Telephone extends Model
{
    use HasFactory;
    protected $fillable = ['id','nomor','id_pengguna'];
    public $timestamp = true;


    public function pengguna()

    {
        return $this->belongsTo(Pengguna::class , 'id_pengguna');
    }

}
