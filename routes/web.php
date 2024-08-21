<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio1Controller;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial/{nome}', function ($nome) {
    return "olá mundo".$nome;
});

Route ::get('exercicio1', function(){
    return view ('exercicio1');
});

Route::post('/resposta_exercicio1',
[
    Exercicio1Controller::class,
   'calcularjuros'
]);

Route::get('/exer1', [ExerciciosController::class, 'mostrarFormulario1']);


Route::post('/exer1resp', [ExerciciosController::class, 'calcularFormulario1']);

Route::get('/exer2', [ExerciciosController::class, 'mostrarFormulario2']);

Route::post('/exer2resp', [ExerciciosController::class, 'calcularFormulario2']);

Route::get('/exer3', [ExerciciosController::class, 'mostrarFormulario3']);

Route::post('/exer3resp', [ExerciciosController::class, 'calcularFormulario3']);

Route::get('/exer4', [ExerciciosController::class, 'mostrarFormulario4']);

Route::post('/exer4resp', [ExerciciosController::class, 'calcularFormulario4']);