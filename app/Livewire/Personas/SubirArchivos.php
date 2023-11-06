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

    #[On('actualizarDocumentos')] 
    public function actualizarDocumentos($nombres){
        $contador = 0;
        $archivos = Archivo::where('persona',$this->persona_id)->get();
        if(count($nombres) > 0){
            foreach($archivos as $archivo){
                $archivo->nombre = $nombres[$contador];
                $archivo->save();
                $contador = $contador + 1;
            }
        }

    }

    public function aceptar(){
        $this->dispatch('success');
    }

    #[On('salir')] 
    public function salir(){
        return redirect(route('personas'));
    }
}
