<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\Ejercicio1Controller;
use App\Http\Controllers\Ejercicio3Controller;
use App\Http\Controllers\HomeController;
use App\Models\Departamento;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/ejercicio1', [Ejercicio1Controller::class,'show'])->name('ejercicio1');
Route::post('/ejercicio1/store', [Ejercicio1Controller::class,'store'])->name('ejercicio1/store');

Route::get('/ejercicio3', [Ejercicio3Controller::class,'show'])->name('ejercicio3');

Route::resource('Departamentos',[DepartamentoController::class]);



