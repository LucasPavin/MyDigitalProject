@extends('layouts.app')

@section('titre')

Sponski - Paiement

@endsection

@include('layouts.navbar-noir')

@section('contenu')

<div class="container-general-tarifs-paiement">
    <h1 class="titre-de-la-page-tarifs-paiement" style="text-align: center">Paiement</h1>
    <p class="sous-titre-taris-paiement"><a href="{{URL::to('/nos-tarifs')}}">Changer l'offre</a></p>
    <div class="container-offres">
        
        <div class="card">
            <h3 class="nom-offre">{{$amount}}€</h3>
            <form>
                <input id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="Numéro de carte">
                <div>
                    <input type="text" id="formExpiration" class="form-control" placeholder="MM/YY" />
                    <input type="text" placeholder="CVC">
                </div>
            </form>
            <div class="paiement-autre">
                <p>Autres méthodes de paiement </p>
            </div>
            <div class="container-btn">
                <div class="btn"><a href=#><img src="./../../../images/icones/iphone-pay.svg"></a></div>
                <div class="btn"><a href=#><img src="./../../../images/icones/paypal.svg"></a></div>
                <div class="btn"><a href=#><img src="./../../../images/icones/bitcoin.svg"></a></div> 
            </div>
        </div>
        
    </div>
</div>

@endsection