@extends('Layout')
@section('content')
<form action="{{route('Ucus.find')}}" method="POST">
    @csrf

    <div class="container">
        <img class="soora" style="color: #005096;" src="{{asset('images\logo.png')}}" alt="">

        <div>



            <div class="form-group">

                <label for="sefer-nerden" >
                    <i class="fa-solid fa-plane-departure"></i> Nereden </label>
                <select class="form-control" id="sefer-nerden" name="sefer-nerden" required style="color: #005096;">
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="sefer-nereye" for="sefer-nereye"  >
                    <i class="fa-solid fa-plane-arrival"></i>Nereye </label>
                <select class="form-control" id="sefer-nereye" name="sefer-nereye" required style="color: #005096;">
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>




            <div class="form-group">
                <label for="sefer-tarih">
                    <i class="fa-regular fa-calendar-days"></i>Tarih </label>
                <input type="date" class="form-control" id="sefer-tarih" name="sefer-tarih" value="{{old('sefer-tarih')}}" style="color: #005096;" required>
            </div>


            <button type="submit" class="ana-submit"><i class="fa-solid fa-magnifying-glass"></i> Sefer Bul</button>
        </div>
    </div>
</form>
@endsection

@section('title','AnaSayfa')
