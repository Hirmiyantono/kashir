<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stok;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stok::insert([
            'id_stok' => "STK00001",
            'id_barang_stokfk' => "BR00001",
            'awal_stok' => 10,
            'masuk_stok' => 20,
            'keluar_stok' => 5,
            'akhir_stok' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Stok::insert([
            'id_stok' => "STK00002",
            'id_barang_stokfk' => "BR00004",
            'awal_stok' => 10,
            'masuk_stok' => 20,
            'keluar_stok' => 5,
            'akhir_stok' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Stok::insert([
            'id_stok' => "STK00003",
            'id_barang_stokfk' => "BR00007",
            'awal_stok' => 10,
            'masuk_stok' => 20,
            'keluar_stok' => 5,
            'akhir_stok' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Stok::insert([
            'id_stok' => "STK00004",
            'id_barang_stokfk' => "BR00008",
            'awal_stok' => 10,
            'masuk_stok' => 20,
            'keluar_stok' => 5,
            'akhir_stok' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Stok::insert([
            'id_stok' => "STK00005",
            'id_barang_stokfk' => "BR00005",
            'awal_stok' => 10,
            'masuk_stok' => 20,
            'keluar_stok' => 5,
            'akhir_stok' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
