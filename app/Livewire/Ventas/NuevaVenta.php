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
            $lotes = Lote::where('zona',$this->zonaSeleccionada->id)
            ->whereNull('baja')
            ->whereNull('estado')->get();
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
            $this->zonaSeleccionada = $queryZona->first();
            $this->zonaMostrar = $this->zonaSeleccionada->nombre;
        }

        return view('livewire.ventas.nueva-venta', compact('compradores','avales','zonas','lotes','vendedores'));
    }

    public function mount(){

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
        }
    }

    public function actualizarFiltroLote(){
        $this->render();
    }

    public function SeleccionarLote(){
        if($this->loteLista != null){
            $this->loteSeleccionado = Lote::find($this->loteLista);
            $this->loteMostrar = $this->loteSeleccionado->lote;
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
        if($this->compradorSeleccionado != null && $this->avalSeleccionado != null && $this->vendedorSeleccionado != null && $this->zonaSeleccionada != null && $this->loteSeleccionado != null){
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
        if($this->referencia_credito != null){
            $venta->referencia = $this->referencia_credito;
        }
        if($this->referencia_debito != null){
            $venta->referencia = $this->referencia_debito;
        }

        if($this->metodo_pago == "CONTADO"){
            $venta->proximo_cobro = null;
            $lote = Lote::find($this->loteSeleccionado->id);
            $lote->estado = "VENDIDO";
            $lote->save();
        }else{
            $venta->proximo_cobro = Carbon::now()->addMonths(1);
            $lote = Lote::find($this->loteSeleccionado->id);
            $lote->estado = "EN PROCESO DE VENTA";
            $lote->save();
        }
        $venta->save();   

        //CREAR LOS IMPORTES
        for($i = 1 ; $i <= $venta->meses_pagar ; $i ++){
            $importe = new Importe();
            $importe->numero = $i;
            $importe->monto = $venta->monto_mes;
            $importe->vencimiento = Carbon::now()->addMonths($i);
            $importe->venta = $venta->id;
            $importe->save();
        }


        return redirect(route('index_resumen_venta',['venta_id'=>$venta->id]));
    }
}
