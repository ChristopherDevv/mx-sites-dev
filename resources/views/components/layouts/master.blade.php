<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="!scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Barcias Landscape</title>

    <!--icon -->
    <link rel="icon" type="image/x-icon" href="./img/logos/logo-icon.ico">

    <!-- GOOGLE FONTS Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap">

    <!-- Styles -->
    @include('components.custom.theme')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if (config('app.env') === 'production' && config('app.analytics.code'))
        <script src="https://cdn.usefathom.com/script.js" data-site="{{ config('app.analytics.code') }}" data-spa="auto" defer></script>
    @endif
    @livewireStyles
</head>
<body class="antialiased flex flex-col min-h-screen font-body">
    <div class="flex-1">
        {{ $slot }}
    </div>
    <script>
        window.addEventListener('load', (event) => {
          document.querySelectorAll('.link-event').forEach(item => {
            item.addEventListener('click', event => {
                let fileName = item.getAttribute('href');
                fathom.trackEvent(`link-clicked: ${fileName}`);
            });
          });
        });
    </script>
    @livewireScripts
</body>
</html>
