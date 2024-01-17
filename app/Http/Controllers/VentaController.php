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
}
