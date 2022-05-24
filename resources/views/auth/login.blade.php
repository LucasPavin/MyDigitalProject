@extends('layouts.app')
@section('titre')

        Sponski - Se connecter
    
@endsection

{{-- @include('layouts.navbar-noir') --}}

@section('contenu')
    
    <div class="container-connexion">
        <a href="{{URL::to('/')}}" class="bouton-retour-connexion"><button><i class="fa-solid fa-circle-chevron-left"></i>Retour</button></a>

        <div class="container-connexion-logo">

            <button name="logo">
                <a href="/">
                    <img src="images/logo-header-bleu.svg" alt="" class="connexion-img">
                </a>
            </button>
            <div class="container-connexion-creeCompte">
                <span class="connexion-span">Connexion</span><a href="/register"><span class="creerCompte-span">Créer un compte</span></a>
            
    
            <form method="POST" action="{{ route('login') }}" class="container-connexion-form">
                @csrf
    
                <!-- Email Address -->
                <div class="container-connexion-email">
                    <x-label for="email" :value="__('E-mail')" />
                    <br/>
                    <input id="email" class="connexion-email-input" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <!-- Password -->
                <div class="container-connexion-mdp">
                    <x-label for="password" :value="__('Mot de passe')" />
                    <br/>
                    <input id="password" class="connexion-mdp-input"
                                    type="password"
                                    id="password"
                                    name="password"
                                    required autocomplete="current-password">
                                    
                                    </input>
                    
                </div>
    
                <!-- Remember Me -->
                <div class="container-connexion-rappeler">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Se rappeler de moi') }}</span>
                    </label>
                </div>
    
    
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
    
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                
                <button class="connexion-button-seco">
                    {{ __('Connexion') }}
                </button>
                <br>
                <div class="connexion-mdp-oublie">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié ?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection
