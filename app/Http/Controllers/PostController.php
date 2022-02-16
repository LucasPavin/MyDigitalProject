<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {

    public function home () {
        return view('pages.home');
    }
    public function deposerannonce () {
        return view('pages.deposerannonce');
    }
    public function consulterannonce () {
        return view('pages.consulterannonce');
    }
    public function apropos () {
        return view('pages.apropos');
    }
    public function contacter () {
        return view('pages.contact');
    }

}