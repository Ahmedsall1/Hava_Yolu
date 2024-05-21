<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SeferController;
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
    public function SeferBul(){
        $airports = SeferController::$AirPorts;
        return view('Yolcu.SeferBul',compact('airports'));
    }
}
