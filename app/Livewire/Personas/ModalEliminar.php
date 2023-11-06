<?php

namespace App\Livewire\Personas;

use App\Models\Archivo;
use Livewire\Component;
use Livewire\Attributes\On; 

class ModalEliminar extends Component
{
    public $esconder = "hidden";
    public $archivo;

    public function render()
    {
        return view('livewire.personas.modal-eliminar');
    }

    #[On('eliminar_alert')] 
    public function desplegar_alert($archivo_id){
        $this->archivo = Archivo::find($archivo_id);
        $this->esconder = "";
    }

    public function salir(){
        $this->esconder = "hidden";
    }

    public function save(){
        $this->dispatch('Eliminar'); 
        $this->salir();
    }
}
