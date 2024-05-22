@extends('Layout')
@section('content')
<h1>Kulanıcılar</h1>
<div>
    <ul>
        @foreach ($Users as $x)

        <li>
    <a href="{{ route('User.show', ['User' => $x['id']]) }}">ID:{{ $x['id'] }} kulanıcı Tipi:{{ $x['type'] }} Adı:{{ $x['name'] }} Email:{{ $x['email'] }}</a>
    <a href="{{ route('User.edit', ['User' => $x['id']]) }}">Düzenle</a>
</li>

        <br>

        @endforeach
    </ul>
    <a href="{{route('User.create')}}">Kulanıcı Ekle</a>
</div>
@endsection

@section('title','Kulanıcılar')
