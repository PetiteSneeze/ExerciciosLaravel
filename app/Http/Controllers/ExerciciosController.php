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

    public function mostrarFormulario2(){
        return view('exer2');
    }

    public function calcularFormulario2(Request $request){
        $valor1 = $request->input('Valor1');
        $valor2 = $request->input('Valor2');
        $resultado = $valor1 - $valor2;
        return view('exer2resp', compact('resultado'));
    }

    public function mostrarFormulario3(){
        return view('exer3');
    }

    public function calcularFormulario3(Request $request){
        $valor1 = $request->input('Valor1');
        $valor2 = $request->input('Valor2');
        $resultado = $valor1 * $valor2;
        return view('exer3resp', compact('resultado'));
    }

    public function mostrarFormulario4(){
        return view('exer4');
    }

    public function calcularFormulario4(Request $request){
        $valor1 = $request->input('Valor1');
        $valor2 = $request->input('Valor2');
        $resultado = $valor1 / $valor2;
        return view('exer4resp', compact('resultado'));
    }

    public function mostrarFormulario5(){
        return view('exer5');
    }

    public function calcularFormulario5(Request $request){
        $valor1 = $request->input('Valor1');
        $valor2 = $request->input('Valor2');
        $valor3 = $request->input('Valor3');
        $resultado = ($valor1 + $valor2 + $valor3) / 3;
        return view('exer5resp', compact('resultado'));
    }

    public function mostrarFormulario6(){
        return view('exer6');
    }

    public function calcularFormulario6(Request $request){
        $valor1 = $request->input('Valor1');
        $resultado = ($valor1 * 9/5) + 32 ;
        return view('exer6resp', compact('resultado'));
    }

    public function mostrarFormulario7(){
        return view('exer7');
    }

    public function calcularFormulario7(Request $request){
        $valor1 = $request->input('Valor1');
        $resultado = ($valor1 - 32) *5 /9 ;
        return view('exer7resp', compact('resultado'));
    }

    public function mostrarFormulario8(){
        return view('exer8');
    }

    public function calcularFormulario8(Request $request){
        $valor1 = $request->input('Valor1');
        $valor2 = $request->input('Valor2');
        $resultado = $valor1 * $valor2;
        return view('exer8resp', compact('resultado'));
    }

    public function mostrarFormulario9(){
        return view('exer9');
    }

    public function calcularFormulario9(Request $request){
        $valor1 = $request->input('Valor1');
        $resultado = ($valor1 * $valor1) * 3.14159 ;
        return view('exer9resp', compact('resultado'));
    }

    public function mostrarFormulario10(){
        return view('exer10');
    }

    public function calcularFormulario10(Request $request){
        $valor1 = $request->input('Valor1'); // Este será o comprimento do retângulo
        $valor2 = $request->input('Valor2'); // Este será a largura do retângulo
        $resultado = 2 * ($valor1 + $valor2);
        return view('exer10resp', compact('resultado'));
    }
}
