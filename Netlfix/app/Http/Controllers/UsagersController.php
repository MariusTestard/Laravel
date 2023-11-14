<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usager;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class UsagersController extends Controller
{
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
