<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeferController extends Controller
{
    public static $AirPorts=array("Istanbul Airport",
    "Adana Airport",
    "Ankara Esenboga Airport",
    "Gazipasa Airport",
    "Antalya Airport",
    "Balikesir Koca Seyit Airport",
    "Bursa Yenisehir Airport",
    "Denizli Cardak Airport",
    "Diyarbakir Airport",
    "Elazig Airport",
    "Erzurum Airport",
    "Eskisehir Hasan Polatkan Airport",
    "Gaziantep Airport",
    "Hatay Airport",
    "Isparta Suleyman Demirel Airport",
    "Istanbul Sabiha Gokcen Airport",
    "Izmir Adnan Menderes Airport",
    "Kars Harakani Airport",
    "Kayseri Airport",
    "Kocaeli Cengiz Topel Airport",
    "Konya Airport",
    "Zafer Airport",
    "Malatya Airport",
    "Dalaman Airport",
    "Milas–Bodrum Airport",
    "Nevsehir Kapadokya Airport",
    "Ordu Giresun Airport",
    "Samsun-Carsamba Airport",
    "Sinop Airport",
    "Sivas Nuri Demirag Airport",
    "Sanliurfa GAP Airport",
    "Tekirdag Corlu Airport",
    "Trabzon Airport",
    "Van Ferit Melen Airport",
    "Zonguldak Caycuma Airport",
    "Adiyaman Airport",
    "Agri Ahmed-i Hani Airport",
    "Amasya Merzifon Airport",
    "Aydin Cildir Airport",
    "Balikesir Merkez Airport",
    "Batman Airport",
    "Bingol Airport",
    "Canakkale Airport",
    "Gokceada Airport",
    "Erzincan Airport",
    "Hakkari–Yuksekova Selahaddin Eyyubi Airport",
    "Igdir Airport",
    "Istanbul Hezarfen Airfield",
    "Selcuk–Efes Airport",
    "Kahramanmaras Airport",
    "Kastamonu Airport",
    "Mardin Airport",
    "Mus Airport",
    "Rize-Artvin Airport",
    "Siirt Airport",
    "Sirnak Serafettin Elci Airport",
    "Tokat Airport",
    "Usak Airport",
    "İncirlik Air Base",
    "Afyon Airport",
    "Merzifon Air Base",
    "Etimesgut Air Base",
    "Guvercinlik Army Air Base",
    "Murted Air Base",
    "Balikesir Air Base",
    "Bandirma Air Base",
    "Bursa Yunuseli Airport",
    "Diyarbakir Air Base",
    "Kesan Army Air Base",
    "Eskisehir Air Base",
    "Sivrihisar Air Base",
    "Istanbul Samandira Army Air Base",
    "Cigli Air Base",
    "Gaziemir Army Air Base",
    "Kaklic Air Base",
    "Erkilet Air Base",
    "Cengiz Topel Naval Air Station",
    "Konya Air Base",
    "Kutahya Air Base",
    "Erhac Air Base",
    "Malatya Tulga Army Air Base",
    "Akhisar Air Base",
    "Bodrum-Imsik Airport",
    "Yalova Air Base",
    "Cukurova Regional Airport",
    "Kas-Demre Bati Antalya Airport",
    "Tatvan Airport",
    "Edirne-Kirklareli Airport",
    "Cesme-Alacati Airport",
    "Gumushane-Bayburt Airport",
    "Karaman Airport",
    "Cukurova Regional Airport",
    "Hasandagi (Nigde Aksaray) Airport",
    "Yozgat Airport");
    private static function getData(){
        $air=array();
        for($i=0;$i<count(self::$AirPorts);$i++){
            array_push($air,['id'=>$i,'nerden'=>self::$AirPorts[0],'nereye'=>self::$AirPorts[$i],'Tarih'=> "10.05.2024"]);
        }
        return $air;
    }
    public function index()
    {
        return view('Sefer.index',['Seferler'=>self::getData()]);
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show(string $id)
    {

        $air=self::getData();
        $index=array_search($id,array_column(self::getData(),'id'));
        if($index===false){
            abort(404);
        }
        return view('Sefer.show',['Sefer'=>$air[$index]]);

    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
}
