@extends('layouts.app')
@section('titre')

        Sponski - Se connecter
    
@endsection
@include('layouts/navbar')
@section('contenu')
    <div class="container-register">

        <button name="logo">
            <a href="/">
                <img src="images/logo-header-bleu.svg" alt="" class="registrer-img">
            </a>
        </button>
        <div class="container-register-connexion-creeCompte">
            <a href="/login"><span class="register-connexion-span">Connexion</span></a><span class="register-creerCompte-span">Créer un compte</span>
        </div>
        <form method="POST" action="{{ route('register') }}" class="container-register-form">
            @csrf

            <!-- Name -->
            <div class="container-register-nom">
                <x-label for="name" :value="__('Prénom & Nom')" />
                <br>
                <x-input id="name" class="register-nom-input" type="text" name="name" :value="old('name')" required autofocus/>
            </div>

            <!-- Email Address -->
            <div class="container-register-email">
                <x-label for="email" :value="__('Adresse mail')" />
                <br>
                <x-input id="email" class="register-email-input" type="email" name="email" :value="old('email')" required  />
            </div>

            <!-- Password -->
            <div class="container-register-mdp">
                <x-label for="password" :value="__('Mot de passe')" />
                <br>
                <x-input id="password" class="register-mdp-input"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="container-register-mdp-confirm">
                <x-label for="password_confirmation" :value="__('Confirmation du mot de passe')" />
                <br>
                <x-input id="password_confirmation" class="register-mdp-confirm-input"
                                type="password"
                                name="password_confirmation" required />
            </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="register-errors" :errors="$errors" />

                <button class="register-button-rejoindre">
                    {{ __('Rejoignez SPONSKI') }}
                </button>
        </form>
    </div>
@endsection