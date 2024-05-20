@extends('Layout')
@section('content')
<h1>Seferler</h1>
<div>
    <ul>
        @foreach ($Seferler as $x)

        <li>
<<<<<<< HEAD
            <a href="{{route('Sefer.show',['Sefer'=>$x['id']])}}">ID:{{$x['id'] }} {{$x['nerden'] }} -> {{$x['nereye']}} Tarih:{{$x['tarih']}}  KM:{{$x['km']}}</a>
=======
            <a href="{{route('Sefer.show',['Sefer'=>$x['id']])}}">ID:{{$x['id'] }} {{$x['nerden'] }} -> {{$x['nereye']}} Tarih:{{$x['tarih']}} sure:{{$x['sure']}} KM:{{$x['KM']}}</a>
>>>>>>> 79f7c714625517ade4b19aa85ada31f824c13217
            <a href="{{route('Sefer.edit',['Sefer'=>$x['id']])}}">Düzenle</a>
        </li>

        <br>

        @endforeach
    </ul>
    <a href="{{route('Sefer.create')}}">Sefer Ekle</a>
</div>
@endsection

@section('title','Seferler')
