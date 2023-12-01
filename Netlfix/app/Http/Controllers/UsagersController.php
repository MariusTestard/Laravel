<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usager;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Hash;

class UsagersController extends Controller
{

    // STORE UPDATE DESTROY

    public function index()
    {
        $usagers = Usager::orderBy('nomUsager')->get();
        return View('netflix.usagers', compact('usagers'));
    }

    //À MODIFIER
    public function create()
    {
        return View('Netflix.createUsager');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    
    public function store(Request $request)
    {
        try {
            $usager = new Usager($request->all());
            $usager->password = Hash::make($usager->password);
            $usager->save();
            return redirect()->route('netflix.usager')->with('messages', "Ajout de: " . $usager->nomUsager . " réussi!");
        }

        catch (\Throwable $e){
            Log::debug($e);
            return redirect()->route('netflix.usager')->withErrors(["L'ajout d'un utilisateur n'a pas fonctionné!"]);
        }
        return redirect()->route('netflix.usager');
    }
    
    public function edit(Usager $usager)
    {
        return View('netflix.modifyUsager', compact('usager'));
    }

    public function update(Request $request, Usager $usager)
    {
        try {
            $usager->prenom = $request->prenom;
            $usager->nom = $request->nom;
            $usager->nomUsager = $request->nomUsager;
            $usager->email = $request->email;

            $usager->save();
            return redirect()->route('netflix.usager')->with('messages', "Modification de: " . $usager->nomUsager . " réussi!");
        }

        catch (\Throwable $e){
            Log::debug($e);
            return redirect()->route('netflix.usager')->withErrors(["La modification de l'utilisateur n'a pas fonctionné!"]);
        }
        return redirect()->route('netflix.usager');
    }

    public function destroy($id)
    {
        try {
            $usager = Usager::findOrFail($id);
            $usager->delete();
            return redirect()->route('netflix.usager')->with('messages', "Supression de: " . $usager->nomUsager . " réussi!");
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('netflix.usager')->withErrors(["La supression d'un utilisateur n'a pas fonctionné!"]);
        }
            return redirect()->route('netflix.usager');
    }

    /**
     * Show login form
     */
    public function showLoginForm()
    {
        return View('netflix.login');
    }

    /**
     * Validate login data
     */
    public function login(Request $request)
    {
        $reussi = Auth::attempt(['email' =>$request->email, 'password' => $request->password]);
        
        if($reussi){
            return redirect()->route('netflix.index')->with('message', "Connexion réussie");
        }
        else{
            return redirect()->route('login')->withErrors(['Informations invalides']);
        }
    }

    /**
     * Logout 
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message', "Déconnexion réussie");
    }
}
