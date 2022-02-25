@extends('layouts.app')

@section('titre')

        Sponski - Consulter annonce
    
@endsection

@section('contenu')

    <h1 style="text-align: center;">Consulter page</h1>
    @if(Session::has('status'))
        <div class="alert alert-succes">
            {{Session::get('status')}}
        </div>    
    @endif
    @foreach ($produits as $produit)
        <div class="well">
            <h1 ><a href="/publication/{{$produit->id}}" style="height : 50px; width : 50px">{{$produit->product_name}}</a></h1>
        </div>
    @endforeach
    
    {{ $produits->links()}}
    
@endsection