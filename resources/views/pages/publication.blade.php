@extends('layouts.app')

@section('titre')

        Sponski - Annonce
    
@endsection

@section('contenu')

    <hr>
    <h1 style="text-align: center;">Détails du produit</h1>
    <br>
    <h2>{{$produit->product_name}}</h2>
    <h2>{{$produit->product_prix}}€</h2>
    <p>{{$produit->description}}</p>
    <hr>
    <h4>{{$produit->created_at}}</h4>
    
    
@endsection