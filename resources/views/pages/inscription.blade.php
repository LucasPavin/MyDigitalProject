@extends('layouts.app')

@section('titre')

        Sponski - Créer un compte
    
@endsection

@section('contenu')

    <h1>Créer un compte</h1>

    <div class="section_connexion">
        <form method="post" action="mailto:manon61550@gmail.com">  
            <input type="text" name="name" id="name" placeholder="Prénom" required/><br/> 
            <input type="email" id="email" name="email" placeholder="Email" required/> <br/>  
            <textarea rows="15" cols="40" name="message" placeholder="Votre message" required></textarea><br />
            
            <input type="submit" value="Envoyer" />
        </form>
    </div>
    
@endsection
 
