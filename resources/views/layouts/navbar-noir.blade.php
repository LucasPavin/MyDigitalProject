<div class="navbar-noir">
    <div class="container-navbar">
        <div class="navbar-image">
            <a href="{{URL::to('/')}}"><img src="{{asset('images/logo-header-noir.svg')}}" alt="imgNavbar"></a>
        </div>
        <nav>
            <ul class="navbar_page">
                <li class="li-navbar-page un"><a href="{{URL::to('/annonce')}}">Consulter une annonce</a></li>
                <li class="li-navbar-page deux"><a href="{{URL::to('/deposer-annonce')}}">Déposer une annonce</a></li>
                <li class="li-navbar-page trois"><a href="{{URL::to('/nos-tarifs')}}">Tarif</a></li>
                <li class="li-navbar-page quatre"><a href="{{URL::to('/contact')}}">Nous contacter</a></li>
            </ul>
        </nav>
        @guest
            <div class="container-connexion-desktop">
                <a class="cta cta-connexion" href="{{URL::to('/login')}}"><button>Se connecter</button></a>
                <a class="cta cta-inscription btn btn_orange" href="{{URL::to('/register')}}">S'inscrire</a>
            </div>
            <div class="container-connexion-tablette">
                <a class="cta cta-tablette-connexion" href="{{URL::to('/login')}}">Connexion</a>
            </div>
        @endguest
        @auth 
            <div class="auth-container-desktop">
                <a class="acd-icone" href="{{URL::to('#')}}"><i class="fa-solid fa-comment" style="color: blue"></i></a>
                <a class="acd-icone" href="{{URL::to('/favoris')}}"><i class="fa-solid fa-heart" style="color: blue"></i></a>
                <a class="acd-icone" href="{{URL::to('/dashboard')}}"><i class="fa-solid fa-grip" style="color:blue"></i></a>
                <a class="acd-icone" href="{{URL::to('/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket" style="color: blue"></i></a>
                
            </div>
        @endauth
        <button class="navbar-burger">
            <span class="bar"></span>
        </button>
    </div>
</div>