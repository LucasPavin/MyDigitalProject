@extends('layouts.app')

@section('titre')

Sponski - Nos Tarifs

@endsection

@include('layouts.navbar-noir')

@section('contenu')

<div class="container-general-nos-offres">
        <h1 class="titre-de-la-page-tarif" style="text-align: center">Choisissez votre offre Sponski</h1>
        <h2 class="sous-titre-tarif">Profitez de ces 3 offres pour trouver votre sponsors de rêve </h2>
        <div class="container-offres">
                
                <div class="card premier-container-gratuit">
                        <h3 class="nom-offre">Novice</h3>
                        <ul class="details-offre icon-check">
                                <li>Création de votre profil.</li>
                                <li>Publication sur la plateforme.</li>
                                <li>Accès à la messagerie</li>
                                <li>1 photo descriptive</li>
                        </ul>
                        <div class="grow">
                                <div class="tarif">
                                        <p><span>0 €</span> / à vie</p>
                                        <p>Pas d'argent, pas de problème</p>
                                </div>
                                <div class="btn-start">
                                        <a href="{{URL::to('/register')}}">Commencer</a>
                                </div>                        
                        </div>
                </div>
                <div class="card deuxieme-container-deluxe">
                        <h3 class="nom-offre">Pro</h3>
                        <ul class="details-offre icon-check">
                                <li>Création de votre profil.</li>
                                <li>Publication sur la plateforme.</li>
                                <li>Accès à la messagerie</li>
                                <li>5 photos descriptives</li>
                                <li>Aides de nos conseillers</li>
                                <li>Optimisation de votre contenu</li>
                                <li>Mise en avant sur nos réseaux</li>
                                <li>Annonce prioritaire</li>
                        </ul>
                        <div class="grow">
                                <div class="tarif">
                                        <p><span>20 €</span> / à vie</p>
                                        <p>Laissez vous emporter par la facilité</p>
                                </div>
                                <div class="btn-start">
                                        <a href="{{ route('paiement', ['amount' => 20]) }}">Commencer</a>
                                </div>
                        </div>
                </div>
                <div class="card troisieme-container-prenium">
                        <h3 class="nom-offre">Amateur</h3>
                        <ul class="details-offre icon-check">
                                <li>Création de votre profil.</li>
                                <li>Publication sur la plateforme.</li>
                                <li>Accès à la messagerie</li>
                                <li>3 photos descriptives</li>
                                <li>Mise en avant sur nos réseaux</li>
                                <li>Optimisation de votre contenu</li>
                        </ul>
                        <div class="grow">
                                <div class="tarif">
                                        <p><span>10 €</span> / à vie</p>
                                        <p>Simple mais très efficace</p>
                                </div>
                                <div class="btn-start">
                                        <a href="{{ route('paiement', ['amount' => 10]) }}">Commencer</a>
                                </div>
                        </div>
                </div>   
        </div>
</div>

@endsection