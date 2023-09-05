<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ['nama', 'email', 'telepon'];

    public function produk()
    {
        return $this->hasMany(OrderProduk::class, 'order_id');
    }
}
