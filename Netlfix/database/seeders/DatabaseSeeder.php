<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // données initiales
        $this->call(Personnes::class);
        $this->call(Films::class);
        $this->call(Film_Personne::class);

        // données de test
        /*
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProduitsTableSeeder::class);
        */
    }
}
