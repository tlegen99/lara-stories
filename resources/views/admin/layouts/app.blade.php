<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ-панель</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    @vite(['resources/assets/sass/app/entry.scss', 'resources/assets/js/app/entry.js'])
</head>
<body>
<div class="admin">
    @include("admin.layouts.header")
    @include("admin.layouts.sidebar")
    
    @yield('content')
</div>
</body>
</html>