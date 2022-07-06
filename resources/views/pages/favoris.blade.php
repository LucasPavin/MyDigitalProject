@extends('layouts.app')

@section('titre')

        Sponski - Favoris
    
@endsection

@include('layouts.navbar-Noir')

@section('contenu')
        <div class="container-annonce-sauvegardees">
                <h2 class="titre-annonce-sauvegardees">Mes annonces sauvegardées</h2>
                <p class="p-annonce-sauvergardees">Si l'annonce n'est plus active sur le site, elle disparaîtra automatiquement de votre sélection</p>
        

        @forelse (auth()->user()->likes as $like)
            <div class="annonce-favoris">
                <div class="pl-list">
                    <div class="partie-photo">
                        <a href="/annonce/{{$like->id}}" class="" ><img src="{{$like->images}}" class="photo-consulter-annonce"></a>
                    </div>
                   <div class="partie-description">
                        <h4>{{$like->product_name}}</h4>
                        <i class="fa-solid fa-quote-left"></i>
                        <div class="container-product-description">
                            <p class="description-text">Description</p>
                            <p class="description-annonce">{{Str::limit($like->description, 110)}}</p>
                        </div>
                        <hr>
                        <p class="class-budget">Budget</p>
                        <p class="class-somme-budget">≈ {{$like->product_prix}} €</p>
                        <hr>
                        <div class="details-annonce">
                            <div class="details-creation">
                                <div class="date-creation"><span><i class="fa-solid fa-calendar"></i></span>{{$like->created_at->format('d/m/y')}}</div>
                            </div>
                            <div class="details-creation">
                                <div class="date-creation"><span><i class="fa-solid fa-tag"></i></span>{{ $like->categorie}}</div>
                            </div>
                            <div class="details-creation">
                                <div class="date-creation"><span><i class="fa-solid fa-location-dot"></i></span>{{ $like->localisation}}</div>
                            </div>
                        </div>
                        <div class="container-bleu">
                            <div class="info-savoir-plus-like">
                                <a href="/annonce/{{$like->id}}"><button class="bouton savoir-plus">En savoir plus</button></a>
                                <div class="container-addLike">
                                    <button wire:click="addLike">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-1 w-1" fill="{{$like->isLike() ? 'white' : '#FB5C2D'}}" viewBox="0 0 24 24" stroke="white" style="height: auto; width: 40px">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                   </div>           
            </div>
        @empty 
            <div class="container-aucune-annonce-favoris" style="height: 40vh;display:flex; align-items:center; justify-content:center">
                <p style="">Vous n'avez mit aucune annonce en favoris !</p>
            </div>
        @endforelse()
        </div>       

@endsection