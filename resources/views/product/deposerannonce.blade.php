@extends('layouts.app')

@section('titre')

        Sponski - Déposer Annonce
    
@endsection

@section('contenu')

@guest   {{--SI la personne n'est pas authentifié elle aura ça--}}
    <div class="azertyuiop" style="height: 90vh">
        <span style="display: flex; justify-content:center; ">Vous n'êtes ps connecté</span> 
    </div>   
@endguest {{--Fin de la personne n'est pas authentifié elle aura ça--}}

@auth {{-- Début de la vérification d'auth, donc si personne de connecté on ne verra rien --}}
    
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>    
    @endif
    @if(Session::has('status'))
        <div class="alert alert-succes">
            {{Session::get('status')}}
        </div>    
    @endif

        {!!Form::open(['action' => 'App\Http\Controllers\ProductController@store', 'method' => 'POST', 'class'=>'form-horizontal'])!!}
        {{csrf_field()}}
        <div class="form-group">
            {{Form::label('', 'Titre Annonce')}}
            {{Form::text('product_name', '', ['placehorder'=>'Annonce', 'class'=>'form-control'])}}
        </div> 
        <div class="form-group" style="background-color: red">
            {{Form::label('', 'Product Price')}}
            {{Form::number('product_prix', '', ['placehorder'=>'Product Price', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('', 'Product description')}}
            {{Form::textarea('product_description', '', ['placehorder'=>'Description', 'class'=>'form-control'])}}
        </div>
        <div class="button-submit-annonce">  
            {{Form::submit('AJOUTER', ['class'=>'btn btn-primary'])}} 
            {!!Form::close()!!}
        </div>
        <div class="button-besoin-aide-annonce">
            <button class="btn besoin-d-aide-annonce"><a href="#">BESOIN D'AIDE ?</a></button>
        </div>

@endauth   {{-- FIN de la vérification d'auth--}}
@endsection