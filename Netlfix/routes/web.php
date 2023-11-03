<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixFilmsController;
use App\Http\Controllers\NetflixPersonnesController;
use App\Http\Controllers\PersonnesCreateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 1 CONTROLLER PAR TABLE

// ROUTE LARAVEL ACCUEIL
Route::get('/laravel', function () {
    return view('welcome');
});


// ROUTE FILMS
Route::get(
    '/',
    [NetflixFilmsController::class, 'index'])->name('netflix.index');

    
    Route::get(
        '/personne',
        [NetflixPersonnesController::class, 'index'])->name('netflix.personne');
        
Route::get('/personnes/create',
    [NetflixPersonnesController::class, 'create'])->name('personnes.create');   

    Route::post('/personnesCreate',
        [NetflixPersonnesController::class, 'store'])->name('personnes.store');
        
Route::get('/films/create',
[NetflixFilmsController::class, 'create'])->name('films.create');   

Route::post('/filmsCreate',
    [NetflixFilmsController::class, 'store'])->name('films.store');

Route::get(
    '/films/{film}',

    [NetflixFilmsController::class, 'show'])->name('film.show');
    
Route::get(
    '/personnes/{personne}',
    [NetflixPersonnesController::class, 'show'])->name('personne.zoom');