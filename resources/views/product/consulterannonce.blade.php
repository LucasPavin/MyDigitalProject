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

        {{-- {!!Form::open(['action' => 'ProductController@filtrer', 'method' => 'GET', 'class'=>'form-horizontal'])!!} --}}
        <div class="container-flitre-recherche" style="display: flex; justify-content: space-around">
            <select name="localisation" id="localisation" class="form-control" data-dependent="state">
                <option value="">Localisation</option>
                {{-- @foreach ($localisations as $localisation)
                    <option> {{ $localisation }}</option>
                @endforeach --}}
            </select> 
            <select name="categorie" id="categorie" class="form-control" data-dependent="state">
                <option value="">Catégorie</option>

            </select> 
            <select name="prix" id="prix" class="form-control" data-dependent="state">
                <option value="">Prix</option>
            </select>
           
        </div> 
        {{ Form::submit('Rechercher', ['class' => 'btn btn_noir'])}}  

        @if(Session::has('status'))
            <div class="alert alert-succes">
                {{Session::get('status')}}
            </div>    
        @endif
        <div class="annonce">
        @foreach ($produits as $produit)
            
                <i class="fa-solid fa-quote-left"></i>
                <div class="pl-list">
                    <h4>{{$produit->product_name}}</h4>
                    <img src="{{$produit->images}}" alt="">
                    <p>{{ $produit->localisation}}</p>
                    <p>{{ $produit->product_prix}}</p>
                    <h1><a href="/annonce/{{$produit->id}}" class="btn btn_bleu" >Voir l'annonce</a></h1>
                    <div class="mb-1 text-muted">{{$produit->created_at->format('d/m/y')}}</div>
                </div>
            
        @endforeach
    </div>
            <div class="container-links">
                {{ $produits->links()}}
            </div>

    </div>
    
@endsection