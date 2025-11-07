<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function show() {
        return view('ejercicio1');
    }

    public function store(Request $request) {
        dd($request);

        //return view('ejercicio1');
    }
}
