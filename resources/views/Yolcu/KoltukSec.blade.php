@extends('Layout')

@section('content')

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if ($ucus)
        <div class="container">


            <div>

                <div class="form-group">
                    <h3 style=" color:rgb(253, 222, 85, 1);">ucus No :{{ $ucus['ucusno'] }} <-> Sefer
                            Id:{{ $ucus['sefer_id'] }} </h3>
                </div>
                <div class="form-group">
                    <h4>Standart Koltuk Ucreti: </h4><h4 style=" color:rgb(253, 222, 85, 1);">{{ $ucus['ucret'] }} TL</h4>
                </div>
                <div class="form-group">
                    <h3>Ucak Koltuklari</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <img width="2200" height="400" src="{{ asset('images\UcakBas.png') }}" alt="">
        </div>
        <div class="container">


            <table class="table" border="1">
                <img width="300" height="300" src="{{ asset('images\sol.png') }}" alt="">
                <tbody>
                    <tr><td  class="type-k" style="background-color: red  ">dolu</td>
                        <td class="type-k" style="background-color: aliceblue">Ekonomik
                        </td>
                        <td class="type-k" style="background-color: rgb(38, 53, 93);">Standart
                        </td>
                        <td class="type-k" style="background-color: rgb(255, 143, 0);">Business
                        </td>
                    </tr>
                    @php
    $dollu = 0;
@endphp

@foreach ($ucakKoltuklari as $index => $koltuk)
    @if ($index % $harf == 0)
        <tr>
    @endif

    @php
        $isDolu = false;
        foreach ($dolukoltuk as $key => $dolu) {
            if ($koltuk->id == $dolu) {
                $isDolu = true;
                break;
            }
        }
    @endphp

    @if ($isDolu)
        <td class="koltuk" style="background-color: red" >{{ $koltuk->no }}</td>
    @else
        @if ($koltuk->tipi == 'Ekonomik')
            <td class="koltuk" style="background-color: aliceblue;">
                <a style="color: rgb(88, 1, 1);" href="{{ route('Ucus.Kesinlestir', ['ucus_id' => $ucus->id, 'koltuk_id' => $koltuk->id]) }}">{{ $koltuk->no }}</a>
            </td>
        @elseif ($koltuk->tipi == 'Standart')
            <td class="koltuk" style="background-color: rgb(38, 53, 93);">
                <a style="color: white;" href="{{ route('Ucus.Kesinlestir', ['ucus_id' => $ucus->id, 'koltuk_id' => $koltuk->id]) }}">{{ $koltuk->no }}</a>
            </td>
        @elseif ($koltuk->tipi == 'Business')
            <td class="koltuk" style="background-color: rgb(255, 143, 0);">
                <a style="color: rgb(88, 1, 1);" href="{{ route('Ucus.Kesinlestir', ['ucus_id' => $ucus->id, 'koltuk_id' => $koltuk->id]) }}">{{ $koltuk->no }}</a>
            </td>
        @endif
    @endif

    @if (($index + 1) % $harf == 0)
        </tr>
    @endif
@endforeach

@if (count($ucakKoltuklari) % $harf != 0)
    </tr>
@endif
                </tbody>

            </table>
            <img width="300" height="300" src="{{ asset('images\sag.png') }}" alt="">
        </div>
        <div class="container">
            <img width="1200" height="600" src="{{ asset('images\UcakSon.png') }}" alt="">
        </div>



    @endif


@endsection

@section('title', 'Koltuk Sec')
