<?php

namespace App\Livewire\Personas;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Persona;

class BajaPersona extends Component
{
    public $esconder = "hidden";
    public $persona;
    public function render()
    {
        return view('livewire.personas.baja-persona');
    }

    
    #[On('bajaPersona')] 
    public function advertencia($persona_id){
        $this->persona = Persona::find($persona_id);
        $this->esconder = "";
    }

    public function salir(){
        $this->esconder = "hidden";
    }

    public function save(){
        $this->persona->baja = "si";
        $this->persona->save();
        redirect(route('personas'));
    }
}
