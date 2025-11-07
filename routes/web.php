<?php

use App\Http\Controllers\Ejercicio1Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/ejercicio1', [Ejercicio1Controller::class,'show'])->name('ejercicio1');
Route::post('/ejercicio1/store', [Ejercicio1Controller::class,'store'])->name('ejercicio1/store');


