<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class NetflixFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $filmsHorror = Film::where('type', '=', 'Horror')->get();
        $filmsThriller = Film::where('type', '=', 'Thriller')->get();
        $filmsMystery = Film::where('type', '=', 'Mystery')->get();
        $filmsMostPop = Film::where('cote', '>=', 7.5)->get();
        $filmsLeastPop = Film::where('cote', '<=', 2.5)->get();
        return View('Netflix.index', compact('filmsHorror', 'filmsThriller', 'filmsMystery', 'filmsMostPop', 'filmsLeastPop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return View('netflix.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
