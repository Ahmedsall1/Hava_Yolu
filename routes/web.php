<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('AnaSayfa');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/Giris', function () {
    return view('Giris');
});



Route::get('/Tr', function () {
    $filter= request('style');
    if(isset($filter)) {
        return 'You Style is '.$filter;
    }
    return 'No Style';
});





//          MVC

// Model -> data

// View -> Interface

// Controller -> connection (M<->V)
