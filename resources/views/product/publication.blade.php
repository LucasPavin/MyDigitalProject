@extends('layouts.app')

@section('titre')

        Sponski - Annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')
 
  
        <h2 style="text-align: center">{{$produit->product_name}}</h2>
        <img src="{{$produit->images}}" style="width: 40%; display:flex; justify-content:center; " alt="image">
        <p>{{$produit->product_prix}}€</p>
        <p>{{$produit->localisation}}</p>
        <p>{{$produit->categorie}}</p>
        <p>{{$produit->description}}</p>
        <form action="#" method="POST">
            <button type="submit" class="btn btn_bleu">Ajouter au panier</button>
        </form>
    <hr>
        <h4>{{$produit->created_at->format('d/m/y')}}</h4>
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