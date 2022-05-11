@extends('layouts.app')

@section('titre')

        Sponski - Erreur 404
    
@endsection

@section('contenu')

    <div class="container-error-404">
        <h2>Erreur 404</h2>
        <p>Page non trouvée</p>
        <button href="{{URL::to('/')}}">SPONSKI</button>
        
    </div>
        

@endsection

