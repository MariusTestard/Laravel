<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\FilmPersonne;
use App\Models\Personne;
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
        $realisateurs = Personne::where('rolePrincipal', '=', 'Réalisateur')->get();
        $producteurs = Personne::where('rolePrincipal', '=', 'Producteur')->get();
        return View('Netflix.createFilm', compact('realisateurs', 'producteurs'));
    }

    public function createAdd()
    {
        $acteurs = Personne::where('rolePrincipal', '=', 'Acteur')->get();
        $films = Film::all();
        return View('Netflix.filmAdd', compact('acteurs', 'films'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $film = new Film($request->all());
            $film->save();
        }
        catch (\Throwable $e){
            Log::debug($e);
          
        }
        return redirect()->route('netflix.index');
    }

    public function storeAdd(Request $request)
    {
        try {
            $film = new FilmPersonne($request->all());
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
            $film->producteur_id = $request->producteur_id;
            $film->realisateur_id = $request->realisateur_id;
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
    public function destroy($id)
    {
        try {
            $film = Film::findOrFail($id);
            $film->acteurs()->detach();

            $film->delete();
            return redirect()->route('netflix.index')->with('message', "Supression de " . $film->nom . " réussi!");
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors(["La supression n'a pas fonctionné!"]);
        }
            return redirect()->route('netflix.index');
    }
}
