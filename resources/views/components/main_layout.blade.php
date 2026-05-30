<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - {{ $pageTitle }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @include('layouts.partials.links')

    <link rel="stylesheet" href="{{ asset('assets/css/main_styles.css') }}">
    
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>
<body class="d-flex flex-column min-vh-100 fst-italic">
    @include('layouts.partials.navbar')

    {{ $slot }}

    @include('layouts.partials.footer')
</body>
</html>