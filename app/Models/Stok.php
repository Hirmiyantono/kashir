<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    public function pembelians()
    {
        return $this->hasMany(Pembelian::class);
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang_stokfk', 'id_barang');
    }
    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }
}
