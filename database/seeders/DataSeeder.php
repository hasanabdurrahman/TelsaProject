<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Agen Telur Ayam Alyssa',
                'kategori' => 'agen',
                'jenis' => 'telur_ayam',
                'latitude' => '-6.6381576',
                'longitude' => '106.814072',
            ],
            
        ];

        // Insert the data into the 'tb_distributors' table
        DB::table('tb_datas')->insert($data);
    }
}

