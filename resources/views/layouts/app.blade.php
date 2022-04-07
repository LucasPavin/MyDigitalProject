<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('titre')</title>
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <!-- début du contenu -->
            @yield('contenu')
        <!-- fin du contenu -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>