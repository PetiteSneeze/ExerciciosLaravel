<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function mostrarFormulario1(){
        return view('exer1');
    }

    public function calcularFormulario1(Request $request){
        $valor1 = $request->input('Valor1');
        $valor2 = $request->input('Valor2');
        $resultado = $valor1 + $valor2;
        return view('exer1resp', compact('resultado'));
    }
}
