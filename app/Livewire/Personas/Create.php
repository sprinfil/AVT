<?php

namespace App\Livewire\Personas;

use App\Models\Entidad;
use App\Models\Persona;
use Livewire\Component;
use App\Models\Municipio;

class Create extends Component
{
    //estados
    public $entidades;
    public $municipiosNac;
    public $municipiosDireccion;

    //informacion personal
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


    public function render()
    {
        return view('livewire.personas.create');
    }

    public function mount(){
        $this->entidades = Entidad::All();
        $this->municipiosNac = Municipio::All();
        $this->municipiosDireccion = Municipio::All();
    }

    public function save(){
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
            'estado_civil' => 'required',
            'curp' => 'required|min:18|max:18',
            'rfc' => 'nullable|min:13|max:13',
            'ine' => 'required|min:1000000000000|max:9999999999999|numeric',
            'ocupacion' => 'required|min:1|max:255',

            //direccion
            'calle' => 'required|min:1|max:255',
            'numero_interior' => 'nullable|min:1|max:255',
            'numero_exterior' => 'nullable|min:1|max:255',
            'colonia_direccion' => 'required|min:1|max:255',
            'codigo_postal' => 'required|min:1|max:255',
            'estado_direccion' => 'required|min:1|max:255',
            'municipio_direccion' => 'required|min:1|max:255',
            'ciudad' => 'nullable|min:1|max:255',
            'pais_direccion' => 'required|min:1|max:255',

            //contacto
            'celular' => 'required|min:1000000000|max:9999999999|numeric',
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

        Persona::create($data);
        $persona = Persona::orderBy('id', 'desc')->first();
        redirect(route('personas_archivos',['persona_id'=>$persona->id]));
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
}
