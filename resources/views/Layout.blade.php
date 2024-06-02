<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body class="antialiased">
    <div>

        <nav class="navbar">
            <img width="300" height="60" src="{{asset('images\LeftLogo.png')}}" alt="">
            <a href="{{Route('index')}}">AnaSayfa</a>
            <a href="{{Route('about')}}">About</a>
            <a href="{{Route('Giris')}}">Giris</a>
            <a href="{{Route('Sorgula')}}">Sorgula</a>
            <a href="{{Route('Sefer.index')}}">Seferler</a>
            <a href="{{Route('Ucus.index')}}">Ucusler</a>

            <a href="{{Route('Ucak.index')}}">Ucaklar</a>
            <a href="{{Route('SeferBul')}}">SeferBul</a>
            <a href="{{Route('Sirket.index')}}">Sirketler</a>

            @if(session()->has('user'))
            <span>{{ session('user')->name }}</span>
            <form action="{{ Route('Giris') }}" method="POST">
                @csrf
                <button type="submit">{{ __('Giris') }}</button>
            </form>
        @else
            <a href="{{ Route('Giris') }}">{{ __('Giris ') }}</a>
        @endif
        @include('partials.search-form')

        </nav>
    </div>
    <div class="centerr">
    @yield('content')</div>
</body>

</html>
