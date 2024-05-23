@extends('Layout')
@section('content')
<h1>Giris</h1>
<div id="loginForm">
    <h2>Giriş yap</h2>
    <form action="{{ route('User.login') }}" method="POST">
        @csrf

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




@endsection



@section('title','Giris')
