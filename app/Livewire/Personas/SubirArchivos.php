<?php

namespace App\Livewire\Personas;

use App\Models\Archivo;
use Livewire\Component;
use Livewire\Attributes\On; 

class SubirArchivos extends Component
{
    public $persona_id;
    public $archivos;


    public function render()
    {
        return view('livewire.personas.subir-archivos');
    }

    public function mount($persona_id){
        $this->persona_id = $persona_id;
        $this->archivos = Archivo::where('persona',$this->persona_id)->get();
    }


    public function aceptar(){
        $this->dispatch('success');
    }

    #[On('salir')] 
    public function salir(){
        return redirect(route('personas'));
    }
}
