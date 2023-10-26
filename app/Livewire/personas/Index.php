<?php

namespace App\Livewire\Personas;

use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public $filtroNombre;

    public function render()
    {
        $query = Persona::query();

        if(!empty($this->filtroNombre)) {
            $query->where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . $this->filtroNombre . '%');
        }
        
        $personas = $query->orderBy('id')->paginate(8);
        
        return view('livewire.personas.index', compact('personas'));
    }

       
    public function actualizarFiltroNombre()
    {
        $this->render();
    }
}
