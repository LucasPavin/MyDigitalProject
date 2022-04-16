<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class LoginController extends Controller {

    public function connexion () {
        return view('pages-login.connexion');
    }    
    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // À faire : vérification que l'email et le mot de passe sont corrects.

        return 'Traitement formulaire connexion';
    }
    
    public function inscription () {
        return view('pages-login.inscription');
    }
    public function paiement(){
        return view('pages.paiement');
    }
}