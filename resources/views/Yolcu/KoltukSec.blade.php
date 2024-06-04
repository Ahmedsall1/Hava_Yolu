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
                    <h4>Standart Koltuk Ucreti: {{ $ucus['ucret'] }} TL</h4>
                </div>
                <div class="form-group">
                    <h3>Ucak Koltuklari</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <img width="200" height="100" src="{{ asset('images\UcakB.png') }}" alt="">
        </div>
        <div class="container">


            <table class="table" border="1">
                <img  width="150" height="150" src="{{asset('images\sol.png')}}" alt="">
                <tbody>

                    @foreach ($ucakKoltuklari as $index => $koltuk)
                        @if ($index % $harf == 0)
                            <tr>
                        @endif

                        <td><a style=" color:rgb(253, 222, 85, 1);"
                                href="{{ route('Ucus.Kesinlestir', ['ucus_id' => $ucus->id, 'koltuk_id' => $koltuk->id]) }}">{{ $koltuk->no }}</a>
                        </td>

                        @if (($index + 1) % $harf == 0)
                            </tr>
                        @endif
                    @endforeach


                    @if (count($ucakKoltuklari) % $harf != 0)
                        </tr>
                    @endif
                </tbody>

            </table>
            <img  width="150" height="150" src="{{asset('images\sag.png')}}" alt="">
        </div>
        <div class="container">
            <img  width="300" height="100" src="{{asset('images\UcakS.png')}}" alt="">
                </div>



    @endif


@endsection

@section('title', 'Koltuk Sec')
