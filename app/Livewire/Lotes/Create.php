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

        if($ultimoLote){
            $this->lote = $ultimoLote->lote + 1;
        }else{
            $this->lote = 1;
        }  


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
            'noroeste' => $this->noroeste,
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
        return redirect()->route('zonas.show', ['id' => $this->zona->id]);
    }
}
