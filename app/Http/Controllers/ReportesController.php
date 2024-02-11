<?php

namespace App\Http\Controllers;
use DateTime;
use Dompdf\Dompdf;
use App\Models\Venta;
use App\Models\Importe;
use App\Models\Persona;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $numero_tablas = 1;

        foreach($importes as $importe){
            if($importe->numero % 16 == 0){
                $numero_tablas = $numero_tablas + 1;
            }
        }


        $pdf = Pdf::loadView('docs.contratos.contrato_venta',compact('venta','importes'));
        return $pdf->stream();
    }
}
