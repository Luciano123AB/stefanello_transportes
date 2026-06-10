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

    @include('layouts.partials.titles')

    <div class="central_content container my-5 overflow-auto">
        {{ $slot }}    
    </div>

    @if ($pageTitle === 'Home')
        <div class="text-center mb-5">
            <a href="{{ route('more.informations') }}" class="btn btn-success border-black focus-ring focus-ring-success shadow-sm">
                <iconify-icon icon="twemoji:right-arrow" class="animate__animated animate__fadeOutRight animate__infinite"></iconify-icon>
                Mais Informações
            </a>
        </div>
    @elseif ($pageTitle === 'Mais Informações')
        <div class="text-center mb-5">
            <a href="{{ route('home') }}" class="btn btn-success border-black align-self-baseline focus-ring focus-ring-success shadow-sm">
                <iconify-icon icon="twemoji:left-arrow" class="animate__animated animate__fadeOutLeft animate__infinite"></iconify-icon>
                Voltar
            </a>
        </div>
    @endif

    @include('layouts.partials.footer')

    <img src="{{ asset('assets/images/truck.png') }}" id="truck" class="animate__animated animate__fadeInLeft">
    <img src="{{ asset('assets/images/truck_driver.png') }}" id="truck_driver" class="animate__animated animate__backInRight">

    @livewireScripts
</body>
</html>
