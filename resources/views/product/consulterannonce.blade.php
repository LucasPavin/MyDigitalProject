@extends('layouts.app')

@section('titre')

        Sponski - Consulter annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')
    <div class="container-consulter-annonce">
        
        <div class="container-recherche">
            <form action="{{ route("product.recherche") }}" class="barre-recherche">
                <input type="text" name="q" placeholder="Rechercher une annonce.." class="g-navSearch" id="searchReplay" />
                <button type="submit" class="teddjdjdj"><i class="fa-solid fa-magnifying-glass"></i></button>
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
       

        {{-- @if(Session::has('status'))
            <div class="alert alert-succes">
                {{Session::get('status')}}
            </div>    
        @endif --}}
        <div class="annonce">
        @foreach ($produits as $produit)
            
                <div class="pl-list">
                    <i class="fa-solid fa-quote-left"></i>
                    <h4>{{$produit->description}}</h4>
                    <a href="/annonce/{{$produit->id}}" class="" ><img src="{{$produit->images}}" alt=""></a>
                    <div class="container-details-publication">
                        <p class="localisation">{{ $produit->localisation}}</p>
                        <p class="categorie">{{ $produit->categorie}}</p>
                        <div class="date-creation">{{$produit->created_at->format('d/m/y')}}</div>
                    </div>
                </div>
            
        @endforeach
        </div>
                <div class="container-links">
                    {{ $produits->links()}}
                </div>

        </div>
    
@endsection