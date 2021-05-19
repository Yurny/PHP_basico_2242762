<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class MetabuscadorController extends Controller
{
    //Cliente
public function formulario_buscador(){
    //Mostrar formulario del metabuscador
    return view('metabuscador');


}
//Servidor llegan los datos aqui
    public function buscar(){
        //1. Almacenar los datos transmitidos en otras variables
        $termino=$_POST["termino"];
        $motores=$_POST["motores"];
        //2. determinar cual motor fue elegido
        switch($motores){
            case 1://Redireccionar a google de busqueda
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
                case 3:
                    return redirect()->to("https://duckduckgo.com/?q=$termino");
                    break;
                case 4:
                    return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                    break;
                 case 5:
                    return redirect()->to("https://www.qwant.com/?q=$termino");
                    break;
                case 6:
                    return redirect()->to("https://www.lukol.com/s.php?q=$termino");
                    break;
                case 7:
                    return redirect()->to("https://metager.es/meta/meta.ger3?eingabe=$termino");
                    break;
                case 8:
                    return redirect()->to("https://es.search.yahoo.com/search?p=$termino");
                    break;
                case 9:
                    return redirect()->to("https://www.ask.com/web?q=$termino");
                    break;
                case 10:
                    return redirect()->to("https://www.twitch.tv/search?term=$termino");
                    break;
        }

        //print_r($_POST);


    }
}
