<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SeferController;
use App\Models\Sefer;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        $airports = SeferController::$AirPorts;
        return view('AnaSayfa',compact('airports'));
    }
    public function about(){
        return view('about');
    }
    public function Giris(){
        return view('Giris');
    }
    public function Sorgula(){
        return view('Sorgula');
    }
    public function SeferBul(){
        $airports = SeferController::$AirPorts;
        return view('Yolcu.SeferBul',compact('airports'));
    }
}
