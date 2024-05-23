@extends('Layout')

@section('content')
<h1>Ucus Sec</h1>

@if (session('success'))
<div>{{ session('success') }}</div>
@endif

@if ($sefer)
<h2>Nerden :{{ $sefer['nerden'] }} -> Nereye:{{ $sefer['nereye'] }} Tarih: {{ $sefer['tarih'] }}</h2>

<h2>Uçuş Bilgileri</h2>
@if (is_null($ucuses) ) <!-- Updated variable name to $ucuses -->
<p>Bu sefer için uçuş bulunamadı.</p>
@else
<table class="table" border="1">
    <thead>
        <tr>
            <th>Sirket</th>
            <th>Uçuş No</th>
            <th>Ücret</th>
            <th>Uçak ID</th>
        </tr>
    </thead>
    <tbody>
    @if ($ucuses) <!-- Updated variable name to $ucuses -->
        @foreach ($ucuses as $ucus) <!-- Updated variable name to $ucuses -->

        <tr>
            <td>
                @php
                $airlineName = '';
                foreach ($ucak as $uc) {
                    if ($uc->id === $ucus->ucak_id) {
                        foreach ($sirket as $sir) {
                            if ($sir->id === $uc->sirket_id) {
                                $airlineName = $sir->name;
                                break 2;
                            }
                        }
                    }
                }
                echo $airlineName;
                @endphp
            </td>

            <td><a href="{{ route('Ucus.KoltukSec', ['id' => $ucus->id]) }}">{{ $ucus->ucusno }}</a></td>
            <td>{{ $ucus->ucret }}</td>
            <td>{{ $ucus->ucak_id }}</td>

        </tr>

        @endforeach
    @endif
    </tbody>
</table>
@endif
@else
<p>Belirtilen kriterlere uygun sefer bulunamadı.</p>
@endif

@endsection

@section('title', 'Sefer Bul')
