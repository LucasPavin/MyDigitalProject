@extends('layouts.app')

@section('titre')

        Sponski - Nos Tarifs
    
@endsection
@section('contenu')

        <div class="container-general-nos-offres">
                <h2 class="titre-de-la-page-tarif" style="text-align: center">NOS TARIFS</h2>
                <div class="container-offres">

                        <div class="premier-container-gratuit">
                                <h2 class="nom-offre">GRATUIT</h2>
                                <p class="prix-offre">0€</p>
                                <ul class="details-offre">
                                        <li>Lorem, ipsum dolor </li>
                                        <li>Lorem, ipsum dolor </li>
                                        <li>Lorem, ipsum dolor</li>
                                </ul>
                        </div>
                        <div class="deuxieme-container-deluxe">
                                <h2 class="nom-offre">DELUXE</h2>
                                <p class="prix-offre">39€</p>
                                <ul class="details-offre">
                                        <li>Lorem, ipsum dolor </li>
                                        <li>Lorem, ipsum dolor sit amet consectetur</li>
                                        <li>Lorem, ipsum dolor sit amet consectetur</li>
                                </ul>
                        </div>
                        <div class="troisieme-container-prenium">
                                <h2 class="nom-offre">PRENIUM</h2>
                                <p class="prix-offre">20€</p>
                                <ul class="details-offre">
                                        <li>Lorem, ipsum dolor </li>
                                        <li>Lorem, ipsum dolor sit amet consectetur</li>
                                        <li>Lorem, ipsum dolor sit amet consectetur</li>
                                </ul>
                        </div>   
                </div>
        </div>

@endsection