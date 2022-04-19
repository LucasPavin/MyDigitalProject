@extends('layouts.app')

@section('titre')

        Sponski - Contactez-nous
    
@endsection

@include('layouts.navbar')

@section('contenu')

    <div class="container">

        <h1 class="c-nom-adresse-mail">contact@sponski.com</h1>
        <p class="c-information">06 00 00 00 00  -  45 rue Jules Lallemend, Rennes</p>

        <div class="section_contact">
            <form method="post" action="mailto:manon61550@gmail.com">  
                <input type="text" class="c-name-input" id="name" placeholder="Prénom" required/><br/> 
                <input type="email" id="email" name="email" placeholder="Email" required/> <br/>  
                <textarea rows="15" cols="40" name="message" placeholder="Votre message" required></textarea><br />
                
                <input class="c-button-contact" type="submit" value="ENVOYER" />
            </form>
        </div>
    </div>
    
@endsection
 
