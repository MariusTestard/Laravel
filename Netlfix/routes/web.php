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

// LIER DES ACTEURS À DES FILMS -----------------------------------------------
Route::get('/films/add',
    [NetflixFilmsController::class, 'createAdd'])->name('filmsAdd.create');

Route::post('/filmsAdd',
    [NetflixFilmsController::class, 'storeAdd'])->name('filmsAdd.store');
// LIER DES ACTEURS À DES FILMS -----------------------------------------------

Route::get(
    '/films/{film}',
    [NetflixFilmsController::class, 'show'])->name('film.show');
    
Route::get(
    '/personnes/{personne}',
    [NetflixPersonnesController::class, 'show'])->name('personne.zoom');

Route::get(
    'films/modify/{film}',
    [NetflixFilmsController::class, 'edit'])->name('netflix.edit');

    Route::patch(
        'films/modify/{film}',
        [NetflixFilmsController::class, 'update'])->name('netflix.update');

Route::get(
    'personnes/modify/{personne}',
    [NetflixPersonnesController::class, 'edit'])->name('personne.edit');

    Route::patch(
        'personnes/modify/{personne}',
        [NetflixPersonnesController::class, 'update'])->name('personne.update');

Route::delete('/films/delete/{id}',
    [NetflixFilmsController::class, 'destroy'])->name('films.destroy');

Route::delete('/personnes/delete/{id}',
    [NetflixPersonnesController::class, 'destroy'])->name('personnes.destroy');