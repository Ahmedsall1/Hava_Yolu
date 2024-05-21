<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sefer;
use App\Models\Ucus;
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
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    KoltukSec
    public function KoltukSec(string $id)
    {
        $ucuses = Ucus::findOrFail($id);
        $ucak = Ucak::findOrFail($ucuses->ucak_id);

        $ucaktipiTable = null;

        if ($ucak->tipi == "orta") {
            $ucaktipiTable = 'ucaktipi_2s';
        } elseif ($ucak->tipi == "kucuk") {
            $ucaktipiTable = 'ucaktipi_3s';
        } else {
            $ucaktipiTable = 'ucaktipi_1s';
        }

        $biletler = Bilet::where('ucus_id', $id)->pluck('koltuk_id')->toArray();

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
    public function Biletlerim($ucus_id, $koltuk_id, $user_id)
    {
        error_log('user' . $user_id . " ucus" . $ucus_id . " koltuk " . $koltuk_id);

        // Check if the bilet already exists
        $existingBilet = Bilet::where('ucus_id', $ucus_id)
            ->where('koltuk_id', $koltuk_id)
            ->where('yolcu_id', $user_id)
            ->first();

        if (!$existingBilet) {
            // If no existing bilet, create a new one
            $sayi = $user_id * 133 *$ucus_id * $koltuk_id;
            $bilet = new Bilet();
            $bilet->biletno = "TK{$sayi}";
            $bilet->yolcu_id = $user_id;
            $bilet->ucus_id = $ucus_id;
            $bilet->koltuk_id = $koltuk_id;
            $bilet->save();
        } else {

            $bilet = $existingBilet;
        }

        return view('Yolcu/Biletlerim', ['user_id' => $user_id, 'ucus_id' => $ucus_id, 'koltuk_id' => $koltuk_id]);
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
            ->whereDate('tarih', $tarih)
            ->first();


        $ucuses = [];
        if ($sefer1) {
            $ucuses = Ucus::where('sefer_id', $sefer1->id)->get();
        }


        $ucak = Ucak::all();
        $sirket = Sirket::all();


        return view('Yolcu/UcusSec', compact('ucuses', 'ucak', 'sefer', 'sirket'));
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    UcusSec
    public function UcusSec()
    {
        return view('Yolcu/UcusSec');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function create()
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function store(Request $request)
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function show(string $id)
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function edit(string $id)
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function update(Request $request, string $id)
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function destroy(string $id)
    {
        //
    }
}
