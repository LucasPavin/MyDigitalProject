@extends('layouts.app')

@section('titre')

        Sponski - Déposer Annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')

@guest   {{--SI la personne n'est pas authentifié elle aura ça--}}
    <div class="container-pas-connecte">
        <div class="container-carre">
            <h4>Bonjour !</h4>
            <p>Veuillez vous connecter avant de pouvoir accéder à cette page.</p>
            <a href="{{URL::to('/login')}}"><button class="btn btn_bleu">Se connecter</button></a>
        </div>
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
    <div class="container-deposer-annonce">

        {!!Form::open(['action' => 'App\Http\Controllers\ProductController@store', 'method' => 'POST', 'class'=>'form-horizontal', 'enctype' => "multipart/from-data"])!!}
        {{csrf_field()}}
        <div class="form-group">
            {{Form::text('product_name', '', ['placeholder'=>'Titre de l\'annonce', 'class'=>'form-control'])}}
        </div> 
        <div class="form-group">
            {{Form::select('categorie', array('foot' => 'Foot', 'course_a_pied' => 'Course à pied'), '', ['placeholder'=>'Catégorie', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::select('localisation',array('Bretagne' => 'Bretagne', 'Corse' => 'Corse'), '' ,['placeholder'=>'Localisation', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::file('images', ["multiple"=>"''", "name"=>"photos"])}}
        </div> 
        <div class="form-group">
            {{Form::textarea('product_description', '', ['placeholder'=>'Description', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::text('marquesVisees', '', ['placeholder'=>'Marques visées', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::number('product_prix', '', ['placeholder'=>'Le budget', 'class'=>'form-control'])}}
        </div>
        <div class="button-submit-annonce">  
            {{Form::submit('AJOUTER', ['class'=>'btn btn-primary'])}} 
            {!!Form::close()!!}
        </div>
        <div class="button-besoin-aide-annonce">
            <button class="btn besoin-d-aide-annonce"><a href="#">BESOIN D'AIDE ?</a></button>
        </div>

    </div>
@endauth   {{-- FIN de la vérification d'auth--}}
@endsection