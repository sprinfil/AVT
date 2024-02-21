<?php

namespace App\Livewire\Pagos;

use App\Models\ImporteDueno;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public function render()
    {
        $query = ImporteDueno::query();

        $pagos = $query->orderBy('id', 'DESC')->paginate(10);

        return view('livewire.pagos.index', ['pagos' => $pagos]);
    }

    public function detalle_pagos($id){
        return redirect(route('pagos'));
    }

    public function pdf($pago_id){
        return redirect(route('generar_recibo_pago',['pago_id' => $pago_id]));
    }
}
