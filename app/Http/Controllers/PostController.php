<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Controllers\Session;

class PostController extends Controller {

    public function home () {
        return view('pages.home');
    }
    public function deposerannonce () {
        return view('pages.deposerannonce');
    }

    public function sauverproduit(Request $request) {
        $this->validate($request, ['product_name' => 'required',
                                   'product_prix' => 'required',
                                   'product_description' => 'required',
                                  ]);

        /// Ajout des champs dans la BDD  ->>> Possibilité 1 
        //$produits = new Product();

        // $produits->product_name = $request->input('product_name');
        // $produits->product_prix = $request->input('product_prix');
        // $produits->description = $request->input('product_description');

        // $produits->save();

                            /// Possibilité 2

        $data = array();
        $data['product_name'] = $request->input('product_name');
        $data['product_prix'] = $request->input('product_prix');
        $data['description'] = $request->input('product_description');

        DB::table('products')-> insert($data);


        //Session::put('status', 'L annonce '.$produits->product_name. ' a été inséré avec succès ');
        return redirect('/deposer-annonce')->with('status', "L annonce " .$data['product_name']. " a été inséré avec succès ");

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