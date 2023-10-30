<?php

namespace App\Livewire\Personas;

use Livewire\Component;
use Livewire\Attributes\On;

class ModalDocumentos extends Component
{
    public $esconder = "hidden";
    public $persona_id;

    public function render()
    {
        return view('livewire.personas.modal-documentos');
    }

    #[On('documentos_alert')] 
    public function show($persona_id){
        $this->esconder = "";
        $this->persona_id = $persona_id;
    }

    public function close(){
        $this->esconder = "hidden";
    }
}
