@extends('layouts.app')

@section('titre')

        Sponski - Se connecter
    
@endsection

@section('contenu')
<div class="login-formulaire">
		<div class="wrap-login">
			<form class="login-form">
				<span class="login adresse">Adresse mail</span>

				<div class="wrap-input-validate-user" data-validate = "Enter username">
					<input class="input100" type="text" name="username" placeholder="Username">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>
				<span class="login adresse">Mot de passe</span>
				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="pass" placeholder="Password">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>

				<div class="contact100-form-checkbox">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
					<label class="label-checkbox100" for="ckb1">Se souvenir de moi</label>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">Connexion</button>
				</div>

				<div class="text-center p-t-90" {{ action('LoginController@traitement', ['id'=>1]) }}>
					<a class="txt1" href="#">Mot de passe oublié ?</a>
				</div>
			</form>
		</div>
	</div>

@endsection