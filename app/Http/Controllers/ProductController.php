<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */

    public function __construct()
    {
        // $this->middleware('auth')->except(['show']);
    }


    public function index()
    {
        $produits = Product::orderBy('product_name', 'asc')->paginate(6);

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
                                   'categorie' => 'nullable',
                                   'localisation' => 'required',
                                   'marquesVisees' => 'required',
                                   'product_prix' => 'required',
                                   'product_description' => ['required', 'min:255'],
                                  ]);


        $fichierUpload = Storage::disk('public')->put('photos', $request->photos);
        $url = Storage::url($fichierUpload);


        $produits = new Product();

        $produits->product_name = $request->input('product_name');
        $produits->categorie = $request->input('categorie');
        $produits->localisation = $request->input('localisation');
        $produits->images = asset($url);
        $produits->marquesVisees = $request->input('marquesVisees');
        $produits->product_prix = $request->input('product_prix');
        $produits->description = $request->input('product_description');
        $produits->user_id = Auth::id();

        $produits->save();

        return redirect('/annonce')->with('status', "L'annonce " .$produits->product_name. " a été inséré avec succès ");
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
        $produit->categorie = $request->input('categorie');
        $produit->localisation = $request->input('localisation');
        $produit->images = $request->input('images');
        $produit->marquesVisees = $request->input('marquesVisees');
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
        return redirect('/dashboard')->with('status', "L'annonce " .$produit->product_name. " a été supprimé avec succès.");
    }

    public function recherche(){
        $q = request()->input('q');
        $produits = Product::where('product_name','like',"%$q%")
                    ->orWhere('description','like', "%$q%")
                    ->orWhere('localisation','like', "%$q%")
                    ->paginate(6);
        
        return view('product.recherche')->with('produits', $produits);
    }

    public function filtrer(Request $request) {

        $localisations = Product::table('products')->select('localisation')->distinct()->get()->pluck('localisation');
    //     $categories = Product::table('products')->select('categorie')->distinct()->get()->pluck('categorie');
    //     $prixAnnonce = Product::table('products')->select('product_prix')->distinct()->get()->pluck('product_prix');
        
        dd($localisations);
        
        // $post = Product::query();

        // if($request->filled('localisation')){
        //     $post->where('localisation', $request->localisation);
        // }
        // if($request->filled('categorie')){
        //     $post->where('categorie', $request->categorie);
        // }
        // if($request->filled('product_prix')){
        //     $post->where('product_prix', $request->product_prix);
        // }
        // return view('product.consulterannonce', [
        //     'localisations' => $localisations,
        //     'categories' => $categories,
        //     'prixAnnonce' => $prixAnnonce,
        //     'posts' => $post->get(),
        // ]);
    //  }
    // public function save(Request $request){
    //     return $request->all();
    //     return view('product.consulterannonce');
    } 
}
