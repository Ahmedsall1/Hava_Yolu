<!-- resources/views/search/results.blade.php -->
@extends('Layout')

@section('content')
<h1>Search Results for "{{ $query }}"</h1>

@if($sefers->count())
<table class="table" border="1">
    <thead>
        <tr>
            <th>Nerden</th>
            <th>Nereye</th>
            <th>KM</th>
            <th>Tarih</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sefers as $sefer)
        <tr>
            <td>{{ $sefer->nerden }}</td>
            <td>{{ $sefer->nereye }}</td>
            <td>{{ $sefer->km }}</td>
            <td>{{ $sefer->tarih }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $sefers->appends(['query' => $query])->links() }}
@else
<p>No results found for "{{ $query }}"</p>
@endif
@endsection

@section('title', 'Search Results')
