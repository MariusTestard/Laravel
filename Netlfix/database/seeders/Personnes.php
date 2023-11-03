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
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Al_Pacino',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 2,
                'prenom' => 'Robert',
                'nom' => 'De Niro',
                'date' => '1943-08-16',
                'photo' => 'https://media.senscritique.com/media/000019159170/150x201/robert_de_niro.png',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Robert_De_Niro',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 3,
                'prenom' => 'Leonardo',
                'nom' => 'DiCaprio',
                'date' => '1974-11-10',
                'photo' => 'https://media.senscritique.com/media/000019998957/150x201/leonardo_di_caprio.png',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Leonardo_DiCaprio',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 4,
                'prenom' => 'Kevin',
                'nom' => 'Spacey',
                'date' => '1959-07-25',
                'photo' => 'https://media.senscritique.com/media/000019153111/150x201/kevin_spacey.png',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Kevin_Spacey',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 5,
                'prenom' => 'Humphrey',
                'nom' => 'Bogart',
                'date' => '1899-12-13',
                'photo' => 'https://media.senscritique.com/media/000017224250/150x201/humphrey_bogart.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Humphrey_Bogart',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 6,
                'prenom' => 'Toshirō',
                'nom' => 'Mifune',
                'date' => '1920-12-23',
                'photo' => 'https://media.senscritique.com/media/000016835619/150x201/toshiro_mifune.jpg',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Toshir%C5%8D_Mifune',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 7,
                'prenom' => 'Clint',
                'nom' => 'Eastwood',
                'date' => '1930-05-30',
                'photo' => 'https://media.senscritique.com/media/000019199535/150x201/clint_eastwood.png',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Clint_Eastwood',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 8,
                'prenom' => 'Morgan',
                'nom' => 'Freeman',
                'date' => '1937-05-31',
                'photo' => 'https://media.senscritique.com/media/000019146978/150x201/morgan_freeman.png',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Morgan_Freeman',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 9,
                'prenom' => 'Johnny ',
                'nom' => 'Depp',
                'date' => '1963-06-8',
                'photo' => 'https://media.senscritique.com/media/000019209454/150x201/johnny_depp.png',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Johnny_Depp',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 10,
                'prenom' => 'Marlon',
                'nom' => 'Brando',
                'date' => '1924-04-30',
                'photo' => 'https://media.senscritique.com/media/000020242962/150x201/marlon_brando.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Marlon_Brando',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 11,
                'prenom' => 'Thomas',
                'nom' => 'Cailley',
                'date' => '1980-04-29',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Thomas_Cailley_2015.jpg',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Thomas_Cailley',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 12,
                'prenom' => 'Pierre',
                'nom' => 'Guyard',
                'date' => '1980-03-18',
                'photo' => 'https://th.bing.com/th/id/R.45a3c7a9d7a04b93fba80e7af22d4a4c?rik=rffvvTZDVes56Q&riu=http%3a%2f%2fmedias.unifrance.org%2fmedias%2f171%2f181%2f177579%2fformat_page%2fpierre-guyard.jpg%3ft%3d1496219691353&ehk=fqPWOPbknwVBbLWb7M55GnmMM%2bskJ72d9Blt3Ylro5k%3d&risl=&pid=ImgRaw&r=0',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Pierre_Guyard',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 13,
                'prenom' => 'Roman',
                'nom' => 'Duris',
                'date' => '1974-03-28',
                'photo' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/15/07/23/15/20/125673.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Romain_Duris',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 14,
                'prenom' => 'Paul',
                'nom' => 'Kircher',
                'date' => '2001-12-30',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Paul_Kircher_Cannes_2023.jpg/260px-Paul_Kircher_Cannes_2023.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Paul_Kircher',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 15,
                'prenom' => 'Martin',
                'nom' => 'Scorsese',
                'date' => '1942-11-17',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Martin_Scorsese_Berlinale_2020.jpg/220px-Martin_Scorsese_Berlinale_2020.jpg',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://en.wikipedia.org/wiki/Martin_Scorsese',
                'created_at' => '2018-01-11 10:16:32'
            ],
            [
                'id' => 16,
                'prenom' => 'Dan',
                'nom' => 'Friedkin',
                'date' => '1965-02-28',
                'photo' => 'https://en.wikipedia.org/wiki/File:Dan_Friedkin.jpg',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://en.wikipedia.org/wiki/Dan_Friedkin',
                'created_at' => '2023-10-31 14:30:00'
            ],
            [
                'id' => 17,
                'prenom' => 'Gareth',
                'nom' => 'Edwards',
                'date' => '1975-06-01',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/7/74/Gareth_Edwards_by_Gage_Skidmore.jpg',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Gareth_Edwards',
                'created_at' => '2023-10-31 15:45:00'
            ],
            [
                'id' => 18,
                'prenom' => 'Arnon',
                'nom' => 'Milchan',
                'date' => '1944-12-06',
                'photo' => 'https://static.hollywoodreporter.com/sites/default/files/2013/12/Arnon_Milchan.jpg',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Arnon_Milchan',
                'created_at' => '2023-10-31 16:30:00'
            ],
            [
                'id' => 19,
                'prenom' => 'John David',
                'nom' => 'Washington',
                'date' => '1984-07-28',
                'photo' => 'https://fr.wikipedia.org/wiki/File:John_David_Washington_by_Gage_Skidmore.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/John_David_Washington',
                'created_at' => '2023-10-31 17:45:00'
            ],
            [
                'id' => 20,
                'prenom' => 'Robert',
                'nom' => 'Zemeckis',
                'date' => '1952-05-14',
                'photo' => 'https://th.bing.com/th/id/R.9a5e4c4e90644fafd09ff3e812f1339a?rik=5SqRvM60ZIx7Vw&riu=http%3a%2f%2ffr.web.img6.acsta.net%2fpictures%2f16%2f11%2f10%2f15%2f18%2f427241.jpg&ehk=Rx1pyqhdM9CuO8PEmGezNi7AeBxZCyUmMpSXrKD7sMY%3d&risl=&pid=ImgRaw&r=0',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Robert_Zemeckis',
                'created_at' => '2023-10-31 19:15:00'
            ],
            [
                'id' => 21,
                'prenom' => 'Steve',
                'nom' => 'Tisch',
                'date' => '1949-02-14',
                'photo' => 'https://th.bing.com/th/id/OIP.lcU2BBbPQYmcsR4VVwPxEAHaJi?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Steve_Tisch',
                'created_at' => '2023-10-31 20:00:00'
            ],
            [
                'id' => 22,
                'prenom' => 'Tom',
                'nom' => 'Hanks',
                'date' => '1956-07-09',
                'photo' => 'https://image.tmdb.org/t/p/original/xndWFsBlClOJFRdhSt4NBwiPq2o.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://en.wikipedia.org/wiki/Tom_Hanks',
                'created_at' => '2023-10-31 21:15:00'
            ],
            [
                'id' => 23,
                'prenom' => 'Robin',
                'nom' => 'Wright',
                'date' => '1966-04-08',
                'photo' => 'https://th.bing.com/th/id/OIP.wIfqe1RInrkd6SAIqP-MkwHaLH?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Robin_Wright',
                'created_at' => '2023-10-31 22:30:00'
            ],
            [
                'id' => 24,
                'prenom' => 'Branko',
                'nom' => 'Lustig',
                'date' => '1932-06-10',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Branko_Lustig_2007.jpg',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Branko_Lustig',
                'created_at' => '2023-10-31 20:00:00'
            ],
            [
                'id' => 25,
                'prenom' => 'Liam',
                'nom' => 'Neeson',
                'date' => '1952-06-07',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Liam_Neeson_-_Berlinale_2020-03-04_(49218340183)_(cropped).jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Liam_Neeson',
                'created_at' => '2023-10-31 20:15:00'
            ],
            [
                'id' => 26,
                'prenom' => 'Ralph',
                'nom' => 'Fiennes',
                'date' => '1962-12-22',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Ralph_Fiennes_by_Gage_Skidmore_3.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Ralph_Fiennes',
                'created_at' => '2023-10-31 20:30:00'
            ],
            [
                'id' => 27,
                'prenom' => 'Frank',
                'nom' => 'Darabont',
                'date' => '1959-01-28',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Frank_Darabont_by_Gage_Skidmore.jpg',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Frank_Darabont',
                'created_at' => '2023-10-31 20:45:00'
            ],
            [
                'id' => 28,
                'prenom' => 'David',
                'nom' => 'Valdes',
                'date' => '1949-08-06',
                'photo' => 'https://fr.wikipedia.org/wiki/File:David_Valdes.jpg',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/David_Valdes',
                'created_at' => '2023-10-31 20:00:00'
            ],
            [
                'id' => 29,
                'prenom' => 'Michael Clarke',
                'nom' => 'Duncan',
                'date' => '1957-12-10',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Michael_Clarke_Duncan_at_DC_in_2009.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Michael_Clarke_Duncan',
                'created_at' => '2023-10-31 20:15:00'
            ],
            [
                'id' => 30,
                'prenom' => 'Henry',
                'nom' => 'Fonda',
                'date' => '1905-05-16',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Henry_Fonda_in_Warlock.jpg/440px-Henry_Fonda_in_Warlock.jpg',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Henry_Fonda',
                'created_at' => '2023-10-31 20:30:00'
            ],
            [
                'id' => 31,
                'prenom' => 'Sidney',
                'nom' => 'Lumet',
                'date' => '1924-06-25',
                'photo' => 'https://i.pinimg.com/originals/4a/77/4a/4a774a72f70d396f86adf492a1d565c7.jpg',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Sidney_Lumet',
                'created_at' => '2023-10-31 20:45:00'
            ],
            [
                'id' => 32,
                'prenom' => 'Lee J.',
                'nom' => 'Cobb',
                'date' => '1911-12-08',
                'photo' => 'https://www.virtual-history.com/movie/photo/pr25/large/lee_j_cobb.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Lee_J._Cobb',
                'created_at' => '2023-10-31 20:00:00'
            ],
            [
                'id' => 33,
                'prenom' => 'Albert S.',
                'nom' => 'Ruddy',
                'date' => '1930-03-28',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTkwNzY5NjQwMF5BMl5BanBnXkFtZTgwNTUzNzMwMzI@._V1_.jpg',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://en.wikipedia.org/wiki/Albert_S._Ruddy',
                'created_at' => '2023-10-31 20:15:00'
            ],
            [
                'id' => 34,
                'prenom' => 'Francis Ford',
                'nom' => 'Coppola',
                'date' => '1939-04-07',
                'photo' => 'https://th.bing.com/th/id/R.d92181fda58ca0be6df2946f617f2dd4?rik=ctFgoTWAJD1bXw&pid=ImgRaw&r=0',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://en.wikipedia.org/wiki/Francis_Ford_Coppola',
                'created_at' => '2023-10-31 20:30:00'
            ],
            [
                'id' => 35,
                'prenom' => 'Niki',
                'nom' => 'Marvin',
                'date' => '1939-04-07',
                'photo' => 'https://th.bing.com/th/id/OIP.bICzlt9162wIvo1CsY1qjAAAAA?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://en.wikipedia.org/wiki/Francis_Ford_Coppola',
                'created_at' => '2023-10-31 20:30:00'
            ],
            // rôle indeterminé
            [
                'id' => 36,
                'prenom' => 'Tim',
                'nom' => 'Robbins',
                'date' => '1958-10-16',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Tim_Robbins_2012.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Tim_Robbins',
                'created_at' => '2023-10-31 20:45:00'
            ],
            // Morgan Freeman acteur des Évadés
            [
                'id' => 37,
                'prenom' => 'Christopher',
                'nom' => 'Nolan',
                'date' => '1970-07-30',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Christopher_Nolan_by_Gage_Skidmore.jpg',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Christopher_Nolan',
                'created_at' => '2023-10-31 20:00:00'
            ],
            [
                'id' => 38,
                'prenom' => 'Lynda',
                'nom' => 'Obst',
                'date' => '1950-04-14',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Lynda_Obst.jpg/220px-Lynda_Obst.jpg',
                'rolePrincipal' => 'Producteur',
                'wikiLien' => 'https://en.wikipedia.org/wiki/Lynda_Obst',
                'created_at' => '2023-10-31 20:15:00'
            ],
            [
                'id' => 39,
                'prenom' => 'Matthew',
                'nom' => 'McConaughey',
                'date' => '1969-11-04',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Matthew_McConaughey,_Goldene_Kamera_2014_(cropped).jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Matthew_McConaughey',
                'created_at' => '2023-10-31 08:30:00'
            ],
            [
                'id' => 40,
                'prenom' => 'Anne',
                'nom' => 'Hathaway',
                'date' => '1982-11-12',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Anne_Hathaway_in_2017.png',
                'rolePrincipal' => 'Actrice',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Anne_Hathaway',
                'created_at' => '2023-10-31 19:45:00'
            ],
            // acteur d'un film qu'on sait pas, mais ancien id 19
            [
                'id' => 41,
                'prenom' => 'Sturgill',
                'nom' => 'Simpson',
                'date' => '1978-06-08',
                'photo' => 'https://fr.wikipedia.org/wiki/File:Sturgill_Simpson_2016.jpg',
                'rolePrincipal' => 'Acteur',
                'wikiLien' => 'https://fr.wikipedia.org/wiki/Sturgill_Simpson',
                'created_at' => '2023-10-31 18:30:00'
            ],
            // réalisateur d'un film qu'on sait pas, mais ancien id 23
            [
                'id' => 42,
                'prenom' => 'Steven',
                'nom' => 'Spielberg',
                'date' => '1946-12-18',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Steven_Spielberg_by_Gage_Skidmore_2.jpg/220px-Steven_Spielberg_by_Gage_Skidmore_2.jpg',
                'rolePrincipal' => 'Réalisateur',
                'wikiLien' => 'https://en.wikipedia.org/wiki/Steven_Spielberg',
                'created_at' => '2023-10-31 23:45:00'
            ],
        ]);
    }
}
