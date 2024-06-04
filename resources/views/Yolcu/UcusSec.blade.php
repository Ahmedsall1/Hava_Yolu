@extends('Layout')

@section('content')


    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if ($sefer)
        <div class="container">


            <div>

                <div class="form-group">
                    <h4 style=" color:rgb(253, 222, 85, 1);">Nerden :{{ $sefer['nerden'] }} -> Nereye:{{ $sefer['nereye'] }}
                    </h4>
                </div>
                <div class="form-group">
                    <h3>Tarih: {{ $sefer['tarih'] }}</h3>
                </div>
            </div>
        </div>



        @if (is_null($ucuses)) <!-- Updated variable name to $ucuses -->
            <p>Bu sefer için uçuş bulunamadı.</p>
        @else
        <div class="container">
            <table class="table" border="1" >
                <thead style=" color:rgb(253, 222, 85, 1);">
                    <tr>
                        <th>Sirket</th>
                        <th>Uçuş No</th>

                        <th>Saat</th>
                        <th>Süre</th>
                        <th>Ücret</th>
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

                                <td>{{ $ucus->saat}}</td>
                                <td style=" color:rgb(253, 222, 85, 1);">{{ $ucus->sure }}</td>
                                <td >{{ $ucus->ucret }} TL</td>
                                <td><a href="{{ route('Ucus.KoltukSec', ['id' => $ucus->id]) }}"><img class="icon" width="50" height="50" src="{{asset('images\Ucus.png')}}" alt=""></a></td>

                            </tr>
                        @endforeach

                    @endif

                </tbody>
            </table>
        </div>
        @endif
    @else
        <p>Belirtilen kriterlere uygun sefer bulunamadı.</p>
    @endif

@endsection

@section('title', 'Sefer Bul')
