<?php

namespace App\Livewire\Lotes;

use App\Models\Lote;
use Livewire\Component;

class Show extends Component
{
    public $id;
    public $Instance; // Cambiado de $lote a $loteInstance

    public $lote, $manzana, $catastral, $superficie, $precio;
    public $noreste, $sureste;
    public $suroeste, $noroeste;
    public $norte, $sur, $este, $oeste;

    public function mount()
    {
        $this->loadLote();
    }

    public function render()
    {
        return view('livewire.lotes.show');
    }

    private function loadLote()
    {
        $this->Instance = Lote::find($this->id);
        
        if ($this->Instance) {
            $this->lote = $this->Instance->lote;
            $this->manzana = $this->Instance->manzana;
            $this->catastral = $this->Instance->catastral;
            $this->superficie = $this->Instance->superficie;
            $this->precio = $this->Instance->precio;
            $this->noreste = $this->Instance->noreste;
            $this->sureste = $this->Instance->sureste;
            $this->suroeste = $this->Instance->suroeste;
            $this->noroeste = $this->Instance->noroeste;
            $this->norte = $this->Instance->norte;
            $this->sur = $this->Instance->sur;
            $this->este = $this->Instance->este;
            $this->oeste = $this->Instance->oeste;
        }
    }

    public function submit(){
        $this->validate();

        Lote::where('id', $this->Instance->id)->update([
            'lote' => $this->lote,
            'manzana' => $this->manzana,
            'catastral' => $this->catastral,
            'superficie' => $this->superficie,
            'precio' => $this->precio,
            'noreste' => $this->noreste,
            'sureste' => $this->sureste,
            'suroeste' => $this->suroeste,
            'noroeste' => $this->noroeste,
            'norte' => $this->norte,
            'sur' => $this->sur,
            'este' => $this->este,
            'oeste' => $this->oeste,
        ]);

        return redirect()->route('zonas.show' , ['id' => $this->Instance->zona]);
    }

    protected $rules = [
        'lote' => 'required|numeric',
        'manzana' => 'nullable',
        'catastral' => 'nullable',
        'superficie' => 'nullable|numeric',
        'precio' => 'nullable|numeric',
        'noreste' => 'nullable|numeric',
        'sureste' => 'nullable|numeric',
        'suroeste' => 'nullable|numeric',
        'noroeste' => 'nullable|numeric',
        'norte' => 'nullable|numeric',
        'sur' => 'nullable|numeric',
        'este' => 'nullable|numeric',
        'oeste' => 'nullable|numeric',
    ];


    public function cancelar(){
        return redirect()->route('zonas.show', ['id' => $this->Instance->zona]);
    }
}
