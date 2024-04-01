<?php

namespace App\Livewire\Pagos;

use Carbon\Carbon;
use App\Models\Pago;
use App\Models\Archivo;
use Livewire\Component;
use App\Models\PagoDueno;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Storage;

class DetallePago extends Component
{
    public $pago;
    public $fecha_inicial;
    public $fecha_final;
    public $metodo_pago;
    public $monto_total;
    public $archivos;
    public $esconder_dropzone = "hidden";
    public $boton_documentacion = "Agregar";

    //variables para esconder o mostrar la documentacion
    public $estilo_dropzone = "animation-duration: 0.3s;
                               animation-timing-function: ease-in-out; 
    ";

    public $toggle_animacion_dropzone = "height: 0px; display:none";

    public $url_eliminar;
    public $archivo_eliminar_id;

    public function render()
    {
        return view('livewire.pagos.detalle-pago');
    }

    public function mount($pago_id){
        $this->pago = PagoDueno::find($pago_id);
        $this->fecha_inicial =  Carbon::createFromFormat('Y-m-d H:i:s', $this->pago->periodo_inicio)->format('Y-m-d');
        $this->fecha_final =  Carbon::createFromFormat('Y-m-d H:i:s', $this->pago->periodo_final)->format('Y-m-d');
        $this->metodo_pago = $this->pago->metodo_pago;
        $this->monto_total = $this->pago->monto;
        $this->archivos = Archivo::where('pago_id',$this->pago->id)->get();
    }

    public function regenerar_ingresos(){
        return redirect(route('generar_pago_dueno',['pago_id' => $this->pago->id]));
    }

    public function regenerar_tickets(){
        return redirect(route('generar_tickets_pagos_duenos',['pago_id' => $this->pago->id]));
    }

    public function toggleArchivos(){
        if($this->esconder_dropzone == "hidden"){
            $this->esconder_dropzone = "";
            $this->toggle_animacion_dropzone = "animation-name: crecer;";
            $this->boton_documentacion = "Aceptar";
        }else{
            //Aplicar cambios
            $this->toggle_animacion_dropzone = "animation-name: cerrar; height: 0px; border: 0px";
            $this->esconder_dropzone = "hidden";
            $this->boton_documentacion = "Agregar";
        }
    }

    #[On('actualizarDocumentos')] 
    public function actualizarDocumentos(){
            //redirect(route('personas_edit',['persona_id' => $this->persona->id]));
            $this->archivos = Archivo::where('pago_id',$this->pago->id)->get();

    }

    public function verArchivo($url){
        return redirect($url);
    }

    public function eliminar_alert($url,$archivo_id){
        $this->url_eliminar = $url;
        $this->archivo_eliminar_id = $archivo_id;
        $this->dispatch('eliminar_alert'); 
    }

    #[On('eliminar_archivo')] 
    public function EliminarArchivo(){
        $url_nuevo = str_replace('storage', 'public', $this->url_eliminar);
        Storage::delete($url_nuevo);
        $archivo = Archivo::find( $this->archivo_eliminar_id);
        $archivo->delete();
        $this->archivos = Archivo::where('pago_id',$this->pago->id)->get();
    }
}
