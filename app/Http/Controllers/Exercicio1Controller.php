<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio1Controller extends Controller
{
    public function calcularjuros(Request $request){
       $valor_inicial = floatval( $request -> input('valor_inicial'));
       $taxa_juros = floatval($request -> input('taxa_juros'));
       $anos = floatval($request -> input('anos'));
       $resultado = $valor_inicial * pow((1 + $taxa_juros/100), $anos);
       return "valor final: $resultado";
    }
}
