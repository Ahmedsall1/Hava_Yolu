@extends('Layout')
@section('content')

<div id="loginForm">
    <h1>Giriş yap</h1>
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
