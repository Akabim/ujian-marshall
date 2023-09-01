<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bandara;
use App\Models\Cuaca;
use App\Models\LevelPenguji;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        $this->call([
            LevelPengujiSeeder::class,
            PertanyaanSeeder::class,
            PesawatSeeder::class,
            BandaraSeeder::class,
            CuacaSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
