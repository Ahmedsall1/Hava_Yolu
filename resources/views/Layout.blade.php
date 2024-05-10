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
        <nav><a href="{{url('Anasayfa/index')}}">AnaSayfa</a>
            <a href="{{url('Anasayfa/about')}}">About</a>
            <a href="{{url('Anasayfa/about')}}">Giris</a>
        </nav>
    </div>
    @yield('content')
</body>

</html>
