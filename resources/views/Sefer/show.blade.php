@extends('Layout')
@section('content')
<h1>Seferler</h1>
<div>
    <ul>


    <li>ID:{{$Sefer['id'] }} {{$Sefer['nerden'] }} -> {{$Sefer['nereye']}} Tarih:{{$Sefer['Tarih']}} </li>
    <br>

    </ul>

</div>
@endsection

@section('title','Seferler')
