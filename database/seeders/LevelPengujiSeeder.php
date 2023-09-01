<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class LevelPengujiSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('level_pengujis')->insert([
            ['level_penguji' => 'Penguji 1',],
            ['level_penguji' => 'Penguji 2',],
            ['level_penguji' => 'Penguji 3',],

        ]);
    }
}