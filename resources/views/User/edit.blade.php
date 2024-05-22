@extends('Layout')
@section('content')
<h1>Kulanici Ekle</h1>
<div>
    <div class="container mt-5">

        <form action="{{route('User.update',$User->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="User-tipi">Tipi : </label>
                <select class="form-control" id="User-tipi" name="User-tipi" value="{{$User->type}}" required>
                    @foreach($tipi as $airport)
                        <option value="{{ $airport }}"> {{$airport}} </option>
                        @endforeach
                </select>
            </div>




            <div class="form-group">
                <label for="User-name">name : </label>
                <input type="text" class="form-control" id="User-name" name="User-name" value="{{$User->name}}" required>
            </div>


            <div class="form-group">
                <label for="User-email">email : </label>
                <input type="email" class="form-control" id="User-email" name="User-email" value="{{$User->email}}" required>
            </div>




            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

</div>
@endsection

@section('title','Kulanici Ekle')
