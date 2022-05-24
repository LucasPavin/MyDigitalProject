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

    public function apropos () {
        return view('pages.apropos');
    }
    public function contacter () {
        return view('pages.contact');
    }
 
}