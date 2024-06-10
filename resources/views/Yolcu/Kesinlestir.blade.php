@extends('Layout')

@section('content')
    <h1> Kesinlestir</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif


    @if ($ucus)
        <div class="container" style=" color:rgb(253, 222, 85, 1);">
            <i class="fa-solid fa-plane-departure"></i>
            <h3>Nerden: {{ $sefer->nerden }}  <i class="fa-regular fa-calendar-days"></i>Tarih: {{ $sefer->tarih }}</h3>


        </div>
        <div class="container" style=" color:rgb(253, 222, 85, 1);">
            <i class="fa-solid fa-plane-arrival"></i>
            <h3> Nereye: {{ $sefer->nereye }} </h3>


        </div>
        <div class="container" style=" color:rgb(253, 222, 85, 1);">
            <h4>Ucus NO: {{ $ucus->ucusno }} Ucus ucreti: {{ $ucus->ucret }} Ucus: {{ $ucus->saat }} Ucus suresi:
                {{ $ucus->sure }}</h4>
        </div>
        <div class="container" style=" color:rgb(253, 222, 85, 1);">
            <h3>koltuk: {{ $koltuk->no }} Koltuk tipi: {{ $koltuk->tipi }} Koltuk Ucreti: {{ $ucret }}</h3>
        </div>
    @endif
        

    <div class="container">
        <img class="" width="50" height="50" src="{{asset('images\Yolcu.png')}}" alt="">
        <button id="loginBtn" class="btn btn-primary mr-2">Login</button>
        <button id="registerBtn" class="btn btn-primary">Register</button>
    </div>

    <!-- Login Form -->
    <div class="container">
        <div id="loginForm" style="display: none;">
            <h2>Giriş yap</h2>
            <form action="{{ route('Ucus.login') }}" method="POST">
                @csrf
                <input type="hidden" name="ucus_id" value="{{ $ucus->id }}">
                <input type="hidden" name="koltuk_id" value="{{ $koltuk->id }}">
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre : </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    <!-- Registration Form -->
    <div class="container">
        <div id="registerForm" style="display: none;">
            <h2>Kayıt Ol</h2>
            <form action="{{ route('Ucus.register') }}" method="POST">
                @csrf
                <input type="hidden" name="ucus_id" value="{{ $ucus->id }}">
                <input type="hidden" name="koltuk_id" value="{{ $koltuk->id }}">
                <div class="form-group">
                    <label for="name">Adı ve soyadı : </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre : </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('loginBtn').addEventListener('click', function() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('registerForm').style.display = 'none';
        });

        document.getElementById('registerBtn').addEventListener('click', function() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'block';
        });
    </script>
@endsection

@section('title', 'Kesinlestir !')
