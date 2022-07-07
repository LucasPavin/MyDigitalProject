@extends('layouts.app')

@section('titre')

        Sponski - Consulter annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')
    <div class="container-consulter-annonce">
        <div class="text-image-annonce">
            <p class="text-annonce">Trouver une annonce</p>
        </div>
        <div class="container-noir-filter">
            <div class="container-recherche">
                <form action="{{ route("product.recherche") }}" class="barre-recherche">
                    <input type="text" name="recherche" placeholder="Rechercher une annonce.." class="g-navSearch" id="searchReplay" />
                    <button type="submit" class="button_recherhe"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
    
            {{-- {!!Form::open(['action' => 'ProductController@filtrer', 'method' => 'GET', 'class'=>'form-horizontal'])!!} --}}
            <div class="container-flitre-recherche" style="display: flex; justify-content: space-around">
                <select name="localisation" id="localisation" class="form-control" data-dependent="state">
                    <option value="">Localisation</option>
                    {{-- @foreach ($localisations as $localisation)
                        <option> {{ $localisation }}</option>
                    @endforeach --}}
                </select> 
                <select name="categorie" id="categorie" class="form-control" data-dependent="state">
                    <option value="">Catégorie</option>
    
                </select> 
                <select name="prix" id="prix" class="form-control" data-dependent="state">
                    <option value="">Prix</option>
                </select>
                {{ Form::submit('Filtrer', ['class' => 'btn btn_noir'])}}
               
            </div> 
        </div>
        
        <livewire:flash/>
       

        <div class="annonce-success-alerte">
            @if(Session::has('status'))
                <div class="alert alert-succes">
                    {{Session::get('status')}}
                </div>    
            @endif
        </div>

        <div class="trier-alerte">
            <select name="trier" id="categorie" class="trier-par" data-dependent="state">
                <option value="">Trier par : </option>
            </select> 
            <div class="btn btn_orange">Être alerté par mail &nbsp; <i class="fa-solid fa-bell"></i></div>
        </div>

        <div class="annonce">
        @foreach ($produits as $produit)
            
            <livewire:product :produit="$produit"/>
                    
        @endforeach
        </div>
                <div class="container-links" style="display: flex; flex-direction: row;">
                    {{ $produits->appends(['sort' => 'votes'])->links()}}
                </div>

        </div>
    
@endsection