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
}
