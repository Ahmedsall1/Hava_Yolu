@extends('Layout')

@section('content')
<h1>Ucus Sec</h1>

@if (session('success'))
<div>{{ session('success') }}</div>
@endif

@if ($ucus)
<h2>Ucus No :{{ $ucus['ucusno'] }} -> Sefer Id:{{ $ucus['sefer_id'] }} Ucret: {{ $ucus['ucret'] }}</h2>

<h2>Ucak Koltuklari</h2>

<table class="table" border="1">
    <tbody>
        @foreach ($ucakKoltuklari as $index => $koltuk)
            @if ($index % 6 == 0)
                <tr>
            @endif

            <td><a href="{{ route('Ucus.Kesinlestir', ['ucus_id' => $ucus->id,'koltuk_id' => $koltuk->id]) }}">{{ $koltuk->no }}</a></td>

            @if (($index + 1) % 6 == 0)
                </tr>
            @endif
        @endforeach


        @if (count($ucakKoltuklari) % 6 != 0)
            </tr>
        @endif
    </tbody>
</table>





@endif


@endsection

@section('title', 'Koltuk Sec')
