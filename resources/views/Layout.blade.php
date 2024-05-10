<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{url('css/style.css')}}" rel="stylesheet" />

</head>

<body class="antialiased">
    <div>
        <nav><a href="{{Route('index')}}">AnaSayfa</a>
            <a href="{{Route('about')}}">About</a>
            <a href="{{Route('Giris')}}">Giris</a>
            <a href="{{Route('Sefer.index')}}">Seferler</a>
        </nav>
    </div>
    @yield('content')
</body>

</html>
