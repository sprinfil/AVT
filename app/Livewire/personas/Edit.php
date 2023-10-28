<?php

namespace App\Livewire\Personas;

use App\Models\Persona;
use Livewire\Component;

class Edit extends Component
{
    public $persona;

    public function render()
    {
        return view('livewire.personas.edit');
    }

    public function mount($persona_id){
        $this->persona = Persona::find($persona_id);
    }
}
