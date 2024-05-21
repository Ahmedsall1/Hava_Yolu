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
            <div class="form-group">
                <label for="Ucus-nerden">Nerden : </label>
                <select class="form-control" id="Ucus-nerden" name="Ucus-nerden" value="{{$Ucus->nerden}}" required>
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}" {{ $Ucus->nerden == $airport ? 'selected' : '' }}>{{ $airport }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="Ucus-nereye">Nereye : </label>
                <select class="form-control" id="Ucus-nereye" name="Ucus-nereye" value="{{$Ucus->nereye}}" required>
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}" {{ $Ucus->nereye == $airport ? 'selected' : '' }}>{{ $airport }}</option>
                    @endforeach
                </select>
            </div>




            <div class="form-group">
                <label for="Ucus-sure">Sure : </label>
                <input type="time" class="form-control" id="Ucus-sure" name="Ucus-sure" value="{{$Ucus->sure}}" required>
            </div>


            <div class="form-group">
                <label for="Ucus-KM">KM : </label>
                <input type="number" class="form-control" id="Ucus-KM" name="Ucus-KM" value="{{$Ucus->KM}}" required>
            </div>


            <div class="form-group">
                <label for="Ucus-tarih">Tarih : </label>
                <input type="date" class="form-control" id="Ucus-tarih" name="Ucus-tarih" value="{{$Ucus->tarih}}" required>
            </div>


            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

</div>
@endsection

@section('title','Ucus Düzenle')
