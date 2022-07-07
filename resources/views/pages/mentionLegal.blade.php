@extends('layouts.app')

@section('titre')

        Sponski - Mention Légale
    
@endsection
@include('layouts.navbar-Noir')

@section('contenu')

        <div class="container-conditionsVentes">
                <div class="texteConditionsVentes">
                        <p class="text-conditionsVentes">MENTIONS LÉGALES</p>
                        <p class="text-conditionsVentes-envigueur">En vigueur au 18/05/2022</p>
                </div>
                <a href="{{URL::to('/dashboard')}}" class="bouton-retour-connexion"><button><i class="fa-solid fa-circle-chevron-left"></i>Retour</button></a>

                <div class="container-conditionsVentes-textes">
                        <p class="paragraphe-article"><span style="font-weight: 900; color:#174AFC; font-size:24px">MERCI</span> de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserve les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet sont :</p>
                        <p class="paragraphe-cordonnees">RESPONSABLE ÉDITORIAL</p>
                        <p class="paragraphe-cordonnees">SPONSKI</p>
                        <p class="paragraphe-cordonnees">63 rue de l’Etre </p>
                        <p class="paragraphe-cordonnees">65200 Paville – Hautes Pyrénées</p>
                        <p class="paragraphe-cordonnees">Hébergement</p>

                        <h3 class="titre-article">Conditions d’utilisation : </h3>
                                <p class="paragraphe-cordonnees">Ce site est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…</p>
                                <p class="paragraphe-cordonnees">L’éditeur met en œuvre tous les moyens dont il dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations et signaler toutes modifications du site qu’il jugerait utile. L’éditeur n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>

                        <h3 class="titre-article">Liens hypertextes :</h3>
                                <p class="paragraphe-article">Le site internet peut offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. L’éditeur ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet. L’éditeur ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Il ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.</p>

                        <h3 class="titre-article">Services fournis :</h3>
                                <p class="paragraphe-article">L'éditeur s’efforce de fournir sur le site des informations aussi précises que possible. Les renseignements figurant sur le site Sponski.fr ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, toutes les informations indiquées sur le site sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.</p>
     
                        <h3 class="titre-article">Crédits photos :</h3>
                                <p class="paragraphe-finArticle">Adobe Stock / Pexel / Fotolia / Pixabay et Sponski.fr</p>
                </div>

        </div>

@endsection