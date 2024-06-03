@extends('Layout')

@section('title', 'Search Results')

@section('content')
    <h1>Search Results for "{{ $query }}"</h1>

    @if($sefers->isEmpty())
        <p>No results found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nerden</th>
                    <th>Nereye</th>
                    <th>Tarih</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sefers as $sefer)
                    <tr>
                        <td>{{ $sefer->nerden }}</td>
                        <td>{{ $sefer->nereye }}</td>
                        <td>{{ $sefer->tarih }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
