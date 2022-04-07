<div class="navbar">
    <div class="container-navbar">
        <div class="navbar-image">
            <a href="{{URL::to('/')}}"><img src="images/logo-header.svg" alt="imgNavbar" style="width:120px; height: auto;"></a>
        </div>
        <div class="container-search">
            <div class="search">
                <img src="images/search-icon.svg" alt="icon de recherche">
            </div>
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
            <a class="cta cta-connexion" href="#"><button>Se connecter</button></a>
            <a class="cta cta-inscription btn btn_orange" href="{{URL::to('/inscription')}}">Se connecter</a>
        </div>
        <div class="div-vide"></div>
    </div>
</div>
