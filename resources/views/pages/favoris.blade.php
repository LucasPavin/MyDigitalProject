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
                            <p class="description-text">Description</p>
                            <p class="description-annonce"  max="3">{{$like->description}}</p>
                            <hr>
                            <p class="class-budget">Budget</p>
                            <p class="class-somme-budget">{{$like->product_prix}} €</p>
                            <hr>
                            <div class="details-annonce">
                                <div class="details-creation">
                                    <i class="fa-solid fa-calendar"></i>
                                    <div class="date-creation">{{$like->created_at->format('d/m/y')}}</div>
                                </div>
                                <div class="details-creation">
                                    <i class="fa-solid fa-tag"></i>
                                    <p class="date-creation">{{ $like->categorie}}</p>
                                </div>
                                <div class="details-creation">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p class="date-creation">{{ $like->localisation}}</p>
                                </div>
                            </div>
                            <div class="container-bleu">
                                <div class="info-savoir-plus-like">
                                    <a href="/annonce/{{$like->id}}"><button class="bouton">En savoir plus</button></a>
                                    <button wire:click="addLike">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-1 w-1" fill="{{$like->isLike() ? 'red' : 'white'}}" viewBox="0 0 24 24" stroke="red" style="height: auto; width: 40px">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                                </div>
                            </div>
                       </div>
                
                    </div>
            </div>
        @empty
            <p>Vous n'avez mit aucune annonce en favoris !</p>
        @endforelse()
        </div>       

@endsection