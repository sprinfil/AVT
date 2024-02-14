<?php

namespace App\Livewire\Ventas;

use App\Models\Importe;
use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class ResumenVenta extends Component
{
    use WithPagination;
    public $venta;
    public $compradorMostrar;
    public $avalMostrar;
    public $vendedorMostrar;
    public $zonaMostrar;
    public $loteMostrar;
    public $metodo_pago;
    public $total_pagar;

    public $contrato_generado = false;



    public function render()
    {
        $importes = Importe::where('venta',$this->venta->id)->paginate(12);
        return view('livewire.ventas.resumen-venta',compact('importes'));
    }

    public function mount($venta_id){
        $this->venta = Venta::find($venta_id);
        $this->compradorMostrar = $this->venta->Comprador->nombreCompleto();
        $this->avalMostrar = $this->venta->Aval->nombreCompleto();
        $this->vendedorMostrar = $this->venta->Vendedor->nombreCompleto();
        $this->zonaMostrar = $this->venta->Zona->nombre;
        $this->loteMostrar = $this->venta->Lote->lote;
        $this->metodo_pago = $this->venta->metodo_pago;
        $this->total_pagar =  $this->venta->costo_lote - $this->venta->enganche;
    }

    public function generar_contrato(){
        $this->contrato_generado = true;
        return redirect(route('generar_contrato',['venta_id'=>$this->venta->id]));
    }
}
