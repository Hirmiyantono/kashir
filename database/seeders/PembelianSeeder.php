<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembelian;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembelian::insert([
            'id_pembelian' => "PBL000001",
            'id_supplier_pembelianfk' => "SP00002",
            'id_stok_pembelianfk' => "STK00001",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pembelian::insert([
            'id_pembelian' => "PBL000002",
            'id_supplier_pembelianfk' => "SP00003",
            'id_stok_pembelianfk' => "STK00002",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pembelian::insert([
            'id_pembelian' => "PBL000003",
            'id_supplier_pembelianfk' => "SP00002",
            'id_stok_pembelianfk' => "STK00003",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pembelian::insert([
            'id_pembelian' => "PBL000004",
            'id_supplier_pembelianfk' => "SP00001",
            'id_stok_pembelianfk' => "STK00004",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pembelian::insert([
            'id_pembelian' => "PBL000005",
            'id_supplier_pembelianfk' => "SP00005",
            'id_stok_pembelianfk' => "STK00005",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
