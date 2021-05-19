<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Funcion anonima
//Callback
Route::get('variables', function(){
    //Definir una variable
    //en php
    $mensaje = 20;
    //funcion var_dump:analizar una variable
    //muestra tipo de dato y valor
    print_r($mensaje);
    echo "<hr />";
    $mensaje = "Yurny Ladino";
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = true;
    var_dump($mensaje);
});
Route::get('arreglos', function(){
    //Arreglo: estructura de datos
    //
    // Fuertemente Tipados: Debe definir el tipo de dato
    //                      No se puede cambiar el tipo de dato
    //                      JAVA, .NET, GO
    // Debilmente Tipados:  No se requiere definir el tipo de dato
    //                      Puedes cambiar el tipo de dato
    //                      PHP , JAVASCRIPT , PYTHON
    $estudiantes = [
    'AN' => "Ana",
    'MA' => "Maria",
    'JO' => "Jorge" ];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});

Route::get("paises", function(){


    $paises= [
    "Colombia" =>[
                    "capital" => "Bogota",
                    "Moneda" =>  "Peso",
                    "poblacion" => 51
                    ] ,
    "Peru" =>[
                    "capital" => "Lima",
                    "Moneda" =>  "Sol",
                    "poblacion" => 32
                    ],
    "Paraguay"=>[
                     "capital" => "Asuncion",
                     "Moneda" =>  "Guarani",
                     "poblacion" => 7
                    ] ];
   /* $suma= 0;
    foreach($paises as $nombre => $pais):
    $suma += $pais["poblacion"];
    endforeach;*/

    //echo  "La suma de los paises es: $suma";

    //LLamar a una vista
    //con dtos de paises
        //se reconocen los datos
    return view('paises')->with("naciones" , $paises);




});

Route::get('formulario_buscador','MetabuscadorController@formulario_buscador');

    Route::post('buscar', 'MetabuscadorController@buscar');

