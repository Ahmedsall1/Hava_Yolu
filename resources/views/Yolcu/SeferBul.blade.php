@extends('Layout')

@section('styles')

@endsection
@section('content')



<form action="{{route('Ucus.find')}}" method="POST">
    @csrf

    <div class="container">




            <div class="form-group">

                <label for="sefer-nerden" >
                    <img class="icon" width="50" height="50" src="{{asset('images\Ucus.png')}}" alt="" > Nerden : </label>
                <select class="form-control" id="sefer-nerden" name="sefer-nerden" required style="color: #005096;">
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="sefer-nereye" >
                    <img class="icon" width="50" height="50" src="{{asset('images\inis.png')}}" alt="">Nereye : </label>
                <select class="form-control" id="sefer-nereye" name="sefer-nereye" required style="color: #005096;">
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>




            <div class="form-group">
                <label for="sefer-tarih">Tarih : </label>
                <input type="date" class="form-control" id="sefer-tarih" name="sefer-tarih" value="{{old('sefer-tarih')}}" style="color: #005096;" required>
            </div>


            <button type="submit" class="submit" style="color: #005096;">Sefer Bul</button>

    </div>
</form>

@endsection
@section('title','Sefer Bul')
