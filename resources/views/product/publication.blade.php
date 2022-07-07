@extends('layouts.app')

@section('titre')

        Sponski - Annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')
 
    <div class="container-annonce">
       
        <div class="container-annonce-images">
            <img src="{{$produit->images}}" style="width: 40%; display:flex; justify-content:center; " alt="image">
        </div>
        <div class="annonce-description">
            <a href="{{URL::to('/annonce')}}" class="bouton-retour-connexion"><button><i class="fa-solid fa-circle-chevron-left"></i>Retour</button></a>
            <h3>Nom de l'annonce</h3>
            <p>{{$produit->product_name}}</p>
            <hr>
            <h3>Description de l'annonce</h3>
            <p>{{$produit->description}}</p>
            <hr>
            <h3>Envie de marques comme :</h3>
            <p>{{$produit->marquesVisees}}</p>
            <hr>
            <h3 class="class-budget">Budget</h3>
            <p class="class-somme-budget">≈ {{$produit->product_prix}} €</p>
            <hr>
            <div class="details-annonce">
                <div class="details-creation">
                    <div class="date-creation"><span><i class="fa-solid fa-calendar"></i></span>{{$produit->created_at->format('d/m/y')}}</div>
                </div>
                <div class="details-creation">
                    <div class="date-creation"><span><i class="fa-solid fa-tag"></i></span>{{ $produit->categorie}}</div>
                </div>
                <div class="details-creation">
                    <div class="date-creation"><span><i class="fa-solid fa-location-dot"></i></span>{{ $produit->localisation}}</div>
                </div>
            </div>
        
            <div class="partie-button">
                
                <button class="btn btn_bleu"><a href="{{"/contact"}}"><span>Nous contacter&nbsp;</span><i class="fa-solid fa-paper-plane"></i></a></button>
                
                <button class="btn btn_orange" wire:click="addLike">
                    <span>Enregistrer &nbsp;</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-1 w-1" fill="{{$produit->isLike() ? 'white' : '#FB5C2D'}}" viewBox="0 0 24 24" stroke="white" style="height: auto; width: 40px">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
            </div>
        
        </div>

        
    </div>    
    
@endsection