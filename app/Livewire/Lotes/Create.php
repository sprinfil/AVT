<?php

namespace App\Livewire\Lotes;

use App\Models\Lote;
use App\Models\Zona;
use Livewire\Component;

class Create extends Component
{
    public $id;
    public $zona;

    public $lote, $manzana, $catastral, $superficie, $precio;
    public $noreste, $sureste;
    public $suroeste, $noroeste;
    public $norte, $sur, $este, $oeste;
    
    public function render()
    {
        $this->zona = Zona::find($this->id);

        $ultimoLote = Lote::where('zona', $this->zona->id)
                        ->orderBy('id', 'desc')
                        ->first();

                   
        $this->lote = $ultimoLote->lote + 1;

        return view('livewire.lotes.create', ['zona' => $this->zona]);
    }

    public function submit(){
        $this->validate();

        Lote::create([
            'lote' => $this->lote,
            'manzana' => $this->manzana,
            'catastral' => $this->catastral,
            'superficie' => $this->superficie,
            'precio' => $this->precio,
            'noreste' => $this->noreste,
            'sureste' => $this->sureste,
            'suroeste' => $this->suroeste,
            'noroeste' => $this->noreste,
            'norte' => $this->norte,
            'sur' => $this->sur,
            'este' => $this->este,
            'oeste' => $this->oeste,
            'zona' => $this->zona->id,
        ]);

        return redirect()->route('zonas.show' , ['id' => $this->zona->id]);
    }

    protected $rules = [
        'lote' => 'required|numeric',
        'manzana' => 'required',
        'catastral' => 'required',
        'superficie' => 'required|numeric',
        'precio' => 'required|numeric',
        'noreste' => 'required|numeric',
        'sureste' => 'required|numeric',
        'suroeste' => 'required|numeric',
        'noroeste' => 'required|numeric',
        'norte' => 'required|numeric',
        'sur' => 'required|numeric',
        'este' => 'required|numeric',
        'oeste' => 'required|numeric',
    ];


    public function cancelar(){
        return redirect()->route('zonas.show', ['id' => $this->zona->id]);
    }
}
