<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\FilmPersonne;
use App\Models\Personne;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use File;
use DB;

class NetflixFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // GET tous les producteurs et réalisateurs  $personnes = Personne->get();
        // FILMS NORMAUX
        $filmsHorror = Film::where('type', '=', 'Horror')->get();
        $filmsThriller = Film::where('type', '=', 'Thriller')->get();
        $filmsMystery = Film::where('type', '=', 'Mystery')->get();
        $filmsMostPop = Film::where('cote', '>=', 7.5)->get();
        $filmsLeastPop = Film::where('cote', '<=', 2.5)->get();

        // FILMS ENFANTS
        $filmsHorrorEnfant = Film::where('type', '=', 'Horror') 
                                 ->where(Film::raw('SUBSTR(rating, 1, 2)'), '<=', '14')->get();
        $filmsThrillerEnfant = Film::where('type', '=', 'Thriller') 
                                   ->where(Film::raw('SUBSTR(rating, 1, 2)'), '<=', '14')->get();
        $filmsMysteryEnfant = Film::where('type', '=', 'Mystery')
                                  ->where(Film::raw('SUBSTR(rating, 1, 2)'), '<=', '14')->get();
        $filmsMostPopEnfant = Film::where('cote', '>=', 7.5) 
                                  ->where(Film::raw('SUBSTR(rating, 1, 2)'), '<=', '14')->get();
        $filmsLeastPopEnfant = Film::where('cote', '<=', 2.5) 
                                   ->where(Film::raw('SUBSTR(rating, 1, 2)'), '<=', '14')->get();
        return View('Netflix.index', compact('filmsHorror', 'filmsThriller', 'filmsMystery', 'filmsMostPop', 'filmsLeastPop',
                                            'filmsHorrorEnfant', 'filmsThrillerEnfant', 'filmsMysteryEnfant', 'filmsMostPopEnfant', 'filmsLeastPopEnfant'));
    }

    public function indexRemove()
    {
        $acteurs = Personne::where('rolePrincipal', '=', 'Acteur')->get();
        $films = Film::all();
        return(View('netflix.filmRemove', compact('acteurs', 'films')));
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

    
    public function destroyRemove(Request $request)
    {
        try {
             $film = Film::findOrFail($request->film_id->id);
             $acteur = Personne::findOrFail($request->personne_id->id);
             Log::debug($film);
            Log::debug($acteur);
            // $acteur->filmsDedans()->detach($idFilm); 
            // $film->acteurs()->detach($idActeur);
  

                $test=DB::select('select ' .$film.$acteur.' from film_personne');
                Log::debug($test);
                $test->delete();
            return redirect()->route('netflix.index')->withErrors(["Nous avons retiré l'acteur" . $acteurs->nom . " du film " . $films->titre . "!"]);
        } catch (\Throwable $e) {
            return redirect()->route('netflix.index')->withErrors(["Vous n'êtes pas parvenu à supprimer un acteur d'un film"]);
        }
        return View('Netflix.filmRemove', compact('acteur', 'film'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $film = new Film($request->all());

            $uploadedFile = $request->file('pochette');
            $nomFichierUnique = str_replace(' ', '_', $film->titre) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try{
                $request->pochette->move(public_path('img/films'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $film->pochette = "/img/films/" . $nomFichierUnique;

            $uploadedFile = $request->file('bannerLien');
            $nomFichierUnique = str_replace(' ', '_', $film->titre) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try{
                $request->bannerLien->move(public_path('img/films'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $film->bannerLien = "/img/films/" . $nomFichierUnique;

            $film->save();
            return redirect()->route('netflix.index')->with('messages', "Ajout du film " . $film->nom . " réussi!");
        }
        catch (\Throwable $e){
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors(["L'ajout d'un film n'a pas fonctionné!"]);
        }
        return redirect()->route('netflix.index');
    }

    public function storeAdd(Request $request)
    {
        try {
            $film = new FilmPersonne($request->all());
            $film->save();
            return redirect()->route('netflix.index')->with('messages', "Ajout de: " . $request->nom . " pour le film " . $film->nom . " réussi!");
        }
        catch (\Throwable $e){
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors(["L'ajout d'un réalisateur à un film n'a pas fonctionné!"]);
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
            
            $film->type = $request->type;
            $film->brand = $request->brand;
            $film->cote = $request->cote;
            $film->rating = $request->rating;
            
            $film->producteur_id = $request->producteur_id;
            $film->realisateur_id = $request->realisateur_id;


            $uploadedFile = $request->file('pochette');
            $nomFichierUnique = str_replace(' ', '_', $film->titre) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try{
                $request->pochette->move(public_path('img/films'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $film->pochette = "/img/films/" . $nomFichierUnique;

            $uploadedFile = $request->file('bannerLien');
            $nomFichierUnique = str_replace(' ', '_', $film->titre) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try{
                $request->bannerLien->move(public_path('img/films'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $film->bannerLien = "/img/films/" . $nomFichierUnique;


            
            $film->save();
            return redirect()->route('netflix.index')->with('messages', "Modification de: " . $film->nom . " réussi!");
        }

        catch (\Throwable $e){
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors(["La mise à jour d'un film n'a pas fonctionné!"]);
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
            $pochetteDelete = $film->pochette;
            $bannerDelete = $film->bannerLien;
            if(File::exists(public_path($pochetteDelete)) && File::exists(public_path($bannerDelete))){
            try{
                File::delete(public_path($pochetteDelete));
                File::delete(public_path($bannerDelete));
            }
            catch(\Throwable $e){
                Log::debug($e);
                return redirect()->route('netflix.index')->withErrors(["La supression des images dans le dossier n'a pas fonctionné!"]);
            }
        }else{
            return redirect()->route('netflix.index')->withErrors(["Vous tentez de supprimer une image qui n'existe pas dans le dossier"]);
        }
            $film->delete();
            return redirect()->route('netflix.index')->with('messages', "Supression de: " . $film->nom . " réussi!");
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('netflix.index')->withErrors(["La supression d'un film n'a pas fonctionné!"]);
        }
            return redirect()->route('netflix.index');
    }
}
