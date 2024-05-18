@extends('Layout')
@section('content')
<h1>Seferler</h1>
<div>
    <ul>


    <li>ID:{{$Sefer['id'] }} {{$Sefer['nerden'] }} -> {{$Sefer['nereye']}} Tarih:{{$Sefer['tarih']}} sure:{{$Sefer['sure']}} KM:{{$Sefer['KM']}}</li>
    <br>

    </ul>

</div>
@endsection

@section('title','Seferler')
