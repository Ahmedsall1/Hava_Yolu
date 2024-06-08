<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @yield('styles')
</head>

<body class="antialiased">
    <div>

        <nav class="navbar">
            <img width="60" height="60" src="{{asset('images\logo_.png')}}" alt="">
            <a href="{{Route('index')}}">AnaSayfa</a>
            <a href="{{Route('SeferBul')}}">SeferBul</a>
            <a href="{{Route('about')}}">About</a>
            <a href="{{Route('Giris')}}">Giris</a>
            <a href="{{Route('Sorgula')}}">Sorgula</a>
            <a href="{{Route('Sefer.index')}}">Seferler</a>
            <a href="{{Route('Ucus.index')}}">Ucusler</a>

            <a href="{{Route('Ucak.index')}}">Ucaklar</a>

            <a href="{{Route('Sirket.index')}}">Sirketler</a>

        <div>
            <form action="{{ route('Sefer.search') }}" method="GET">
                <input type="text" name="query" placeholder="Search Sefer..." required>
                <button type="submit">Search</button>
            </form>
        </div>

        </nav>
    </div>
    <div class="centerr">
    @yield('content')</div>


</body>

</html>
