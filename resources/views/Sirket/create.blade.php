@extends('Layout')
@section('content')
<h1>Sirket Ekle</h1>
<div>
    <div class="container mt-5">

        <!-- Display success message -->




        <form action="{{route('Sirket.store')}}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="Sirket-yonetici">yonetici : </label>
                <select class="form-control" id="Sirket-sefer" name="Sirket-sefer"  required>
                    @foreach($yoneticiler as $airport)
                    <option value="{{ $airport->id }}"> ID:{{ $airport->id   }} ADI: {{$airport->name}}  Tipi:{{$airport->type}}</option>
                    @endforeach
                </select>
            </div>



            <div class="form-group">
                <label for="Sirket-name">Sirket ADI : </label>
                <input type="text" class="form-control" id="Sirket-name" name="Sirket-name" required>
            </div>

            <div class="form-group">
                <label for="Sirket-image">Sirket Image:</label>
                <input class="form-control" type="file" id="Sirket-image" name="Sirket-image" required>
            </div>


            <button type="submit" class="form-control">Kaydet</button>
        </form>
    </div>


</div>
@endsection

@section('title','Sirket Ekle')
