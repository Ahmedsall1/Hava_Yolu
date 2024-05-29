@extends('Layout')
@section('content')
<h1>Bilet sorgula</h1>

<div id="Sorgula">

    <form action="{{ route('Ucus.Sorgula') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="biletno">Bilet Numarasi: </label>
            <input type="text" class="form-control" id="biletno" name="biletno" value="{{ old('biletno') }}" required>
        </div>
        <div class="form-group">
            <label for="adi">ADI: </label>
            <input type="text" class="form-control" id="adi" name="adi" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>




@endsection



@section('title','Bilet Sorgulama')
