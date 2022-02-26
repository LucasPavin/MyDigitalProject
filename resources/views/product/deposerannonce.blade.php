@extends('layouts.app')

@section('titre')

        Sponski - Déposer Annonce
    
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
    @if(Session::has('status'))
        <div class="alert alert-succes">
            {{Session::get('status')}}
        </div>    
    @endif

             {{-- <form action="{{url('/sauverproduit')}}" method="POST" class="form-horizontal"> 
                {{csrf_field()}}
                <div class="form-group">
                    {{-- <label>Publication</label>
                    <input type="text" name="product_name" placeholder="Product Name" class="form-control" >
                </div> 
                <div class="form-group">   
                    {{-- <label>Prix</label>
                    <input type="text" name="product_prix" placeholder="Publication Prix" class="form-control" > 
                </div>
                <div class="form-group">
                   <label>Description</label>
                    <textarea name="product_description" cols="30" rows="10"  class="form-control" ></textarea> 
                 </div>
                    <input type="submit" value="Ajouter publication" class="btn btn-primary"> 
                </form>--}}

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
@endsection