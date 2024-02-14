<?php

namespace App\Livewire\Ventas;

use App\Models\Venta;
use App\Models\Importe;
use Livewire\Component;
use Livewire\WithPagination;

class DetalleVenta extends Component
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
    public $forma_de_pago;
    public $cantidad_abonar;
    public $pago_con;
    public $cambio;
    public $referencia;
    

    public $contrato_generado = false;

    public function render()
    {
        $importes = Importe::where('venta',$this->venta->id)->paginate(12);
        return view('livewire.ventas.detalle-venta',compact('importes'));
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

    public function cambio_forma_de_pago(){
        $this->cambio = null;
        $this->cantidad_abonar = null;
        $this->pago_con = null;
        $this->referencia = null;
    }

    public function calcular_cambio(){
        if($this->pago_con!=null && $this->forma_de_pago == "EFECTIVO"){
            $this->cambio = $this->pago_con - $this->cantidad_abonar;
        }
    }
}
