@extends('Layout')
@section('content')
<h1>Biletim</h1>

<h2>Yolcu: {{ $yolcu->name }}</h2>
<h2>Uçuş : {{ $ucus->ucusno }}</h2>
<h2>Koltuk : {{ $koltuk->no }}</h2>



@endsection



@section('title', 'Bilet')
