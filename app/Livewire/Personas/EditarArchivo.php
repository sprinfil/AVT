<?php

namespace App\Livewire\Personas;

use App\Models\Archivo;
use Livewire\Component;
use Livewire\Attributes\On; 

class EditarArchivo extends Component
{
    public $esconder = "hidden";
    public $archivo;
    public $nombre;

    public function render()
    {
        return view('livewire.personas.editar-archivo');
    }

    #[On('editar_archivo')]
    public function show($archivo_id){
        $this->esconder = "";
        $this->archivo = Archivo::find($archivo_id);
        $this->nombre = $this->archivo->nombre;

    }

    public function salir(){
        $this->esconder = 'hidden';
    }

    public function save(){
        $this->validate([
            'nombre' => 'required',
        ]);
        $archivo = $this->archivo;
        $archivo->nombre = $this->nombre;
        $archivo->save();
        $this->dispatch('ActualizarArchivos');
        $this->salir();
    }

}
