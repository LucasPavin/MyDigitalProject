@extends('layouts.app')

@section('titre')

        Sponski - Annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')

    <br>
    <h1 style="text-align: center;">Détails du produit</h1>
    <br>
        <h2 style="text-align: center">{{$produit->product_name}}</h2>
        <p>{{$produit->product_prix}}€</p>
        <p>{{$produit->localisation}}</p>
        <p>{{$produit->categorie}}</p>
        <p>{{$produit->description}}</p>
        <p>{{$produit->images}}</p>
    <hr>
        <h4>{{$produit->created_at}}</h4>
    <br>
    @auth
    <a href="/annonce/{{$produit->id}}/edit" class="btn btn-default">Modifier</a>
    {{-- <a href="/supprimer/{{$produit->id}}" class="btn btn-danger">Supprimer</a> --}}
    {!!Form::open(['action' => ['App\Http\Controllers\ProductController@destroy', $produit->id], 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('supprimer', ['class' => 'btn btn-danger' ])}}
    {!!Form::close()!!}
    @endauth
@endsection