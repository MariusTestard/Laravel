<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;

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
    public function show(string $id)
    {
        //
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
