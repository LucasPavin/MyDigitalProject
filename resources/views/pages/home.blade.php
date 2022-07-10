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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="179.355" height="24.777" viewBox="0 0 179.355 24.777"><g transform="translate(-484.496 -7627.84)"><path d="M-1106.1,7680.444c-36.873-18.735-83.329-19.491-115.808-16.827a395.2,395.2,0,0,0-44.522,6.29c-11,2.207-17.737,4.08-17.8,4.1l-.269-.963c.067-.019,6.827-1.9,17.858-4.112a396.152,396.152,0,0,1,44.635-6.308,298.013,298.013,0,0,1,58.1.522,202.373,202.373,0,0,1,29.943,5.65,149.277,149.277,0,0,1,28.32,10.758Z" transform="translate(1769 -33)" fill="#fb5c2d"/><path d="M-1125.594,7681.083l-.225-.975,19.449-4.488-4.846-19.068.969-.246,5.1,20.059-.5.115Z" transform="translate(1769 -28.465)" fill="#fb5c2d"/></g></svg> 
                                        </div>
                                        <div class="etapes">
                                                <i class="fa-solid fa-2"></i>
                                                <h4>Déposer</h4>
                                                <p>A la recherche d'un sponsors pour financer votre projet.<br>Sponski est là pour vous !</p>
                                        </div>
                                        <div class="fleche2" style="margin-top: 60px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="179.357" height="24.409" viewBox="0 0 179.357 24.409"><g transform="translate(-870.561 -7651.643)"><path d="M-1194.574,7680.5q-13.3,0-27.436-1.159a396.152,396.152,0,0,1-44.635-6.308c-11.031-2.213-17.791-4.093-17.858-4.112l.269-.963c.067.019,6.8,1.892,17.8,4.1a395.2,395.2,0,0,0,44.522,6.29c8.219.674,17.339,1.129,26.966,1.129,28.417,0,61.3-3.963,88.842-17.957l.453.892a149.277,149.277,0,0,1-28.32,10.758,202.373,202.373,0,0,1-29.943,5.65A268.669,268.669,0,0,1-1194.574,7680.5Z" transform="translate(2155.064 -5.073)" fill="#fb5c2d"/><path d="M-1110.247,7680.35l-.968-.25,4.843-18.764-19.445-4.419.222-.976,20.449,4.647Z" transform="translate(2155.064 -4.298)" fill="#fb5c2d"/></g></svg>
                                        </div>
                                        <div class="etapes">
                                                <i class="fa-solid fa-3"></i>
                                                <h4>Mise en relation</h4>
                                                <p>A la recherche d'un sponsors pour financer votre projet.<br>Sponski est là pour vous !</p>
                                        </div>
                                        <div class="fleche3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="179.355" height="24.777" viewBox="0 0 179.355 24.777"><g transform="translate(-484.496 -7627.84)"><path d="M-1106.1,7680.444c-36.873-18.735-83.329-19.491-115.808-16.827a395.2,395.2,0,0,0-44.522,6.29c-11,2.207-17.737,4.08-17.8,4.1l-.269-.963c.067-.019,6.827-1.9,17.858-4.112a396.152,396.152,0,0,1,44.635-6.308,298.013,298.013,0,0,1,58.1.522,202.373,202.373,0,0,1,29.943,5.65,149.277,149.277,0,0,1,28.32,10.758Z" transform="translate(1769 -33)" fill="#fb5c2d"/><path d="M-1125.594,7681.083l-.225-.975,19.449-4.488-4.846-19.068.969-.246,5.1,20.059-.5.115Z" transform="translate(1769 -28.465)" fill="#fb5c2d"/></g></svg> 
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
                                        <p>Votre <strong>entreprise</strong> souhaite améliorer son imageou tout simplement la faire connaître,
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
                                        <p>Vous êtes une <strong> entreprise/association </strong> ou <strong> particulier </strong> et 
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
                                <div class="container-confiance">
                                        <h2>Ils nous ont fait confiance</h2>
                                        <div class="liste-confiance">
                                                <img src="/images/Puma-logo.png" class="photo-Puma">
                                                <img src="/images/Puma-logo.png" class="photo-Puma">
                                                <img src="/images/Puma-logo.png" class="photo-Puma">
                                                <img src="/images/Puma-logo.png" class="photo-Puma">
                                                <img src="/images/Puma-logo.png" class="photo-Puma">
                                        </div>
                                </div> 
                        </div> 

                        <div class="chiffres">
                                <div>
                                        <p>800</p>
                                        <p>Accord passés entre
                                                particuliers et entreprises</p>
                                </div>                                
                                <div>
                                        <p>450</p>
                                        <p>Annonce de sponsors sur notre plateforme</p>
                                </div>                               
                                 <div>
                                        <p>600</p>
                                        <p>Annonceurs qui 
                                                attendent vos projets</p>
                                </div>
                        </div>

                        <div class="avis-clients">
                                <div class="titre">
                                        <p><img src="/images/etoile.png" class="etoile"></p>
                                        <h2>Ils nous font confiance</h2>
                                </div>
                                <div class="container-card">
                                        <div class="card">
                                                <h3>Un service de qualité</h3>
                                                <p>Merci à Sponski pour l’aide,
                                                        j’ai trouvé rapidement des sponsors
                                                        de confiance pour financier mon projet…</p>
                                                <h4>Sarah Delaunay</h4>
                                                <h5>Pilote de GT3</h5>
                                        </div>
                                        <div class="card">
                                                <h3>Simple d’utilisation</h3>
                                                <p>Sponski nous à trouver une 
                                                        entreprise qui se rapproche 
                                                        beaucoup des valeurs de
                                                        notre projet...</p>
                                                <h4>Melvin Hamon</h4>
                                                <h5>Graphiste Freelance</h5>
                                        </div>
                                        <div class="card">
                                                <h3>Merci à Sponski </h3>
                                                <p>Grace à vos conseils,
                                                        j'ai trouver un sponsor pour 
                                                        financer mon projet !
                                                        Un grand merci !</p>
                                                <h4>Antoine Faye</h4>
                                                <h5>Concepteur de bateau</h5>
                                        </div>
                                </div>
                        </div>

                        <div class="zone-bleu-container-home-2">
                                <div>
                                        <img src="/images/icones/Groupe1.png" alt="">
                                        <h4>Service de qualité</h4>
                                        <p>L'ensemble de l'équipe de SPONSKI se concentrent
                                                à vous offrir des services de qualités 
                                                permettant de satisfaire nos clients.</p>
                                </div>
                                <div>
                                        <img src="/images/icones/Groupe2.png" alt="">
                                        <h4>Des entreprises partenaires</h4>
                                        <p>De nombreuses entreprises aujourd'hui nous
                                                sont partenaires, afin pouvoir participer
                                                à de multiples projets sportifs.</p>
                                </div>
                                <div>
                                        <img src="/images/icones/Groupe3.png" alt="">
                                        <h4>Sécurité</h4>
                                        <p>Le site de SPONSKI vous garantie une 
                                               sécurité totale sur l'ensemble de vos
                                                connexion, et de vos transactions bancaires.</p>
                                </div>
                                

                        </div>
                        
                </div>
        </div>
    
@endsection


