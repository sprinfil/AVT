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

    static public function convertirNumeroAPalabras3($numero) {
        $cadena_numero = strval($numero);
        $partes = explode('.', $cadena_numero);
        $centavos = end($partes);

        $formatter = new NumeroALetras();
        $formatter->conector = 'PESOS';
        return $palabras = $formatter->toInvoice($numero, 2, 'M.N.');

     }
}
