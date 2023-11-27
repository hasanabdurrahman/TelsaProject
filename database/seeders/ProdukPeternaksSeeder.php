<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukPeternaksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_produk' => 'Telur Ayam Kampung',
                'kategori_produk' => 'Telur Ayam',
                'jenis' => 'Satu Variasi',
                'gambar' => 'image/98-telur-ayam-kampung.jpg',
                'stok' => '55',
                'deskripsi' => 'Telur ayam kampung',
                'harga' => '40000',
                'berat' => '900',
                'terjual' => '68',
            ],
            
        ];

        // Insert the data into the 'tb_distributors' table
        DB::table('tb_produk_peternaks')->insert($data);
    }
}

