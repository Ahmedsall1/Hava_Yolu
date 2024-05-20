<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Http\Controllers\SeferController;
=======
>>>>>>> 79f7c714625517ade4b19aa85ada31f824c13217
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return view('AnaSayfa');
    }
    public function about(){
        return view('about');
    }
    public function Giris(){
        return view('Giris');
    }
<<<<<<< HEAD
    public function SeferBul(){
        $airports = SeferController::$AirPorts;
        return view('Yolcu.SeferBul',compact('airports'));
    }
=======
>>>>>>> 79f7c714625517ade4b19aa85ada31f824c13217
}
