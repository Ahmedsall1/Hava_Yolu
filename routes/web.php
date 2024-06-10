<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SeferController;

use App\Http\Controllers\UcusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UcakController;
use App\Http\Controllers\SirketController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProfileController;



Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('/', function () {
//     return view('AnaSayfa');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/Giris', function () {
//     return view('Giris');
// });
Route::get('/index',[StaticController::class,'index'])->name('index');
Route::get('/about',[StaticController::class,'about'])->name('about');
Route::get('/Giris',[StaticController::class,'Giris'])->name('Giris');
Route::get('/Sorgula',[StaticController::class,'Sorgula'])->name('Sorgula');

Route::get('Yolcu/SeferBul',[StaticController::class,'SeferBul'])->name('SeferBul');

Route::post('Yolcu/UcusSec', [UcusController::class, 'find'])->name('Ucus.find');

Route::get('Yolcu/KoltukSec/{id}', [UcusController::class, 'KoltukSec'])->name('Ucus.KoltukSec');
Route::get('Yolcu/Kesinlestir/{ucus_id}/{koltuk_id}', [UcusController::class, 'Kesinlestir'])->name('Ucus.Kesinlestir');

Route::post('Yolcu/Biletlerim/register-yolcu/{user_id}', [UcusController::class, 'register'])->name('Ucus.register');
Route::post('Yolcu/Biletlerim/login-yolcu', [UcusController::class, 'login'])->name('Ucus.login');


Route::post('/register-yolcu', [UcusController::class, 'register'])->name('Ucus.register');
Route::get('/Yolcu/Biletlerim/{ucus_id}/{koltuk_id}/{user_id}', [UcusController::class, 'Biletlerim'])->name('Yolcu.Biletlerim');

Route::get('/Yolcu/Bilet/{biletno}/{bilet_id}', [UcusController::class, 'Bilet'])->name('Ucus.Bilet');


Route::post('/Sorgula', [UcusController::class, 'Sorgula'])->name('Ucus.Sorgula');


Route::post('/login-yolcu', [UcusController::class, 'login'])->name('Ucus.login');






// Route::get('/Ucus/Ucussec', [UcusController::class, 'UcusSec'])->name('Ucus.UcusSec');

Route::resource('Sefer',SeferController::class);
Route::resource('Ucus',UcusController::class);
Route::resource('User',UserController::class);
Route::resource('Ucak',UcakController::class);
Route::resource('User',UserController::class);
Route::resource('Sirket',SirketController::class);

// Yolcu routes
Route::middleware(['auth','YolcuMiddleware'])->group(function(){
    Route::get('/yolcu/dashboard',[UserController::class,'index'])->name('dashboard');

});

// admin
Route::middleware(['auth','AdminMiddleware'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

});


Route::post('/Yolcu/Giris', [UserController::class, 'login'])->name('User.login');
Route::get('/Biletlerim/{user_id}', [UserController::class, 'Biletlerim'])->name('User.Biletlerim');




Route::get('/Tr', function () {
    $filter= request('style');
    if(isset($filter)) {
        return 'You Style is '.$filter;
    }
    return 'No Style';
});

// Route::get('/login-yolcu', [UserController::class, 'login'])->name('login');
// Route::post('/login-yolcu', [UserController::class, 'login']);
// Route::post('/logout-yolcu', [UserController::class, 'logout'])->name('logout');



Route::get('Sefer/search', [SeferController::class, 'search'])->name('Sefer.search');

Route::post('/sefer-sorgula', [SeferController::class, 'Sorgula'])->name('Sefer.Sorgula');







//          MVC

// Model -> data

// View -> Interface

// Controller -> connection (M<->V)
