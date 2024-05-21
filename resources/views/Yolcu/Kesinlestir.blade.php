@extends('Layout')

@section('content')
<h1> Kesinlestir</h1>

@if (session('success'))
<div>{{ session('success') }}</div>
@endif

@if ($ucus)
<h2>Ucus: {{ $ucus }}</h2>
<h2>koltuk: {{ $koltuk }}</h2>
@endif


<div class="mt-3">
    <button id="loginBtn" class="btn btn-primary mr-2">Login</button>
    <button id="registerBtn" class="btn btn-primary">Register</button>
</div>

<!-- Login Form -->
<div id="loginForm" style="display: none;">
    <h2>Giriş yap</h2>
    <form action="{{ route('Ucus.login') }}" method="POST">
        @csrf
        <input type="hidden" name="ucus_id" value="{{ $ucus }}">
        <input type="hidden" name="koltuk_id" value="{{ $koltuk }}">
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Şifre : </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<!-- Registration Form -->
<div id="registerForm" style="display: none;">
    <h2>Kayıt Ol</h2>
    <form action="{{ route('Ucus.register') }}" method="POST">
        @csrf
        <input type="hidden" name="ucus_id" value="{{ $ucus }}">
        <input type="hidden" name="koltuk_id" value="{{ $koltuk }}">
        <div class="form-group">
            <label for="name">Adı ve soyadı : </label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Şifre : </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
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
