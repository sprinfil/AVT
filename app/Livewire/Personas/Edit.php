<?php

namespace App\Livewire\Personas;

use App\Models\Archivo;
use App\Models\Persona;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\On;

class Edit extends Component
{
    //mount
    public $persona;
    public $archivos;
    
    //campos
    public $nombre;
    public $apellido_1;
    public $apellido_2;
    public $estado;
    public $ciudad;
    public $celular;
    public $telefono;
    public $lugar_nac;
    public $fecha_nac;
    public $nacionalidad;
    public $colonia;
    public $direccion;
    public $rfc;
    public $estado_civil;
    public $curp;
    public $ine;
    public $ocupacion;
    public $otros;
    public $referencia1_nombre;
    public $referencia1_cel;
    public $referencia1_parentesco;
    public $referencia2_nombre;
    public $referencia2_cel;
    public $referencia2_parentesco;

    //otras
    public $toggleEditar = false;
    public $lblboton = "Editar";

    //variables para eliminar archivos
    public $url_eliminar;
    public $archivo_eliminar_id;

    //variables para agregar documentacion
    public $esconder_dropzone = "hidden";
    public $boton_documentacion = "Agregar";

    //variables para esconder o mostrar la documentacion
    public $estilo_dropzone = "animation-duration: 0.3s;
                               animation-timing-function: ease-in-out; 
    ";

    public $toggle_animacion_dropzone = "height: 0px; display:none";

    public function render()
    {
        return view('livewire.personas.edit');
    }

    public function mount($persona_id){
        $this->persona = Persona::find($persona_id);
        $this->archivos = Archivo::where('persona',$this->persona->id)->get();

        $fecha_nac_formato = new DateTime($this->persona->fecha_nac);

        $this->nombre = $this->persona->nombre;
        $this->apellido_1 = $this->persona->apellido_1;
        $this->apellido_2 = $this->persona->apellido_2;
        $this->estado = $this->persona->estado;
        $this->ciudad = $this->persona->ciudad;
        $this->celular = $this->persona->celular;
        $this->telefono = $this->persona->telefono;
        $this->lugar_nac = $this->persona->lugar_nac;
        $this->fecha_nac = $fecha_nac_formato->format('Y-m-d');
        $this->nacionalidad = $this->persona->nacionalidad;
        $this->colonia = $this->persona->colonia;
        $this->direccion = $this->persona->direccion;
        $this->rfc = $this->persona->rfc;
        $this->estado_civil = $this->persona->estado_civil;
        $this->curp = $this->persona->curp;
        $this->ine = $this->persona->ine;
        $this->ocupacion = $this->persona->ocupacion;
        $this->otros = $this->persona->otros;
        $this->referencia1_nombre = $this->persona->referencia1_nombre;
        $this->referencia1_cel = $this->persona->referencia1_cel;
        $this->referencia1_parentesco = $this->persona->referencia1_parentesco;
        $this->referencia2_nombre = $this->persona->referencia2_nombre;
        $this->referencia2_cel = $this->persona->referencia2_cel;
        $this->referencia2_parentesco = $this->persona->referencia2_parentesco;
    }

    public function editar(){
        if(!$this->toggleEditar){
            $this->toggleEditar = true;
            $this->lblboton = "Aceptar";
        }
    }

    public function save(){

            //validar datos
            $validated = $this->validate([ 
                'nombre' => 'required|min:1|max:255',
                'apellido_1' => 'required|min:1|max:255',
                'apellido_2' => 'required|min:1|max:255',
                'estado' => 'required|min:1|max:255',
                'ciudad' => 'required|min:1|max:255',
                'estado' => 'required|min:1|max:255',
                'celular' => 'required||numeric|min:1000000000|max:9999999999',
                'telefono' => 'required|min:1000000000|max:9999999999|numeric',
                'lugar_nac' => 'required|min:1|max:255',
                'fecha_nac' => 'required',
                'nacionalidad' => 'required|min:1|max:255',
                'colonia' => 'required|min:1|max:255',
                'direccion' => 'required|min:1|max:255',
                'rfc' => 'required|min:13|max:13',
                'estado_civil' => 'required',
                'curp' => 'required|min:18|max:18',
                'ine' => 'required|min:1000000000000|max:9999999999999|numeric',
                'ocupacion' => 'required|min:1|max:255',
                'referencia1_cel' => 'nullable|numeric|min:1000000000|max:9999999999',
                'referencia2_cel' => 'nullable|numeric|min:1000000000|max:9999999999',
            ]);
            $this->persona->nombre = $this->nombre;
            $this->persona->apellido_1 = $this->apellido_1;
            $this->persona->apellido_2 = $this->apellido_2;
            $this->persona->estado = $this->estado;
            $this->persona->ciudad = $this->ciudad;
            $this->persona->celular = $this->celular;
            $this->persona->telefono = $this->telefono;
            $this->persona->lugar_nac = $this->lugar_nac;
            $this->persona->fecha_nac = $this->fecha_nac;
            $this->persona->nacionalidad = $this->nacionalidad;
            $this->persona->colonia = $this->colonia;
            $this->persona->direccion = $this->direccion;
            $this->persona->rfc = $this->rfc;
            $this->persona->estado_civil = $this->estado_civil;
            $this->persona->curp = $this->curp;
            $this->persona->ine =$this->ine;
            $this->persona->ocupacion = $this->ocupacion;
            $this->persona->otros =$this->otros;
            $this->persona->referencia1_nombre = $this->referencia1_nombre;
            $this->persona->referencia1_cel = $this->referencia1_cel;
            $this->persona->referencia1_parentesco = $this->referencia1_parentesco;
            $this->persona->referencia2_nombre =$this->referencia2_nombre;
            $this->persona->referencia2_cel = $this->referencia2_cel;
            $this->persona->referencia2_parentesco = $this->referencia2_parentesco;
            $this->persona->save();
            $this->toggleEditar = false;
            $this->lblboton = "Editar";
    }

    public function verArchivo($url){
        return redirect($url);
    }

    
    #[On('Eliminar')] 
    public function EliminarArchivo(){
        $url_nuevo = str_replace('storage', 'public', $this->url_eliminar);
        Storage::delete($url_nuevo);
        $archivo = Archivo::find( $this->archivo_eliminar_id);
        $archivo->delete();
        $this->archivos = Archivo::where('persona',$this->persona->id)->get();
        return redirect(route('personas_edit',['persona_id' => $this->persona->id]));
    }

    public function eliminar_alert($url,$archivo_id){
        $this->url_eliminar = $url;
        $this->archivo_eliminar_id = $archivo_id;
        $this->dispatch('eliminar_alert', archivo_id:$archivo_id); 
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
    public function actualizarDocumentos($nombres){
        $contador = 0;
        $archivos = Archivo::where('persona',$this->persona->id)
        ->whereNull('nombre')->get();
        if(count($nombres) > 0){
            foreach($archivos as $archivo){
                $archivo->nombre = $nombres[$contador];
                $archivo->save();
                $contador = $contador + 1;
            }
            redirect(route('personas_edit',['persona_id' => $this->persona->id]));
        }
      
    }

    public function editar_archivo($archivo_id){
        $this->dispatch('editar_archivo', archivo_id:$archivo_id);
    }

    #[On('ActualizarArchivos')] 
    public function actualizarArchivos(){
        redirect(route('personas_edit',['persona_id' => $this->persona->id]));
    }
}
