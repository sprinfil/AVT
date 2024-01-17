<?php

namespace App\Livewire\Ventas;

use App\Models\Lote;
use App\Models\Zona;
use App\Models\Persona;
use Livewire\Component;
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

    public function render()
    {
        if($this->zonaSeleccionada != false){
            $this->desactivarLotes = false;
        }
        $queryComprador = Persona::query();
        $queryAval = Persona::query();
        $queryZona = Zona::query();
        $queryLote = Lote::query();

        if(!empty($this->filtroComprador)) {
            $queryComprador->where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . $this->filtroComprador . '%');
            $compradores = $queryComprador->orderBy('id')->whereNull('baja')->get();
        }else{
            $compradores = Persona::All();
        }

        if(!empty($this->filtroAval)) {
            $queryAval->where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . $this->filtroAval . '%');
            $avales = $queryAval->orderBy('id')->whereNull('baja')->get();
        }else{
            $avales = Persona::All();
        }

        if(!empty($this->filtroZona)){
            $queryZona->where('nombre', 'like', '%' . $this->filtroZona . '%');
            $zonas = $queryZona->get();
        }else{
            $zonas =  Zona::All();
        }

        if($this->zonaSeleccionada!=null){
            $lotes = Lote::where('zona',$this->zonaSeleccionada->id)
            ->whereNull('baja')->get();
        }else{
            $lotes = Lote::all();
        }
    

        if(count($compradores) == 1){
            $this->compradorSeleccionado = $queryComprador->orderBy('id')->whereNull('baja')->first();
            $this->compradorMostrar = $this->compradorSeleccionado->nombreCompleto();
        }

        if(count($avales) == 1){
            $this->avalSeleccionado = $queryAval->orderBy('id')->whereNull('baja')->first();
            $this->avalMostrar = $this->avalSeleccionado->nombreCompleto();
        }

        if(count($zonas) == 1){
            $this->zonaSeleccionada = $queryZona->first();
            $this->zonaMostrar = $this->zonaSeleccionada->nombre;
        }

        return view('livewire.ventas.nueva-venta', compact('compradores','avales','zonas','lotes'));
    }

    public function mount(){

    }

    public function actualizarFiltroComprador(){
        $this->render();
    }

    public function actualizarFiltroAval(){
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
}
