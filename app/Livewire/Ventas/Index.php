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
public $filtroComprador;
public $filtroContrato;
public $filtroCatastral;

    public function render()
    {
        $query = Venta::query();

        if(!empty($this->filtroContrato)) {
            $query
            ->where('no_contrato','like',$this->filtroContrato.'%')
            ->paginate(30);
        }
        if(!empty($this->filtroComprador)) {
           $query
            ->join('personas','comprador','=','personas.id')
            ->select('ventas.*')
            ->where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . trim($this->filtroComprador) . '%')
            ->paginate(30);
        }
        if(!empty($this->filtroCatastral)){
            $query
            ->join('lotes','ventas.lote','=','lotes.id')
            ->select('ventas.*')
            ->where('catastral', 'LIKE',trim($this->filtroCatastral) . '%')
            ->paginate(30);
        }

        if( empty($this->filtroComprador) && empty($this->filtroContrato) ){
            $ventas = $query->orderByRaw('CASE WHEN proximo_cobro IS NULL THEN 1 ELSE 0 END, proximo_cobro ASC')->paginate(30);
        }else{
            $ventas = $query->paginate(30);
        }
        
    
        return view('livewire.ventas.index', compact('ventas'));
    }

    public function detalle_venta($venta_id){
        return redirect(route('index_detalle_venta',["venta_id"=>$venta_id]));
    }

    public function actualizarFiltroVenta(){
        $this->render();
    }

    public function actualizarFiltroComprador(){
        $this->render();
    }

    public function actualizarFiltroContrato(){
        $this->render();
    }

    public function actualizarFiltroCatastral(){
        $this->render();
    }
}
