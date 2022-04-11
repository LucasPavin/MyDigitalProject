<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class LoginController extends Controller {

    public function connexion () {
        return view('pages-login.connexion');
    }    
    
    public function inscription () {
        return view('pages-login.inscription');
    }
    public function paiement(){
        return view('pages.paiement');
    }
}