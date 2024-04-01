<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    //
    public function index(){
        return view('vistas.pagos.index');
    }

    public function create(){
        return view('vistas.pagos.create');
    }

    public function detalle(Request $request){
        $pago_id = $request->pago_id;
        return view('vistas.pagos.detalle-pago',compact('pago_id'));
    }
}
