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
            <a href="{{Route('SeferBul')}}">Sefer Bul</a>
            <a href="{{Route('about')}}">Hakkında </a>

            <a href="{{Route('Sorgula')}}">Sorgula</a>

            @if(Auth::user()!=null)
                @if(Auth::user()->type=='Yolcu')
                    <a href="{{ route('User.Biletlerim', ['user_id' => Auth::user()->id]) }}">Biletlerim</a>

                    <a href="{{route('dashboard')}}">{{Auth::user()->name}}</a>
                    @elseif(Auth::user()->type=='admin')

                    <a href="{{route('admin.dashboard')}}">{{Auth::user()->name}}</a>

                    @elseif(Auth::user()->type=='Pilot' || Auth::user()->type=='Hostese')

                    <a href="{{route('dashboard')}}">Dashboard  </a>
                <a href="{{route('Personel.index',['user_type' => Auth::user()->type, 'user_name'=> Auth::user()->name,'id'=>Auth::user()->id])}}">{{Auth::user()->name}}</a>
                @endif


            @else
            <a href="{{route('login')}} ">Giriş</a>
            <a href="{{Route('Giris')}}">Giriş</a>
            @endif



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
