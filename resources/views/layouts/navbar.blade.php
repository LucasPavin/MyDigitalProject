<div class="navbar">
    <div class="container-navbar">
        <div class="navbar-image">
            <a href="{{URL::to('/')}}"><img src="sponski.jpeg" alt="imgNavbar" style="width:100px; height: 75px;"></a>
        </div>
        <nav>
            <ul class="navbar_page">
                <li><a href="{{URL::to('/consulter-annonce')}}">Consulter une annonce</a></li>
                <li><a href="{{URL::to('/deposer-annonce')}}">Déposer une annonce</a></li>
                <li><a href="{{URL::to('/a-propos')}}">À propos</a></li>
                <li><a href="{{URL::to('/contact')}}">Nous contacter</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Se connecter</button></a>
    </div>
</div>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    li, a, button{
        font-weight: 500;
        font-size: 16px;
        color: black;
        text-decoration: none;
    }
    .container-navbar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 0%;
    }
    .imgNavbar{
        cursor: pointer;
    }
    .navbar_page {
        list-style: none;
    }
    .navbar_page li {
        display: inline-block;
        padding: 0px 20px;
    }
    .navbar_page li a {
        transition: all 0.3s ease 0s;
    }
    .navbar_page li a:hover {
        color: #FD5B2F;
    }
    button{
        padding: 9px 25px;
        margin-right:30px; 
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: #FD5B2F;
        color: white;
        border: none;
        border-radius: 0px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
    }
    button:hover{
        background-color: #174AFC;
    }
</style>