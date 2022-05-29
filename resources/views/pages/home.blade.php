@extends('layouts.app')

@section('titre')

        Sponski - Accueil
    
@endsection
@include('layouts.navbar')

@section('contenu')

        <div class="acceuil">
                <div class="container">
                        <div class="zone-bleu-container-home">
                                <div class="zone-text">
                                        <h1>Mise en relation entre particuliers<br>et entreprises</h1>
                                        <p> <span class="zone-text-orange-paragraphe">SPONSKI</span> vous permet d’être en relation avec les marques et annonceurs. Vous pouvez <br>déposer des annonces ou consulter les annonces de nos annonceurs</p>
                                </div>
                                <div class="zone-video">
                                        <video src="/images/video.mp4" class="video-d-entree" autoplay loop></video>
                                </div>
                        </div> 
                        <div class="zone-white-container-home-1">
                                <h2>Les étapes pour se faire&nbsp;<span style="font-weight:700">sponsoriser</span></h2>
                                <div class="container-les-etapes-a-suivre">
                                        <div class="etapes">
                                                <i class="fa-solid fa-1"></i>
                                                <h4>Un projet ?</h4>
                                                <p>A la recherche d'un sponsors pour financer votre projet.<br>Sponski est là pour vous !</p>

                                        </div>
                                        <div class="fleche1">
                                              ->  
                                        </div>
                                        <div class="etapes">
                                                <i class="fa-solid fa-2"></i>
                                                <h4>Déposer</h4>
                                                <p>A la recherche d'un sponsors pour financer votre projet.<br>Sponski est là pour vous !</p>
                                        </div>
                                        <div class="fleche2">
                                              ->  
                                        </div>
                                        <div class="etapes">
                                                <i class="fa-solid fa-3"></i>
                                                <h4>Mise en relation</h4>
                                                <p>A la recherche d'un sponsors pour financer votre projet.<br>Sponski est là pour vous !</p>
                                        </div>
                                        <div class="fleche3">
                                              ->  
                                        </div>
                                        <div class="etapes">
                                                <i class="fa-solid fa-4"></i>
                                                <h4>Financement</h4>
                                                <p>A la recherche d'un sponsors pour financer votre projet.<br>Sponski est là pour vous !</p>
                                        </div>
                                </div>
                        </div> 
                        <div class="zone-orange-bleu-container-home">
                                <div class="zone-orange-home">
                                        <h3 class="vous-etes-sponsor">Vous êtes un <span>sponsor</span> ?</h3>
                                        <p>Votre entreprise souhaite améliorer son imageou tout simplement la faire connaître,
                                                acquérir de nouveaux clients et bénéficier d’avantages fiscaux ? <br>
                                                Devenir sponsor peut lui permettre d’améliorer
                                                sa communication grâce à des projets ciblés
                                                qui répondent à vos axes de sponsoring.
                                                <br><br>
                                                Découvrez ici tout ce qu’il faut savoir pour trouver un projet
                                                à sponsoriser qui correspondent à vos attentes. </p>
                                        <button class="trouver-une-annonce btn btn_bleu"><a href="{{URL::to('/annonce')}}">Trouver une annonce</a></button>
                                </div>
                                <div class="zone-bleu-home">
                                        <h3 class="vous-cherchez-un-sponsor">Vous cherchez un <span>sponsor</span> ?</h3>
                                        <p>Vous êtes une entreprise/association ou particulier et 
                                                vous souhaitez une aide financière pour votre projet ? 
                                                <br>
                                                Être sponsorisé peut vous apporter le soutien financier ou
                                                technique <br> pour mener à bien votre projet.
                                                <br><br>
                                                Découvrez ici tout ce qu’il faut savoir pour trouver un sponsor.
                                        </p>
                                        <button class="chercher-une-annonce btn btn_orange"><a href="{{URL::to('/deposer-annonce')}}">Déposer une annonce</a></button>
                                </div>
                        </div>

                        <div class="zone-white-container-home-2">
                                {{-- <div class="container-confiance">
                                        <h2>Ils nous ont fait confiance</h2>
                                        <div class="liste-confiance">
                                                <img src="/images/Puma-logo.png" class="photo-Puma">
                                        </div>
                                </div>  --}}
                        </div> 

                        <div class="zone-bleu-container-home-2">
                                
                        </div>
                        
                </div>
        </div>
    
@endsection


