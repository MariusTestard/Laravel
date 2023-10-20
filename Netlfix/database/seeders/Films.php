<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class Films extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'id' => 1,
                'titre' => 'LE RÈGNE ANIMAL',
                'resume' => 'description',
                'duree' => 128,
                'annee' => '2023',
                'realisateur' => '1',
                'producteur' => '1',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 2,
                'titre' => 'KILLERS OF THE FLOWER MOON',
                'resume' => 'description',
                'duree' => 206,
                'annee' => '2023',
                'realisateur' => '2',
                'producteur' => '2',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 3,
                'titre' => 'THE CREATOR',
                'resume' => 'description',
                'duree' => 133,
                'annee' => '2023',
                'realisateur' => '3',
                'producteur' => '3',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 4,
                'titre' => 'Forrest Gump',
                'resume' => 'description',
                'duree' => 140,
                'annee' => '2015',
                'realisateur' => '4',
                'producteur' => '4',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 5,
                'titre' => 'La Liste de Schindler',
                'resume' => 'description',
                'duree' => 195,
                'annee' => '2019',
                'realisateur' => '5',
                'producteur' => '5',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 6,
                'titre' => 'La Ligne verte',
                'resume' => 'description',
                'duree' => 189,
                'annee' => '1999',
                'realisateur' => '6',
                'producteur' => '6',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 7,
                'titre' => '12 hommes en colère',
                'resume' => 'description',
                'duree' => 95,
                'annee' => '2007',
                'realisateur' => '7',
                'producteur' => '7',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 8,
                'titre' => 'Le Parrain',
                'resume' => 'description',
                'duree' => 175,
                'annee' => '2022',
                'realisateur' => '8',
                'producteur' => '8',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 9,
                'titre' => 'Les Evadés',
                'resume' => 'description',
                'duree' => 142,
                'annee' => '1995',
                'realisateur' => '9',
                'producteur' => '9',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
            [
                'id' => 10,
                'titre' => 'Interstellar',
                'resume' => 'description',
                'duree' => 169,
                'annee' => '2014',
                'realisateur' => '10',
                'producteur' => '10',
                'lienFilm' => 'Lien',
                'pochette' => 'Lien',
                'created_at' => '2018-01-11 10:16:32',
            ],
        ]);
    }
}
