<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonneRequest;
use Illuminate\Http\Request;
use App\Models\Personne;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use File;

class NetflixPersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnesVieux = Personne::orderBy('date', 'asc')->limit(4)->get();
        $personnesJeune = Personne::orderBy('date', 'desc')->limit(4)->get();
        $personnesActeur = Personne::where('rolePrincipal', '=', 'Acteur')->get();
        $personnesRealisateur = Personne::where('rolePrincipal', '=', 'Réalisateur')->get();
        $personnesProducteur = Personne::where('rolePrincipal', '=', 'Producteur')->get();
        return View('Netflix.personne', compact('personnesVieux', 'personnesJeune', 'personnesActeur', 'personnesRealisateur', 'personnesProducteur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Netflix.createPerson');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    // ActeurRequset en paramètre
    public function store(Request $request)
    {
        // dd($acteur);
        // Log::debug($acteur);
        try {
            $personne = new Personne($request->all());

            $uploadedFile = $request->file('photo');
            $nomFichierUnique = str_replace(' ', '_', $personne->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try{
                $request->photo->move(public_path('img/personnes'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $personne->photo = "/img/personnes/" . $nomFichierUnique;
            $personne->save();
            return redirect()->route('netflix.personne')->with('messages', "Ajout de: " . $personne->nom . " réussi!");
        }

        catch (\Throwable $e){
            Log::debug($e);
            return redirect()->route('netflix.personne')->withErrors(["L'ajout d'une personne n'a pas fonctionné!"]);
        }
        return redirect()->route('netflix.personne');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personne $personne)
    {
        return View('netflix.zoom', compact('personne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personne $personne)
    {
        return View('netflix.modifyPersonne', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personne $personne)
    {
        try {
            $personne->prenom = $request->prenom;
            $personne->nom = $request->nom;
            $personne->date = $request->date;
            //$personne->photo = $request->photo;
            $personne->rolePrincipal = $request->rolePrincipal;
            $personne->wikiLien = $request->wikiLien;


            

            $uploadedFile = $request->file('photo');
            $nomFichierUnique = str_replace(' ', '_', $personne->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();

            try{
                $request->photo->move(public_path('img/personnes'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $personne->photo = "/img/personnes/" . $nomFichierUnique;

            
            $personne->save();
            return redirect()->route('netflix.personne')->with('messages', "Modification de: " . $personne->nom . " réussi!");
        }

        catch (\Throwable $e){
            Log::debug($e);
            return redirect()->route('netflix.personne')->withErrors(["La modification d'une personne n'a pas fonctionné!"]);
        }
        return redirect()->route('netflix.personne');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $personne = Personne::findOrFail($id);
            $photoDelete = $personne->photo;
            if(File::exists(public_path($photoDelete))) {
            try{
                    $personne->films()->detach();
                    File::delete(public_path($photoDelete));
                    $personne->delete();
                    return redirect()->route('netflix.personne')->with('messages', "Supression de: " . $personne->nom . " réussi!");
                }
                catch(\Throwable $e){
                    Log::debug($e);
                    return redirect()->route('netflix.personne')->withErrors(["La supression de l'image dans le dossier n'a pas fonctionné!"]);
                }
            } else {
                return redirect()->route('netflix.personne')->withErrors(["Vous tentez de supprimer une image qui n'existe pas dans le dossier"]);
            }
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('netflix.personne')->withErrors(["La supression d'une personne n'a pas fonctionné!"]);
        }
            return redirect()->route('netflix.personne');
    }
}
