<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('nosotros','nosotros')->name('about');

Route::view('personal','personal')->name('personal');

Route::get('contactos/{name?}',function($name){
    return view('contactos',compact('name'));
})->name('contact');

// Route::get('modelos',function(){
//     $autos =
//     [
//         "CHEVROLET"=>'TRACKER',
//         "MAZDA"=>'323',
//         "FORD"=>'RANGER',
//         "KIA"=>'SPORTAGE',
//         "GREAT WALL"=>'WINGLE'
//     ];
//     return view('modelos',compact('autos'));
// })->name('models');

Route::get('modelos',ModeloController::class)->name('models');

Route::get('contactos/{name?}',[ContactoController::class,'dataContact'])->name('contact');

Route::resource('autos',AutoController::class)->except('index','show');

// Route::get('autos','App\Http\Controllers\AutoController@index')->name('allstore');

// Route::delete('autos','App\Http\Controllers\AutoController@destroy')->name('destroystore');
