@extends('layouts.app')

@section('titre')

        Sponski - Consulter annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')
    <div class="container-consulter-annonce">
        
        <div class="container-recherche">
            <form action="{{ route("product.recherche") }}">
                <input type="text" name="q" placeholder="Rechercher une annonce.." class="g-navSearch" id="searchReplay" />
                <button type="submit" class="teddjdjdj"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        
        @if(Session::has('status'))
            <div class="alert alert-succes">
                {{Session::get('status')}}
            </div>    
        @endif
        @foreach ($produits as $produit)
            <div class="well">
                <h4>{{$produit->product_name}}</h4>
                <h1><a href="/annonce/{{$produit->id}}" class="btn btn_bleu" >Voir l'annonce</a></h1>
                <p>{{ $produit->localisation}}</p>
                <p>{{ $produit->product_prix}}</p>
                <div class="mb-1 text-muted">{{$produit->created_at->format('d/m/y')}}</div>
            </div>
        @endforeach
            {{ $produits->links()}}

    </div>
    
@endsection