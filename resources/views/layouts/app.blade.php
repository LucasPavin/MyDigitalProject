<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>@yield('titre')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- Livewire --}}
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <div class="container">
                <!-- début du contenu -->
                    @yield('contenu')
                <!-- fin du contenu -->
            </div>
            <script src="js/app.js"></script>
            <!-- Page Content -->
            <main>
                {{ $slot ?? '' }}
            </main>
        </div>

    </body>
    @include('layouts.footer')
    <script src="{{asset('js/burger-menu.js')}}"></script>
    @livewireScripts
</html>