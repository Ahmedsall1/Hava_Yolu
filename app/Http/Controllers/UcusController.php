<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sefer;
use App\Models\ucus;
use App\Models\Ucak;
use App\Models\Bilet;
use App\Models\Koltuk;
use App\Models\Sirket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UcusController extends Controller
{

    public function index()
    {

        $ucusler = Ucus::paginate(15);
        return view('ucus.index', ['ucuslar' => $ucusler]);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    KoltukSec
    public function KoltukSec($id)
    {
        error_log('ucus ID ' . $id);
        $ucuses = Ucus::findOrFail($id);
        $ucak = Ucak::findOrFail($ucuses->ucak_id);
        error_log('Ucak ID ' . $ucak->id);

        $ucaktipiTable = null;

        if ($ucak->tipi == "orta") {
            $ucaktipiTable = 'ucaktipi_2s';
        } elseif ($ucak->tipi == "kucuk") {
            $ucaktipiTable = 'ucaktipi_3s';
        } else {
            $ucaktipiTable = 'ucaktipi_1s';
        }

        $biletler = Bilet::where('ucus_id', $id)->pluck('koltuk_id')->toArray();
        foreach ($biletler as $bilet) {

            error_log('B ID: ' . $bilet);
        }

        $koltukIds = DB::table($ucaktipiTable)->pluck('koltuk_id')->toArray();

        $availableKoltukIds = array_diff($koltukIds, $biletler);

        $bosKoltuklar = Koltuk::whereIn('id', $availableKoltukIds)->get();

        return view('Yolcu/KoltukSec', [
            'ucus' => $ucuses,
            'ucakKoltuklari' => $bosKoltuklar
        ]);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    Kesinlestir
    public function Kesinlestir(string $ucus_id, string $koltuk_id)
    {
        return view('Yolcu/Kesinlestir', [
            'ucus' => $ucus_id,
            'koltuk' => $koltuk_id
        ]);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    register
    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',

        ]);

        // Create the new Yolcu (passenger) record
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Hash the password
            'type' => 'Yolcu',

        ]);


        // Optionally, you can log in the user after registration
        auth()->login($user);

        // Redirect the user to a dashboard or any other page
        return redirect()->route('Yolcu.Biletlerim', [

            'user_id' => $user->id,
            'ucus_id' => $request->input('ucus_id'),
            'koltuk_id' => $request->input('koltuk_id')
        ])->with('success', 'Registration successful!');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    Biletlerim
    public function Biletlerim($ucus_id , $koltuk_id , $user_id)
    {


            error_log('user' . $user_id . " ucus" . $ucus_id . " koltuk " . $koltuk_id);

            // Check if the bilet already exists
            $existingBilet = Bilet::where('ucus_id', $ucus_id)
                ->where('koltuk_id', $koltuk_id)
                ->where('yolcu_id', $user_id)
                ->first();

            if (!$existingBilet) {
                // If no existing bilet, create a new one
                $sayi = $user_id * 133 * $ucus_id * $koltuk_id;
                $bilet = new Bilet();
                $bilet->biletno = "TK{$sayi}";
                $bilet->yolcu_id = $user_id;
                $bilet->ucus_id = $ucus_id;
                $bilet->koltuk_id = $koltuk_id;
                $bilet->save();
            } else {

                $bilet = $existingBilet;
            }
            $biletler = Bilet::where('yolcu_id', $user_id)->get();
            return view('Yolcu/Biletlerim', ['user_id' => $user_id, 'ucus_id' => $ucus_id, 'koltuk_id' => $koltuk_id, 'biletler' => $biletler]);

    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    bilet
    public function Bilet($biletno, $bilet_id)
    {
        // Find the bilet or fail
        $bilet = Bilet::findOrFail($bilet_id);

        // Log the user ID
        error_log('user' . $bilet->yolcu_id);

        // Retrieve related models using the correct IDs
        $ucus = Ucus::findOrFail($bilet->ucus_id);
        $koltuk = Koltuk::findOrFail($bilet->koltuk_id);
        $yolcu = User::findOrFail($bilet->yolcu_id);

        // Return the view with the retrieved data
        return view('Yolcu/Bilet', [
            'yolcu' => $yolcu,
            'koltuk' => $koltuk,
            'ucus' => $ucus,
            'bilet' => $bilet
        ]);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    login
    public function login(Request $request)
    {
        // Validate the login data
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',

        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route('Yolcu.Biletlerim', [
                'user_id' => Auth::user()->id,
                'ucus_id' => $request->input('ucus_id'),
                'koltuk_id' => $request->input('koltuk_id')
            ])->with('success', 'Login successful!');
        }

        // If login attempt fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    find
    public function find(Request $request)
    {
        $request->validate([
            'sefer-nerden' => 'required',
            'sefer-nereye' => 'required',
            'sefer-tarih' => 'required',
        ]);

        $nerden = strip_tags($request->input('sefer-nerden'));
        $nereye = strip_tags($request->input('sefer-nereye'));
        $tarih = strip_tags($request->input('sefer-tarih'));

        $sefer = [
            'nerden' => $nerden,
            'nereye' => $nereye,
            'tarih' => $tarih
        ];
        $sefer1 = Sefer::where('nerden', $nerden)
            ->where('nereye', $nereye)
            ->where('tarih', $tarih)
            ->firstOrFail();

        $ucuses = [];

        if ($sefer1) {
            $ucuses = Ucus::where('sefer_id', $sefer1->id)->get();
        }

        $ucak = Ucak::all();
        $sirket = Sirket::all();

        return view('Yolcu/ucusSec', compact('ucuses', 'ucak', 'sefer', 'sirket'));
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    ucusSec
    public function ucusSec()
    {
        return view('Yolcu/ucusSec');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function create()
    {
        $Seferler = Sefer::paginate(15);
        $ucaklar = Ucak::all();
        return view('ucus.create', compact('Seferler', 'ucaklar'));
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function store(Request $request)
    {
        $request->validate([
            'Ucus-sefer' => 'required',
            'Ucus-ucak' => 'required',
            'Ucus-sure' => 'required',
            'Ucus-saat' => 'required',
            'Ucus-ucret' => 'required',
            'Ucus-ucusno' => 'required',
        ]);
        $ucus = new Ucus();
        $ucus->sefer_id = strip_tags($request->input('Ucus-sefer'));
        $ucus->ucusno = strip_tags($request->input('Ucus-ucusno'));
        $ucus->ucak_id = strip_tags($request->input('Ucus-ucak'));
        $ucus->sure = strip_tags($request->input('Ucus-sure'));
        $ucus->saat = strip_tags($request->input('Ucus-saat'));
        $ucus->ucret = strip_tags($request->input('Ucus-ucret'));
        $ucus->save();
        return redirect()->route('Ucus.index')->with('success', 'Record added successfully');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function show(string $id)
    {
        return view('Ucus.show', ['ucus' => Ucus::findOrFail($id)]);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Sorgula(Request $request){
        $request->validate([
            'biletno' => 'required',
            'adi' => 'required',
        ]);

        $biletno = strip_tags($request->input('biletno'));
        $useradi = strip_tags($request->input('adi'));


        $user = User::where('name', $useradi)->first();


        $bilet = Bilet::where('biletno', $biletno)->first();


        if($user && $bilet) {

            if($bilet->yolcu_id == $user->id){
                return redirect()->route('Ucus.Bilet', [
                    'biletno' => $biletno,
                    'bilet_id' => $bilet->id,
                ])->with('success', 'Login successful!');
            } else {
                return back()->withErrors(['msg' => 'Ticket does not belong to the user.']);
            }
        } else {
            return back()->withErrors(['msg' => 'User or ticket not found.']);
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function edit(string $id)
    {
        $ucaklar = Ucak::all();
        $Seferler = Sefer::paginate(15);
        return view('Ucus.edit', ['Ucus' => Ucus::findOrFail($id)], compact('Seferler', 'ucaklar'));
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function update(Request $request, string $id)
    {
        $request->validate([
            'ucus-sefer' => 'required',
            'ucus-ucak' => 'required',
            'ucus-sure' => 'required',
            'ucus-saat' => 'required',
            'ucus-ucret' => 'required',
            'ucus-ucusno' => 'required',
        ]);
        $ucus = Ucus::findOrFail($id);
        $ucus->sefer_id = strip_tags($request->input('ucus-sefer'));
        $ucus->ucusno = strip_tags($request->input('ucus-ucusno'));
        $ucus->ucak_id = strip_tags($request->input('ucus-ucak'));
        $ucus->sure = strip_tags($request->input('ucus-sure'));
        $ucus->saat = strip_tags($request->input('ucus-saat'));
        $ucus->ucret = strip_tags($request->input('ucus-ucret'));
        $ucus->save();
        return redirect()->route('ucus.show', $id)->with('success', 'Record added successfully');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function destroy(string $id)
    {
        $to_delete = Ucus::findOrFail($id);
        $to_delete->delete();
        return view('ucus.index', ['ucuslar' => Ucus::all()]);
    }
}
