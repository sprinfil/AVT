<?php

namespace App\Livewire\Zonas;

use App\Models\Lote;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On; 


class Show extends Component
{
    use WithPagination;

    public $zona;
    public $filtro = 0;
    public $filtro_texto;
    public $valor;
    public $lote_eliminar;

    public function render()
    {

        if($this->filtro == 0){
            $query = Lote::query()->where('zona', $this->zona->id)->whereNull('baja')->get();
        }else{
            if($this->filtro == 1){
                $query = Lote::where(DB::raw("catastral"), 'LIKE', $this->filtro_texto.'%')   
                ->where("zona",$this->zona->id)->whereNull('baja')->get();
            }
            if($this->filtro == 2){
                $query = Lote::where('lote',$this->filtro_texto)
                ->where("zona",$this->zona->id)->get();

            }
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

    public function show_eliminar($id){
        $this->lote_eliminar = Lote::find($id);
        $this->dispatch('show_eliminar');
        
    }
    
    #[On('eliminar')] 
    public function eliminar(){
        $lote = $this->lote_eliminar;
        $lote->baja = "si";
        $lote->save();
        $this->render();
        $this->dispatch('success_delete'); 
    }

    public function actualizarNumFiltro(){
        $this->render();
    }
}
