@extends('Layout')

@section('content')


    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif





        @if (is_null($ucuses)) <!-- Updated variable name to $ucuses -->
        <div class="container" style="height: 300px ">

            <h2 style="color:rgb(253, 222, 85, 1); "> <i class="fa-regular fa-calendar-days" ></i> {{ $sefer['tarih'] }}  <i class="fa-solid fa-plane-departure"></i> {{ $sefer['nerden'] }}  <i class="fa-solid fa-plane-arrival"></i>  {{ $sefer['nereye'] }} <br><br><br><i class="fa-regular fa-face-frown"></i> Bu sefer için uçuş bulunamadı <i class="fa-solid fa-exclamation"></i>   </h2>


        </div>

        @else
            <div class="seferContainer">
                <table class="table">
                    <thead style=" color:rgb(253, 222, 85, 1);">

                        <tr>
                            <td style="color: rgb(255, 255, 255)">Tarih: {{ $sefer['tarih'] }}</td>
                            <td>Nerden :{{ $sefer['nerden'] }} -> Nereye:{{ $sefer['nereye'] }}</td>
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <th>Sirket</th>
                            <th>Uçuş No</th>

                            <th>Saat</th>
                            <th>Süre</th>
                            <th>Ücret</th>
                            <th>Seç</th>
                        </tr>
                    </thead>
                    <tbody style=" color:rgb(255, 255, 255);">
                        @if ($ucuses)
                            <!-- Updated variable name to $ucuses -->
                            @foreach ($ucuses as $ucus)
                                <!-- Updated variable name to $ucuses -->

                                <tr>

                                    <td>
                                        @php
                                            $airlineName = '';
                                            $imagepath = '';
                                            foreach ($ucak as $uc) {
                                                if ($uc->id === $ucus->ucak_id) {
                                                    foreach ($sirket as $sir) {
                                                        if ($sir->id === $uc->sirket_id) {
                                                            $airlineName = $sir->name;
                                                            $imagepath = $sir->image;
                                                            break 2;
                                                        }
                                                    }
                                                }
                                            }
                                            echo '<img src="' .
                                                asset($imagepath) .
                                                '" alt="' .
                                                $airlineName .
                                                '" width="50" height="50">';

                                        @endphp

                                    </td>

                                    <td style=" color:rgb(253, 222, 85, 1);">{{ $ucus->ucusno }}</td>

                                    <td>{{ $ucus->saat }}</td>
                                    <td style=" color:rgb(253, 222, 85, 1);">{{ $ucus->sure }}</td>
                                    <td>{{ $ucus->ucret }} TL</td>
                                    <td><a href="{{ route('Ucus.KoltukSec', ['id' => $ucus->id]) }}"><img class="icon"
                                                width="50" height="50" src="{{ asset('images\Ucus.png') }}"
                                                alt=""></a></td>

                                </tr>
                            @endforeach

                        @endif

                    </tbody>
                </table>
            </div>
        @endif


@endsection

@section('title', 'Sefer Bul')
