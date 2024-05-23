@extends('Layout')


@section('content')

<h1>Sefer Bul</h1>


<form action="{{route('Ucus.find')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="sefer-nerden">Nerden : </label>
                <select class="form-control" id="sefer-nerden" name="sefer-nerden" required>
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="sefer-nereye">Nereye : </label>
                <select class="form-control" id="sefer-nereye" name="sefer-nereye" required>
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>




            <div class="form-group">
                <label for="sefer-tarih">Tarih : </label>
                <input type="date" class="form-control" id="sefer-tarih" name="sefer-tarih" value="{{old('sefer-tarih')}}" required>
            </div>


            <button type="submit" class="btn btn-primary">Sefer Bul</button>
        </form>

@endsection
@section('title','Sefer Bul')
