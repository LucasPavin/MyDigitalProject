@extends('layouts.app')

@section('titre')

        Sponski - Modifier Annonce
    
@endsection

@include('layouts.navbar-noir')

@section('contenu')
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>    
    @endif
    
    <div class="container-general-modifier-annonce">
        <div class="text-image-modifier">
            <p class="text-modifier">Modifier une annonce</p>
        </div>
        <a href="{{URL::to('/dashboard')}}" class="bouton-retour-connexion"><button><i class="fa-solid fa-circle-chevron-left"></i>Retour</button></a>
        <div class="container-modifier-annonce">
            {!!Form::open(['action' => ['App\Http\Controllers\ProductController@update', $produit->id], 'method' => 'POST', 'class'=>'form-horizontal', 'enctype' => "multipart/form-data"])!!}
            {{csrf_field()}}
            <div class="form-group">
                {{Form::text('product_name', $produit->product_name, ['placeholder'=>'Titre de l\'annonce', 'class'=>'form-control'])}}
            </div> 
            <div class="form-group">
                {{Form::select('categorie', array('foot' => 'Foot', 'course_a_pied' => 'Course à pied'), '', ['placeholder'=>'Catégorie', 'class'=>'form-control']), $produit->categorie}}
            </div>
            <div class="form-group">
                {{Form::select('localisation',array('Bretagne' => 'Bretagne', 'Corse' => 'Corse'), '' ,['placeholder'=>'Localisation', 'class'=>'form-control']), $produit->localisation}}
            </div>
            <div class="form-group">
                {{Form::file('images', ["multiple"=>"''", "name"=>"photos"])}}
            </div>
            <div class="form-group">
                {{Form::textarea('product_description', $produit->description, ['placeholder'=>'Description', 'class'=>'form-control'])}}
                {{Form::hidden('_method', 'PUT' )}}
            </div>
            <div class="form-group">
                {{Form::text('marquesVisees', $produit->marquesVisees, ['placeholder'=>'Marques visées', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::number('product_prix', $produit->product_prix, ['placeholder'=>'Le budget', 'class'=>'form-control'])}}
            </div>
            <div class="button-modifier-annonce"> 
                {{Form::submit('Modifier annonce', ['class'=>'btn btn-modifier'])}} 
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection