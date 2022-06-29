@extends('layouts.app')

@section('titre')

        Sponski - Contactez-nous
    
@endsection

@include('layouts.navbar-contact')

@section('contenu')
<div class="container-bandeau">
    <div class="container-page-contact">

        <h1 class="c-nom-adresse-mail">contact@sponski.com</h1>
        <p class="c-information">06 00 00 00 00  -  45 rue Jules Lallemend, Rennes</p>


        <div class="section_contact">
            <form method="post" action="{{ route('mail.send') }}">  
                @csrf
                <input type="text" class="c-nom-contact" id="name" name="name" placeholder="Votre prénom" required/><br/> 
                @error('name')
                    <p>{{ $message }}</p>
                @enderror<br>
                <input type="email" class="c-email-contact" id="email" name="email" placeholder="Votre email" required/> <br/> 
                @error('name')
                    <p>{{ $email }}</p>
                @enderror <br>
                <input type="number" class="c-num-contact" id="phone" name="phone" placeholder="Votre numéro de téléphone"><br/>
                @error('name')
                    <p>{{ $phone }}</p>
                @enderror
                <textarea rows="15" cols="40" class="c-message-contact" id="message" name="message" placeholder="Votre message" required></textarea><br />
                @error('name')
                    <p>{{ $message }}</p>
                @enderror

                <input class="c-button-contact" type="submit" value="ENVOYER" />
            </form>
        </div>
        <div>{{ $feedback }}</div>
    </div>
</div>
@endsection
 
