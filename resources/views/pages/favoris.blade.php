@extends('layouts.app')

@section('titre')

        Sponski - Favoris
    
@endsection

@include('layouts.navbar-Noir')

@section('contenu')

        @foreach(auth()->user()->likes as $like)
                {{ $like->product_name}}
        @endforeach

@endsection