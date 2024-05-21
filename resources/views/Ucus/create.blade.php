@extends('Layout')
@section('content')
<h1>Ucus Ekle</h1>
<div>
    <div class="container mt-5">

        <!-- Display success message -->




        <form action="{{route('Ucus.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Ucus-nerden">Nerden : </label>

            </div>



                

            <div class="form-group">
                <label for="Ucus-nereye">Nereye : </label>

            </div>


            <!-- <div class="form-group">
                <label for="Ucus-sure">Sure : </label>
                <input type="time" class="form-control" id="Ucus-sure" name="Ucus-sure" value="{{old('Ucus-sure')}}" required>
            </div> -->

            <div class="form-group">
                <label for="Ucus-sure">Sure : </label>
                <input type="time" class="form-control" id="Ucus-sure" name="Ucus-sure" value="{{old('Ucus-sure')}}" required>
            </div>


            <div class="form-group">
                <label for="Ucus-KM">KM : </label>
                <input type="number" class="form-control" id="Ucus-KM" name="Ucus-KM" value="{{old('Ucus-KM')}}" required>
            </div>


            <div class="form-group">
                <label for="Ucus-tarih">Tarih : </label>
                <input type="date" class="form-control" id="Ucus-tarih" name="Ucus-tarih" value="{{old('Ucus-tarih')}}" required>
            </div>


            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

</div>
@endsection

@section('title','Ucus Ekle')
