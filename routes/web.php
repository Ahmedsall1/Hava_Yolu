<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SeferController;

use App\Http\Controllers\UcusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UcakController;
use App\Http\Controllers\SirketController;



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
Route::get('/Sorgula',[StaticController::class,'Sorgula'])->name('Sorgula');

Route::get('Yolcu/SeferBul',[StaticController::class,'SeferBul'])->name('SeferBul');

Route::post('Yolcu/UcusSec', [UcusController::class, 'find'])->name('Ucus.find');

Route::get('Yolcu/KoltukSec/{id}', [UcusController::class, 'KoltukSec'])->name('Ucus.KoltukSec');
Route::get('Yolcu/Kesinlestir/{ucus_id}/{koltuk_id}', [UcusController::class, 'Kesinlestir'])->name('Ucus.Kesinlestir');

Route::post('Yolcu/Biletlerim/register/{user_id}', [UcusController::class, 'register'])->name('Ucus.register');
Route::post('Yolcu/Biletlerim/login', [UcusController::class, 'login'])->name('Ucus.login');


Route::post('/register', [UcusController::class, 'register'])->name('Ucus.register');
Route::get('/Yolcu/Biletlerim/{ucus_id}/{koltuk_id}/{user_id}', [UcusController::class, 'Biletlerim'])->name('Yolcu.Biletlerim');

Route::get('/Yolcu/Bilet/{biletno}/{bilet_id}', [UcusController::class, 'Bilet'])->name('Ucus.Bilet');


Route::post('/Sorgula', [UcusController::class, 'Sorgula'])->name('Ucus.Sorgula');


Route::post('/login', [UcusController::class, 'login'])->name('Ucus.login');






// Route::get('/Ucus/Ucussec', [UcusController::class, 'UcusSec'])->name('Ucus.UcusSec');

Route::resource('Sefer',SeferController::class);
Route::resource('Ucus',UcusController::class);
Route::resource('User',UserController::class);
Route::resource('Ucak',UcakController::class);
Route::resource('User',UserController::class);
Route::resource('Sirket',SirketController::class);


Route::post('/Yolcu/Giris', [UserController::class, 'login'])->name('User.login');
Route::get('/Biletlerim/{user_id}', [UserController::class, 'Biletlerim'])->name('User.Biletlerim');




Route::get('/Tr', function () {
    $filter= request('style');
    if(isset($filter)) {
        return 'You Style is '.$filter;
    }
    return 'No Style';
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');



Route::get('Sefer/search', [SeferController::class, 'search'])->name('Sefer.search');
//          MVC

// Model -> data

// View -> Interface

// Controller -> connection (M<->V)
