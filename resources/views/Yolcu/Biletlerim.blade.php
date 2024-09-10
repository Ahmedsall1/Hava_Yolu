@extends('Layout')
@section('styles')
    <link href="{{ asset('css/biletlerim.css') }}" rel="stylesheet">
@endsection
@section('content')

    @php
        use Carbon\Carbon;
        $i = 0;
    @endphp
    <div class="container-1">

        <h1 class="upcomming" style="color: #005096"> Biletleriniz</h1>
        @foreach ($biletler as $bilet)
            <div class="item">
                <div class="item-right">
                    <h2 class="num">{{ $i + 1 }}</h2>
                    <p class="day">ID</p>
                    <span class="up-border"></span>
                    <span class="down-border"></span>
                </div> <!-- end item-right -->

                <div class="item-left">
                    <p class="event">Nereden</p>
                    @php

                            $seferDate = Carbon::parse($seferler[$i]->tarih);
                        
                        $now = Carbon::now();
                    @endphp

                    @if ($seferDate->isPast())
                        <h2 class="title linethrough"> {{ $seferler[$i]->nerden }}</h2>
                    @else
                        <h4 class="title"><i class="fa-solid fa-location-dot"></i> {{ $seferler[$i]->nerden }}</h4>
                    @endif


                    <div class="sce">


                        <p><i class="fa-regular fa-calendar-days" style="color:black"></i> {{ $seferler[$i]->tarih }} |
                            bilet.ID:{{ $bilet->biletno }}</p><br />
                        <div class="fix"></div>
                        <p> <i class="fa-solid fa-clock" style="color:orange"></i> saati:{{ $ucusler[$i]->saat }} |
                            süre:{{ $ucusler[$i]->sure }} <i class="fa-solid fa-hourglass-half" style="color:orange"></i>
                        </p>
                    </div>

                    <div class="fix"></div>

                    <div class="loc">

                        <p><i class="fa-solid fa-plane-arrival" style="color:black"></i> {{ $seferler[$i]->nereye }} | <i
                                class="fa-solid fa-couch" style="color:black"></i> Koltuk: {{ $koltuklar[$i]->no }}</p>
                    </div>
                    <div class="fix"></div><a
                        href="{{ route('Ucus.Bilet', ['biletno' => $bilet['biletno'], 'bilet_id' => $bilet['id']]) }}">
                        <button class="booked" >Yazdır</button></a>


    </div> <!-- end item -->


    {{-- <div class="box">
                <ul class="left">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>

                <ul class="right">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="ticket">
                    <span class="airline">Lufthansa</span>
                    <span class="airline airlineslip">Lufthansa</span>
                    <span class="boarding">Boarding pass</span>
                    <div class="content">
                        <span class="jfk">JFK</span>
                        <span class="plane">
                            <?xml version="1.0" ?>
                            <svg clip-rule="evenodd" fill-rule="evenodd" height="60"
                                width="60" image-rendering="optimizeQuality" shape-rendering="geometricPrecision"
                                text-rendering="geometricPrecision" viewBox="0 0 500 500"
                                xmlns="http://www.w3.org/2000/svg">
                                <g stroke="#222">
                                    <line fill="none" stroke-linecap="round" stroke-width="30" x1="300"
                                        x2="55" y1="390" y2="390" />
                                    <path
                                        d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z"
                                        fill="#222" stroke-linejoin="round" stroke-width="10" />
                                </g>
                            </svg>
                        </span>
                        <span class="sfo">SFO</span>

                        <span class="jfk jfkslip">JFK</span>
                        <span class="plane planeslip">
                            <?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="50"
                                width="50" image-rendering="optimizeQuality" shape-rendering="geometricPrecision"
                                text-rendering="geometricPrecision" viewBox="0 0 500 500"
                                xmlns="http://www.w3.org/2000/svg">
                                <g stroke="#222">
                                    <line fill="none" stroke-linecap="round" stroke-width="30" x1="300"
                                        x2="55" y1="390" y2="390" />
                                    <path
                                        d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z"
                                        fill="#222" stroke-linejoin="round" stroke-width="10" />
                                </g>
                            </svg>
                        </span>
                        <span class="sfo sfoslip">SFO</span>
                        <div class="sub-content">
                            <span class="watermark">Lufthansa</span>
                            <span class="name">PASSENGER NAME<br><span>Rex, Anonasaurus</span></span>
                            <span class="flight">FLIGHT N&deg;<br><span>X3-65C3</span></span>
                            <span class="gate">GATE<br><span>11B</span></span>
                            <span class="seat">SEAT<br><span>{{ $koltuklar[$i]->no }}</span></span>
                            <span class="boardingtime">BOARDING TIME<br><span>8:25PM ON AUGUST 2013</span></span>

                            <span class="flight flightslip">FLIGHT N&deg;<br><span>X3-65C3</span></span>
                            <span class="seat seatslip">SEAT<br><span>45A</span></span>
                            <span class="name nameslip">PASSENGER NAME<br><span>Rex, Anonasaurus</span></span>
                        </div>
                    </div>
                    <div class="barcode"></div>
                    <div class="barcode slip"></div>
                </div>
            </div> --}}

    </div>

    @php
        $i++;
    @endphp
    @endforeach

    </div>

    @if ($biletler->IsEmpty())
        <h2> Biletiniz bulunmadi</h2>
    @endif
    <link href="https://fonts.googleapis.com/css?family=Cabin|Indie+Flower|Inknut+Antiqua|Lora|Ravi+Prakash"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />




@endsection

<script>
    // Prevent the user from going back to the previous page
    history.pushState(null, null, location.href);
    window.onpopstate = function() {
        history.go(1);
    };
</script>

@section('title', 'Biletlerim')
