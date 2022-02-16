<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPONSKI</title>
</head>
<body>
    <div class="navbar">
        <div class="container navbar">
            <div class="navbar-image">
                <a href="{{URL::to('/')}}"><img src="sponski.jpg" alt="imgNavbar" style="width:100px; height: 75px;"></a>
            </div>
            <ul>
                <li><a href="{{URL::to('/deposer-annonce')}}">Déposer une annonce</a></li>
                <li><a href="{{URL::to('/consulter-annonce')}}">Consulter une annonce</a></li>
                <li><a href="{{URL::to('/a-propos')}}">À propos</a></li>
                <li><a href="{{URL::to('/contact')}}">Nous contacter</a></li>
            </ul>
        </div>

    </div>
    <h1>Contact page</h1>
</body>
</html>