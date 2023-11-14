<?php

namespace App\Http\Controllers;
use DateTime;
use Dompdf\Dompdf;
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
}
