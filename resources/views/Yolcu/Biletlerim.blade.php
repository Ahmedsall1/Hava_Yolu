@extends('Layout')
@section('content')
<h1>Biletlerim</h1>

<h2>Yolcu: {{ $user_id }}</h2>
<h2>Uçuş ID: {{ $ucus_id }}</h2>
<h2>Koltuk ID: {{ $koltuk_id }}</h2>

@endsection

<script>
        // Prevent the user from going back to the previous page
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>

@section('title', 'Biletlerim')
