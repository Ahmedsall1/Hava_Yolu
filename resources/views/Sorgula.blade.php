@extends('Layout')
@section('content')


<div id="Sorgula">
    <h1>Bilet sorgula</h1>

    <form action="{{ route('Ucus.Sorgula') }}" method="POST">
        @csrf
        <div class="seferBulContainer">
            
        <div class="form-group">
            <label for="biletno"><i class="fa-solid fa-ticket"></i> Bilet NO </label>
            <input type="text" class="form-control" id="biletno" name="biletno" value="{{ old('biletno') }}" required>
        </div>
        <div class="form-group">
            <label for="adi"><i class="fa-solid fa-circle-user"></i> ADI </label>
            <input type="text" class="form-control" id="adi" name="adi" required>
        </div>
        <button type="submit" class="submit">Sorgula<i class="fa-solid fa-magnifying-glass"></i> </button>
        </div>
    </form>
</div>




@endsection



@section('title','Bilet Sorgulama')
