<?php

namespace App\Livewire\Zonas;

use App\Models\Lote;
use Livewire\Component;
use Livewire\WithPagination;


class Show extends Component
{
    use WithPagination;

    public $zona;
    public $filtro = 0;
    public $valor;

    public function render()
    {
        if($this->filtro == 0){
            $query = Lote::query()->where('zona', $this->zona->id)->paginate(10);
        }
    
        $lotes = $query;
    
        return view('livewire.zonas.show', ['zona' => $this->zona, 'lotes' => $lotes]);
    }

    public function nuevo(){
        return redirect()->route('lotes.create', ['id' => $this->zona->id]);
    }

    public function edit($id){
        return redirect()->route('lotes.show', ['id' => $id]);
    }

    public function eliminar($id){
        Lote::destroy($id);

        $this->eliminado();
    }
    public function eliminado()
    {
        $this->dispatch('success_delete'); // Cambiado a dispatchBrowserEvent
    }
}
