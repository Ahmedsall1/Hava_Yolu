@extends('Layout')
@section('content')
<h1>Biletlerim</h1>

<h2>Yolcu: {{ $yolcu->name }}</h2>

@foreach ($biletler as $bilet)

    <h4><a href="{{route('Ucus.Bilet',['biletno'=>$bilet['biletno'],'bilet_id'=>$bilet['id']])}}">{{$bilet->biletno}}</a></h4>

@endforeach
@if ($biletler->IsEmpty())
        <h2> Biletiniz bulunmadi</h2>
@endif


@endsection

<script>
        // Prevent the user from going back to the previous page
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>

@section('title', 'Biletlerim')
