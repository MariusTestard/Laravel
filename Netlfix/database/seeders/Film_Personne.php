<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;


class Film_Personne extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_personne')->insert([
            [
                'id' => 1,
                'film_id' => 5,
                'personne_id' => 26,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 2,
                'film_id' => 2,
                'personne_id' => 3,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 3,
                'film_id' => 7,
                'personne_id' => 6,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 4,
                'film_id' => 7,
                'personne_id' => 2,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 5,
                'film_id' => 3,
                'personne_id' => 4,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 6,
                'film_id' => 9,
                'personne_id' => 8,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 7,
                'film_id' => 3,
                'personne_id' => 1,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 8,
                'film_id' => 2,
                'personne_id' => 2,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 9,
                'film_id' => 3,
                'personne_id' => 5,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 10,
                'film_id' => 5,
                'personne_id' => 25,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 11,
                'film_id' => 3,
                'personne_id' => 8,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 12,
                'film_id' => 1,
                'personne_id' => 13,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 13,
                'film_id' => 1,
                'personne_id' => 14,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 14,
                'film_id' => 4,
                'personne_id' => 22,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 15,
                'film_id' => 4,
                'personne_id' => 23,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 16,
                'film_id' => 7,
                'personne_id' => 30,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 17,
                'film_id' => 7,
                'personne_id' => 32,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 18,
                'film_id' => 8,
                'personne_id' => 10,
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 19,
                'film_id' => 8,
                'personne_id' => 1,
                'created_at' => '2018-01-11 10:16:32',
            ]
        ]);
    }
}
