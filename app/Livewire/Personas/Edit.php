<?php

namespace App\Livewire\Personas;

use DateTime;
use Carbon\Carbon;
use App\Models\Archivo;
use App\Models\Entidad;
use App\Models\Persona;
use Livewire\Component;
use App\Models\Municipio;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    //mount
    public $persona;
    public $archivos;
    public $foto;
    
     //estados
     public $entidades;
     public $municipiosNac;
     public $municipiosDireccion;
 
     //informacion personal----------------
     public $nombre;
     public $apellido_1;
     public $apellido_2;
     public $sexo;
     public $fecha_nac;
     public $estado;
     public $municipio;
     public $ciudad_nac;
     public $pais;
     public $nacionalidad;
     public $estado_civil;
     public $curp;
     public $rfc;
     public $ine;
     public $ocupacion;
     public $edad;
 
     //direccion
     public $calle;
     public $numero_interior;
     public $numero_exterior;
     public $colonia_direccion;
     public $codigo_postal;
     public $estado_direccion;
     public $municipio_direccion;
     public $ciudad;
     public $pais_direccion;
 
     //contacto
     public $celular;
     public $telefono;
     public $correo;
 
     //referencias
     public $referencia1_nombre;
     public $referencia1_cel;
     public $referencia1_parentesco;
     public $referencia2_nombre;
     public $referencia2_cel;
     public $referencia2_parentesco;
    //------------------------------------
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
        $this->archivos = Archivo::where('persona',$this->persona->id)
        ->where('nombre','!=','foto')->get();
        $this->entidades = Entidad::All();
        $this->municipiosNac = Municipio::All();
        $this->municipiosDireccion = Municipio::All();

        $fecha_nac_formato = new DateTime($this->persona->fecha_nac);

        $this->nombre = $this->persona->nombre;
        $this->apellido_1 = $this->persona->apellido_1;
        $this->apellido_2 = $this->persona->apellido_2;
        $this->sexo = $this->persona->sexo;
        $this->fecha_nac = $fecha_nac_formato->format('Y-m-d');
        $this->edad = $this->persona->edad;
        $this->estado = $this->persona->estado;
        $this->municipio = $this->persona->municipio;
        $this->ciudad_nac = $this->persona->ciudad_nac;
        $this->pais = $this->persona->pais;
        $this->nacionalidad = $this->persona->nacionalidad;
        $this->estado_civil = $this->persona->estado_civil;
        $this->curp = $this->persona->curp;
        $this->rfc = $this->persona->rfc;
        $this->ine = $this->persona->ine;
        $this->ocupacion = $this->persona->ocupacion;
        $this->calle = $this->persona->calle;
        $this->numero_interior = $this->persona->numero_interior;
        $this->numero_exterior = $this->persona->numero_exterior;
        $this->colonia_direccion = $this->persona->colonia_direccion;
        $this->codigo_postal = $this->persona->codigo_postal;
        $this->estado_direccion = $this->persona->estado_direccion;
        $this->municipio_direccion = $this->persona->municipio_direccion;
        $this->ciudad = $this->persona->ciudad;
        $this->pais_direccion = $this->persona->pais_direccion;
        $this->celular = $this->persona->celular;
        $this->telefono = $this->persona->telefono;
        $this->correo = $this->persona->correo;
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
            $data = $this->validate([
                //informacion personal
                'nombre' => 'required|min:1|max:255',
                'apellido_1' => 'required|min:1|max:255',
                'apellido_2' => 'nullable|min:1|max:255',
                'sexo' => 'required',
                'fecha_nac' => 'required',
                
                //lugar de nacimiento
                'estado' => 'nullable',
                'municipio' => 'nullable',
                'ciudad_nac' => 'nullable',
                'pais' => 'nullable',

                'nacionalidad' => 'required',
                'estado_civil' => 'nullable',
                'curp' => 'nullable|min:18|max:18',
                'rfc' => 'nullable|min:13|max:13',
                'ine' => 'nullable|min:1000000000000|max:9999999999999|numeric',
                'ocupacion' => 'nullable|min:1|max:255',

                //direccion
                'calle' => 'nullable|min:1|max:255',
                'numero_interior' => 'nullable|min:1|max:255',
                'numero_exterior' => 'nullable|min:1|max:255',
                'colonia_direccion' => 'nullable|min:1|max:255',
                'codigo_postal' => 'nullable|min:1|max:255',
                'estado_direccion' => 'nullable|min:1|max:255',
                'municipio_direccion' => 'nullable|min:1|max:255',
                'ciudad' => 'nullable|min:1|max:255',
                'pais_direccion' => 'nullable|min:1|max:255',

                //contacto
                'celular' => 'nullable|min:1000000000|max:9999999999|numeric',
                'telefono' => 'nullable|min:1000000000|max:9999999999|numeric',
                'correo' => 'nullable',

                //referencias
                'referencia1_nombre'=> 'nullable',
                'referencia1_cel' => 'nullable|numeric|min:1000000000|max:9999999999',
                'referencia1_parentesco' => 'nullable',
                'referencia2_nombre'=> 'nullable',
                'referencia2_cel' => 'nullable|numeric|min:1000000000|max:9999999999',
                'referencia2_parentesco' => 'nullable',
            ]);
            $this->persona->update($data);
            $this->persona->edad = Carbon::parse($this->fecha_nac)->age;
            $this->edad = Carbon::parse($this->fecha_nac)->age;
            $this->persona->save();
            $this->toggleEditar = false;
            $this->lblboton = "Editar";
            return redirect(route('personas_edit',['persona_id' => $this->persona->id]));
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
        $this->actualizarDocumentos();
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
    public function actualizarDocumentos(){
        $this->archivos = Archivo::where('persona',$this->persona->id)
        ->where('nombre','!=','foto')->get();
    }

    public function editar_archivo($archivo_id){
        $this->dispatch('editar_archivo', archivo_id:$archivo_id);
    }

    #[On('ActualizarArchivos')] 
    public function actualizarArchivos(){
        $this->archivos = Archivo::where('persona',$this->persona->id)
        ->where('nombre','!=','foto')->get();
    }

    public function bajaPersona(){
        $this->dispatch('bajaPersona', persona_id:$this->persona->id);
    }

    public function ActualizarEstadoNac(){
        if($this->estado != "" && $this->estado != "Otro"){
            $estado = Entidad::where('name',$this->estado)->first();
            $this->municipiosNac = Municipio::where('estado_id',$estado->id)->get();
        }else{
            $this->municipiosNac = Municipio::all();
        }
    }

    public function ActualizarEstadoDireccion(){
        if($this->estado_direccion != "" && $this->estado_direccion != "Otro"){
            $estado = Entidad::where('name',$this->estado_direccion)->first();
            $this->municipiosDireccion = Municipio::where('estado_id',$estado->id)->get();
        }else{
            $this->municipiosDireccion = Municipio::all();
        }
    }

    public function persona_pdf(){
        return redirect(route('persona_pdf',['persona_id' => $this->persona->id]));
    }
}
