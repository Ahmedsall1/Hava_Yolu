@extends('Layout')
@section('content')
<h1>Seferler</h1>
<div>
    <ul>
    @foreach ($Seferler as $x)
    <a href="{{route('Sefer.show',['Sefer'=>$x['id']])}}">
    <li>ID:{{$x['id'] }} {{$x['nerden'] }} -> {{$x['nereye']}} Tarih:{{$x['tarih']}} sure:{{$x['sure']}} KM:{{$x['KM']}}  </li></a>

    <br>
    @endforeach
    </ul>
</div>
@endsection

@section('title','Seferler')
