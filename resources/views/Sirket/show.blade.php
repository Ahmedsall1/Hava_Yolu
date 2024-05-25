@eSirkettends('Layout')
@section('content')
<h1>Sirketler</h1>
<div>
    <ul>


    <li>ID: {{ $Sirket['id'] }} Sirket ADI: {{ $Sirket['name'] }} Yonetici ID: {{ $Sirket['yonetici_id'] }}</li>
    <br>

    </ul>

</div>
@endsection

@section('title','Ucusler')
