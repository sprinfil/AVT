<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vistas.ventas.index');
    }

    public function index_nueva_venta(){
        return view('vistas.ventas.nueva-venta');
    }

    public function index_resumen_venta(Request $request){

        $venta_id = $request->venta_id;
        return view('vistas.ventas.resumen-venta',compact('venta_id'));
    }

    public function index_detalle_venta(Request $request){
        $venta_id = $request->venta_id;
        return view('vistas.ventas.detalle-venta',compact('venta_id'));
    }
}
