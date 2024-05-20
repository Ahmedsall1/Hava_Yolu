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



        <form action="{{route('Sefer.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="sefer-nerden">Nerden : </label>
                <select class="form-control" id="sefer-nerden" name="sefer-nerden" required>
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>
<<<<<<< HEAD
            @error('sefer-KM')
=======
            @error('sefer-sure')
>>>>>>> 79f7c714625517ade4b19aa85ada31f824c13217
                {{message}}
            @enderror
            <div class="form-group">
                <label for="sefer-nereye">Nereye : </label>
                <select class="form-control" id="sefer-nereye" name="sefer-nereye" required>
                    @foreach($airports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                    @endforeach
                </select>
            </div>

<<<<<<< HEAD
            <!-- <div class="form-group">
                <label for="sefer-sure">Sure : </label>
                <input type="time" class="form-control" id="sefer-sure" name="sefer-sure" value="{{old('sefer-sure')}}" required>
            </div> -->
=======
            <div class="form-group">
                <label for="sefer-sure">Sure : </label>
                <input type="time" class="form-control" id="sefer-sure" name="sefer-sure" value="{{old('sefer-sure')}}" required>
            </div>
>>>>>>> 79f7c714625517ade4b19aa85ada31f824c13217

            <div class="form-group">
                <label for="sefer-KM">KM : </label>
                <input type="number" class="form-control" id="sefer-KM" name="sefer-KM" value="{{old('sefer-KM')}}" required>
            </div>


            <div class="form-group">
                <label for="sefer-tarih">Tarih : </label>
                <input type="date" class="form-control" id="sefer-tarih" name="sefer-tarih" value="{{old('sefer-tarih')}}" required>
            </div>


            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

</div>
@endsection

@section('title','Sefer Ekle')
