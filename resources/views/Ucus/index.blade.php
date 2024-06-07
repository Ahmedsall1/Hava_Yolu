@extends('Layout')
@section('content')
<h1>Ucusler</h1>
<div>
    <ul>
        @foreach ($ucuslar as $x)

        <li>
    <a href="{{ route('Ucus.show', ['Ucu' => $x['id']]) }}">ID:{{ $x['id'] }} Ucret{{ $x['ucret'] }} seferID{{ $x['sefer_id'] }} UcakID:{{ $x['ucak_id'] }}</a>
    <a href="{{ route('Ucus.edit', ['Ucu' => $x['id']]) }}">Düzenle</a>
    <form action="{{route('Ucus.destroy',['Ucu'=>$x['id']] ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" />
            </form>
</li>

        <br>

        @endforeach
    </ul>
    <a href="{{route('Ucus.create',['sefer_id'=>9031])}}">Ucus Ekle</a>
</div>
@endsection

@section('title','Ucusler')
