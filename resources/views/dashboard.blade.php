@extends('layouts.app')

@section('titre')

        Sponski - Dashboard
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')

   
    <div class="container-dashboard">

        <div class="texte-bienvenu-dashboard">
            <h2>Bonjour {{ Auth::user()->firstname}}</h2>
        </div>

        <div class="parametres-Like-Deconnection">
            <button class="bouton-parametres"><a href="{{'#'}}">
                <div class="icone">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="texte">
                    <p>Paramètres</p>
                </div>
            </a></button>
            <button class="bouton-likes"><a href="{{'/favoris'}}">

                <div class="icone">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="texte">
                    <p>Mes likes</p>
                </div>

            </a></button>
            <button class="bouton-logout"><a href="{{'/logout'}}">
                
                <div class="icone">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div>
                <div class="texte">
                    <p>Se déconnecter</p>
                </div>
            </a></button>
        </div>

        <div class="annonce-delete-alerte">
            @if(Session::has('status'))
                <div class="alert alert-delete">
                    {{Session::get('status')}}
                </div>    
            @endif
        </div>
        <div class="mes-annonces">
            <h3>Mes annonces</h3>
        </div>

        <div class="publication-deposer-user">
            @forelse (auth()->user()->products as $product)

            <div class="pl-list">
                <div class="partie-photo">
                    <a href="/annonce/{{$product->id}}" class="" ><img src="{{$product->images}}" class="photo-consulter-annonce"></a>
                </div>
               <div class="partie-description">
                    <h4>{{$product->product_name}}</h4>
                    <i class="fa-solid fa-quote-left"></i>
                    <div class="container-product-description">
                        <p class="description-text">Description</p>
                        <p class="description-annonce">{{Str::limit($product->description, 110)}}</p>
                    </div>
                    <hr>
                    <p class="class-budget">Budget</p>
                    <p class="class-somme-budget">≈ {{$product->product_prix}} €</p>
                    <hr>
                    <div class="details-annonce">
                        <div class="details-creation">
                            <div class="date-creation"><span><i class="fa-solid fa-calendar"></i></span>{{$product->created_at->format('d/m/y')}}</div>
                        </div>
                        <div class="details-creation">
                            <div class="date-creation"><span><i class="fa-solid fa-tag"></i></span>{{ $product->categorie}}</div>
                        </div>
                        <div class="details-creation">
                            <div class="date-creation"><span><i class="fa-solid fa-location-dot"></i></span>{{ $product->localisation}}</div>
                        </div>
                    </div>
                    <div class="container-bleu">
                        <div class="info-savoir-plus">
                            <a href="/annonce/{{$product->id}}"><button class="bouton savoir-plus">En savoir plus</button></a>
                        </div>
                    </div>
               </div>           
            </div>
            <div class="btn-modif-supp">
                <a href="/annonce/{{$product->id}}/edit" class="btn" >Modifier l'annonce</a>
                {!!Form::open(['action' => ['App\Http\Controllers\ProductController@destroy', $product->id], 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Supprimer mon annonce', ['class' => 'btn btn_noir' ])}}
                {!!Form::close()!!}
            </div>
                

             @empty

                <div class="avertissement">
                    <h3>Vous n'avez pas encore déposer d'annonce.</h3>
                </div>

            @endforelse
        </div>
    </div>

@endsection



{{-- {!!Form::open(['action' => ['App\Http\Controllers\ProductController@destroy', $product->id], 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Supprimer', ['class' => 'btn btn_rouge' ])}}
                        {!!Form::close()!!} --}}