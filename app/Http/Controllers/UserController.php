<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public static $tip =array("Personel","Yolcu","Yonetici","Pilot","Hostese");

    public function index()
    {
        return view('User.index', ['Users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipi = self::$tip;
        return view('User.create', compact('tipi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'User-tipi' => 'required',
            'User-name' => 'required',
            'User-email' => 'required|email|unique:users,email',

        ]);

        // Create a new User instance and set its properties
        $User = new User();
        $User->type = strip_tags($request->input('User-tipi'));
        $User->name = strip_tags($request->input('User-name'));
        $User->email = strip_tags($request->input('User-email'));
        $User->password = Hash::make($request->input('User-name')); // Hash the password

        // Save the user to the database
        $User->save();

        // Redirect to the user index page with a success message
        return redirect()->route('User.index')->with('success', 'Record added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('User.show', ['User' => User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipi = self::$tip;
        return view('User.edit', ['User' => User::findOrFail($id)], compact('tipi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'User-tipi' => 'required',
            'User-name' => 'required',


        ]);

        // Create a new User instance and set its properties
        $User = User::findOrFail($id);
        $User->type = strip_tags($request->input('User-tipi'));
        $User->name = strip_tags($request->input('User-name'));
        $User->email = strip_tags($request->input('User-email'));
 // Hash the password

        // Save the user to the database
        $User->save();

        // Redirect to the user index page with a success message
        return redirect()->route('User.index')->with('success', 'Record added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
