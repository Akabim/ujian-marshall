<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BandaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bandaras')->insert([
            [
                'tipe_bandara' => 'Juanda',
                'nama_bandara' => 'Bandara Juanda',
                'alamat_bandara' => 'Surabaya',
            ],
            [
                'tipe_bandara' => 'Soekarno Hatta',
                'nama_bandara' => 'Soekarno Hatta',
                'alamat_bandara' => 'Tangerang',
            ],

    
            ]);
    }
}
