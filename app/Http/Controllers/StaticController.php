<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
}
