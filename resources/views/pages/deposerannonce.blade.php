@extends('layouts.app')

@section('titre')

        Sponski - Déposer Annonce
    
@endsection

@section('contenu')
    <form action="{{url('/sauverproduit')}}" method="POST" class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group">
            <label>Publication</label>
            <input type="text" name="product_name" placeholder="Product Name" class="form-control" >
        </div>
        <div class="form-group">
            <label>Prix</label>
            <input type="text" name="product_prix" placeholder="Publication Prix" class="form-control" >
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="product_description" cols="30" rows="10"  class="form-control" ></textarea>
        </div>
        <input type="submit" value="Ajouter publication" class="btn btn-primary">
    </form>
@endsection