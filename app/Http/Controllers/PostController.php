<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PostController extends Controller {

    public function home () {
        return view('pages.home');
    }
    public function deposerannonce () {
        return view('pages.deposerannonce');
    }

    public function sauverproduit(Request $request) {
    }

    public function consulterannonce () {
        // Laravel eloquinte
        $produits = Product::orderBy('product_name', 'desc')->paginate(10);


        // $produits = DB::table('products') 

        //                 // -> orderBy('product_name', 'asc')    /// On tri par le nom -> de façon croissante.
        //                 ->inRandomOrder()    // Mettre au hasard l'ordre
        //                 -> paginate(1)  ;
        //                 // ->get();


        return view('pages.consulterannonce')->with('produits',$produits);
    }
    public function apropos () {
        return view('pages.apropos');
    }
    public function contacter () {
        return view('pages.contact');
    }

    public function publication($id) {

        // $produits = DB::table('products') -> where('id',$id) -> first();
        $produits = Product::find($id);
        return view('pages.publication')->with('produit', $produits);
    }

}