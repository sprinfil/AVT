<?php

namespace App\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $index_venta = 0;
        $ventas = Venta::orderByRaw('CASE WHEN proximo_cobro IS NULL THEN 1 ELSE 0 END, proximo_cobro ASC')->get();

        return view('livewire.ventas.index', compact('ventas'));
    }

    public function detalle_venta($venta_id){
        return redirect(route('index_detalle_venta',["venta_id"=>$venta_id]));
    }
}
