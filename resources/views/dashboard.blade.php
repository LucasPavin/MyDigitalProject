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

        <div class="annonce-delete-alerte">
            @if(Session::has('status'))
                <div class="alert alert-delete">
                    {{Session::get('status')}}
                </div>    
            @endif
        </div>

        <div class="publication-deposer-user">
            @forelse (auth()->user()->products as $product)

                <div class="publication">
                    <a href="/annonce/{{$product->id}}">
                        <img src="{{ $product->images}}" alt="">
                        <h3>{{$product->product_name}}</h3>
                    </a>
                    <div class="btn-modif-supp">
                        <a href="/annonce/{{$product->id}}/edit" class="btn btn_bleu">Modifier</a>
                        {!!Form::open(['action' => ['App\Http\Controllers\ProductController@destroy', $product->id], 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Supprimer', ['class' => 'btn btn_rouge' ])}}
                        {!!Form::close()!!}
                    </div>
                </div>
                

             @empty

                <div class="avertissement">
                    <h3>Vous n'avez pas encore déposer d'annonce.</h3>
                </div>

            @endforelse
        </div>
    </div>

@endsection
