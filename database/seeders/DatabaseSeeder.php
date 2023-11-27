<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DistributorsTableSeeder::class);
        $this->call(DataSeeder::class);
        $this->call(ProdukPeternaksSeeder::class);
        $this->call(ChatBot::class);
        
        // You can add more seeders here if needed
    }
}
