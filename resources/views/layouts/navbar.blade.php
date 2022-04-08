<div class="navbar">
    <div class="container-navbar">
        <div class="navbar-image">
            <a href="{{URL::to('/')}}"><img src="images/logo-header.svg" alt="imgNavbar" style="width:120px; height: auto;"></a>
        </div>
        <nav>
            <ul class="navbar_page">
                <li><a href="{{URL::to('/annonce')}}">Consulter une annonce</a></li>
                <li><a href="{{URL::to('/deposer-annonce')}}">Déposer une annonce</a></li>
                <li><a href="{{URL::to('/a-propos')}}">À propos</a></li>
                <li><a href="{{URL::to('/contact')}}">Nous contacter</a></li>
            </ul>
        </nav>
        <div class="container-connexion">
            <a class="cta cta-connexion" href="{{URL::to('/connexion')}}"><button>Se connecter</button></a>
<<<<<<< HEAD
            <a class="cta cta-inscription btn btn_orange" href="{{URL::to('/inscription')}}">Inscription</a>
=======
            <a class="cta cta-inscription btn btn_orange" href="{{URL::to('/inscription')}}">S'inscrire</a>
>>>>>>> e684da5c6b01eeed63ac0c29a7e2370c48a0d043
        </div>
    </div>
</div>
