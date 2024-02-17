<?php

namespace App\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{

public $filtroVenta;
use WithPagination;

    public function render()
    {
        $query = Venta::query();

        if(!empty($this->filtroVenta)) {
            $query
            ->where(DB::raw("id"), 'LIKE', '%' . $this->filtroVenta . '%');
        }
        
        $ventas = $query->orderByRaw('CASE WHEN proximo_cobro IS NULL THEN 1 ELSE 0 END, proximo_cobro ASC')->paginate(30);
        
        //$ventas = Venta::orderByRaw('CASE WHEN proximo_cobro IS NULL THEN 1 ELSE 0 END, proximo_cobro ASC')->get();

        return view('livewire.ventas.index', compact('ventas'));
    }

    public function detalle_venta($venta_id){
        return redirect(route('index_detalle_venta',["venta_id"=>$venta_id]));
    }

    public function actualizarFiltroVenta(){
        $this->render();
    }
}
