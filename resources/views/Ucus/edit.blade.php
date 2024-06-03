@extends('Layout')
@section('content')
<h1>Ucus Ekle</h1>
<div>
    <div class="container mt-5">

        <!-- Display success message -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif



        <form action="{{route('Ucus.update', $Ucus->id)}}" method="POST">
            @csrf
            @method('PUT')




            @error('Ucus-sure')
                {{message}}
            @enderror

            <div class="form-group">
                <label for="Ucus-sefer">Sefer : </label>
                <select class="form-control" id="Ucus-sefer" name="Ucus-sefer" value="{{$Ucus->sefer}}" required>
                    @foreach($Seferler as $airport)
                    <!-- {{ $Ucus->sefer == $airport ? 'selected' : '' }} -->
                    <option value="{{ $airport->id }}" >{{ $airport->id   }} {{$airport->nerden}} -> {{$airport->nereye}} {{$airport->tarih}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Ucus-ucak">ucak : </label>
                <select class="form-control" id="Ucus-ucak" name="Ucus-ucak" value="{{$Ucus->ucak_id}}" required>
                    @foreach($ucaklar as $airport)
                    <!-- {{ $Ucus->sefer == $airport ? 'selected' : '' }} -->
                    <option value="{{ $airport->id }}" >{{ $airport->id   }} {{$airport->tipi}} -> {{$airport->pilot_id}} {{$airport->hostese_id}}</option>
                    @endforeach
                </select>
            </div>



            <div class="form-group">
                <label for="Ucus-sure">Sure : </label>
                <input type="time" class="form-control" id="Ucus-sure" name="Ucus-sure" value="{{$Ucus->sure}}" required>
            </div>

            <div class="form-group">
                <label for="Ucus-ucusno">Ucus No : </label>
                <input type="text" class="form-control" id="Ucus-ucusno" name="Ucus-ucusno" value="{{$Ucus->ucusno}}" required>
            </div>

            <div class="form-group">
                <label for="Ucus-saat">saat : </label>
                <input type="time" class="form-control" id="Ucus-saat" name="Ucus-saat" value="{{$Ucus->saat}}" required>
            </div>

            <div class="form-group">
                <label for="Ucus-ucret">ucret : </label>
                <input type="number" class="form-control" id="Ucus-ucret" name="Ucus-ucret" value="{{$Ucus->ucret}}" required>
            </div>




            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

</div>
@endsection

@section('title','Ucus Düzenle')
