<?php

namespace App\Http\Controllers;

use Numbers_Words\Words;
use Illuminate\Http\Request;
use Luecano\NumeroALetras\NumeroALetras;

class HerramientasController extends Controller
{
    static public function convertirNumeroAPalabras($numero) {
        $formatter = new NumeroALetras();
        return ucfirst($formatter->toMoney($numero,2,'PESOS','CENTAVOS'));
    }

    static public function convertirNumeroAPalabras2($numero) {
       $formatter = new NumeroALetras();
       return ucfirst($formatter->toMoney($numero));
    }
}
