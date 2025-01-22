<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_customer','gender','contact'];
    public $timestamp = true;

    public function order()
    {
        return $this->hasMany(Order::class , 'id_customer');
    }
}
