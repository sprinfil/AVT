<?php

namespace App\Livewire\Personas;

use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $filtroNombre;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $query = Persona::query();

        if(!empty($this->filtroNombre)) {
            $query->where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . $this->filtroNombre . '%');
        }
        
        $personas = $query->orderBy('id')->whereNull('baja')->paginate(6);
        
        return view('livewire.personas.index', compact('personas'));
    }

       
    public function actualizarFiltroNombre()
    {
        $this->render();
    }

    public function edit($persona_id){
        return redirect(route('personas_edit',['persona_id' => $persona_id]));
    }
}
