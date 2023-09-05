<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduk extends Model
{
    use HasFactory;

    protected $table = 'order_produk';
    protected $fillable = ['order_id', 'produk_id'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function produk()
    {
        return $this->belongsTo(ProdukJasa::class, 'produk_id');
    }
}
