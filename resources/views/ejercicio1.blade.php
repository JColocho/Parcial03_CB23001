@extends('layouts.app')

@section('content')
    
    <form action="{{ route('ejercicio1/store') }}" method="POST">
        @csrf
        <label for="cPrestamo">Capital del prestamo</label>
        <input type="text" name="cPrestamo" id="cPrestamo">
        
        <br>
        <label for="iAnual">Interes anual</label>
        <input type="text" name="iAnual" id="cPrestamo">
        <br>
        <label for="nCuotas">Numero de cuotas</label>
        <input type="text" name="nCuotas" id="cPrestamo">
        <br>

        <button type="submit"> Calcular</button>
    </form>
@endsection