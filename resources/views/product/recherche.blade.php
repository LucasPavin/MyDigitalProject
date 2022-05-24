@extends('layouts.app')

@section('titre')

        Sponski - Consulter annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')
<div class="container-consulter-annonce">
    
    <div class="container-recherche">
        <form action="{{ route("product.recherche") }}" class="barre-recherche">
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
            <h1 ><a href="/annonce/{{$produit->id}}" style="height : 50px; width : 50px;">{{$produit->product_name}}</a></h1>
        </div>
    @endforeach
        {{ $produits->links()}}

</div>
    
@endsection