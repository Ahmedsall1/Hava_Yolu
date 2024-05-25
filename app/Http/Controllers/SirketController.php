<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sirket;
use App\Models\User;


class SirketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Sirket.index', ['Sirketler' => Sirket::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $yoneticiler = User::where('type','Personel')->get(    );
        return view('Sirket.create', compact('yoneticiler'));
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
        return view('Sirket.show', ['Sirket' => Sirket::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Sirket.edit', ['Sirket' => SIrket::findOrFail($id)]);

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

        $to_delete = Sirket::findOrFail($id);
        $to_delete->delete();
        return view('Sirket.index', ['Sirketler' => Sirket::all()]);
    }
}
