<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ucus;
use App\Models\Ucak;
use App\Models\Sefer;
use App\Models\Sirket;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class PersonelController extends Controller
{

    public function index()
    {
        return view('Personel.dashboard');
    }
    public function sorgula($usertype ,$username,$id){

        $ucak=Ucak::all();
        $ucuslar=null;
        if ($usertype == 'pilot') {
            // Retrieve the airplanes associated with the pilot
            $ucak = Ucak::where('pilot_id', $id)->get();

            // Extract the IDs from the $ucak collection
            $ucakIds = $ucak->pluck('id')->toArray();

            // Retrieve the flights associated with the airplane IDs and paginate the results
            $ucuslar = Ucus::whereIn('ucak_id', $ucakIds)->paginate(15);

            // Extract the IDs from the paginated $ucuslar collection
            $ucusIds = $ucuslar->pluck('id')->toArray();

            // Retrieve the Sefer records associated with the Ucus IDs
            $seferler = Sefer::whereIn('id', $ucusIds)->get();

            // Log each airplane name
            foreach ($ucak as $airplane) {
                error_log($airplane->name);
            }
            $ucak = Ucak::all();
            $sirket = Sirket::all();
            // Return the view with the necessary data
            return view('Personel.index', [
                'name' => $username,
                'type' => $usertype,
                'ucuses' => $ucuslar,
                'seferler' => $seferler,
                'sirket' => $sirket,
                'ucak' => $ucak
            ]);
        }


        if($usertype=='hostese'){
            $ucak = Ucak::where('hostese_id', $id)->get();
            $ucuslar = Ucus::paginate(15)->whereIn('ucak_id', $ucak);
        return view('Personel.sorgula',['name'=>$username,'type'=>$usertype,'ucuslar'=>$ucuslar]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
