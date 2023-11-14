<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;


class Usagers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'id' => 1,
                'nomUsager' => 'admin',
                'nom' => 'admin',
                'prenom' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ],
            [
                'id' => 2,
                'nomUsager' => 'Uällu',
                'nom' => 'Testard',
                'prenom' => 'Marius',
                'email' => 'marius.testard.01@edu.cegeptr.qc.ca',
                'email_verified_at' => NULL,
                'password' => Hash::make('1234'),
                'role' => 'normal',
            ],
            [
                'id' => 3,
                'nomUsager' => 'xSlayer456x',
                'nom' => "L'heureux",
                'prenom' => 'Jacques',
                'email' => 'jaques.lheureux.01@edu.cegeptr.qc.ca',
                'email_verified_at' => NULL,
                'password' => Hash::make('1234'),
                'role' => 'enfant',
            ],
        ]);
    }
}
