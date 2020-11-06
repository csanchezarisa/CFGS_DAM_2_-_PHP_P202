<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadora extends Controller
{
    
    public function suma($num1, $num2) {

        if(is_numeric($num1) && is_numeric($num2)) {

            $resultat = intval($num1) + intval($num2);

            return view("resultat", ["titolPagina" => "Suma", "primerNumero" => $num1, "segonNumero" => $num2, "resultat" => $resultat, "operacioRealitzada" => "+"]);

        }
        else {

            return view("errors.error");

        }
    }

    public function resta($num1, $num2) {

    }

    public function multiplicacio($num1, $num2) {

    }

    public function divisio($num1, $num2) {

    }

}
