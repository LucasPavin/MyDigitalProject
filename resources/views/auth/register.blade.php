@extends('layouts.app')
@section('titre')

        Sponski - Se connecter
    
@endsection


@section('contenu')
    <div class="container-register">
        <a href="{{URL::to('/')}}" class="bouton-retour-register"><button><i class="fa-solid fa-circle-chevron-left"></i>Retour</button></a>

        <div class="container-register-logo">

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
                <div class="container-register-firstname">
                    <x-label for="firstname" :value="__('Prénom')" />
                    <br>
                    <x-input id="firstname" class="register-firstname-input" type="text" name="firstname" :value="old('firstname')" required />
                </div>
                <div class="container-register-nom">
                    <x-label for="name" :value="__('Nom de famille')" />
                    <br>
                    <x-input id="name" class="register-nom-input" type="text" name="name" :value="old('name')" required autofocus/>
                </div>
    
                <!-- Email Address -->
                <div class="container-register-email">
                    <x-label for="email" :value="__('Adresse mail')" />
                    <br>
                    <x-input id="email" class="register-email-input" type="email" name="email" :value="old('email')"  required  />
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
    
    {{--  Date Of Birth --}}
                <div class="container-register-dateOfBirth">
                    <x-label for="dateOfBirth" :value="__('Date de naissance')" />
                    <br>
                    <x-input type="date" name="dateOfBirth" class="register-dateOfBirth-input" id="dateOfBirth"
                            placeholder="dd-mm-yyyy" :value="old('dateOfBirth')" min="1920-01-01" max="2022-12-31" required />
                </div>
                
    {{-- Status --}}    
            <div class="container-register-status">
                <hr>
                <label>Vous êtes un(e) : </label>
                <div class="register-status-input" :value="old('status')" id="status" name="status">
                    <select name="status" id="">
                        <option value="Particulier">Particulier</option>
                        <option value="Profesionnel">Profesionnel</option>
                        <option value="Association">Association</option>
                        <option value="Entreprises">Entreprises</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            </div>
    
    {{-- choose status --}}
            <div class="container-register-chooseStatus">
                <hr>
                    <label>Vous cherchez à :</label>
                    <div class="switch-field" :value="old('chooseStatus')" id="chooseStatus" name="chooseStatus">
                        <select name="chooseStatus" id="">
                            <option value="etre-sponsor">Être sponsorisez</option>
                            <option value="Sponsoriser">Sponsoriser</option>
                        </select>
                    </div>
            </div>
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="register-errors" :errors="$errors" />
    
                    <button class="register-button-rejoindre">
                        {{ __('Rejoignez SPONSKI') }}
                    </button>
            </form>
        </div>
    </div>
</div>
@endsection