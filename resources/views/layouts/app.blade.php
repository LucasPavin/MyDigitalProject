<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponski</title>
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.navbar') <!--  On met en place la navbar : créer dans "navbar.blade.php -->
    @yield('content') 
    <script src="{{ asset('js/app.js')}}"></script>
    
</body>
</html>