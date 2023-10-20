<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class Personnes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
            [
                'id' => 1,
                'prenom' => 'Al',
                'nom' => 'Pacino',
                'date' => '1940-04-24',
                'photo' => 'https://media.senscritique.com/media/000019202093/150x201/al_pacino.jpg',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 2,
                'prenom' => 'Robert',
                'nom' => 'De Niro',
                'date' => '1943-08-16',
                'photo' => 'https://media.senscritique.com/media/000019159170/150x201/robert_de_niro.png',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 3,
                'prenom' => 'Leonardo',
                'nom' => 'DiCaprio',
                'date' => '1974-11-10',
                'photo' => 'https://media.senscritique.com/media/000019998957/150x201/leonardo_di_caprio.png',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 4,
                'prenom' => 'Kevin',
                'nom' => 'Spacey',
                'date' => '1959-07-25',
                'photo' => 'https://media.senscritique.com/media/000019153111/150x201/kevin_spacey.png',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 5,
                'prenom' => 'Humphrey',
                'nom' => 'Bogart',
                'date' => '1899-12-13',
                'photo' => 'https://media.senscritique.com/media/000017224250/150x201/humphrey_bogart.jpg',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 6,
                'prenom' => 'Toshirō',
                'nom' => 'Mifune',
                'date' => '1920-12-23',
                'photo' => 'https://media.senscritique.com/media/000016835619/150x201/toshiro_mifune.jpg',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 7,
                'prenom' => 'Clint',
                'nom' => 'Eastwood',
                'date' => '1930-05-30',
                'photo' => 'https://media.senscritique.com/media/000019199535/150x201/clint_eastwood.png',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 8,
                'prenom' => 'Morgan',
                'nom' => 'Freeman',
                'date' => '1937-05-31',
                'photo' => 'https://media.senscritique.com/media/000019146978/150x201/morgan_freeman.png',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 9,
                'prenom' => 'Johnny ',
                'nom' => 'Depp',
                'date' => '1963-06-8',
                'photo' => 'https://media.senscritique.com/media/000019209454/150x201/johnny_depp.png',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 10,
                'prenom' => 'Marlon',
                'nom' => 'Brando',
                'date' => '1924-04-30',
                'photo' => 'https://media.senscritique.com/media/000020242962/150x201/marlon_brando.jpg',
                'created_at' => '2018-01-11 10:16:32'
            ],
        ]);
    }
}
