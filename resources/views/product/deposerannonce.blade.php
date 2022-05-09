@extends('layouts.app')

@section('titre')

        Sponski - Déposer Annonce
    
@endsection

@section('contenu')

@guest   {{--SI la personne n'est pas authentifié elle aura ça--}}
    <span>Vous n'êtes ps connecté</span>    
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
            {{Form::label('', 'Product')}}
            {{Form::text('product_name', '', ['placehorder'=>'Product Name', 'class'=>'form-control'])}}
        </div> 
        <div class="form-group">
            {{Form::label('', 'Product Price')}}
            {{Form::number('product_prix', '', ['placehorder'=>'Product Price', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('', 'Product description')}}
            {{Form::textarea('product_description', '', ['placehorder'=>'Description', 'class'=>'form-control'])}}
        </div>
        {{Form::submit('Ajouter annonce', ['class'=>'btn btn-primary'])}} 
        {!!Form::close()!!}

@endauth   {{-- FIN de la vérification d'auth--}}
@endsection