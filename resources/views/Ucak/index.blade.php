@extends('Layout')
@section('content')
<h1>Ucakler</h1>
<div>
    <ul>
        @foreach ($Ucaklar as $x)
        <li>
            <a href="{{ route('Ucak.show', ['Ucak' => $x['id']]) }}">ID: {{ $x['id'] }} tipi: {{ $x['tipi'] }} harf: {{ $x['harf'] }} HosteseID: {{ $x['hostese_id'] }}</a>
            <a href="{{ route('Ucak.edit', ['Ucak' => $x['id']]) }}">Düzenle</a>
        </li>
        <br>
        @endforeach
    </ul>
    <a href="{{route('Ucak.create')}}">Ucak Ekle</a>
</div>
@endsection

@section('title','Ucakler')
