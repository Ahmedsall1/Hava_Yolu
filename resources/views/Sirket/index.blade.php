@extends('Layout')
@section('content')
<h1>Sirketler</h1>
<div>
    <ul>
        @foreach ($Sirketler as $x)
        <li>
            <img src="{{asset($x->image)}}"  alt="{{ $x->name }}" width="50" height="50">

            <a href="{{ route('Sirket.show', ['Sirket' => $x['id']]) }}">ID: {{ $x['id'] }} Sirket ADI: {{ $x['name'] }} Yonetici ID: {{ $x['yonetici_id'] }} </a>
            <a href="{{ route('Sirket.edit', ['Sirket' => $x['id']]) }}">Düzenle</a>
            <form action="{{route('Sirket.destroy',['Sirket'=>$x['id']] ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" />
            </form>
        </li>
        <br>
        @endforeach
    </ul>
    <a href="{{route('Sirket.create')}}">Sirket Ekle</a>
</div>
@endsection

@section('title','Sirketler')
