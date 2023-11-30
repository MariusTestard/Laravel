<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixFilmsController;
use App\Http\Controllers\NetflixPersonnesController;
use App\Http\Controllers\PersonnesCreateController;
use App\Http\Controllers\UsagersController;

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
    [NetflixFilmsController::class, 'index'])->name('netflix.index')->middleware('auth');
    
    Route::get(
        '/personne',
        [NetflixPersonnesController::class, 'index'])->name('netflix.personne')->middleware('auth');

Route::get(
    '/usagers',
    [UsagersController::class, 'index'])->name('netflix.usager');
        
Route::get('/personnes/create',
    [NetflixPersonnesController::class, 'create'])->name('personnes.create')->middleware('CheckRole:admin');   

    Route::post('/personnesCreate',
        [NetflixPersonnesController::class, 'store'])->name('personnes.store')->middleware('CheckRole:admin');

Route::get('/usagers/create',
    [UsagersController::class, 'create'])->name('usagers.create')->middleware('CheckRole:admin');   

    Route::post('/usagersCreate',
        [UsagersController::class, 'store'])->name('usagers.store')->middleware('CheckRole:admin');

        Route::get(
            'usagers/modify/{usager}',
            [UsagersController::class, 'edit'])->name('usagers.edit');
        
            Route::patch(
                'usagers/modify/{usager}',
                [UsagersController::class, 'update'])->name('usagers.update');

                Route::delete('/usagers/delete/{id}',
                    [UsagersController::class, 'destroy'])->name('usagers.destroy')->middleware('CheckRole:admin');

Route::delete('/personnes/delete/{id}',
    [NetflixPersonnesController::class, 'destroy'])->name('personnes.destroy')->middleware('CheckRole:admin');
        
Route::get('/films/create',
[NetflixFilmsController::class, 'create'])->name('films.create')->middleware('CheckRole:admin');   

Route::post('/filmsCreate',
    [NetflixFilmsController::class, 'store'])->name('films.store')->middleware('CheckRole:admin');

// LIER DES ACTEURS À DES FILMS -----------------------------------------------
Route::get('/films/add',
    [NetflixFilmsController::class, 'createAdd'])->name('filmsAdd.create')->middleware('CheckRole:admin');

Route::post('/filmsAdd',
    [NetflixFilmsController::class, 'storeAdd'])->name('filmsAdd.store')->middleware('CheckRole:admin');
// LIER DES ACTEURS À DES FILMS -----------------------------------------------

// RETIRER DES ACTEURS À DES FILMS -----------------------------------------------
Route::get(
    '/filmsRemove',
    [NetflixFilmsController::class, 'indexRemove'])->name('netflix.indexRemove')->middleware('auth');

Route::delete('/films/remove',
    [NetflixFilmsController::class, 'destroyRemove'])->name('filmsRemove.destroy')->middleware('CheckRole:admin');
// RETIRER DES ACTEURS À DES FILMS -----------------------------------------------

Route::get(
    '/films/{film}',
    [NetflixFilmsController::class, 'show'])->name('film.show')->middleware('auth');
    
Route::get(
    '/personnes/{personne}',
    [NetflixPersonnesController::class, 'show'])->name('personne.zoom')->middleware('auth');

Route::get(
    'films/modify/{film}',
    [NetflixFilmsController::class, 'edit'])->name('netflix.edit')->middleware('CheckRole:admin');

    Route::patch(
        'films/modify/{film}',
        [NetflixFilmsController::class, 'update'])->name('netflix.update')->middleware('CheckRole:admin');

Route::get(
    'personnes/modify/{personne}',
    [NetflixPersonnesController::class, 'edit'])->name('personne.edit')->middleware('CheckRole:admin');

    Route::patch(
        'personnes/modify/{personne}',
        [NetflixPersonnesController::class, 'update'])->name('personne.update')->middleware('CheckRole:admin');

Route::delete('/films/delete/{id}',
    [NetflixFilmsController::class, 'destroy'])->name('films.destroy')->middleware('CheckRole:admin');

Route::delete('/personnes/delete/{id}',
    [NetflixPersonnesController::class, 'destroy'])->name('personnes.destroy')->middleware('CheckRole:admin');

/* LOGIN ROUTES*/

Route::get('/login',
    [UsagersController::class, 'showLoginForm'])->name('login');

    Route::post('/login',
        [UsagersController::class, 'login'])->name('login.login');

    Route::post('/logout',
        [UsagersController::class, 'logout'])->name('logout')->middleware('CheckRole:admin, normal, enfant');