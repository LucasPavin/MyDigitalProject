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
        <div class="publication-deposer-user">
            @forelse (auth()->user()->products as $product)

                <div class="publication">
                    <a href="/annonce/{{$product->id}}">
                        <img src="{{ $product->images}}" alt="">
                        <h3 style="text-align: center">{{$product->product_name}}</h3>
                    </a>
                </div>
                

             @empty

                <h3>Vous n'avez pas encore déposer d'annonce.</h3>

            @endforelse
        </div>
    </div>

@endsection
