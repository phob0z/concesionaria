<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('nosotros','nosotros')->name('about');

Route::get('personal', [PersonalController::class, 'personal'])->name('personal');

Route::get('modelos',ModeloController::class)->name('models');

Route::get('contactos/{nombre?}',[ContactoController::class,'dataContact'])->name('contact');