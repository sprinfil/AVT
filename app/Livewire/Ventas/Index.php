<?php

namespace App\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $ventas = Venta::All();
        return view('livewire.ventas.index', compact('ventas'));
    }

    public function detalle_venta($venta_id){
        return redirect(route('index_detalle_venta',["venta_id"=>$venta_id]));
    }
}
