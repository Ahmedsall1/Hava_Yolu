@extends('Layout')
@section('content')
<h1>Ucusler</h1>
<div>
    <ul>
        @foreach ($Ucuslar as $x)

        <li>
    <a href="{{ route('Ucus.show', ['Ucu' => $x['id']]) }}">ID:{{ $x['id'] }} Ucret{{ $x['ucret'] }} seferID{{ $x['sefer_id'] }} UcakID:{{ $x['ucak_id'] }}</a>
    <a href="{{ route('Ucus.edit', ['Ucu' => $x['id']]) }}">Düzenle</a>
</li>

        <br>

        @endforeach
    </ul>
    <a href="{{route('Ucus.create')}}">Ucus Ekle</a>
</div>
@endsection

@section('title','Ucusler')
