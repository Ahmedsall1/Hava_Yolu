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
        $yoneticiler = User::where('type', 'Personel')->get();
        return view('Sirket.create', compact('yoneticiler'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Log entry point
    error_log("Entering store method");

    // Validate input
    $request->validate([
        'Sirket-yonetici' => 'required',
        'Sirket-name' => 'required',
        'Sirket-image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Log after validation
    error_log("Validation passed");

    // Check and log file upload
    if ($request->hasFile('Sirket-image')) {
        error_log("File is present in the request");

        $file = $request->file('Sirket-image');

        // Log file details
        error_log("File original name: " . $file->getClientOriginalName());
        error_log("File size: " . $file->getSize());

        $path = $file->store('public/images/Sirket');

        // Log storage path
        error_log("File stored at: " . $path);

        $path = str_replace('public/', 'storage/', $path);
    } else {
        error_log("File not present in the request");
        return redirect()->back()->withErrors(['Sirket-image' => 'File upload failed']);
    }

    // Save the Sirket data
    $Sirket = new Sirket();
    $Sirket->name = strip_tags($request->input('Sirket-name'));
    $Sirket->yonetici_id = strip_tags($request->input('Sirket-yonetici'));
    $Sirket->image = $path;

    // Log before save
    error_log("Saving Sirket data: " . json_encode($Sirket));

    $Sirket->save();

    // Log after save
    error_log("Sirket saved successfully");

    return redirect()->route('Sirket.index')->with('success', 'Record added successfully');
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
