<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::insert([
            'id_barang' => "BR00001",
            'nama_barang' => "Shampo Rejoice",
            'harga_barang_beli' => 500,
            'harga_barang_jual' => 1000,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00002",
            'nama_barang' => "Teh Gelas",
            'harga_barang_beli' => 500,
            'harga_barang_jual' => 1000,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00003",
            'nama_barang' => "Coca Cola 150ml",
            'harga_barang_beli' => 2000,
            'harga_barang_jual' => 3000,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00004",
            'nama_barang' => "Sampoerna Mild",
            'harga_barang_beli' => 23000,
            'harga_barang_jual' => 28000,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00005",
            'nama_barang' => "Sampoerna Kretek",
            'harga_barang_beli' => 11000,
            'harga_barang_jual' => 15000,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00006",
            'nama_barang' => "Kecap Sedap",
            'harga_barang_beli' => 1500,
            'harga_barang_jual' => 2000,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00007",
            'nama_barang' => "Kecap Bango",
            'harga_barang_beli' => 2000,
            'harga_barang_jual' => 3000,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00008",
            'nama_barang' => "Rexona Deodoran",
            'harga_barang_beli' => 3000,
            'harga_barang_jual' => 4500,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00009",
            'nama_barang' => "Floridina",
            'harga_barang_beli' => 2500,
            'harga_barang_jual' => 3000,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
        Barang::insert([
            'id_barang' => "BR00010",
            'nama_barang' => "Kopi Kapal Api",
            'harga_barang_beli' => 500,
            'harga_barang_jual' => 1500,
            'tgl_kadaluwarsa_barang' => now()  
        ]);
    }
}
