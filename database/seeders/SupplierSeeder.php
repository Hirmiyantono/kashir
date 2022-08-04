<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::insert([
            'id_supplier' => "SP00001",
            'nama_supplier' => "Amanda Group",
            'alamat_supplier' => "Jl. Baru",
            'kode_pos_supplier' => 168222,
            'kota_supplier' => "Pacitan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Supplier::insert([
            'id_supplier' => "SP00002",
            'nama_supplier' => "Koramil Group",
            'alamat_supplier' => "Jl. Baru",
            'kode_pos_supplier' => 168222,
            'kota_supplier' => "Pacitan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Supplier::insert([
            'id_supplier' => "SP00003",
            'nama_supplier' => "Tri Group",
            'alamat_supplier' => "Jl. Baru",
            'kode_pos_supplier' => 168222,
            'kota_supplier' => "Pacitan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Supplier::insert([
            'id_supplier' => "SP00004",
            'nama_supplier' => "AHHAS Group",
            'alamat_supplier' => "Jl. Baru",
            'kode_pos_supplier' => 168222,
            'kota_supplier' => "Pacitan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Supplier::insert([
            'id_supplier' => "SP00005",
            'nama_supplier' => "Brody Group",
            'alamat_supplier' => "Jl. Baru",
            'kode_pos_supplier' => 168222,
            'kota_supplier' => "Pacitan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
