<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $table = "detail_penjualan";

    protected $fillable = [
        'penjualanID', 'produkID', 'JumlahProduk', 'Subtotal', 'Tanggal'
    ];

    public function penjualan(){
        return $this->belongsTo(Penjualan::class, 'penjualanID');
    }

    public function produk(){
        return $this->belongsTo(Produk::class, 'produkID');
    }
}
