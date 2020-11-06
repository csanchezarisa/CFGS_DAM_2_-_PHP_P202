<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadora extends Controller
{
    
    public function suma($operand1, $operand2) {

        if(is_numeric($operand1) && is_numeric($operand2)) {

            $resultat = intval($operand1) + intval($operand2);

            return view("resultat", ["titolPagina" => "Suma", "primerNumero" => $operand1, "segonNumero" => $operand2, "resultat" => $resultat, "operacioRealitzada" => "+"]);

        }
        else {

            return view("errors.error", ["titolPagina" => "ERROR", "primerNumero" => $operand1, "segonNumero" => $operand2, "motiu" => "Els valors no són números"]);

        }
    }

    public function resta($operand1, $operand2) {

        if(is_numeric($operand1) && is_numeric($operand2)) {

            $resultat = intval($operand1) - intval($operand2);

            return view("resultat", ["titolPagina" => "Resta", "primerNumero" => $operand1, "segonNumero" => $operand2, "resultat" => $resultat, "operacioRealitzada" => "-"]);

        }
        else {

            return view("errors.error", ["titolPagina" => "ERROR", "primerNumero" => $operand1, "segonNumero" => $operand2, "motiu" => "Els valors no són números"]);

        }

    }

    public function multiplica($operand1, $operand2) {

        if(is_numeric($operand1) && is_numeric($operand2)) {

            $resultat = intval($operand1) * intval($operand2);

            return view("resultat", ["titolPagina" => "Multiplicació", "primerNumero" => $operand1, "segonNumero" => $operand2, "resultat" => $resultat, "operacioRealitzada" => "x"]);

        }
        else {

            return view("errors.error", ["titolPagina" => "ERROR", "primerNumero" => $operand1, "segonNumero" => $operand2, "motiu" => "Els valors no són números"]);

        }

    }

    public function divideix($operand1, $operand2) {

        if(is_numeric($operand1) && is_numeric($operand2)) {

            try {

                $resultat = intval($operand1) / intval($operand2);

                return view("resultat", ["titolPagina" => "Divisió", "primerNumero" => $operand1, "segonNumero" => $operand2, "resultat" => $resultat, "operacioRealitzada" => "/"]);

            }
            catch (Exception $e) {

                return view("errors.error", ["titolPagina" => "ERROR", "primerNumero" => $operand1, "segonNumero" => $operand2, "motiu" => "No es pot dividir entre 0!"]);

            }


        }
        else {

            return view("errors.error", ["titolPagina" => "ERROR", "primerNumero" => $operand1, "segonNumero" => $operand2, "motiu" => "Els valors no són números"]);

        }

    }

}
