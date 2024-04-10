<?php

namespace App\Livewire\Ventas;

use Carbon\Carbon;
use App\Models\Venta;
use App\Models\Importe;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

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
    public $importe_editar_id;

    public $contrato_generado = false;
    public $error = false;
    public $importes_modificados = array();



    public function render()
    {
        if($this->venta->contrato){
            $this->contrato_generado = true;
        }
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

    public function modificar_monto_alert($importe_id){
        $importe = Importe::find($importe_id);
        $fecha_carbon = Carbon::createFromFormat('Y-m-d H:i:s', $importe->vencimiento);
        $fecha = $fecha_carbon->format('d') . " " . $fecha_carbon->monthName . " del " . $fecha_carbon->format('Y');
        $this->importe_editar_id = $importe->id;
        $monto = $importe->monto;
        $this->dispatch('modificar_monto_alert', data:['fecha' => $fecha,'monto'=>$monto]);
    }

    #[On('validar_importe')] 
    public function validar_importe($monto){
        $importe = Importe::find($this->importe_editar_id);
        $importe->monto = $monto;
        $importe->modificado = true ;
        $importe->save();
        $this->reorganizar_importes();
    }

    public function reorganizar_importes(){
        $importes_modificados = Importe::where('modificado',true)->get();
        $importes_no_modificados = Importe::where('venta', $this->venta->id)->where('numero','!=',0)
        ->where('modificado',false)
        ->get();
        $monto_total = $this->venta->costo_lote - $this->venta->enganche;

        $nuevo_valor_importes = ($monto_total - $importes_modificados->sum('monto')) / count($importes_no_modificados);
        
        foreach($importes_no_modificados as $importe){
            $importe->monto = $nuevo_valor_importes;
            $importe->save();
        }
    }

    public function reiniciar_datos(){
        $monto_total = $this->venta->costo_lote - $this->venta->enganche;
        $importes = Importe::where('venta', $this->venta->id)->where('numero','!=',0)
        ->get();

        $monto_regular = $monto_total / $this->venta->meses_pagar;

        foreach($importes as $importe){
            $importe->modificado = false;
            $importe->monto = $monto_regular;
            $importe->save();
        }
    }

    public function reiniciar_monto($importe_id){
        $importe = Importe::find($importe_id);
        $importe->modificado = false;
        $importe->save();
        $this->reorganizar_importes();
    }
}
