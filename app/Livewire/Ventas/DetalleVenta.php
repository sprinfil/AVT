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
use Illuminate\Support\Facades\Storage;

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
    

    public $contrato_generado = false;

    #[On('render')] 
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
        $this->total_pagar =  Importe::where('venta',$this->venta->id)->sum('monto');
        $this->tickets = Ticket::where('venta_id', $this->venta->id)->get();
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

        return redirect(route('generar_ticket',['ticket_id' => $ticket->id]));

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
        $this->total_pagar =  Importe::where('venta',$this->venta->id)->sum('monto');
        $this->tickets = Ticket::where('venta_id', $this->venta->id)->get();

        $venta = Venta::find($this->venta->id);

        if($venta->proximo_cobro() == null){
            $venta->proximo_cobro = null;
        }else{
            $venta->proximo_cobro = $venta->proximo_cobro()->vencimiento;
        }
        
        $venta->save();
        $this->render();
    }

    public function regenerar_contrato(){
        return redirect(route('generar_contrato',['venta_id'=>$this->venta->id]));
    }

    public function guardar_contrato(){

         // Validar que se haya subido un archivo
    $this->validate([
        'contrato' => 'required|file', // 10 MB máximo
    ]);

        $nombreOriginal = $this->contrato->getClientOriginalName();

        // Guardar el archivo con el nombre específico y obtener la ruta
        $archivo = $this->contrato->storeAs('public/ventas/'.$nombreOriginal);

        //convertir la ruta en vez de public a storage
        //$url_archivo = Storage::url($archivo);

           //crear los archivos
        $venta = Venta::find($this->venta->id);
        $venta->contrato =  $nombreOriginal;
        $venta->save();

        $this->contrato = null;
        $this->dispatch('contrato_subido', ['venta_id' => json_encode($this->venta->id)]);
        //$this->dispatch('contrato_subido');
        $this->render();
    }

    public function descargar_ticket($ticket_id){
        return redirect(route('generar_ticket',['ticket_id' => $ticket_id]));
    }

}
