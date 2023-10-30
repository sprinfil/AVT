<?php

namespace App\Livewire\Personas;

use App\Models\Persona;
use Livewire\Component;

class Edit extends Component
{
    public $persona;

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

    public function render()
    {
        return view('livewire.personas.edit');
    }

    public function mount($persona_id){
        $this->persona = Persona::find($persona_id);

        $this->nombre = $this->persona->nombre;
        $this->apellido_1 = $this->persona->apellido_1;
        $this->apellido_2 = $this->persona->apellido_2;
        $this->estado = $this->persona->estado;
        $this->ciudad = $this->persona->ciudad;
        $this->celular = $this->persona->celular;
        $this->telefono = $this->persona->telefono;
        $this->lugar_nac = $this->persona->lugar_nac;
        $this->fecha_nac = $this->persona->fecha_nac;
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
}
