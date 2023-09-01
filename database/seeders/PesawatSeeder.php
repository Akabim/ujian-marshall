<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesawatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pesawats')->insert([
        [
            'tipe_pesawat' => 'Fixed_Wing',
            'merk_pesawat' => 'Boeing',
            'nama_pesawat' => 'Boeing 737',
        ],
        [
            'tipe_pesawat' => 'Fixed_Wing',
            'merk_pesawat' => 'Airbus',
            'nama_pesawat' => 'Airbus A380',
        ],
        [
            'tipe_pesawat' => 'Fixed_Wing',
            'merk_pesawat' => 'Cessna',
            'nama_pesawat' => 'Cessna 172',
        ],
        [
            'tipe_pesawat' => 'Fixed_Wing',
            'merk_pesawat' => 'Embraer',
            'nama_pesawat' => 'Embraer E190 ',
        ],

        ]);
    }
}
