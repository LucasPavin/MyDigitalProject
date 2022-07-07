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
        <div class="text-image-deposer">
            <p class="text-deposer">Déposer une annonce</p>
        </div>
        <div class="container-texte-avant-form">
            <h4>Vous souhaitez trouver un sponsor qui vous correspond ?</h4>
            <p>Remplissez toutes les données indiquées ci-dessous pour que le(s) futur(s)
                sponsors puissent les consulter.</p>
            <hr>
        </div>

        {!!Form::open(['action' => 'App\Http\Controllers\ProductController@store', 'method' => 'POST', 'class'=>'form-horizontal', 'enctype' => "multipart/form-data"])!!}
        {{csrf_field()}}
        <div class="form-group">
            {{Form::text('product_name', '', ['placeholder'=>'Titre de l\'annonce', 'class'=>'form-control'])}}
        </div> 
        <div class="form-group">
            {{Form::select('categorie', array(
                'Accrobranche' => 'Accrobranche', 
                "Acrosport"=> 'Acrosport', 
                "Aïkido"=> 'Aïkido', 
                'Athlétisme' => 'Athlétisme',
                'Badminton' => 'Badminton',
                'Baseball' => 'Baseball',
                "Basketball"=> 'Basketball', 
                "Boxe"=> 'Boxe',
                'Combat' => 'Combat',
                'Cross-Fit' => 'Cross-Fit',
                'Danse' => 'Danse',
                'Équitation' => 'Équitation',
                'Football' => 'Football', 
                'Judo' => 'Judo',
                "Lutte"=> 'Lutte',
                "Pétanque"=> 'Pétanque',
                "Tennis"=> 'Tennis', 
                "Tennis de table"=> 'Tennis de table'),
                '', ['placeholder'=>'Catégorie', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::select('localisation',array(
                'Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes',
                'Bourgogne-Franche-Comté' => 'Bourgogne-Franche-Comté', 
                'Bretagne' => 'Bretagne',
                'Centre-Val de Loire'=> 'Centre-Val de Loire', 
                'Corse' => 'Corse',
                'Grand Est' => 'Grand Est',
                'Hauts-de-France' => 'Hauts-de-France',
                'Île-de-France' => 'Île-de-France',
                'Normandie' => 'Normandie',
                'Nouvelle-Aquitaine' => 'Nouvelle-Aquitaine',
                'Occitanie'=> 'Occitanie',
                'Pays de la Loire' => 'Pays de la Loire',
                'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur'),
                
                '' ,['placeholder'=>'Localisation', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::file('images', ["multiple"=>"''", "name"=>"photos"])}}
        </div> 
        <div class="form-group">
            {{Form::textarea('product_description', '', ['placeholder'=>'Description', 'class'=>'form-control', 'minlength'=>'255'])}}
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

    </div>
@endauth   {{-- FIN de la vérification d'auth--}}
@endsection