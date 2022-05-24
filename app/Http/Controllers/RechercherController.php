<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RechercherController extends Controller
{
    public function index(Request $request) {

        $localisations = Product::table('products')->select('localisation')->distinct()->get()->pluck('localisation')->sort();
        $categories = Product::table('products')->select('categorie')->distinct()->get()->pluck('categorie')->sort();
        $prixAnnonce = Product::table('products')->select('product_prix')->distinct()->get()->pluck('product_prix')->sort();
        
        if(!isset($localisations)){
            Log::debug('$localisations est null');
        }

        $post = Product::query();

        if($request->filled('localisation')){
            $post->where('localisation', $request->localisation);
        }
        if($request->filled('categorie')){
            $post->where('categorie', $request->categorie);
        }
        if($request->filled('product_prix')){
            $post->where('product_prix', $request->product_prix);
        }
        Log::debug(print_r($localisations, true));
        // return view('product.consulterannonce', [
        //     'localisations' => $localisations,
        //     'categories' => $categories,
        //     'prixAnnonce' => $prixAnnonce,
        //     'posts' => $post->get(),
        // ]);
    }
    public function store(Request $request){
        return $request->all();
        return view('product.consulterannonce');
    } 
}
