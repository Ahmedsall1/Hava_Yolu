@extends('Layout')
@section('content')
<h1>Seferler</h1>
<div>
    <ul>
        @foreach ($Seferler as $x)

        <li>

            <a href="{{route('Sefer.show',['Sefer'=>$x['id']])}}">ID:{{$x['id'] }} {{$x['nerden'] }} -> {{$x['nereye']}} Tarih:{{$x['tarih']}}  KM:{{$x['km']}}</a>

            <a href="{{route('Sefer.show',['Sefer'=>$x['id']])}}">ID:{{$x['id'] }} {{$x['nerden'] }} -> {{$x['nereye']}} Tarih:{{$x['tarih']}} sure:{{$x['sure']}} KM:{{$x['KM']}}</a>

            <a href="{{route('Sefer.edit',['Sefer'=>$x['id']])}}">Düzenle</a>

            <form action="{{route('Sefer.destroy',['Sefer'=>$x['id']] ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" />
            </form>
        </li>

        <br>

        @endforeach
    </ul>
    <a href="{{route('Sefer.create')}}">Sefer Ekle</a>
</div>
@endsection

@section('title','Seferler')
