@extends('layouts.app')

@section('titre')

        Sponski - À Propos
    
@endsection

@include('layouts.navbar')

@section('contenu')
   
<div class="a-propos">
    <div class="container container_equipe">
        <div class="text">
            <h2 class="nom">Melvin Hamon</h2>
            <h3 class="fonction">Web Designer</h3>
            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium laboriosam numquam assumenda? Ipsa sint omnis quibusdam? Aspernatur reiciendis, harum assumenda quos earum nihil, ullam consectetur perferendis quod quia cupiditate qui!</p>
            </div>
            <div class="btn btn_orange">En savoir plus</div>
        </div>
        <div class="img_equipe">
            <img src="/images/Melvin.png" alt="Melvin">
        </div>
    </div>

    <div class="container container_equipe">
        <div class="text">
            <h2 class="nom">Marc Le fèvre</h2>
            <h3 class="fonction">Web marketing</h3>
            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium laboriosam numquam assumenda? Ipsa sint omnis quibusdam? Aspernatur reiciendis, harum assumenda quos earum nihil, ullam consectetur perferendis quod quia cupiditate qui!</p>
            </div>
            <div class="btn btn_orange">En savoir plus</div>
        </div>
        <div class="img_equipe">
            <img src="/images/a-propos/Adrien.svg" alt="Adrien">
        </div>
    </div>
    
    <div class="container container_equipe">
        <div class="text">
            <h2 class="nom">Adrien Renaud</h2>
            <h3 class="fonction">Référencement SEO</h3>
            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium laboriosam numquam assumenda? Ipsa sint omnis quibusdam? Aspernatur reiciendis, harum assumenda quos earum nihil, ullam consectetur perferendis quod quia cupiditate qui!</p>
            </div>
            <div class="btn btn_orange">En savoir plus</div>
        </div>
        <div class="img_equipe">
            <img src="/images/a-propos/Marc.svg" alt="Marc">
        </div>
    </div>

    <div class="container container_equipe">
        <div class="text">
            <h2 class="nom">Manon Rima</h2>
            <h3 class="fonction">Développeuse web</h3>
            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium laboriosam numquam assumenda? Ipsa sint omnis quibusdam? Aspernatur reiciendis, harum assumenda quos earum nihil, ullam consectetur perferendis quod quia cupiditate qui!</p>
            </div>
            <div class="btn btn_orange">En savoir plus</div>
        </div>
        <div class="img_equipe">
            <img src="/images/a-propos/Manon.svg" alt="Manon">
        </div>
    </div>
    
    <div class="container container_equipe">
        <div class="text">
            <h2 class="nom">Lucas Pavin</h2>
            <h3 class="fonction">Développeur web</h3>
            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium laboriosam numquam assumenda? Ipsa sint omnis quibusdam? Aspernatur reiciendis, harum assumenda quos earum nihil, ullam consectetur perferendis quod quia cupiditate qui!</p>
            </div>
            <div class="btn btn_orange">En savoir plus</div>
        </div>
        <div class="img_equipe">
            <img src="/images/a-propos/Lucas.svg" alt="Lucas">
        </div>
    </div>
    
    <div class="container container_logo">
        <div class="logo_ki">
            <img src="/images/logo-a-propos.svg" alt="Logo Sponski">
        </div>
    </div>
</div>
    
    @endsection