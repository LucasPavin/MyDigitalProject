<div class="navbar">
    <div class="container-navbar">
        <div class="navbar-image">

            <a href="{{URL::to('/')}}"><img src="images/logo-header.svg" alt="imgNavbar"></a>
        </div>
            <nav>
                <ul class="navbar_page">
                    <li class="li-navbar-page un"><a href="{{URL::to('/annonce')}}">Consulter une annonce</a></li>
                    <li class="li-navbar-page deux"><a href="{{URL::to('/deposer-annonce')}}">Déposer une annonce</a></li>
                    <li class="li-navbar-page trois"><a href="{{URL::to('/a-propos')}}">À propos</a></li>
                    <li class="li-navbar-page quatre"><a href="{{URL::to('/contact')}}">Nous contacter</a></li>
                </ul>
            </nav>
            <div class="container-connexion-desktop">
                <a class="cta cta-connexion" href="{{URL::to('/login')}}"><button>Se connecter</button></a>
                <a class="cta cta-inscription btn btn_orange" href="{{URL::to('/register')}}">S'inscrire</a>
            </div>
            <div class="container-connexion-tablette">
                <a class="cta cta-tablette-connexion" href="{{URL::to('/login')}}">Connexion</a>
            </div>
            <button class="navbar-burger">
                <span class="bar"></span>
            </button>
    </div>
</div>