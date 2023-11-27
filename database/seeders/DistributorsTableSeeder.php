<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistributorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Telur Bogor',
                'alamat' => 'Cimanggu Pabuaran Jalan Akasia 2, Jl. Cimanggu Barata Jl. Cimanggu Pabuaran, Kota Bogor, Jawa Barat',
                'distrik' => 'Cimanggu',
                'telp' => '081295206633',
                'latitude' => '-6.5709388',
                'longitude' => '106.7073267',
                'image' => 'profiledistributor1',
                'deskripsi' => 'Menjual telur ayam dan telur bebek',
            ],
            [
                'nama' => 'Telur Bogor IMSA Poetra',
                'alamat' => 'Jl. Raya Dramaga Komplek HE Suradi No.KM 07, RT.03/RW.02, Margajaya, Kec. Bogor Barat., Kota Bogor, Jawa Barat 16116',
                'distrik' => 'Bogor Barat',
                'telp' => '081211705918',
                'latitude' => '-6.5719453',
                'longitude' => '106.7435357',
                'image' => 'profiledistributor2',
                'deskripsi' => 'Menjual telur ayam dan telur bebek',
            ],
            [
                'nama' => 'Telur Bogor',
                'alamat' => 'Jalan Lingkar Dramaga Lingkar, Kecamatan Dramaga, Kabupaten Bogor, Jawa Barat 16680',
                'distrik' => 'Dramaga',
                'telp' => '081517028196',
                'latitude' => '-6.5781145',
                'longitude' => '106.7350732',
                'image' => 'profiledistributor3',
                'deskripsi' => 'Menjual telur ayam dan telur bebek',
            ],
            [
                'nama' => 'Agen Telur Prawira 88',
                'alamat' => 'Jl. Kp. Laladon Kadoya No.08, RT.1/RW.5, Parakan, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610',
                'distrik' => 'Ciomas',
                'telp' => '081212130550',
                'latitude' => '-6.6226879',
                'longitude' => '106.7619689',
                'image' => 'profiledistributor4',
                'deskripsi' => 'Menjual telur ayam dan telur bebek',
            ],
            
        ];

        // Insert the data into the 'tb_distributors' table
        DB::table('tb_distributors')->insert($data);
    }
}

