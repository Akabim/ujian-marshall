<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CuacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cuacas')->insert([
            [
                'kondisi_cuaca' => 'Pagi',
            ],
            [
                'kondisi_cuaca' => 'Malam',
            ],
    
            ]);
    }
}
