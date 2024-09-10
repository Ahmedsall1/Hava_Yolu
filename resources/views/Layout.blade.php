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
            <img width="60" height="60" src="{{ asset('images\logo_.png') }}" alt="">
            <a href="{{ Route('index') }}">AnaSayfa</a>
            <a href="{{ Route('SeferBul') }}">Sefer Bul</a>
            <a href="{{ Route('about') }}">Hakkında </a>

            <a href="{{ Route('Sorgula') }}">Sorgula</a>

            @if (Auth::user() != null)
                @if (Auth::user()->type == 'Yolcu')
                    <a href="{{ route('User.Biletlerim', ['user_id' => Auth::user()->id]) }}">Biletlerim</a>

                    <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Çıkış Yap') }}
                        </x-dropdown-link>
                    </form>
                @elseif(Auth::user()->type == 'admin')
                    <a href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Çıkış Yap') }}
                        </x-dropdown-link>
                    </form>
                @elseif(Auth::user()->type == 'pilot' || Auth::user()->type == 'hostese' || Auth::user()->type=="personel")
                    <a href="{{ route('personel.dashboard') }}">Dashboard </a>
                    <a href="{{ route('personel.sorgula', ['user_type' => Auth::user()->type, 'user_name' => Auth::user()->name, 'id' => Auth::user()->id]) }}">{{ Auth::user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Çıkış Yap') }}
                        </x-dropdown-link>
                    </form>
                @endif
            @else
                <a href="{{ route('login') }} ">Giriş</a>
                <a href="{{ Route('Giris') }}">Giriş</a>
                <a href="{{ Route('register') }}"> Kayıt Ol</a>
            @endif



            
    </div>

    </nav>
    </div>
    <div class="centerr">
        @yield('content')</div>
        {{-- //////////////////////////////////////////////////////////////////////////////////////////// --}}


{{-- ///////////////////////////////////////////////////////////////////////////////// --}}
        {{-- <footer class="footer">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400');
            </style>
            <ul>
              <li>
                <a href="#">

                  <span style="font-size: 25px"><i class="fa-brands fa-facebook-f"></i> - Facebook</span>
                </a>
              </li>
              <li>
                <a href="#">

                  <span style="font-size: 25px"><i class="fa-brands fa-twitter"></i> - Twitter</span>
                </a>
              </li>
              <li>
                <a href="#">

                  <span style="font-size: 25px"><i class="fa-brands fa-google"></i> - Google</span>
                </a>
              </li>
              <li>
                <a href="#">

                  <span style="font-size: 25px"><i class="fa-brands fa-instagram"></i> - Instagram</span>
                </a>
              </li>
            </footer> --}}
</body>

</html>
