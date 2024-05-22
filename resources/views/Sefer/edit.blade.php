@extends('Layout')
@section('content')
<h1>Sefer Ekle</h1>
<div>
    <div class="container mt-5">

        <!-- Display success message -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif



        <form action="{{route('Sefer.update', $Sefer->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="sefer-nerden">Nerden : </label>
                <select class="form-control" id="sefer-nerden" name="sefer-nerden" value="{{$Sefer->nerden}}" required>
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}" {{ $Sefer->nerden == $airport ? 'selected' : '' }}>{{ $airport }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="sefer-nereye">Nereye : </label>
                <select class="form-control" id="sefer-nereye" name="sefer-nereye" value="{{$Sefer->nereye}}" required>
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}" {{ $Sefer->nereye == $airport ? 'selected' : '' }}>{{ $airport }}</option>
                    @endforeach
                </select>
            </div>




            <div class="form-group">
                <label for="sefer-sure">Sure : </label>
                <input type="time" class="form-control" id="sefer-sure" name="sefer-sure" value="{{$Sefer->sure}}" required>
            </div>


            <div class="form-group">
                <label for="sefer-KM">KM : </label>
                <input type="number" class="form-control" id="sefer-KM" name="sefer-KM" value="{{$Sefer->KM}}" required>
            </div>


            <div class="form-group">
                <label for="sefer-tarih">Tarih : </label>
                <input type="date" class="form-control" id="sefer-tarih" name="sefer-tarih" value="{{$Sefer->tarih}}" required>
            </div>


            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

</div>
@endsection

@section('title','Sefer Düzenle')
