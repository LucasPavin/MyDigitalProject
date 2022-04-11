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
                                   'product_image' => 'image|nullable|max:1999',
                                  ]);

        //  Ajout des champs dans la BDD  ->>> Possibilité 1  
        //  ELOQUENT PHP

        $produits = new Product();

        $produits->product_name = $request->input('product_name');
        $produits->product_prix = $request->input('product_prix');
        $produits->description = $request->input('product_description');

        $produits->save();

                            /// Possibilité 2

        // $data = array();
        // $data['product_name'] = $request->input('product_name');
        // $data['product_prix'] = $request->input('product_prix');
        // $data['description'] = $request->input('product_description');

        // DB::table('products')-> insert($data);


        //Session::put('status', 'L annonce '.$produits->product_name. ' a été inséré avec succès ');
        return redirect('/deposer-annonce')->with('status', "L annonce " .$produits->product_name. " a été inséré avec succès ");

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
    
    // public function connexion () {
    //     return view('pages-login.connexion');
    // }    
    
    // public function inscription () {
    //     return view('pages-login.inscription');
    // }

    public function publication($id) {

        // $produits = DB::table('products') -> where('id',$id) -> first();
        $produits = Product::find($id);
        return view('pages.publication')->with('produit', $produits);
    }
    public function modifier($id){
        $produit = Product::find($id);
        return view('pages.modifier_produit')->with('produit', $produit);
    }
    public function modifierproduit(Request $request){

        $produit = Product::find($request->input('id'));

        $produit->product_name = $request->input('product_name');
        $produit->product_prix = $request->input('product_prix');
        $produit->description = $request->input('product_description');

        $produit->update();

        return redirect('/consulter-annonce')->with('status', "L'annonce " .$produit->product_name. " a été modifié avec succès.");
    }

    public function supprimer($id){
        $produit = Product::find($id);
        $produit->delete();
        return redirect('/consulter-annonce')->with('status', "L'annonce " .$produit->product_name. " a été supprimé avec succès.");
    }

}