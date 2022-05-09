@extends('layouts.app')

@section('titre')

        Sponski - Modifier Annonce
    
@endsection

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
        {!!Form::open(['action' => ['App\Http\Controllers\ProductController@update', $produit->id], 'method' => 'POST', 'class'=>'form-horizontal'])!!}
        {{csrf_field()}}
        <div class="form-group">
            {{Form::label('', 'Product')}}
            {{Form::text('product_name', $produit->product_name, ['placehorder'=>'Product Name', 'class'=>'form-control'])}}
        </div> 
        <div class="form-group">
            {{Form::label('', 'Product Price')}}
            {{Form::number('product_prix',  $produit->product_prix, ['placehorder'=>'Product Price', 'class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('', 'Product description')}}
            {{Form::textarea('product_description',  $produit->description, ['placehorder'=>'Description', 'class'=>'form-control'])}}
            {{Form::hidden('_method', 'PUT' )}}
        </div>
        {{Form::submit('Modifier annonce', ['class'=>'btn btn-primary'])}} 
        {!!Form::close()!!}
@endsection