<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['show','index']);
    }


    public function index()
    {
        $produits = Product::orderBy('product_name', 'desc')->paginate(10);

        return view('product.consulterannonce')->with('produits',$produits);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.deposerannonce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['product_name' => 'required',
                                   'product_prix' => 'required',
                                   'product_description' => 'required',
                                  ]);

        //  Ajout des champs dans la BDD 
        //  ELOQUENT PHP

        $produits = new Product();

        $produits->product_name = $request->input('product_name');
        $produits->product_prix = $request->input('product_prix');
        $produits->description = $request->input('product_description');

        $produits->save();

        return redirect('/annonce')->with('status', "L annonce " .$produits->product_name. " a été inséré avec succès ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Product::find($id);

        return view('product.publication')->with('produit', $produit);
        // $produits = Product::find($id);
        // return view('product.publication')->with('produit', $produits);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Product::find($id);
        return view('product.modifier_produit')->with('produit', $produit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit = Product::find($id);

        $produit->product_name = $request->input('product_name');
        $produit->product_prix = $request->input('product_prix');
        $produit->description = $request->input('product_description');

        $produit->update();

        return redirect('/annonce')->with('status', "L'annonce " .$produit->product_name. " a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Product::find($id);
        $produit->delete();
        return redirect('/annonce')->with('status', "L'annonce " .$produit->product_name. " a été supprimé avec succès.");
    }
}
