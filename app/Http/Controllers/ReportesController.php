<?php

namespace App\Http\Controllers;
use DateTime;
use Dompdf\Dompdf;
use App\Models\Venta;
use App\Models\Importe;
use App\Models\Persona;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Options;

class ReportesController extends Controller
{
    //
    public function informacion_persona_pdf(Request $request){
        $persona = Persona::find($request->persona_id);

        $f = new DateTime($persona->fecha_nac);
        $fecha_nacimiento = $f->format('d-m-Y');

        $pdf = Pdf::loadView('docs.personas.informacion_persona',compact('persona','fecha_nacimiento'));
        return $pdf->stream();
    }

    public function generar_contrato(Request $request){
        $venta = Venta::find($request->venta_id);
        $importes = Importe::where('venta',$venta->id)->get();
        $numero_tablas = 0;
        $gestor_tablas = array();
        $arreglo_importes = array();
        $id_importes = 1;
        $numero_de_tablas_principales = 0;
        $tabla_principal = array();
        $id_tabla = 0;

        $limite_renglones_por_tabla = 25;
        

        foreach($importes as $importe){
            $arreglo_importes[$numero_tablas][$id_importes] = $importe;
            $id_importes = $id_importes + 1;
            if($importe->numero %  $limite_renglones_por_tabla == 0){
                $numero_tablas = $numero_tablas + 1;
                $id_importes = 1;
            }
        }

        $numero_tablas = ceil( count($importes) /$limite_renglones_por_tabla);

        if($numero_tablas > 3 ){
            $numero_de_tablas_principales = ceil($numero_tablas / 3);
        }else{
            $numero_de_tablas_principales = 1;
        }

        $gestor_tablas = $this->obtenerArreglo($numero_tablas);

        $id_tabla_vista = 0;
        $pdf = Pdf::loadView('docs.contratos.contrato_venta',compact('venta','importes','numero_tablas','arreglo_importes','numero_de_tablas_principales','gestor_tablas','id_tabla_vista'));
        return $pdf->stream();
        
        /* 
        LOGICA DE LA TABLA
        for($i = 0 ; $i < $numero_de_tablas_principales ; $i++){
            for($y = 0 ; $y < $gestor_tablas[$i] ; $y ++){
                for($z = 1 ; $z <= count($arreglo_importes[$id_tabla])  ; $z ++){
                    $tabla_principal[$i][$y][$z] = $arreglo_importes[$id_tabla][$z];
                }    
                $id_tabla = $id_tabla + 1;
            }
        }
        */
    }

    function obtenerArreglo($numero) {
        $arreglo = array();
        
        while ($numero >= 3) {
            $arreglo[] = 3;
            $numero -= 3;
        }
        
        if ($numero > 0) {
            $arreglo[] = $numero;
        }
        
        return $arreglo;
    }
}
