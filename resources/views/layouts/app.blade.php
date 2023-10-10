<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Интересные истории</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/assets/sass/app/entry.scss', 'resources/assets/js/app/entry.js'])
</head>
<body>
    @include("layouts.header")
    
    <div class="content-page">
        @yield('content')
    </div>

    @include("layouts.footer")
</body>
</html>
