<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - {{ $pageTitle }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @include('layouts.partials.links')
    @livewireStyles
    
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>
<body class="d-flex flex-column min-vh-100 fst-italic">
    @include('layouts.partials.navbar')

    <div id="central_content" class="container my-5 overflow-auto">
        {{ $slot }}
        
        @if ($pageTitle === 'Home')
            <div class="text-center mt-2">
                <a href="{{ route('more_informations') }}" class="btn btn-success border-black shadow-sm">Mais Informações</a>
            </div>
        @endif
    </div>

    @include('layouts.partials.footer')

    <img src="{{ asset('assets/images/truck.png') }}" id="truck" class="animate__animated animate__fadeInLeft">
    <img src="{{ asset('assets/images/truck_driver.png') }}" id="truck_driver" class="animate__animated animate__backInRight">

    @livewireScripts
</body>
</html>
