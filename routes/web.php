<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SeferController;
<<<<<<< HEAD
use App\Http\Controllers\UcusController;
=======
>>>>>>> 79f7c714625517ade4b19aa85ada31f824c13217

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
<<<<<<< HEAD
Route::get('Yolcu/SeferBul',[StaticController::class,'SeferBul'])->name('SeferBul');

Route::post('Yolcu/UcusSec', [UcusController::class, 'find'])->name('Ucus.find');

Route::get('Yolcu/KoltukSec/{id}', [UcusController::class, 'KoltukSec'])->name('Ucus.KoltukSec');
Route::get('Yolcu/Kesinlestir/{ucus_id}/{koltuk_id}', [UcusController::class, 'Kesinlestir'])->name('Ucus.Kesinlestir');

Route::post('Yolcu/Biletlerim/{user_id}', [UcusController::class, 'register'])->name('Ucus.register');
Route::post('Yolcu/Biletlerim/{user_id}', [UcusController::class, 'login'])->name('Ucus.login');


Route::post('/register', [UcusController::class, 'register'])->name('Ucus.register');
Route::get('/Yolcu/Biletlerim/{user_id}', [UcusController::class, 'Biletlerim'])->name('Ucus.Biletlerim');





Route::post('/login', [UcusController::class, 'login'])->name('Ucus.login');





// Route::get('/Ucus/Ucussec', [UcusController::class, 'UcusSec'])->name('Ucus.UcusSec');

Route::resource('Sefer',SeferController::class);
Route::resource('Ucus',UcusController::class);
=======

Route::resource('Sefer',SeferController::class);
>>>>>>> 79f7c714625517ade4b19aa85ada31f824c13217


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
