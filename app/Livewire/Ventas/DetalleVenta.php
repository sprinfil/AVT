<?php

namespace App\Livewire\Ventas;

use App\Models\Ticket;
use App\Models\Venta;
use App\Models\Importe;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On; 

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
    public $error = false;
    

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
        $this->refrescar_pago();
    }

    public function calcular_cambio(){
        if($this->pago_con!=null && $this->forma_de_pago == "EFECTIVO"){
            $this->cambio = $this->pago_con - $this->cantidad_abonar;
        }else{
            $this->cambio = 0;
        }
    }

    public function advertencia_ticket(){
        if($this->cambio >= 0 || $this->referencia != ""){
            $this->dispatch('advertencia_ticket');
            $this->error=false;
        }else{
            $this->error=true;
        }

    }

    #[On('crear_ticket')] 
    public function crear_tricket(){
        $ticket = new Ticket();
        $ticket->metodo_pago = $this->forma_de_pago;
        $ticket->cantidad_abonar = $this->cantidad_abonar;
        $ticket->pago_con = $this->pago_con;
        $ticket->referencia = $this->referencia;
        $ticket->cambio = $this->cambio;
        $ticket->fecha = Carbon::now();
        $ticket->venta_id = $this->venta->id;
        $ticket->persona_id = $this->venta->Comprador->id;
        $ticket->save();
        $this->abonar();
        $this->dispatch('ticket_creado');
        $this->refrescar_pago();
        $this->forma_de_pago = null;

    }

    public function refrescar_pago(){
        $this->cambio = null;
        $this->cantidad_abonar = null;
        $this->pago_con = null;
        $this->referencia = null;
    }

    public function abonar(){
        $total_abonos = $this->cantidad_abonar;

        $importes = Importe::where('venta',$this->venta->id)
        ->where('monto','>','0')
        ->get();
        $id_importe = 0;

        
        while($total_abonos > 0){
            if($id_importe < count($importes))
            {
                if($total_abonos >= $importes[$id_importe]->monto){
                    $total_abonos = $total_abonos - $importes[$id_importe]->monto;
                    $importes[$id_importe]->monto = 0;
                    $importes[$id_importe]->save();
                }else{
                    $importes[$id_importe]->monto = $importes[$id_importe]->monto - $total_abonos;
                    $total_abonos = 0;
                    $importes[$id_importe]->save();
                }
                $id_importe = $id_importe + 1;
            }else{
                //montos pagados
            }
        }
    
    }
}
