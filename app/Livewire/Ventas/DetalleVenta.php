<?php

namespace App\Livewire\Ventas;

use Carbon\Carbon;
use App\Models\Venta;
use App\Models\Ticket;
use App\Models\Importe;
use Livewire\Component;
use Livewire\Attributes\On; 
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ReportesController;

class DetalleVenta extends Component
{
    use WithPagination;
    use WithFileUploads;
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
    public $tickets;
    public $contrato;
    public $fecha_escrituracion;
    public $numero_escrituracion;
    public $notaria;
    public $editar_escrituracion = false;
    public $contrato_generado = false;
    public $escritura_pdf;
    public $numeros_pagados = array();
    public $url_imagen;

    #[On('render')] 
    public function render()
    {
        $importes = Importe::where('venta',$this->venta->id)->paginate(12);
        $this->tickets = Ticket::where('venta_id', $this->venta->id)->orderby('id','desc')->get();
        return view('livewire.ventas.detalle-venta',compact('importes'));
    }

    public function mount($venta_id){
        $this->venta = Venta::find($venta_id);
        $this->compradorMostrar = $this->venta->Comprador->nombreCompleto();
        $this->avalMostrar = $this->venta->Aval->nombreCompleto();
        $this->vendedorMostrar = $this->venta->Vendedor->nombreCompleto();
        $this->zonaMostrar = $this->venta->Zona->nombre;
        $this->loteMostrar = $this->venta->Lote->catastral;
        $this->metodo_pago = $this->venta->metodo_pago;
        $this->total_pagar =  Importe::where('venta',$this->venta->id)
        ->where('numero',"!=",0)
        ->sum('monto');
        $this->tickets = Ticket::where('venta_id', $this->venta->id)->orderby('id','desc')->get();
        $this->notaria = $this->venta->notaria;
        $this->fecha_escrituracion = $this->fecha_escrituracion != NULL ? Carbon::createFromFormat('Y-m-d H:i:s', $this->venta->fecha_escrituracion)->format('Y-m-d') : null ;
        $this->numero_escrituracion = $this->venta->numero_escritura;
        //$this->url_imagen = public_path().'/storage/imagenes_zonas/'.$this->venta->Zona->imagen_general;
        $this->url_imagen = asset('storage/imagenes_zonas/' . $this->venta->Zona->imagen_general);
    }

    public function cambio_forma_de_pago(){
        $this->refrescar_pago();
    }

    public function calcular_cambio(){
        if(is_numeric($this->pago_con) && is_numeric($this->cantidad_abonar)){
            if($this->pago_con!=null && $this->forma_de_pago == "EFECTIVO"){
                $this->cambio = $this->pago_con - $this->cantidad_abonar;
            }else{
                $this->cambio = 0;
            }
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
        $this->abonar();
        if(count($this->numeros_pagados) == 1){
            $ticket->numeros_pagados = reset($this->numeros_pagados);
        }
        if(count($this->numeros_pagados) == 2){
            $ticket->numeros_pagados = reset($this->numeros_pagados) . "," . end($this->numeros_pagados);
        }
        if(count($this->numeros_pagados) > 2){
            $ticket->numeros_pagados = reset($this->numeros_pagados) . " A LA " . end($this->numeros_pagados);
        }

        $this->dispatch('ticket_creado');
        $this->refrescar_pago();
        $this->forma_de_pago = null;
        $this->numeros_pagados = null;
        $ticket->save();
        //return redirect(route('generar_ticket',['ticket_id' => $ticket->id]));

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
        ->where('numero','!=',0)
        ->get();
        $id_importe = 0;
        $importes_pagados = array();

        
        while($total_abonos > 0){
            if($id_importe < count($importes))
            {
                if($total_abonos >= $importes[$id_importe]->monto){
                    $total_abonos = $total_abonos - $importes[$id_importe]->monto;
                    $importes[$id_importe]->monto = 0;
                    $importes[$id_importe]->fecha_liquidacion = Carbon::now()->format('Y-m-d h:i:s');
                    $importes[$id_importe]->save();
                    $this->numeros_pagados[] = $importes[$id_importe]->numero;
                }else{
                    $importes[$id_importe]->monto = $importes[$id_importe]->monto - $total_abonos;
                    $total_abonos = 0;
                    $importes[$id_importe]->save();
                    $this->numeros_pagados[] = $importes[$id_importe]->numero;
                }
                $id_importe = $id_importe + 1;
            }else{
                //montos pagados

            }
        }
        $this->total_pagar =  Importe::where('venta',$this->venta->id)->sum('monto');
        $this->tickets = Ticket::where('venta_id', $this->venta->id)->orderby('id','desc')->get();

        $venta = Venta::find($this->venta->id);

        if($venta->proximo_cobro() == null){
            $venta->proximo_cobro = null;
            $venta->Lote->estado = "PAGADO";
            $venta->Lote->save();
        }else{
            $venta->proximo_cobro = $venta->proximo_cobro()->vencimiento;
        }

        $this->total_pagar =  Importe::where('venta',$this->venta->id)
        ->where('numero',"!=",0)
        ->sum('monto');
        $venta->save();
        $this->render();
        $this->dispatch('generar_ticket_abono');
    }

    public function regenerar_contrato(){
        redirect(route('generar_contrato',['venta_id'=>$this->venta->id]));
    }

    public function generar_pagares(){
        redirect(route('generar_pagares',['venta_id'=>$this->venta->id]));
    }

    public function generar_anticipo(){
        redirect(route('generar_anticipo',['venta_id'=>$this->venta->id]));
    }

    public function guardar_contrato(){

        $this->validate([
            'contrato' => 'required|file',
        ]);

        $nombreOriginal = $this->contrato->getClientOriginalName();

        $archivo = $this->contrato->storeAs('public/ventas/'.$nombreOriginal);

        $venta = Venta::find($this->venta->id);
        $venta->contrato =  $nombreOriginal;
        $venta->save();

        $this->contrato = null;
        $this->dispatch('contrato_subido', ['venta_id' => json_encode($this->venta->id)]);
        $this->render();
    }

    public function guardar_escritura(){

    $this->validate([
        'escritura_pdf' => 'required|file',
    ]);

    $nombreOriginal = $this->escritura_pdf->getClientOriginalName();
    $archivo = $this->escritura_pdf->storeAs('public/escrituras/'.$nombreOriginal);

    $venta = Venta::find($this->venta->id);
    $venta->escritura_pdf = $nombreOriginal;
    $venta->save();

    $this->escritura_pdf = null;
    $this->dispatch('escritura_subida', ['venta_id' => json_encode($this->venta->id)]);
    $this->render();

}

    public function descargar_ticket($ticket_id){
        return redirect(route('generar_ticket',['ticket_id' => $ticket_id]));
    }

    public function toggle_editar_escrituracion(){
        if($this->editar_escrituracion){
            $this->editar_escrituracion = false;
            $venta = $this->venta;
            $venta->numero_escritura = $this->numero_escrituracion;
            $venta->notaria = $this->notaria;
            $venta->fecha_escrituracion = $this->fecha_escrituracion;
            $venta->save();
            $this->dispatch('escritura_success');
        }else{
            $this->editar_escrituracion = true;
        }
    }

}
