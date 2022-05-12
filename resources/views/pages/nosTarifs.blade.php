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
                                        <li>Création de votre profil.</li>
                                        <li>Ajouter jusqu'à 3 photos.</li>
                                        <li>Publication du projet sur notre plateforme.</li>
                                </ul>
                                <button></button>
                        </div>
                        <div class="deuxieme-container-deluxe">
                                <h2 class="nom-offre">DELUXE</h2>
                                <p class="prix-offre">15€</p>
                                <ul class="details-offre">
                                        <li>Création de votre profil</li>
                                        <li>Ajouter d'image illimité.</li>
                                        <li>Publication du projet sur notre plateforme.</li>
                                        <li>Publication toutes les semaines sur les réseaux sociaux.</li>
                                        <li>Aide à la rédaction de votre contenu/présentation.</li>
                                </ul>
                        </div>
                        <div class="troisieme-container-prenium">
                                <h2 class="nom-offre">PRENIUM</h2>
                                <p class="prix-offre">5€</p>
                                <ul class="details-offre">
                                        <li>Création de votre profil</li>
                                        <li>Ajouter jusqu'à 10 photos.</li>
                                        <li>Publication du projet sur notre plateforme.</li>
                                        <li>Publication tous les mois sur les réseaux.</li>
                                </ul>
                        </div>   
                </div>
        </div>

@endsection