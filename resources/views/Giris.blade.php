@extends('Layout')
@section('content')

<div id="loginForm">
    <h1>Giriş yap</h1>
    <img class="" width="150" height="150" src="{{asset('images\Yolcu.png')}}" alt="">
    <form action="{{ route('User.login') }}" method="POST">
        @csrf
        <div class="container">
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Şifre : </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>




@endsection

@section('title','Giris')
