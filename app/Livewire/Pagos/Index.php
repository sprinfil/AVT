<?php

namespace App\Livewire\Pagos;

use App\Models\Zona;
use Livewire\Component;
use App\Models\PagoDueno;
use App\Models\ImporteDueno;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $selectedZona = "Cualquiera";
    
    public function render()
    {
        $zonas = Zona::whereNull('baja')->get();
        $query = PagoDueno::query();

        if($this->selectedZona != "Cualquiera"){
            $query->where('zona_id',$this->selectedZona);
        }

        $pagos = $query->orderBy('id', 'DESC')->paginate(10);


        return view('livewire.pagos.index', ['pagos' => $pagos,'zonas'=>$zonas]);
    }

    public function detalle_pagos($id){
        return redirect(route('pagos'));
    }

    public function pdf($pago_id){
        return redirect(route('generar_recibo_pago',['pago_id' => $pago_id]));
    }

    public function updateZonaInput(){
        
    }
}
