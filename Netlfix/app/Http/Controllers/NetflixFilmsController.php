<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Log;

class NetflixFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // GET tous les producteurs et réalisateurs  $personnes = Personne->get();
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
        return View('Netflix.createFilm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($acteur);
        // Log::debug($acteur);
        try {
            $film = new Film($request->all());
            $film->save();
        }

        catch (\Throwable $e){
            Log::debug($e);
        }
        return redirect()->route('netflix.index');
    }

    /**
     * Display the specified resource.
     */
    
    // Envoyé en paramètre tous les producteurs et réalisateurs
    public function show(Film $film, Personne $personnes)
    {
        return View('netflix.show', compact('film', 'personnes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return View('netflix.modifyFilm', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        try {
            $film->titre = $request->titre;
            $film->resume = $request->resume;
            $film->duree = $request->duree;
            $film->annee = $request->annee;
            $film->lienFilm = $request->lienFilm;
            $film->pochette = $request->pochette;
            $film->type = $request->type;
            $film->brand = $request->brand;
            $film->cote = $request->cote;
            $film->rating = $request->rating;
            $film->bannerLien = $request->bannerLien;
            $film->save();
        }

        catch (\Throwable $e){
            Log::debug($e);
        }
        return redirect()->route('netflix.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
