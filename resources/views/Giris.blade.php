@extends('Layout')
@section('content')

<div id="loginForm">


    <form action="{{ route('User.login') }}" method="POST">
        @csrf
        <div class="seferBulContainer   ">
            <div class="form-group">
                <h1 style="color: rgb(253, 222, 85, 1);">Giriş yap   </h1>
                <img class="" width="150" height="150" src="{{asset('images\Yolcu.png')}}" alt="">
            </div>

        <div class="form-group">
            <label for="email"><i class="fa-regular fa-envelope"></i> Email </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password"><i class="fa-solid fa-lock"></i> Şifre </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="submit">Giriş<i class="fa-solid fa-right-to-bracket"></i> </button>
        </div>
    </form>
</div>




@endsection

@section('title','Giris')
