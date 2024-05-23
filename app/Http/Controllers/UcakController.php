<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ucak;

class UcakController extends Controller
{

    public static $tip =array("orta","buyuk","kucuk");

    public function index()
    {
        return view('Ucak.index', ['Ucaklar' => Ucak::all()]);
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
        return view('Ucak.show', ['Ucak' => Ucak::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // $ucaklar =User::all();
        // $Seferler = Sefer::all();
        return view('Ucak.edit', ['Ucak' => Ucak::findOrFail($id)]);
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
        $to_delete = Ucak::findOrFail($id);
        $to_delete->delete();
        return view('Ucak.index', ['Ucaklar' => Ucak::all()]);
    }
}
