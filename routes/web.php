<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SeferController;

// Route::get('/', function () {
//     return view('AnaSayfa');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/Giris', function () {
//     return view('Giris');
// });
Route::get('/',[StaticController::class,'index'])->name('index');
Route::get('/about',[StaticController::class,'about'])->name('about');
Route::get('/Giris',[StaticController::class,'Giris'])->name('Giris');

Route::resource('Sefer',SeferController::class);


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
