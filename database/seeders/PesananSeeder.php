<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pesanan;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesanan::insert([
            'id_pesanan' => "PSN000001",
            'id_stok_pesananfk' => "STK00001",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pesanan::insert([
            'id_pesanan' => "PSN000002",
            'id_stok_pesananfk' => "STK00002",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pesanan::insert([
            'id_pesanan' => "PSN000003",
            'id_stok_pesananfk' => "STK00003",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pesanan::insert([
            'id_pesanan' => "PSN000004",
            'id_stok_pesananfk' => "STK00004",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pesanan::insert([
            'id_pesanan' => "PSN000005",
            'id_stok_pesananfk' => "STK00005",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
