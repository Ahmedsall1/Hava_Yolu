@extends('Layout')
@section('content')
<h1>Ucusler</h1>
<div>
    <ul>


    <li>ID:{{$Ucus['id'] }}  -> Ucret: {{$Ucus['ucret']}} seferID:{{$Ucus['sefer_id']}} ucakID:{{$Ucus['ucak_id']}} ucusNO:{{$Ucus['ucusno']}}</li>
    <br>

    </ul>

</div>
@endsection

@section('title','Ucusler')
