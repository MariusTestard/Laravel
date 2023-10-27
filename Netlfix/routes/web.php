<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixFilmsController;
use App\Http\Controllers\NetflixPersonnesController;

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
        '/films/{film}',
        [NetflixFilmsController::class, 'show'])->name('film.show');

Route::get(
    '/personne',
    [NetflixPersonnesController::class, 'index'])->name('netflix.personne');