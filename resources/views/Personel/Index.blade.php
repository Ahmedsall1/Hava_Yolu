@extends('Layout')

@section('content')

<h1 class="upcomming" style="color: #005096"> Merhaba {{ $name }}</h1>



    <div class="seferContainer">
    <table class="table">
        <thead style=" color:rgb(253, 222, 85, 1);">

            @foreach($seferler as $sefer)

            @endforeach
            <tr>

            </tr>
            <tr>
                <th>Sirket</th>
                <th>Uçuş No</th>

                <th>Saat</th>
                <th>Süre</th>
                <th>nerden</th>
                <th>nereye</th>
                <th>Tarih</th>


            </tr>
        </thead>
        <tbody style=" color:rgb(255, 255, 255);">
            @if ($ucuses)
                <!-- Updated variable name to $ucuses -->
                @php
                    $i=0;
                @endphp
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
                        <td>{{ $seferler[$i]->nerden }} </td>
                        <td>{{ $seferler[$i]->nereye }}</td>
                        <td style="color: rgb(255, 255, 255)"> {{ $seferler[$i]->tarih }}</td>
                        @php
                            $i++;
                        @endphp

                    </tr>
                @endforeach

            @endif

        </tbody>
    </table>
</div>
@endsection

@section('title', 'Personel')
