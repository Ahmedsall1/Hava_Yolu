@extends('Layout')
@section('content')
<h1>Ucus Ekle</h1>
<div>
    <div id="Sorgula">


        <form action="{{ route('Sefer.Sorgula') }}" method="POST">
            @csrf
            <div class="container">
            <div class="form-group">
                <label for="sefer-nerden">Nerden </label>
                <select class="form-control" id="sefer-nerden" name="sefer-nerden" required style="color: #005096;">
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sefer-nereye">Nereye </label>
                <select class="form-control" id="sefer-nereye" name="sefer-nereye" required style="color: #005096;">
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sefer-tarih">Tarih </label>
                <input type="date" class="form-control" id="sefer-tarih" name="sefer-tarih" value="{{old('sefer-tarih')}}" style="color: #005096;" required>
            </div>
            <button type="submit" class="btn btn-primary">Sorgula</button>
            </div>
        </form>
    </div>
    <div class="container mt-5">

        <!-- Display success message -->




        <form action="{{route('Ucus.store')}}" method="POST">
            @csrf


            <div class="form-group">
                <label for="Ucus-sefer">Sefer : </label>
                <input type="text" class="form-control" id="Ucus-sefer" name="Ucus-sefer" value="{{$sefer_id}}" required>
            </div>

            <div class="form-group">
                <label for="Ucus-ucak">ucak : </label>
                <select class="form-control" id="Ucus-ucak" name="Ucus-ucak" value="{{$ucaklar[1]}}" required>
                    @foreach($ucaklar as $airport)
                    <option value="{{ $airport->id }}" >{{ $airport->id   }} {{$airport->tipi}} -> {{$airport->pilot_id}} {{$airport->hostese_id}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Ucus-ucusno">Ucus No : </label>
                <input type="text" class="form-control" id="Ucus-ucusno" name="Ucus-ucusno" value="{{old('Ucus-ucusno')}}" required>
            </div>


            <div class="form-group">
                <label for="Ucus-sure">Sure : </label>
                <input type="time" class="form-control" id="Ucus-sure" name="Ucus-sure" value="{{old('Ucus-sure')}}" required>
            </div>


            <div class="form-group">
                <label for="Ucus-ucret">ucret : </label>
                <input type="number" class="form-control" id="Ucus-ucret" name="Ucus-ucret" value="{{old('Ucus-ucret')}}" required>
            </div>


            <div class="form-group">
                <label for="Ucus-saat">saat : </label>
                <input type="time" class="form-control" id="Ucus-saat" name="Ucus-saat" value="{{old('Ucus-saat')}}" required>
            </div>




            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

</div>
@endsection

@section('title','Ucus Ekle')
