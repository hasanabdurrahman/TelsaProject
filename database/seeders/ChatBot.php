<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChatBot extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'pertanyaan' => 'Halo|hallo|hai|hay|hi|woy|',
                'jawaban' => 'Hai teman, apa kabarnya nih?',
            ],
            [
                'id' => '2',
                'pertanyaan' => 'Telsa adalah|Apa itu Telsa?|Telsa',
                'jawaban' => 'Telsa merupakan web distribusi telur yang membantu peternak',
            ],
            [
                'id' => '3',
                'pertanyaan' => 'Apa tujuan telsa dibuat?|Tujuan Pembuatan Telsa?',
                'jawaban' => 'TELSA dibuat untuk tujuan membantu ketahanan pangan di daerah sekitar yang pada bidang pendistribusian telur agar pendistribusian telur lebih terstruktur dan tidak mencegah lonjakan kenaikan harga yang tidak normal karena pendistribusian yang tidak merata kepada masyarakat',
            ],
            [
                'id' => '4',
                'pertanyaan' => 'Sampai jumpa|sampai jumpa lagi|sampai ketemu lagi',
                'jawaban' => 'Baiklah, sampai jumpa :)',
            ],
            [
                'id' => '5',
                'pertanyaan' => 'Assalamualaikum | assalam | aslm | ass',
                'jawaban' => 'WaAlaikumsalam..',
            ],
            [
                'id' => '6',
                'pertanyaan' => 'Selamat pagi | pagi | ',
                'jawaban' => 'Hai, Selamat Pagi teman..',
            ],
            [
                'id' => '7',
                'pertanyaan' => 'Selamat siang',
                'jawaban' => 'Hai, Selamat siang teman..',
            ],
            [
                'id' => '8',
                'pertanyaan' => 'Baik|sehat|',
                'jawaban' => 'Syurkurlah, semoga sehat selalu ya..',
            ],
            
        ];

        // Insert the data into the 'tb_distributors' table
        DB::table('chatbot')->insert($data);
    }
}
