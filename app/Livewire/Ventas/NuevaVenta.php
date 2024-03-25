<?php

namespace App\Livewire\Ventas;

use App\Models\Importe;
use App\Models\Lote;
use App\Models\Zona;
use App\Models\Venta;
use App\Models\Persona;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;

class NuevaVenta extends Component
{

    public $filtroComprador;
    public $compradorSeleccionado;
    public $compradorLista;
    public $compradorMostrar;

    //avales
    public $filtroAval;
    public $avalSeleccionado;
    public $avalMostrar;
    public $avalLista;

    //zonas
    public $filtroZona;
    public $zonaSeleccionada;
    public $zonaLista;
    public $zonaMostrar;

    //lotes
    public $filtroLote;
    public $loteSeleccionado;
    public $loteLista;
    public $loteMostrar;
    public $desactivarLotes = true;

    //Metodo de pago
    public $metodo_pago;
    public $costo_lote;

    //MESES
    public $enganche_meses;
    public $meses_pagar;
    public $monto_mes;

    //CONTADO
    public $forma_de_pago;
    public $pago_con_efectivo;
    public $cambio_efectivo;
    public $referencia_credito;
    public $referencia_debito;
    public $filtroVendedores;
    public $vendedorSeleccionado;
    public $vendedorMostrar;
    public $vendedorLista;
    public $error =false;
    public $fecha_primer_abono_mostrar;
    public $fecha_primer_abono;
    public $no_contrato;
    public $fecha_contrato;



    public function render()
    {
        if($this->zonaSeleccionada != false){
            $this->desactivarLotes = false;
        }
        $queryComprador = Persona::query();
        $queryAval = Persona::query();
        $queryZona = Zona::query();
        $queryLote = Lote::query();
        $queryVendedor = Persona::query();

        if(!empty($this->filtroComprador)) {
            $queryComprador->where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . $this->filtroComprador . '%');
            $compradores = $queryComprador->orderBy('id')->whereNull('baja')->get();
        }else{
            $compradores = Persona::whereNull('baja')->get();
        }

        if(!empty($this->filtroAval)) {
            $queryAval->where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . $this->filtroAval . '%');
            $avales = $queryAval->orderBy('id')->whereNull('baja')->get();
        }else{
            $avales = Persona::whereNull('baja')->get();
        }

        if(!empty($this->filtroVendedores)) {
            $queryVendedor->where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . $this->filtroVendedores . '%');
            $vendedores = $queryVendedor->orderBy('id')->whereNull('baja')->get();
        }else{
            $vendedores = Persona::whereNull('baja')->get();
        }

        if(!empty($this->filtroZona)){
            $queryZona->whereNull('baja')->where('nombre', 'like', '%' . $this->filtroZona . '%');
            $zonas = $queryZona->get();
        }else{
            $zonas =  Zona::whereNull('baja')->get();
        }

        if($this->zonaSeleccionada!=null){
            if(!empty($this->filtroLote)){
                $lotes = Lote::whereNull('baja')
                ->whereNull('estado')
                ->where('zona',$this->zonaSeleccionada->id)
                ->where('catastral','like', $this->filtroLote.'%')
                ->get();
            }else{
                $lotes = Lote::whereNull('baja')
                ->whereNull('estado')
                ->where('zona',$this->zonaSeleccionada->id)
                ->get();
            }
        }else{
            $lotes = Lote::whereNull('estado')->whereNull('baja')->get();
        }
    

        if(count($compradores) == 1){
            $this->compradorSeleccionado = $queryComprador->orderBy('id')->whereNull('baja')->first();
            $this->compradorMostrar = $this->compradorSeleccionado->nombreCompleto();
        }

        if(count($avales) == 1){
            $this->avalSeleccionado = $queryAval->orderBy('id')->whereNull('baja')->first();
            $this->avalMostrar = $this->avalSeleccionado->nombreCompleto();
        }

        if(count($vendedores) == 1){
            $this->vendedorSeleccionado = $queryVendedor->orderBy('id')->whereNull('baja')->first();
            $this->vendedorMostrar = $this->vendedorSeleccionado->nombreCompleto();
        }

        if(count($zonas) == 1){
            $this->zonaSeleccionada = $queryZona->whereNull('baja')->first();
            $this->zonaMostrar = $this->zonaSeleccionada->nombre;
        }


        return view('livewire.ventas.nueva-venta', compact('compradores','avales','zonas','lotes','vendedores'));
    }

    public function mount(){
        $this->fecha_primer_abono_mostrar = Carbon::now()->addMonths(1)->format('Y-m-d');
        $this->fecha_primer_abono = Carbon::now()->addMonths(1);
        $this->fecha_contrato = Carbon::now()->format('Y-m-d');
    }

    public function actualizarFiltroComprador(){
        $this->render();
    }

    public function actualizarFiltroAval(){
        $this->render();
    }

    public function actualizarFiltroVendedor(){
        $this->render();
    }

    public function actualizarFechaPrimerAbono(){
        $this->fecha_primer_abono = Carbon::createFromFormat('Y-m-d', $this->fecha_primer_abono_mostrar);
    }

    public function SeleccionarComprador(){
        if($this->compradorLista!=null){
            $this->compradorSeleccionado = Persona::find($this->compradorLista);
            $this->compradorMostrar = $this->compradorSeleccionado->nombreCompleto();
        }
    }

    public function SeleccionarAval(){
        if($this->avalLista != null){
            $this->avalSeleccionado = Persona::find($this->avalLista);
            $this->avalMostrar = $this->avalSeleccionado->nombreCompleto();
        }
    }

    public function SeleccionarVendedor(){
        if($this->vendedorLista != null){
            $this->vendedorSeleccionado = Persona::find($this->vendedorLista);
            $this->vendedorMostrar = $this->vendedorSeleccionado->nombreCompleto();
        }
    }

    public function actualizarFiltroZona(){
        $this->render();
    }

    public function SeleccionarZona(){
        if($this->zonaLista != null){
            $this->zonaSeleccionada = Zona::find($this->zonaLista);
            $this->zonaMostrar = $this->zonaSeleccionada->nombre;
            $this->vendedorSeleccionado = $this->zonaSeleccionada->dueno;
            $this->vendedorMostrar = $this->zonaSeleccionada->dueno->nombreCompleto();
        }
    }

    public function actualizarFiltroLote(){
        $this->render();
    }

    public function SeleccionarLote(){
        if($this->loteLista != null){
            $this->loteSeleccionado = Lote::find($this->loteLista);
            $this->loteMostrar =  $this->loteSeleccionado->lote.".- ".$this->loteSeleccionado->catastral;
        }
    }

    public function SeleccionarMetodoPago(){
        $this->forma_de_pago=null;
        $this->pago_con_efectivo = null;
        $this->cambio_efectivo = null;
        $this->referencia_credito= null;
        $this->referencia_debito= null;
        $this->enganche_meses = null;
        $this->meses_pagar = null;
        $this->monto_mes = null;

        /*
        $this->forma_de_pago="";
        $this->pago_con_efectivo = 0;
        $this->cambio_efectivo = 0;
        $this->referencia_credito= "";
        $this->referencia_debito= "";
        $this->enganche_meses = null;
        $this->meses_pagar = null;
        $this->monto_mes = null;
        */
    }

    public function calcular_monto_por_mes(){
        if($this->costo_lote != null && $this->enganche_meses != '' && $this->meses_pagar != null && $this->metodo_pago == "A MESES"){
            $total_a_pagar = $this->costo_lote - $this->enganche_meses;
            $this->monto_mes = $total_a_pagar / $this->meses_pagar;
        }else{
            $this->monto_mes = null;
        }
        $this->calcular_cambio_efectivo();
    }

    public function cambio_forma_de_pago(){
        $this->pago_con_efectivo = null;
        $this->cambio_efectivo = null;
        $this->referencia_credito= null;
        $this->referencia_debito= null;

        /*
                $this->pago_con_efectivo = 0;
        $this->cambio_efectivo = 0;
        $this->referencia_credito= "";
        $this->referencia_debito= "";
        */
    }

    public function calcular_cambio_efectivo(){
        if($this->costo_lote != null && $this->forma_de_pago=="EFECTIVO" && $this->pago_con_efectivo != null){
            $this->cambio_efectivo = $this->pago_con_efectivo - $this->costo_lote;
        }else{
            $this->cambio_efectivo = null;
        }
    }
    

    public function advertencia_venta(){
        if($this->compradorSeleccionado != null && $this->avalSeleccionado != null && $this->vendedorSeleccionado != null && $this->zonaSeleccionada != null && $this->loteSeleccionado != null && $this->no_contrato != null){
            if($this->monto_mes != null || $this->cambio_efectivo >= 0 || $this->referencia_credito != null  || $this->referencia_debito){
                $this->dispatch('advertencia_venta');
            }else{
                $this->error = true;
            }
        }else{
            $this->error = true;
        }
    }

    #[On('crear_venta')] 
    public function crear_venta(){

        $venta = new Venta();
        $venta->comprador = $this->compradorSeleccionado->id;
        $venta->aval = $this->avalSeleccionado->id;
        $venta->vendedor = $this->vendedorSeleccionado->id;
        $venta->metodo_pago = $this->metodo_pago;
        $venta->lote = $this->loteSeleccionado->id;
        $venta->costo_lote = $this->costo_lote;
        $venta->zona_id = $this->zonaSeleccionada->id;
        $venta->enganche = $this->enganche_meses != null ? $this->enganche_meses : null;
        $venta->meses_pagar = $this->meses_pagar != null ? $this->meses_pagar : null;
        $venta->monto_mes = $this->monto_mes != null ? $this->monto_mes : null;
        $venta->forma_de_pago = $this->forma_de_pago != null ? $this->forma_de_pago : null;
        $venta->pago_con = $this->pago_con_efectivo != null ? $this->pago_con_efectivo : null;
        $venta->cambio = $this->cambio_efectivo != null ? $this->cambio_efectivo : null;
        $venta->no_contrato = $this->no_contrato;
        $venta->fecha = $this->fecha_contrato;
        if($this->referencia_credito != null){
            $venta->referencia = $this->referencia_credito;
        }
        if($this->referencia_debito != null){
            $venta->referencia = $this->referencia_debito;
        }

        if($this->metodo_pago == "CONTADO"){
            $venta->proximo_cobro = null;
            $lote = Lote::find($this->loteSeleccionado->id);
            $lote->estado = "PAGADO";
            $lote->save();
        }else{
            $venta->proximo_cobro = $this->fecha_primer_abono;
            $lote = Lote::find($this->loteSeleccionado->id);
            $lote->estado = "EN PROCESO DE VENTA";
            $lote->save();
        }
        $venta->save();   

        //CREAR LOS IMPORTES

        //ANTICIPO
        if($venta->enganche!=null){
            $importe = new Importe();
            $importe->numero = 0;
            $importe->monto = $venta->enganche;
            $importe->vencimiento = $venta->fecha;
            $importe->venta = $venta->id;
            $importe->save();
        }
        for($i = 0 ; $i < $venta->meses_pagar ; $i ++){
            $importe = new Importe();
            $importe->numero = $i + 1;
            $importe->monto = $venta->monto_mes;
            if($i != 0){
                $this->fecha_primer_abono->addMonths(1);
            }
            $importe->vencimiento = $this->fecha_primer_abono;
            $importe->venta = $venta->id;
            $importe->save();
        }


        return redirect(route('index_detalle_venta',['venta_id'=>$venta->id]));
    }
}
