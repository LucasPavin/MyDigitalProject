<?php

namespace App\Http\Controllers;

class PostController extends Controller {
    public function home () {
        return view('pages.home');
    }
    public function deposerannonce () {
        return view('product.deposerannonce');
    }
    public function nostarifs(){
        return view('pages.nosTarifs');
    }    
    public function paiement(){
    
        $amount = $_GET['amount'];
        return view('pages.tarifsPaiement', compact('amount'));
    }
    public function apropos () {
        return view('pages.apropos');
    }
    public function conditionsGeneralesVente(){
        return view('pages.conditionsVentes');
    }
    public function mentions(){
        return view('pages.mentionLegal');
    }
    public function politiqueConfidentialite(){
        return view('pages.politiqueConfidentialite');
    }
    // public function contacter () {
    //     return view('pages.contact');
    // }
    public function favoris() {
        return view('pages.favoris');
    }
}