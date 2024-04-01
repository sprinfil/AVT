<?php

namespace App\Livewire\Pagos;

use App\Models\Zona;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\PagoDueno;
use App\Models\ImporteDueno;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $selectedZona = "Cualquiera";
    public $fecha_inicial;
    public $fecha_final;
    
    public function render()
    {
        $zonas = Zona::whereNull('baja')->get();
        $query = PagoDueno::query();

        if($this->selectedZona != "Cualquiera"){
            $query->where('zona_id',$this->selectedZona);
        }
        if($this->fecha_inicial != null && $this->fecha_final){
            $fecha_inicial_carbon = Carbon::CreateFromFormat('Y-m-d',$this->fecha_inicial);
            $fecha_final_carbon = Carbon::CreateFromFormat('Y-m-d',$this->fecha_final);

            $query->where('periodo_inicio','>=',$fecha_inicial_carbon->format('Y-m-d 00:00:00'))
            ->where('periodo_final','<=',$fecha_final_carbon->format('Y-m-d 23:59:59'))
            ;
        }

        $pagos = $query->orderBy('id', 'DESC')->paginate(10);


        return view('livewire.pagos.index', ['pagos' => $pagos,'zonas'=>$zonas]);
    }

    public function detalle_pago($id){
        return redirect(route('detalle_pago',['pago_id' => $id]));
    }

    public function pdf($pago_id){
        return redirect(route('generar_recibo_pago',['pago_id' => $pago_id]));
    }

    public function updateZonaInput(){
        
    }

    public function updateFechaInicialInput(){

    }

    public function updateFechaFinalInput(){

    }
}
